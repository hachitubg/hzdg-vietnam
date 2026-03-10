#!/bin/bash
# ============================================================
# Deploy Script - HZDG Vietnam
# Chạy TRỰC TIẾP trên server sau khi git clone / git pull
#
# Lần đầu:  bash deploy.sh --fresh
# Cập nhật: bash deploy.sh
# ============================================================
set -e

APP_DIR="$(cd "$(dirname "$0")" && pwd)"

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
for arg in "$@"; do
    case $arg in
        --fresh) FRESH_MIGRATE=true ;;
    esac
done

cd "$APP_DIR"

# ── Bước 1: Kiểm tra .env ────────────────────────────────────
info "Bước 1: Kiểm tra .env..."
if [ ! -f .env ]; then
    cp .env.example .env
    echo ""
    warn "Đã tạo .env từ .env.example."
    warn "Hãy chỉnh sửa .env với thông tin production (DB, APP_URL, ...)"
    warn "Sau đó chạy lại: bash deploy.sh --fresh"
    echo ""
    exit 0
fi

# ── Bước 2: Pull code mới nhất ───────────────────────────────
info "Bước 2: Pull code mới nhất..."
git pull origin main

# ── Bước 3: Cài đặt dependencies ─────────────────────────────
info "Bước 3: Cài đặt Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

info "Bước 3b: Cài đặt NPM dependencies & build assets..."
npm install
npm run build

# ── Bước 4: Laravel setup ────────────────────────────────────
info "Bước 4: Laravel setup..."

# Tạo APP_KEY nếu chưa có
if grep -q "^APP_KEY=$" .env; then
    php artisan key:generate --force
    info "Đã tạo APP_KEY."
fi

php artisan storage:link --force 2>/dev/null || true

# Migration
if [ "$FRESH_MIGRATE" = true ]; then
    warn "SẼ CHẠY migrate:fresh - Toàn bộ dữ liệu DB sẽ bị xóa!"
    read -p "Bạn có chắc chắn? (y/N): " confirm
    if [ "$confirm" != "y" ] && [ "$confirm" != "Y" ]; then
        error "Hủy deploy."
    fi
    php artisan migrate:fresh --force --seed
else
    php artisan migrate --force
fi

# Cache
php artisan config:cache
php artisan route:cache
php artisan view:cache

# ── Bước 5: Phân quyền ───────────────────────────────────────
info "Bước 5: Phân quyền..."
chown -R www-data:www-data "$APP_DIR"
chmod -R 775 storage bootstrap/cache

# ── Bước 6: Cấu hình Nginx ───────────────────────────────────
info "Bước 6: Cấu hình Nginx..."

# Tự tìm PHP-FPM socket
PHP_SOCK=$(find /run/php/ -name "php*-fpm.sock" 2>/dev/null | head -1)
if [ -z "$PHP_SOCK" ]; then
    PHP_SOCK=$(find /var/run/php/ -name "php*-fpm.sock" 2>/dev/null | head -1)
fi
if [ -z "$PHP_SOCK" ]; then
    warn "Không tìm thấy PHP-FPM socket. Dùng mặc định php8.2-fpm.sock"
    PHP_SOCK="/run/php/php8.2-fpm.sock"
fi
info "PHP-FPM socket: $PHP_SOCK"

# Copy nginx config và thay socket path
cp deploy/nginx.conf /etc/nginx/sites-available/hzdg-vietnam
sed -i "s|unix:/run/php/php-fpm.sock|unix:${PHP_SOCK}|g" /etc/nginx/sites-available/hzdg-vietnam
ln -sf /etc/nginx/sites-available/hzdg-vietnam /etc/nginx/sites-enabled/hzdg-vietnam
rm -f /etc/nginx/sites-enabled/default
nginx -t && systemctl reload nginx

# ── Bước 7: Cấu hình Supervisor (queue worker) ───────────────
info "Bước 7: Cấu hình Supervisor..."
if command -v supervisorctl &> /dev/null; then
    cp deploy/supervisor.conf /etc/supervisor/conf.d/hzdg-queue-worker.conf
    supervisorctl reread
    supervisorctl update
    supervisorctl restart hzdg-queue-worker:* 2>/dev/null || supervisorctl start hzdg-queue-worker:* 2>/dev/null || true
else
    warn "Supervisor chưa được cài. Bỏ qua queue worker."
    warn "Cài đặt: apt install supervisor"
fi

# ── Bước 8: Restart PHP-FPM ──────────────────────────────────
info "Bước 8: Restart PHP-FPM..."
# Tự tìm phiên bản PHP-FPM đang chạy
PHP_FPM=$(systemctl list-units --type=service --state=running | grep -oP 'php[\d.]+-fpm' | head -1)
if [ -n "$PHP_FPM" ]; then
    systemctl restart "$PHP_FPM"
    info "Đã restart $PHP_FPM"
else
    warn "Không tìm thấy PHP-FPM service đang chạy."
fi

echo ""
echo "========================================="
echo "  Deploy hoàn tất!"
echo "  Website: http://103.200.20.160"
echo "  Admin:   http://103.200.20.160/admin"
echo "========================================="
