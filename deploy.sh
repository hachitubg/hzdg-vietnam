#!/bin/bash
# ============================================================
# Deploy Script - HZDG Vietnam
# Chạy bằng Git Bash trên Windows hoặc terminal Linux/Mac
#
# Usage: bash deploy.sh [--fresh] [--setup]
#   --fresh : Chạy migrate:fresh (XÓA toàn bộ DB, chỉ dùng lần đầu)
#   --setup : Chạy server-setup trước khi deploy (chỉ lần đầu)
# ============================================================
set -e

# ── Cấu hình ────────────────────────────────────────────────
SERVER="root@103.200.20.160"
APP_DIR="/var/www/hzdg-vietnam"

# ── Màu sắc ─────────────────────────────────────────────────
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

info()  { echo -e "${GREEN}[DEPLOY]${NC} $1"; }
warn()  { echo -e "${YELLOW}[WARN]${NC} $1"; }
error() { echo -e "${RED}[ERROR]${NC} $1"; exit 1; }

# ── Parse arguments ──────────────────────────────────────────
FRESH_MIGRATE=false
RUN_SETUP=false
for arg in "$@"; do
    case $arg in
        --fresh) FRESH_MIGRATE=true ;;
        --setup) RUN_SETUP=true ;;
    esac
done

# ── Bước 0 (tùy chọn): Server setup ─────────────────────────
if [ "$RUN_SETUP" = true ]; then
    info "Bước 0: Chạy server setup..."
    ssh "${SERVER}" 'bash -s' < deploy/server-setup.sh
    info "Server setup hoàn tất."
fi

# ── Bước 1: Build assets locally ─────────────────────────────
info "Bước 1: Build frontend assets..."
npm run build
info "Build assets hoàn tất."

# ── Bước 2: Đóng gói và upload lên server ────────────────────
info "Bước 2: Đóng gói project..."

ARCHIVE="deploy-$(date +%Y%m%d-%H%M%S).tar.gz"

tar czf "$ARCHIVE" \
    --exclude='.git' \
    --exclude='.env' \
    --exclude='node_modules' \
    --exclude='vendor' \
    --exclude='storage/app/*' \
    --exclude='storage/logs/*' \
    --exclude='storage/framework/sessions/*' \
    --exclude='storage/framework/cache/data/*' \
    --exclude='storage/debugbar' \
    --exclude='.vscode' \
    --exclude='tests' \
    --exclude='phpunit.xml' \
    --exclude='.editorconfig' \
    --exclude='*.log' \
    --exclude='deploy-*.tar.gz' \
    .

info "Upload lên server..."
scp "$ARCHIVE" "${SERVER}:/tmp/${ARCHIVE}"

info "Giải nén trên server..."
ssh "${SERVER}" "mkdir -p ${APP_DIR} && tar xzf /tmp/${ARCHIVE} -C ${APP_DIR} && rm /tmp/${ARCHIVE}"

# Xóa archive local
rm -f "$ARCHIVE"
info "Upload hoàn tất."

# ── Bước 3: Thực thi các lệnh trên server ────────────────────
info "Bước 3: Cấu hình server..."

# Xác định migrate command
if [ "$FRESH_MIGRATE" = true ]; then
    warn "SẼ CHẠY migrate:fresh - Toàn bộ dữ liệu DB sẽ bị xóa!"
    read -p "Bạn có chắc chắn? (y/N): " confirm
    if [ "$confirm" != "y" ] && [ "$confirm" != "Y" ]; then
        error "Hủy deploy."
    fi
    MIGRATE_CMD="php artisan migrate:fresh --force --seed"
else
    MIGRATE_CMD="php artisan migrate --force"
fi

ssh "${SERVER}" bash -s <<REMOTE_SCRIPT
set -e
cd ${APP_DIR}

echo ">> Kiểm tra .env production..."
if [ ! -f .env ]; then
    if [ -f .env.production ]; then
        cp .env.production .env
        echo ">> Đã copy .env.production -> .env"
        echo ">> QUAN TRỌNG: Hãy cập nhật APP_KEY và DB_PASSWORD trong .env!"
        php artisan key:generate --force
    else
        echo ">> LỖI: Không tìm thấy .env hoặc .env.production!"
        exit 1
    fi
fi

echo ">> Cài đặt Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

echo ">> Tạo storage link..."
php artisan storage:link --force 2>/dev/null || true

echo ">> Chạy migrations..."
${MIGRATE_CMD}

echo ">> Cache config, routes, views..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ">> Phân quyền..."
chown -R www-data:www-data ${APP_DIR}
chmod -R 775 ${APP_DIR}/storage
chmod -R 775 ${APP_DIR}/bootstrap/cache

echo ">> Cấu hình Nginx..."
cp ${APP_DIR}/deploy/nginx.conf /etc/nginx/sites-available/hzdg-vietnam
ln -sf /etc/nginx/sites-available/hzdg-vietnam /etc/nginx/sites-enabled/hzdg-vietnam
rm -f /etc/nginx/sites-enabled/default
nginx -t && systemctl reload nginx

echo ">> Cấu hình Supervisor..."
cp ${APP_DIR}/deploy/supervisor.conf /etc/supervisor/conf.d/hzdg-queue-worker.conf
supervisorctl reread
supervisorctl update
supervisorctl restart hzdg-queue-worker:* 2>/dev/null || supervisorctl start hzdg-queue-worker:*

echo ">> Restart PHP-FPM..."
systemctl restart php8.2-fpm

echo ""
echo "========================================="
echo "  Deploy hoàn tất!"
echo "  Website: http://103.200.20.160"
echo "  Admin:   http://103.200.20.160/admin"
echo "========================================="
REMOTE_SCRIPT

info "Deploy thành công!"
