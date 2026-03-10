# HZDG Vietnam - Âm Thanh & Ánh Sáng Chuyên Nghiệp

Hệ thống quản lý nội dung và trưng bày giải pháp âm thanh, ánh sáng cho các sự kiện và không gian công cộng. Xây dựng bằng **Laravel 11** và **Filament** với giao diện hiện đại.

## Yêu Cầu Hệ Thống

- PHP 8.2+
- Composer
- MySQL 8.0+
- Node.js 18+

## Cài Đặt & Chạy Project

### 1. Clone & Cài Đặt Dependency

```bash
git clone <repo-url> hzdg-vietnam
cd hzdg-vietnam
composer install
npm install
```

### 2. Cấu Hình Environment

```bash
cp .env.example .env
php artisan key:generate
```

Chỉnh sửa `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hzdg_vietnam
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Tạo Database & Chạy Migration

```bash
# Tạo database (tùy chọn, nếu dùng CLI MySQL trực tiếp)
mysql -u root -e "CREATE DATABASE hzdg_vietnam;"

# Chạy migrations & seeders
php artisan migrate:fresh --seed
```

### 4. Chạy Development Server

```bash
# Terminal 1: Laravel server
php artisan serve

# Terminal 2: Vite (hot reload CSS/JS)
npm run dev
```

Truy cập:
- **Frontend**: http://localhost:8000
- **Admin Panel**: http://localhost:8000/admin (đăng nhập với tài khoản seeder)

## Các Lệnh Cơ Bản

### Database

```bash
# Reset database (xóa hết dữ liệu cũ + import lại seeders)
php artisan migrate:fresh --seed

# Chạy migrations mà không reset
php artisan migrate

# Chạy một seeder cụ thể
php artisan migrate:fresh --seeder=HzdgImportedSeeder

# Rollback migrations
php artisan migrate:rollback
```

### Assets & Cache

```bash
# Build assets cho production
npm run build

# Clear application cache
php artisan cache:clear
php artisan view:clear
php artisan config:clear

# Optimize autoload
composer dumpautoload -o
```

### Artisan Commands

```bash
# Liệt kê tất cả commands
php artisan list

# Tạo migration
php artisan make:migration create_table_name

# Tạo model
php artisan make:model ModelName
```

## Cấu Trúc Project

```
app/
├── Http/Controllers/        # Controllers
├── Models/                   # Models (Category, Post, Product...)
├── Providers/               # Service Providers
└── Filament/               # Filament admin resources
resources/
├── css/                     # Tailwind CSS
├── js/                      # Vite JS entry
└── views/
    └── frontend/            # Blade templates
public/
├── css/                     # Compiled CSS
├── js/                      # Compiled JS
└── storage/                 # Uploaded files
database/
├── migrations/              # Database schemas
├── seeders/                 # Seed data
└── factories/               # Model factories
```

## Triển Khai (Deployment)

Chi tiết đầy đủ xem [DEPLOY.md](DEPLOY.md)

**Tóm tắt:**
1. Pull code từ git
2. Chạy `composer install --no-dev`
3. Chạy `php artisan migrate --force`
4. Build assets: `npm run build`
5. Đảm bảo folder `storage/` và `public/storage` có quyền ghi

## Account Mặc Định (sau khi seed)

```
Email: admin@example.com
Password: password
```

Đổi mật khẩu trong panel admin sau khi đăng nhập lần đầu.

## Thường Gặp

**Q: Lỗi "Class not found"**  
A: Chạy `composer dumpautoload -o`

**Q: Assets không load**  
A: Đảm bảo chạy `npm run dev` hoặc `npm run build` rồi xóa cache: `php artisan cache:clear`

**Q: Database connection error**  
A: Kiểm tra MySQL đang chạy và `.env` có đúng credentials

## Support

Liên hệ hoặc check git issues.
