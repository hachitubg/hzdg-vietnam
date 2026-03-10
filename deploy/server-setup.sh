#!/bin/bash
# ============================================================
# Server Setup Script - Chạy MỘT LẦN trên server mới
# Usage: ssh root@103.200.20.160 'bash -s' < deploy/server-setup.sh
# ============================================================
set -e

APP_DIR="/var/www/hzdg-vietnam"
DB_NAME="hzdg_vietnam"
DB_USER="hzdg_user"

echo "=== [1/7] Cập nhật hệ thống ==="
apt-get update && apt-get upgrade -y

echo "=== [2/7] Cài đặt các packages cần thiết ==="
apt-get install -y \
    nginx \
    mysql-server \
    php8.2-fpm \
    php8.2-cli \
    php8.2-mysql \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-curl \
    php8.2-zip \
    php8.2-gd \
    php8.2-intl \
    php8.2-bcmath \
    php8.2-tokenizer \
    php8.2-fileinfo \
    php8.2-redis \
    supervisor \
    unzip \
    git \
    curl

echo "=== [3/7] Cài đặt Composer ==="
if ! command -v composer &> /dev/null; then
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
fi

echo "=== [4/7] Cài đặt Node.js (LTS) ==="
if ! command -v node &> /dev/null; then
    curl -fsSL https://deb.nodesource.com/setup_22.x | bash -
    apt-get install -y nodejs
fi

echo "=== [5/7] Tạo thư mục project ==="
mkdir -p "$APP_DIR"
chown -R www-data:www-data "$APP_DIR"

echo "=== [6/7] Cấu hình MySQL ==="
echo "Tạo database và user MySQL..."
echo ">> Bạn cần nhập mật khẩu cho MySQL user '$DB_USER':"
read -s -p "Nhập mật khẩu: " DB_PASS
echo ""

mysql -e "CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
mysql -e "CREATE USER IF NOT EXISTS '$DB_USER'@'localhost' IDENTIFIED BY '$DB_PASS';"
mysql -e "GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_USER'@'localhost';"
mysql -e "FLUSH PRIVILEGES;"

echo "=== [7/7] Cấu hình Nginx & Supervisor ==="
# Copy nginx config (sẽ được deploy script xử lý)
# Copy supervisor config (sẽ được deploy script xử lý)

# Tạo thư mục storage cần thiết
mkdir -p "$APP_DIR/storage/app/public"
mkdir -p "$APP_DIR/storage/framework/cache"
mkdir -p "$APP_DIR/storage/framework/sessions"
mkdir -p "$APP_DIR/storage/framework/views"
mkdir -p "$APP_DIR/storage/logs"
mkdir -p "$APP_DIR/bootstrap/cache"

chown -R www-data:www-data "$APP_DIR"
chmod -R 775 "$APP_DIR/storage"
chmod -R 775 "$APP_DIR/bootstrap/cache"

echo ""
echo "============================================"
echo "  Server setup hoàn tất!"
echo "  DB_NAME: $DB_NAME"
echo "  DB_USER: $DB_USER"
echo ""
echo "  Bước tiếp theo:"
echo "  1. Cập nhật mật khẩu DB vào .env.production"
echo "  2. Chạy: bash deploy.sh"
echo "============================================"
