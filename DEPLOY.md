# Deploy HZDG Vietnam

## Yêu cầu server

- PHP >= 8.2 + PHP-FPM
- Nginx
- MySQL
- Node.js >= 18
- Git
- Composer (script sẽ tự cài nếu chưa có)
- Supervisor (script sẽ tự cài nếu chưa có)

## Deploy lần đầu

### 1. SSH vào server

```bash
ssh root@103.200.20.160
```

### 2. Setup database

```bash
# Chạy ở bất kỳ thư mục nào trên server
# Script sẽ kiểm tra phần mềm, tạo database và user MySQL
# Bạn sẽ được yêu cầu nhập mật khẩu cho MySQL user

cd /var/www
bash deploy/server-setup.sh
```

> Nếu chưa clone repo, bỏ qua bước này và làm bước 3 trước, rồi quay lại chạy `bash deploy/server-setup.sh` trong thư mục project.

### 3. Clone project

```bash
git clone <URL_GITHUB_REPO> /var/www/hzdg-vietnam
cd /var/www/hzdg-vietnam
```

### 4. Chạy setup database (nếu chưa chạy ở bước 2)

```bash
bash deploy/server-setup.sh
```

### 5. Deploy lần đầu

```bash
bash deploy.sh --fresh
```

**Lần chạy đầu tiên**, script sẽ:
1. Tạo file `.env` từ `.env.example`
2. Dừng lại và yêu cầu bạn sửa `.env`

### 6. Sửa file `.env`

```bash
nano .env
```

Cập nhật các giá trị sau:

```env
APP_NAME="HZDG Vietnam"
APP_ENV=production
APP_DEBUG=false
APP_URL=http://103.200.20.160

LOG_LEVEL=error

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hzdg_vietnam
DB_USERNAME=hzdg_user
DB_PASSWORD=<mật khẩu bạn đã nhập ở bước setup>

SESSION_DRIVER=database
```

Lưu file: `Ctrl+O` → `Enter` → `Ctrl+X`

### 7. Chạy deploy lại

```bash
bash deploy.sh --fresh
```

Script sẽ xác nhận trước khi chạy `migrate:fresh`. Nhập `y` để tiếp tục.

### 8. Tạo tài khoản admin (Filament)

```bash
php artisan make:filament-user
```

Nhập tên, email, mật khẩu cho tài khoản admin.

### 9. Kiểm tra

- Website: http://103.200.20.160
- Admin: http://103.200.20.160/admin

---

## Cập nhật code (các lần sau)

SSH vào server và chạy:

```bash
cd /var/www/hzdg-vietnam
bash deploy.sh
```

Script sẽ tự động: pull code → cài dependencies → build assets → migrate → cache → restart services.

---

## Cấu trúc file deploy

```
deploy.sh                  # Script deploy chính (chạy trên server)
deploy/
  nginx.conf               # Cấu hình Nginx
  supervisor.conf           # Cấu hình Supervisor cho queue worker
  server-setup.sh           # Script setup database (chạy 1 lần)
```

---

## Lệnh hữu ích trên server

```bash
cd /var/www/hzdg-vietnam

# Xem log lỗi Laravel
tail -50 storage/logs/laravel.log

# Xem log Nginx
tail -20 /var/log/nginx/error.log

# Bật/tắt chế độ bảo trì
php artisan down
php artisan up

# Xóa cache
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# Kiểm tra queue worker
supervisorctl status

# Restart queue worker
supervisorctl restart hzdg-queue-worker:*

# Kiểm tra Nginx config
nginx -t

# Restart Nginx / PHP-FPM
systemctl restart nginx
systemctl restart php8.2-fpm
```

---

## Xử lý sự cố

| Vấn đề | Kiểm tra |
|---|---|
| Trang trắng / lỗi 500 | `tail -50 storage/logs/laravel.log` |
| Nginx 502 Bad Gateway | `systemctl status php8.2-fpm` — PHP-FPM có đang chạy không? |
| Không kết nối được DB | Kiểm tra `DB_PASSWORD` trong `.env` khớp với MySQL user |
| Assets không load | Kiểm tra `npm run build` có chạy thành công không |
| Permission denied | `chown -R www-data:www-data /var/www/hzdg-vietnam` |
| Queue không xử lý | `supervisorctl status` — restart nếu cần |
