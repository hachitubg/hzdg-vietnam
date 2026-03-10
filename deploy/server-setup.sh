#!/bin/bash
# ============================================================
# Server Setup Script - Chạy MỘT LẦN trên server
# Tạo database MySQL và cài đặt Composer/Supervisor nếu chưa có
#
# Usage: bash deploy/server-setup.sh
# ============================================================
set -e

DB_NAME="hzdg_vietnam"
DB_USER="hzdg_user"

GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m'

info()  { echo -e "${GREEN}[SETUP]${NC} $1"; }
warn()  { echo -e "${YELLOW}[WARN]${NC} $1"; }

echo ""
echo "============================================"
echo "  HZDG Vietnam - Server Setup"
echo "============================================"
echo ""

# ── Kiểm tra các phần mềm cần thiết ─────────────────────────
info "Kiểm tra phần mềm..."

for cmd in php nginx mysql node npm; do
    if command -v $cmd &> /dev/null; then
        echo "  ✓ $cmd: $(command -v $cmd)"
    else
        echo "  ✗ $cmd: CHƯA CÀI"
    fi
done

# ── Cài Composer nếu chưa có ─────────────────────────────────
if ! command -v composer &> /dev/null; then
    info "Cài đặt Composer..."
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
fi
echo "  ✓ composer: $(composer --version 2>/dev/null | head -1)"

# ── Cài Supervisor nếu chưa có ───────────────────────────────
if ! command -v supervisorctl &> /dev/null; then
    info "Cài đặt Supervisor..."
    apt-get install -y supervisor
fi

# ── Tạo database MySQL ───────────────────────────────────────
info "Cấu hình MySQL..."
echo ">> Tạo database '$DB_NAME' và user '$DB_USER'"
echo -n "Nhập mật khẩu cho MySQL user '$DB_USER': "
read -s DB_PASS
echo ""

mysql -e "CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
mysql -e "CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';"
mysql -e "GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_USER'@'localhost';"
mysql -e "FLUSH PRIVILEGES;"
info "Database đã sẵn sàng."

echo ""
echo "============================================"
echo "  Setup hoàn tất!"
echo ""
echo "  Bước tiếp theo:"
echo "  1. git clone <repo> /var/www/hzdg-vietnam"
echo "  2. cd /var/www/hzdg-vietnam"
echo "  3. bash deploy.sh --fresh"
echo "     (Script sẽ tạo .env từ .env.example,"
echo "      bạn sửa .env rồi chạy lại)"
echo "============================================"
