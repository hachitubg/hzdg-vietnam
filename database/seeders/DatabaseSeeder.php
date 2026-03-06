<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // === Danh mục sản phẩm ===
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Cục đẩy công suất', 'slug' => 'cuc-day-cong-suat', 'type' => 'product', 'description' => 'Cục đẩy công suất chính hãng HZDG', 'sort_order' => 1, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Loa karaoke', 'slug' => 'loa-karaoke', 'type' => 'product', 'description' => 'Loa karaoke chất lượng cao HZDG', 'sort_order' => 2, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Micro không dây', 'slug' => 'micro-khong-day', 'type' => 'product', 'description' => 'Micro không dây chống hú HZDG', 'sort_order' => 3, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => 'Vang số', 'slug' => 'vang-so', 'type' => 'product', 'description' => 'Vang số chỉnh cơ và chỉnh app HZDG', 'sort_order' => 4, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => 'Đèn sân khấu', 'slug' => 'den-san-khau', 'type' => 'product', 'description' => 'Đèn sân khấu chuyên nghiệp HZDG', 'sort_order' => 5, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => 'Mixer', 'slug' => 'mixer', 'type' => 'product', 'description' => 'Bàn mixer chuyên nghiệp HZDG', 'sort_order' => 6, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // === Danh mục con sản phẩm ===
        DB::table('categories')->insert([
            ['id' => 7, 'parent_id' => 1, 'name' => 'Cục đẩy 2 kênh', 'slug' => 'cuc-day-2-kenh', 'type' => 'product', 'sort_order' => 1, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 8, 'parent_id' => 1, 'name' => 'Cục đẩy 4 kênh', 'slug' => 'cuc-day-4-kenh', 'type' => 'product', 'sort_order' => 2, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'parent_id' => 2, 'name' => 'Loa full', 'slug' => 'loa-full', 'type' => 'product', 'sort_order' => 1, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 10, 'parent_id' => 2, 'name' => 'Loa sub', 'slug' => 'loa-sub', 'type' => 'product', 'sort_order' => 2, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // === Danh mục tin tức ===
        DB::table('categories')->insert([
            ['id' => 11, 'name' => 'Tin tức', 'slug' => 'tin-tuc', 'type' => 'post', 'sort_order' => 1, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 12, 'name' => 'Kiến thức âm thanh', 'slug' => 'kien-thuc-am-thanh', 'type' => 'post', 'sort_order' => 2, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 13, 'name' => 'Hướng dẫn sử dụng', 'slug' => 'huong-dan-su-dung', 'type' => 'post', 'sort_order' => 3, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // === Danh mục dự án ===
        DB::table('categories')->insert([
            ['id' => 14, 'name' => 'Dự án karaoke', 'slug' => 'du-an-karaoke', 'type' => 'project', 'sort_order' => 1, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 15, 'name' => 'Dự án sân khấu', 'slug' => 'du-an-san-khau', 'type' => 'project', 'sort_order' => 2, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 16, 'name' => 'Dự án hội trường', 'slug' => 'du-an-hoi-truong', 'type' => 'project', 'sort_order' => 3, 'is_visible' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // === Sản phẩm mẫu ===
        DB::table('products')->insert([
            [
                'id' => 1, 'category_id' => 1, 'slug' => 'cuc-day-cong-suat-hzdg-p2600', 'name' => 'Cục Đẩy Công Suất HZDG P2600',
                'price' => 12500000, 'sale_price' => 10900000,
                'specs_summary' => json_encode([['key'=>'Thương hiệu','value'=>'HZDG'],['key'=>'Model','value'=>'P2600'],['key'=>'SKU','value'=>'HZDG-P2600'],['key'=>'Xuất xứ','value'=>'Trung Quốc'],['key'=>'Bảo hành','value'=>'24 tháng']]),
                'specs_full' => json_encode([['value'=>'Công suất 8Ω stereo: 600W x2'],['value'=>'Công suất 4Ω stereo: 1000W x2'],['value'=>'Công suất 8Ω bridge: 2000W'],['value'=>'Đáp tuyến tần số: 20Hz - 20kHz'],['value'=>'Tỷ lệ S/N: >100dB'],['value'=>'THD: <0.05%'],['value'=>'Trọng lượng: 12kg']]),
                'advantages' => json_encode([['value'=>'Class D hiệu suất cao, tiết kiệm điện'],['value'=>'Tản nhiệt nhôm nguyên khối'],['value'=>'Mạch bảo vệ chống quá tải, quá nhiệt, ngắn mạch'],['value'=>'Thiết kế gọn nhẹ, dễ lắp đặt']]),
                'description' => '<h2>Cục Đẩy Công Suất HZDG P2600</h2><p>Cục đẩy công suất HZDG P2600 là sản phẩm chất lượng cao, phù hợp cho phòng karaoke gia đình và kinh doanh.</p>',
                'video_url' => 'https://www.youtube.com/watch?v=example1',
                'in_stock' => 1, 'is_bestseller' => 1, 'is_hot' => 1, 'is_new' => 0, 'is_visible' => 1, 'is_promotion' => 0,
                'view_count' => 0, 'sort_order' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'id' => 2, 'category_id' => 2, 'slug' => 'loa-karaoke-hzdg-k310', 'name' => 'Loa Karaoke HZDG K310',
                'price' => 8500000, 'sale_price' => 7200000,
                'specs_summary' => json_encode([['key'=>'Thương hiệu','value'=>'HZDG'],['key'=>'Model','value'=>'K310'],['key'=>'SKU','value'=>'HZDG-K310'],['key'=>'Bảo hành','value'=>'24 tháng']]),
                'specs_full' => json_encode([['value'=>'Bass: 10 inch'],['value'=>'Treble: 3 inch'],['value'=>'Công suất: 300W'],['value'=>'Trở kháng: 8Ω'],['value'=>'Độ nhạy: 92dB']]),
                'advantages' => json_encode([['value'=>'Bass 10 inch từ kép chất lượng cao'],['value'=>'Thùng gỗ MDF 18mm sơn piano'],['value'=>'Phù hợp phòng 20-35m2']]),
                'description' => '<h2>Loa Karaoke HZDG K310</h2><p>Loa karaoke HZDG K310 với bass 10 inch mang đến âm thanh ấm áp, chi tiết.</p>',
                'video_url' => null,
                'in_stock' => 1, 'is_bestseller' => 1, 'is_hot' => 0, 'is_new' => 0, 'is_visible' => 1, 'is_promotion' => 0,
                'view_count' => 0, 'sort_order' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'id' => 3, 'category_id' => 3, 'slug' => 'micro-khong-day-hzdg-m800', 'name' => 'Micro Không Dây HZDG M800',
                'price' => 5500000, 'sale_price' => 4800000,
                'specs_summary' => json_encode([['key'=>'Thương hiệu','value'=>'HZDG'],['key'=>'Model','value'=>'M800'],['key'=>'SKU','value'=>'HZDG-M800'],['key'=>'Bảo hành','value'=>'12 tháng']]),
                'specs_full' => json_encode([['value'=>'Tần số sóng: UHF 640-690MHz'],['value'=>'Số kênh: 200 kênh'],['value'=>'Khoảng cách thu: 50m']]),
                'advantages' => json_encode([['value'=>'Chống hú tốt'],['value'=>'Bắt sóng ổn định'],['value'=>'Đầu micro mạ vàng 24K']]),
                'description' => '<h2>Micro Không Dây HZDG M800</h2><p>Micro không dây HZDG M800 sử dụng sóng UHF, chống hú hiệu quả.</p>',
                'video_url' => 'https://www.youtube.com/watch?v=example3',
                'in_stock' => 1, 'is_bestseller' => 0, 'is_hot' => 0, 'is_new' => 1, 'is_visible' => 1, 'is_promotion' => 0,
                'view_count' => 0, 'sort_order' => 0, 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        // === Đánh giá mẫu ===
        DB::table('product_reviews')->insert([
            ['product_id' => 1, 'reviewer_name' => 'Nguyễn Văn An', 'reviewer_email' => 'an.nguyen@gmail.com', 'reviewer_phone' => '0901234567', 'rating' => 5, 'comment' => 'Cục đẩy chạy rất mát, công suất mạnh. Rất hài lòng!', 'is_approved' => 1, 'created_at' => now()],
            ['product_id' => 1, 'reviewer_name' => 'Trần Minh Tuấn', 'reviewer_email' => 'tuan.tran@gmail.com', 'reviewer_phone' => '0912345678', 'rating' => 4, 'comment' => 'Hàng chính hãng, đóng gói cẩn thận. Âm thanh tốt.', 'is_approved' => 1, 'created_at' => now()],
            ['product_id' => 2, 'reviewer_name' => 'Lê Hoàng Nam', 'reviewer_email' => 'nam.le@gmail.com', 'reviewer_phone' => '0923456789', 'rating' => 5, 'comment' => 'Loa hát karaoke cực hay, bass ấm, mid dày.', 'is_approved' => 1, 'created_at' => now()],
        ]);

        // === Bài viết mẫu ===
        DB::table('posts')->insert([
            [
                'category_id' => 11, 'slug' => 'cach-chon-cuc-day-cho-phong-karaoke',
                'title' => 'Cách Chọn Cục Đẩy Công Suất Cho Phòng Karaoke',
                'excerpt' => 'Hướng dẫn chi tiết cách chọn cục đẩy công suất phù hợp với diện tích phòng karaoke.',
                'content' => '<h2>1. Xác định diện tích phòng</h2><p>Phòng 15-25m2 cần cục đẩy 500-800W, phòng 25-40m2 cần 800-1500W.</p><h2>2. Phối ghép với loa</h2><p>Công suất cục đẩy nên lớn hơn công suất loa khoảng 20-30%.</p>',
                'author' => 'HZDG Việt Nam', 'is_visible' => 1, 'is_featured' => 1, 'view_count' => 1250,
                'published_at' => '2025-01-10 08:00:00', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'category_id' => 12, 'slug' => 'huong-dan-chinh-vang-so-karaoke',
                'title' => 'Hướng Dẫn Chỉnh Vang Số Hát Karaoke Hay',
                'excerpt' => 'Bật mí cách chỉnh vang số để giọng hát karaoke hay hơn.',
                'content' => '<h2>1. Chỉnh Reverb</h2><p>Nên để mức 30-50% tuỳ phòng.</p><h2>2. Chỉnh Echo</h2><p>Delay time nên để 150-250ms.</p>',
                'author' => 'HZDG Việt Nam', 'is_visible' => 1, 'is_featured' => 0, 'view_count' => 890,
                'published_at' => '2025-02-05 10:00:00', 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        // === Dự án mẫu ===
        DB::table('projects')->insert([
            [
                'category_id' => 14, 'slug' => 'du-an-karaoke-luxury-quan-1',
                'title' => 'Dự Án Phòng Karaoke Luxury - Quận 1, TP.HCM',
                'excerpt' => 'Thi công hệ thống âm thanh karaoke cao cấp cho chuỗi phòng karaoke Luxury.',
                'content' => '<h2>Thông tin dự án</h2><p>Dự án gồm 15 phòng karaoke từ 20m2 đến 50m2.</p>',
                'client_name' => 'Karaoke Luxury', 'location' => 'Quận 1, TP.HCM',
                'is_visible' => 1, 'is_featured' => 1, 'view_count' => 560,
                'completed_at' => '2025-01-20', 'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'category_id' => 15, 'slug' => 'du-an-san-khau-binh-duong',
                'title' => 'Dự Án Sân Khấu Nhà Văn Hóa Bình Dương',
                'excerpt' => 'Lắp đặt hệ thống âm thanh ánh sáng cho nhà văn hóa tỉnh Bình Dương.',
                'content' => '<h2>Thông tin dự án</h2><p>Nhà văn hóa sức chứa 500 người.</p>',
                'client_name' => 'Nhà Văn Hóa Bình Dương', 'location' => 'TP. Thủ Dầu Một, Bình Dương',
                'is_visible' => 1, 'is_featured' => 1, 'view_count' => 320,
                'completed_at' => '2024-12-15', 'created_at' => now(), 'updated_at' => now(),
            ],
        ]);

        // === Liên hệ mẫu ===
        DB::table('contacts')->insert([
            ['product_id' => 1, 'full_name' => 'Nguyễn Thanh Hùng', 'phone' => '0901111222', 'email' => 'hung.nt@gmail.com', 'message' => 'Tôi muốn mua cục đẩy P2600, cho tôi giá tốt nhất.', 'is_read' => 1, 'created_at' => now()],
            ['product_id' => 2, 'full_name' => 'Trần Văn Đức', 'phone' => '0912222333', 'email' => 'duc.tv@gmail.com', 'message' => 'Loa K310 còn hàng không? Tôi cần 4 cái.', 'is_read' => 1, 'created_at' => now()],
            ['product_id' => null, 'full_name' => 'Lê Thị Mai', 'phone' => '0923333444', 'email' => 'mai.lt@gmail.com', 'message' => 'Tôi muốn tư vấn bộ dàn karaoke cho phòng 30m2.', 'is_read' => 0, 'created_at' => now()],
        ]);
    }
}