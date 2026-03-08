<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Helper: chuyển mảng thông số sang JSON lưu DB
        $specs = fn(array $rows) => json_encode($rows, JSON_UNESCAPED_UNICODE);

        // ============================================================
        // ADMIN USER
        // ============================================================
        DB::table('users')->insertOrIgnore([
            'name'       => 'Admin HZDG',
            'email'      => 'admin@hzdg.vn',
            'password'   => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // ============================================================
        // DANH MỤC
        // ============================================================
        DB::table('categories')->insert([
            // Danh mục sản phẩm – cấp 1
            ['id'=>1,  'parent_id'=>null, 'name'=>'Cục đẩy công suất', 'slug'=>'cuc-day-cong-suat', 'type'=>'product', 'description'=>'Cục đẩy công suất chính hãng HZDG', 'sort_order'=>1, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>2,  'parent_id'=>null, 'name'=>'Loa karaoke',        'slug'=>'loa-karaoke',        'type'=>'product', 'description'=>'Loa karaoke chất lượng cao HZDG',    'sort_order'=>2, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>3,  'parent_id'=>null, 'name'=>'Micro',              'slug'=>'micro',              'type'=>'product', 'description'=>'Micro có dây và không dây',           'sort_order'=>3, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>4,  'parent_id'=>null, 'name'=>'Vang số',            'slug'=>'vang-so',            'type'=>'product', 'description'=>'Vang số chỉnh app HZDG',              'sort_order'=>4, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>5,  'parent_id'=>null, 'name'=>'Đèn sân khấu',      'slug'=>'den-san-khau',       'type'=>'product', 'description'=>'Đèn sân khấu chuyên nghiệp',          'sort_order'=>5, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>6,  'parent_id'=>null, 'name'=>'Mixer',              'slug'=>'mixer',              'type'=>'product', 'description'=>'Bàn mixer chuyên nghiệp HZDG',        'sort_order'=>6, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            // Danh mục sản phẩm – cấp 2
            ['id'=>7,  'parent_id'=>1, 'name'=>'Cục đẩy 2 kênh',  'slug'=>'cuc-day-2-kenh',   'type'=>'product', 'description'=>null, 'sort_order'=>1, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>8,  'parent_id'=>1, 'name'=>'Cục đẩy 4 kênh',  'slug'=>'cuc-day-4-kenh',   'type'=>'product', 'description'=>null, 'sort_order'=>2, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>9,  'parent_id'=>2, 'name'=>'Loa full',         'slug'=>'loa-full',          'type'=>'product', 'description'=>null, 'sort_order'=>1, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>10, 'parent_id'=>2, 'name'=>'Loa sub',          'slug'=>'loa-sub',           'type'=>'product', 'description'=>null, 'sort_order'=>2, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>17, 'parent_id'=>3, 'name'=>'Micro không dây',  'slug'=>'micro-khong-day',   'type'=>'product', 'description'=>null, 'sort_order'=>1, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>18, 'parent_id'=>3, 'name'=>'Micro có dây',     'slug'=>'micro-co-day',      'type'=>'product', 'description'=>null, 'sort_order'=>2, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            // Danh mục tin tức
            ['id'=>11, 'parent_id'=>null, 'name'=>'Tin tức',               'slug'=>'tin-tuc',               'type'=>'post', 'description'=>null, 'sort_order'=>1, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>12, 'parent_id'=>null, 'name'=>'Kiến thức âm thanh',    'slug'=>'kien-thuc-am-thanh',    'type'=>'post', 'description'=>null, 'sort_order'=>2, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>13, 'parent_id'=>null, 'name'=>'Hướng dẫn sử dụng',    'slug'=>'huong-dan-su-dung',     'type'=>'post', 'description'=>null, 'sort_order'=>3, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            // Danh mục dự án
            ['id'=>14, 'parent_id'=>null, 'name'=>'Dự án karaoke',         'slug'=>'du-an-karaoke',         'type'=>'project', 'description'=>null, 'sort_order'=>1, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>15, 'parent_id'=>null, 'name'=>'Dự án sân khấu',        'slug'=>'du-an-san-khau',        'type'=>'project', 'description'=>null, 'sort_order'=>2, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>16, 'parent_id'=>null, 'name'=>'Dự án hội trường',      'slug'=>'du-an-hoi-truong',      'type'=>'project', 'description'=>null, 'sort_order'=>3, 'is_visible'=>1, 'created_at'=>now(), 'updated_at'=>now()],
        ]);

        // ============================================================
        // 20 SẢN PHẨM MẪU
        // ============================================================

        // --- 1. Cục Đẩy Công Suất HZDG P2600 ---
        DB::table('products')->insert([
            'id'=>1, 'category_id'=>7, 'slug'=>'cuc-day-cong-suat-hzdg-p2600', 'name'=>'Cục Đẩy Công Suất HZDG P2600',
            'price'=>12500000, 'sale_price'=>10900000,
            'specs_summary' => $specs([
                ['key'=>'Model',     'value'=>'P2600'],
                ['key'=>'SKU',       'value'=>'HZDG-P2600'],
                ['key'=>'Xuất xứ',   'value'=>'Trung Quốc'],
                ['key'=>'Bảo hành',  'value'=>'24 tháng'],
                ['key'=>'Đơn vị',    'value'=>'Chiếc'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ CÔNG SUẤT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất 8Ω Stereo',          'value'=>'600W × 2'],
                ['section'=>'', 'key'=>'Công suất 4Ω Stereo',          'value'=>'1000W × 2'],
                ['section'=>'', 'key'=>'Công suất 8Ω Bridge',          'value'=>'2000W'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',             'value'=>'20Hz – 20kHz ±0.5dB'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',                    'value'=>'>100dB'],
                ['section'=>'', 'key'=>'THD',                           'value'=>'<0.05% tại 1kHz'],
                ['section'=>'', 'key'=>'Trở kháng đầu vào',            'value'=>'10kΩ (balanced)'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất tiêu thụ tối đa',    'value'=>'800W'],
                ['section'=>'', 'key'=>'Kích thước (W×H×D)',            'value'=>'483 × 88 × 380 mm'],
                ['section'=>'', 'key'=>'Trọng lượng',                  'value'=>'12 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Class D hiệu suất cao, tiết kiệm điện'],
                ['value'=>'Tản nhiệt nhôm nguyên khối, chạy mát'],
                ['value'=>'Mạch bảo vệ chống quá tải, quá nhiệt, ngắn mạch'],
                ['value'=>'Thiết kế rack 2U gọn nhẹ, dễ lắp đặt'],
            ]),
            'description'=>'<h2>Cục Đẩy Công Suất HZDG P2600</h2><p>HZDG P2600 là cục đẩy Class D 2 kênh công suất 2×600W (8Ω), lý tưởng cho phòng karaoke gia đình và kinh doanh quy mô vừa.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>1, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>1250, 'sort_order'=>1, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 2. Loa Karaoke HZDG K310 ---
        DB::table('products')->insert([
            'id'=>2, 'category_id'=>9, 'slug'=>'loa-karaoke-hzdg-k310', 'name'=>'Loa Karaoke HZDG K310',
            'price'=>8500000, 'sale_price'=>7200000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'K310'],
                ['key'=>'SKU',      'value'=>'HZDG-K310'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
                ['key'=>'Đơn vị',   'value'=>'Chiếc'],
                ['key'=>'Trạng thái','value'=>'Hàng mới 100%'],
            ]),
            'specs_full' => $specs([
                ['section'=>'TRÌNH ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Bass (LF)',          'value'=>'10 inch (250mm), từ đơn neodymium'],
                ['section'=>'', 'key'=>'Treble (HF)',        'value'=>'3 inch (75mm), nén titanium'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất loa',     'value'=>'300W RMS / 600W Peak'],
                ['section'=>'', 'key'=>'Trở kháng',         'value'=>'8Ω'],
                ['section'=>'', 'key'=>'Độ nhạy',           'value'=>'92dB (1W/1m)'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',  'value'=>'55Hz – 20kHz ±3dB'],
                ['section'=>'', 'key'=>'Góc phân tán (H×V)','value'=>'90° × 60°'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Chất liệu thùng',   'value'=>'Gỗ MDF 18mm sơn piano'],
                ['section'=>'', 'key'=>'Kích thước (W×H×D)','value'=>'350 × 600 × 320 mm'],
                ['section'=>'', 'key'=>'Trọng lượng',        'value'=>'18 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Bass 10 inch từ đơn neodymium, âm trầm ấm áp chắc khỏe'],
                ['value'=>'Treble titanium sắc nét, chi tiết'],
                ['value'=>'Thùng gỗ MDF 18mm sơn piano, thẩm mỹ cao'],
                ['value'=>'Phù hợp phòng 20–35m²'],
            ]),
            'description'=>'<h2>Loa Karaoke HZDG K310</h2><p>HZDG K310 là loa karaoke 2-way với bass 10 inch và treble 3 inch nén titanium, mang lại âm thanh trung thực, đầy đặn.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>980, 'sort_order'=>2, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 3. Micro Không Dây HZDG M800 ---
        DB::table('products')->insert([
            'id'=>3, 'category_id'=>17, 'slug'=>'micro-khong-day-hzdg-m800', 'name'=>'Micro Không Dây HZDG M800',
            'price'=>5500000, 'sale_price'=>4800000,
            'specs_summary' => $specs([
                ['key'=>'Model',      'value'=>'M800'],
                ['key'=>'SKU',        'value'=>'HZDG-M800'],
                ['key'=>'Bảo hành',   'value'=>'12 tháng'],
                ['key'=>'Loại sóng',  'value'=>'UHF'],
                ['key'=>'Đơn vị',     'value'=>'Bộ'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ RF', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Dải tần UHF',        'value'=>'640 – 690MHz'],
                ['section'=>'', 'key'=>'Số kênh',            'value'=>'200 kênh tự động tránh nhiễu'],
                ['section'=>'', 'key'=>'Khoảng cách thu',    'value'=>'50m (không vật cản)'],
                ['section'=>'THÔNG SỐ ÂM THANH', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',  'value'=>'80Hz – 18kHz'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',          'value'=>'>105dB'],
                ['section'=>'', 'key'=>'Độ trễ',             'value'=>'<2ms'],
                ['section'=>'KHÁC', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Pin (micro)',         'value'=>'2 pin AA, dùng 8h liên tục'],
                ['section'=>'', 'key'=>'Đầu micro',          'value'=>'Cardioid mạ vàng 24K'],
            ]),
            'advantages' => $specs([
                ['value'=>'Sóng UHF 200 kênh, chống nhiễu vượt trội'],
                ['value'=>'Chống hú hiệu quả, giọng hát trong trẻo'],
                ['value'=>'Đầu micro mạ vàng 24K bắt giọng tốt'],
                ['value'=>'Khoảng cách thu 50m, di chuyển tự do'],
            ]),
            'description'=>'<h2>Micro Không Dây HZDG M800</h2><p>Bộ micro không dây HZDG M800 sử dụng công nghệ UHF với 200 kênh tần số, chống nhiễu và chống hú hiệu quả.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>0, 'is_new'=>1, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>650, 'sort_order'=>3, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 4. Cục Đẩy 4 Kênh HZDG Q4800 ---
        DB::table('products')->insert([
            'id'=>4, 'category_id'=>8, 'slug'=>'cuc-day-4-kenh-hzdg-q4800', 'name'=>'Cục Đẩy 4 Kênh HZDG Q4800',
            'price'=>22000000, 'sale_price'=>19500000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'Q4800'],
                ['key'=>'SKU',      'value'=>'HZDG-Q4800'],
                ['key'=>'Số kênh',  'value'=>'4'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
                ['key'=>'Đơn vị',   'value'=>'Chiếc'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ CÔNG SUẤT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất 8Ω / kênh',         'value'=>'800W × 4'],
                ['section'=>'', 'key'=>'Công suất 4Ω / kênh',         'value'=>'1200W × 4'],
                ['section'=>'', 'key'=>'Công suất 4Ω / cặp bridge',   'value'=>'2400W × 2'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',            'value'=>'20Hz – 20kHz ±0.3dB'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',                   'value'=>'>103dB'],
                ['section'=>'', 'key'=>'THD',                          'value'=>'<0.03%'],
                ['section'=>'', 'key'=>'Trở kháng đầu vào',           'value'=>'20kΩ / kênh'],
                ['section'=>'', 'key'=>'Chế độ hoạt động',            'value'=>'Stereo / Parallel / Bridge'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước (W×H×D)',           'value'=>'483 × 132 × 430 mm (3U)'],
                ['section'=>'', 'key'=>'Trọng lượng',                  'value'=>'22 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'4 kênh độc lập, linh hoạt phân zone âm thanh'],
                ['value'=>'Phù hợp hệ thống âm thanh phân vùng nhiều phòng'],
                ['value'=>'Màn hình LCD hiển thị mức công suất từng kênh'],
                ['value'=>'Bảo vệ 5 lớp: quá tải, ngắn mạch, quá nhiệt, DC offset, kích mở'],
            ]),
            'description'=>'<h2>Cục Đẩy 4 Kênh HZDG Q4800</h2><p>HZDG Q4800 là cục đẩy 4 kênh Class D công suất 800W/kênh (8Ω), phù hợp hệ thống âm thanh phân vùng nhà hàng, karaoke VIP.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>1, 'is_new'=>1, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>320, 'sort_order'=>4, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 5. Cục Đẩy 2 Kênh HZDG PA3000 ---
        DB::table('products')->insert([
            'id'=>5, 'category_id'=>7, 'slug'=>'cuc-day-2-kenh-hzdg-pa3000', 'name'=>'Cục Đẩy 2 Kênh HZDG PA3000',
            'price'=>15800000, 'sale_price'=>null,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'PA3000'],
                ['key'=>'SKU',      'value'=>'HZDG-PA3000'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
                ['key'=>'Đơn vị',   'value'=>'Chiếc'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ CÔNG SUẤT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất 8Ω Stereo', 'value'=>'900W × 2'],
                ['section'=>'', 'key'=>'Công suất 4Ω Stereo', 'value'=>'1500W × 2'],
                ['section'=>'', 'key'=>'Công suất 8Ω Bridge',  'value'=>'3000W'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',    'value'=>'20Hz – 20kHz'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',            'value'=>'>100dB'],
                ['section'=>'', 'key'=>'THD',                   'value'=>'<0.05%'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước',            'value'=>'483 × 88 × 420 mm'],
                ['section'=>'', 'key'=>'Trọng lượng',           'value'=>'15 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Công suất lớn 3000W bridge, phù hợp sân khấu'],
                ['value'=>'Class D hiệu suất cao, tiết kiệm điện'],
                ['value'=>'Quạt làm mát thông minh theo nhiệt độ'],
            ]),
            'description'=>'<h2>Cục Đẩy 2 Kênh HZDG PA3000</h2><p>PA3000 mang lại công suất mạnh mẽ 3000W (8Ω bridge), phù hợp cho sân khấu ngoài trời và phòng karaoke lớn.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>210, 'sort_order'=>5, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 6. Loa Sub HZDG S18 ---
        DB::table('products')->insert([
            'id'=>6, 'category_id'=>10, 'slug'=>'loa-sub-hzdg-s18', 'name'=>'Loa Sub HZDG S18',
            'price'=>11500000, 'sale_price'=>9800000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'S18'],
                ['key'=>'SKU',      'value'=>'HZDG-S18'],
                ['key'=>'Bass',     'value'=>'18 inch'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'TRÌNH ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Bass (LF)',              'value'=>'18 inch (460mm), cuộn dây 4 inch'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất',             'value'=>'600W RMS / 1200W Peak'],
                ['section'=>'', 'key'=>'Trở kháng',             'value'=>'8Ω'],
                ['section'=>'', 'key'=>'Độ nhạy',               'value'=>'96dB (1W/1m)'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',      'value'=>'30Hz – 180Hz'],
                ['section'=>'', 'key'=>'Tần số crossover',      'value'=>'120Hz (LF)'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Chất liệu thùng',       'value'=>'Gỗ MDF 21mm'],
                ['section'=>'', 'key'=>'Kích thước (W×H×D)',    'value'=>'520 × 620 × 580 mm'],
                ['section'=>'', 'key'=>'Trọng lượng',            'value'=>'44 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Bass 18 inch cuộn dây 4 inch, trầm sâu, căng tức'],
                ['value'=>'Thùng gỗ MDF 21mm chịu lực tốt'],
                ['value'=>'Phù hợp sân khấu, phòng karaoke lớn, bar, club'],
            ]),
            'description'=>'<h2>Loa Sub HZDG S18</h2><p>Loa sub hơi HZDG S18 trang bị woofer 18 inch cuộn dây 4 inch, công suất 600W RMS, tái tạo âm trầm sâu và mạnh mẽ.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>1, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>440, 'sort_order'=>6, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 7. Loa Karaoke HZDG K212 ---
        DB::table('products')->insert([
            'id'=>7, 'category_id'=>9, 'slug'=>'loa-karaoke-hzdg-k212', 'name'=>'Loa Karaoke HZDG K212',
            'price'=>13500000, 'sale_price'=>11900000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'K212'],
                ['key'=>'SKU',      'value'=>'HZDG-K212'],
                ['key'=>'Bass',     'value'=>'12 inch'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'TRÌNH ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Bass (LF)',          'value'=>'12 inch (300mm), neodymium'],
                ['section'=>'', 'key'=>'Treble (HF)',        'value'=>'3 inch (75mm), titanium nén'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất',         'value'=>'450W RMS / 900W Peak'],
                ['section'=>'', 'key'=>'Trở kháng',         'value'=>'8Ω'],
                ['section'=>'', 'key'=>'Độ nhạy',           'value'=>'94dB (1W/1m)'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',  'value'=>'45Hz – 20kHz'],
                ['section'=>'', 'key'=>'Góc phân tán (H×V)','value'=>'90° × 60°'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước (W×H×D)','value'=>'400 × 690 × 360 mm'],
                ['section'=>'', 'key'=>'Trọng lượng',        'value'=>'24 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Bass 12 inch neodymium, âm trầm dày dặn'],
                ['value'=>'Phù hợp phòng 35–60m²'],
                ['value'=>'Chất liệu thùng gỗ MDF sơn piano bền đẹp'],
            ]),
            'description'=>'<h2>Loa Karaoke HZDG K212</h2><p>HZDG K212 là loa 2-way bass 12 inch công suất 450W, lý tưởng cho phòng karaoke lớn và kinh doanh.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>770, 'sort_order'=>7, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 8. Micro Không Dây HZDG M500 Dual ---
        DB::table('products')->insert([
            'id'=>8, 'category_id'=>17, 'slug'=>'micro-khong-day-hzdg-m500-dual', 'name'=>'Micro Không Dây HZDG M500 Dual',
            'price'=>3200000, 'sale_price'=>2800000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'M500 Dual'],
                ['key'=>'Số micro', 'value'=>'2 tay'],
                ['key'=>'Bảo hành', 'value'=>'12 tháng'],
                ['key'=>'Loại sóng','value'=>'UHF'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ RF', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Dải tần UHF',      'value'=>'600 – 650MHz'],
                ['section'=>'', 'key'=>'Số kênh',          'value'=>'100 kênh'],
                ['section'=>'', 'key'=>'Khoảng cách thu',  'value'=>'30m'],
                ['section'=>'THÔNG SỐ ÂM THANH', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số', 'value'=>'90Hz – 16kHz'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',        'value'=>'>95dB'],
                ['section'=>'', 'key'=>'Pin (micro)',       'value'=>'2 pin AA, 6h liên tục'],
            ]),
            'advantages' => $specs([
                ['value'=>'Bộ 2 micro giá tốt, phù hợp karaoke gia đình'],
                ['value'=>'Tần số UHF ổn định, ít nhiễu'],
                ['value'=>'Thiết kế nhỏ gọn, sang trọng'],
            ]),
            'description'=>'<h2>Micro Không Dây HZDG M500 Dual</h2><p>Bộ 2 micro không dây HZDG M500 là lựa chọn tiết kiệm cho karaoke gia đình, tần số UHF, chống hú tốt.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>1100, 'sort_order'=>8, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 9. Vang Số HZDG DSP-V8 ---
        DB::table('products')->insert([
            'id'=>9, 'category_id'=>4, 'slug'=>'vang-so-hzdg-dsp-v8', 'name'=>'Vang Số HZDG DSP-V8',
            'price'=>4500000, 'sale_price'=>3900000,
            'specs_summary' => $specs([
                ['key'=>'Model',        'value'=>'DSP-V8'],
                ['key'=>'Điều khiển',   'value'=>'Núm vặn + App'],
                ['key'=>'Bảo hành',     'value'=>'12 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'XỬ LÝ TÍN HIỆU', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Xử lý tín hiệu',   'value'=>'DSP 32-bit'],
                ['section'=>'', 'key'=>'Tần số lấy mẫu',   'value'=>'48kHz'],
                ['section'=>'', 'key'=>'Số kênh',           'value'=>'2 vào / 2 ra'],
                ['section'=>'', 'key'=>'THD',               'value'=>'<0.01%'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số', 'value'=>'20Hz – 20kHz ±0.5dB'],
                ['section'=>'ĐIỀU KHIỂN & HIỆU ỨNG', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Điều khiển App',    'value'=>'iOS & Android (Bluetooth)'],
                ['section'=>'', 'key'=>'Hiệu ứng',         'value'=>'Reverb, Delay, Chorus, Pitch Shift, Auto-Tune'],
                ['section'=>'', 'key'=>'EQ',               'value'=>'31 dải, ±15dB'],
            ]),
            'advantages' => $specs([
                ['value'=>'DSP 32-bit xử lý tín hiệu cực mịn'],
                ['value'=>'Điều khiển qua app smartphone tiện lợi'],
                ['value'=>'Auto-Tune chỉnh giọng tự động'],
                ['value'=>'Hơn 100 preset hiệu ứng sẵn có'],
            ]),
            'description'=>'<h2>Vang Số HZDG DSP-V8</h2><p>Vang số HZDG DSP-V8 tích hợp DSP 32-bit và điều khiển qua app smartphone, cho phép chỉnh âm thanh tinh tế.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>1, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>890, 'sort_order'=>9, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 10. Vang Số HZDG APP-V16 Pro ---
        DB::table('products')->insert([
            'id'=>10, 'category_id'=>4, 'slug'=>'vang-so-hzdg-app-v16-pro', 'name'=>'Vang Số HZDG APP-V16 Pro',
            'price'=>7800000, 'sale_price'=>null,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'APP-V16 Pro'],
                ['key'=>'Kênh',     'value'=>'4 vào / 4 ra'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'XỬ LÝ TÍN HIỆU', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Xử lý tín hiệu',   'value'=>'DSP 64-bit floating-point'],
                ['section'=>'', 'key'=>'Tần số lấy mẫu',   'value'=>'96kHz'],
                ['section'=>'', 'key'=>'Số kênh',           'value'=>'4 vào / 4 ra'],
                ['section'=>'', 'key'=>'Độ trễ',             'value'=>'<1ms'],
                ['section'=>'', 'key'=>'THD',               'value'=>'<0.005%'],
                ['section'=>'ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Điều khiển',        'value'=>'App Wi-Fi, Ethernet, màn hình cảm ứng 4"'],
                ['section'=>'', 'key'=>'Lưu preset',        'value'=>'200 preset'],
            ]),
            'advantages' => $specs([
                ['value'=>'DSP 64-bit, chất lượng xử lý đỉnh cao'],
                ['value'=>'Kết nối Wi-Fi & Ethernet, điều khiển từ xa toàn nhà'],
                ['value'=>'Màn hình cảm ứng 4 inch dễ thao tác'],
                ['value'=>'Lưu 200 preset cho nhiều môi trường biểu diễn'],
            ]),
            'description'=>'<h2>Vang Số HZDG APP-V16 Pro</h2><p>APP-V16 Pro là vang số chuyên nghiệp với DSP 64-bit, 4 kênh độc lập, điều khiển qua Wi-Fi và màn hình cảm ứng.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>1, 'is_new'=>1, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>420, 'sort_order'=>10, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 11. Bàn Mixer HZDG FX8 ---
        DB::table('products')->insert([
            'id'=>11, 'category_id'=>6, 'slug'=>'ban-mixer-hzdg-fx8', 'name'=>'Bàn Mixer HZDG FX8',
            'price'=>5200000, 'sale_price'=>4500000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'FX8'],
                ['key'=>'Số kênh',  'value'=>'8 kênh'],
                ['key'=>'Bảo hành', 'value'=>'12 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'KÊNH VÀO / RA', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Tổng số kênh',          'value'=>'8 kênh (4 mono XLR+TRS, 2 stereo TRS)'],
                ['section'=>'', 'key'=>'EQ / kênh',             'value'=>'3 dải (Hi, Mid, Lo)'],
                ['section'=>'', 'key'=>'Send/Return',           'value'=>'1 FX Send, 1 FX Return'],
                ['section'=>'TÍNH NĂNG ĐẶC BIỆT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Hiệu ứng tích hợp',    'value'=>'16 preset FX (Reverb, Delay, Chorus)'],
                ['section'=>'', 'key'=>'USB Audio Interface',   'value'=>'24-bit/48kHz (2 kênh vào/ra)'],
                ['section'=>'', 'key'=>'Phantom Power',         'value'=>'+48V cho tất cả kênh XLR'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước',            'value'=>'338 × 290 × 95 mm'],
            ]),
            'advantages' => $specs([
                ['value'=>'8 kênh đầy đủ tiện lợi cho karaoke và ban nhạc nhỏ'],
                ['value'=>'Tích hợp USB audio interface, kết nối máy tính dễ dàng'],
                ['value'=>'16 preset hiệu ứng FX chất lượng'],
                ['value'=>'Phantom 48V cho micro condenseur'],
            ]),
            'description'=>'<h2>Bàn Mixer HZDG FX8</h2><p>HZDG FX8 là bàn mixer 8 kênh nhỏ gọn với USB audio interface 24-bit, 16 preset FX tích hợp, lý tưởng cho phòng thu mini và karaoke gia đình.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>360, 'sort_order'=>11, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 12. Bàn Mixer HZDG FX12 Pro ---
        DB::table('products')->insert([
            'id'=>12, 'category_id'=>6, 'slug'=>'ban-mixer-hzdg-fx12', 'name'=>'Bàn Mixer HZDG FX12 Pro',
            'price'=>9800000, 'sale_price'=>8500000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'FX12 Pro'],
                ['key'=>'Số kênh',  'value'=>'12 kênh'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'KÊNH VÀO / RA', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Tổng số kênh',       'value'=>'12 kênh (8 mono XLR+TRS, 2 stereo TRS)'],
                ['section'=>'', 'key'=>'EQ / kênh mono',     'value'=>'4 dải (Hi, Hi-Mid, Lo-Mid, Lo)'],
                ['section'=>'', 'key'=>'Aux Send',           'value'=>'3 Aux (2 pre-fader, 1 post)'],
                ['section'=>'TÍNH NĂNG ĐẶC BIỆT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Hiệu ứng',          'value'=>'32 preset FX, DSP 24-bit'],
                ['section'=>'', 'key'=>'USB Recording',     'value'=>'48kHz stereo'],
                ['section'=>'', 'key'=>'Phantom Power',     'value'=>'+48V cho toàn bộ kênh XLR'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước',        'value'=>'420 × 350 × 105 mm'],
            ]),
            'advantages' => $specs([
                ['value'=>'12 kênh chuyên nghiệp cho show diễn và sự kiện'],
                ['value'=>'EQ 4 dải chi tiết điều chỉnh âm thanh linh hoạt'],
                ['value'=>'3 Aux send phân vùng monitor và effects độc lập'],
                ['value'=>'USB recording 48kHz ghi âm trực tiếp vào máy tính'],
            ]),
            'description'=>'<h2>Bàn Mixer HZDG FX12 Pro</h2><p>HZDG FX12 Pro là bàn mixer 12 kênh chuyên nghiệp với EQ 4 dải, 3 aux send, 32 preset DSP FX và USB recording.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>1, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>510, 'sort_order'=>12, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 13. Đèn Moving Head HZDG MH200 ---
        DB::table('products')->insert([
            'id'=>13, 'category_id'=>5, 'slug'=>'den-moving-head-hzdg-mh200', 'name'=>'Đèn Moving Head HZDG MH200',
            'price'=>6500000, 'sale_price'=>5800000,
            'specs_summary' => $specs([
                ['key'=>'Model',           'value'=>'MH200'],
                ['key'=>'Công suất bóng',  'value'=>'200W LED'],
                ['key'=>'Bảo hành',        'value'=>'12 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'NGUỒN SÁNG', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Nguồn sáng',    'value'=>'LED 200W RGBW'],
                ['section'=>'', 'key'=>'Số màu',        'value'=>'16.7 triệu màu'],
                ['section'=>'', 'key'=>'Góc beam',      'value'=>'2° – 60° (zoom)'],
                ['section'=>'', 'key'=>'Tuổi thọ LED',  'value'=>'>50.000 giờ'],
                ['section'=>'CƠ KHÍ & ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Pan / Tilt',    'value'=>'540° / 270°'],
                ['section'=>'', 'key'=>'Tốc độ Pan/Tilt','value'=>'1.4s / 360°'],
                ['section'=>'', 'key'=>'Điều khiển',    'value'=>'DMX-512 (16 kênh), Art-Net'],
                ['section'=>'', 'key'=>'Strobe',        'value'=>'1 – 25Hz'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Trọng lượng',   'value'=>'14 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'LED 200W RGBW 16.7 triệu màu sắc nét'],
                ['value'=>'Zoom 2°–60° linh hoạt cho mọi kích thước sân khấu'],
                ['value'=>'Pan 540° / Tilt 270° di chuyển mượt mà nhanh'],
                ['value'=>'Tuổi thọ LED >50.000h, tiết kiệm chi phí vận hành'],
            ]),
            'description'=>'<h2>Đèn Moving Head HZDG MH200</h2><p>HZDG MH200 sử dụng LED 200W RGBW với zoom 2°–60°, pan/tilt 540°/270°, điều khiển DMX-512.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>0, 'is_new'=>1, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>285, 'sort_order'=>13, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 14. Đèn Par LED HZDG PAR100 ---
        DB::table('products')->insert([
            'id'=>14, 'category_id'=>5, 'slug'=>'den-par-led-hzdg-par100', 'name'=>'Đèn Par LED HZDG PAR100',
            'price'=>1200000, 'sale_price'=>990000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'PAR100'],
                ['key'=>'Công suất','value'=>'100W LED'],
                ['key'=>'Bảo hành', 'value'=>'12 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'NGUỒN SÁNG', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Nguồn sáng',    'value'=>'48 LED × 3W RGBW'],
                ['section'=>'', 'key'=>'Góc chiếu',     'value'=>'25°'],
                ['section'=>'', 'key'=>'Tuổi thọ LED',  'value'=>'>50.000 giờ'],
                ['section'=>'ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Điều khiển',    'value'=>'DMX-512 (7ch), Sound-Active, Auto'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Nguồn điện',    'value'=>'AC 100-240V 50/60Hz'],
                ['section'=>'', 'key'=>'Trọng lượng',   'value'=>'2.8 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Giá tốt, phù hợp lắp số lượng lớn'],
                ['value'=>'RGBW 4 trong 1, trộn màu đẹp'],
                ['value'=>'Chế độ Sound-Active nhấp nháy theo nhạc'],
            ]),
            'description'=>'<h2>Đèn Par LED HZDG PAR100</h2><p>Đèn Par LED HZDG PAR100 với 48 chip LED RGBW 3W, hỗ trợ DMX-512, Sound-Active và Auto.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>1450, 'sort_order'=>14, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 15. Cục Đẩy 2 Kênh HZDG P5000 ---
        DB::table('products')->insert([
            'id'=>15, 'category_id'=>7, 'slug'=>'cuc-day-2-kenh-hzdg-p5000', 'name'=>'Cục Đẩy 2 Kênh HZDG P5000',
            'price'=>28500000, 'sale_price'=>25000000,
            'specs_summary' => $specs([
                ['key'=>'Model',        'value'=>'P5000'],
                ['key'=>'Công nghệ',    'value'=>'Class D'],
                ['key'=>'Bảo hành',     'value'=>'36 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ CÔNG SUẤT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất 8Ω Stereo', 'value'=>'1500W × 2'],
                ['section'=>'', 'key'=>'Công suất 4Ω Stereo', 'value'=>'2500W × 2'],
                ['section'=>'', 'key'=>'Công suất 8Ω Bridge',  'value'=>'5000W'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',    'value'=>'20Hz – 20kHz ±0.2dB'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',            'value'=>'>110dB'],
                ['section'=>'', 'key'=>'THD',                   'value'=>'<0.01%'],
                ['section'=>'', 'key'=>'DSP tích hợp',          'value'=>'Crossover, Limiter, Delay, EQ'],
                ['section'=>'', 'key'=>'Kết nối',              'value'=>'XLR analog + AES/EBU digital'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước',            'value'=>'483 × 88 × 480 mm (2U)'],
                ['section'=>'', 'key'=>'Trọng lượng',           'value'=>'18 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'5000W bridge, dẫn động loa sub hơi cỡ lớn với uy lực'],
                ['value'=>'DSP tích hợp crossover và limiter bảo vệ loa hiệu quả'],
                ['value'=>'Kết nối digital AES/EBU không nhiễu'],
                ['value'=>'Bảo hành 36 tháng, hỗ trợ kỹ thuật 24/7'],
            ]),
            'description'=>'<h2>Cục Đẩy 2 Kênh HZDG P5000</h2><p>HZDG P5000 là flagship cục đẩy 2 kênh với công suất 5000W (8Ω bridge), DSP tích hợp và kết nối digital AES/EBU.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>1, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>330, 'sort_order'=>15, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 16. Loa Sub Kép HZDG S215 Dual ---
        DB::table('products')->insert([
            'id'=>16, 'category_id'=>10, 'slug'=>'loa-sub-kep-hzdg-s215-dual', 'name'=>'Loa Sub Kép HZDG S215 Dual',
            'price'=>22000000, 'sale_price'=>19500000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'S215 Dual'],
                ['key'=>'Bass',     'value'=>'2 × 15 inch'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'TRÌNH ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Bass (LF × 2)',         'value'=>'15 inch (380mm), cuộn dây 3 inch'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất',             'value'=>'1200W RMS / 2400W Peak'],
                ['section'=>'', 'key'=>'Trở kháng',             'value'=>'4Ω'],
                ['section'=>'', 'key'=>'Độ nhạy',               'value'=>'98dB (1W/1m)'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',      'value'=>'30Hz – 150Hz'],
                ['section'=>'', 'key'=>'Maximum SPL',           'value'=>'136dB liên tục, đỉnh 142dB'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước (W×H×D)',    'value'=>'600 × 860 × 680 mm'],
                ['section'=>'', 'key'=>'Trọng lượng',            'value'=>'78 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'2 × 15 inch cho âm trầm khổng lồ, đầy uy lực'],
                ['value'=>'136dB SPL liên tục, phù hợp sân khấu lớn ngoài trời'],
                ['value'=>'Thiết kế bandpass horn, hiệu suất cao'],
                ['value'=>'Chân bánh xe tiện lợi di chuyển'],
            ]),
            'description'=>'<h2>Loa Sub Kép HZDG S215 Dual</h2><p>HZDG S215 Dual trang bị 2 woofer 15 inch, công suất 1200W RMS, SPL max 136dB, là loa sub chuyên nghiệp cho sân khấu ngoài trời.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>0, 'is_new'=>1, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>195, 'sort_order'=>16, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 17. Micro Có Dây HZDG MC58 ---
        DB::table('products')->insert([
            'id'=>17, 'category_id'=>18, 'slug'=>'micro-co-day-hzdg-mc58', 'name'=>'Micro Có Dây HZDG MC58',
            'price'=>980000, 'sale_price'=>850000,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'MC58'],
                ['key'=>'Loại',     'value'=>'Dynamic Cardioid'],
                ['key'=>'Bảo hành', 'value'=>'12 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Loại đầu thu',      'value'=>'Dynamic, Cardioid'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số', 'value'=>'50Hz – 16kHz'],
                ['section'=>'', 'key'=>'Độ nhạy',           'value'=>'-54dBV/Pa (2mV/Pa)'],
                ['section'=>'', 'key'=>'Trở kháng đầu ra',  'value'=>'150Ω (balanced XLR)'],
                ['section'=>'', 'key'=>'SPL tối đa',        'value'=>'147dB SPL'],
                ['section'=>'CẤU TẠO', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Chống ồn',          'value'=>'Shock mount bên trong, lưới kép'],
                ['section'=>'', 'key'=>'Chuôi micro',        'value'=>'Kim loại nguyên khối'],
            ]),
            'advantages' => $specs([
                ['value'=>'Dynamic cardioid chống hú tốt, bền bỉ với điều kiện live'],
                ['value'=>'Chuôi kim loại nguyên khối chịu va đập'],
                ['value'=>'Phù hợp hát live, phát biểu hội thảo'],
            ]),
            'description'=>'<h2>Micro Có Dây HZDG MC58</h2><p>HZDG MC58 là micro dynamic cardioid chất lượng tốt ở phân khúc tầm trung, lý tưởng cho biểu diễn live và phát biểu.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>750, 'sort_order'=>17, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 18. Loa Array HZDG LA210 ---
        DB::table('products')->insert([
            'id'=>18, 'category_id'=>9, 'slug'=>'loa-array-hzdg-la210', 'name'=>'Loa Array HZDG LA210',
            'price'=>38000000, 'sale_price'=>null,
            'specs_summary' => $specs([
                ['key'=>'Model',    'value'=>'LA210'],
                ['key'=>'Loại',     'value'=>'Line Array'],
                ['key'=>'Bảo hành', 'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'TRÌNH ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'LF (×2)',             'value'=>'10 inch (250mm), neodymium'],
                ['section'=>'', 'key'=>'HF (×2)',             'value'=>'1.5 inch (38mm), nén neodymium'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất',           'value'=>'800W RMS (LF 600W + HF 200W)'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',   'value'=>'55Hz – 20kHz ±3dB'],
                ['section'=>'', 'key'=>'Góc phân tán (H)',   'value'=>'110° (HF)'],
                ['section'=>'', 'key'=>'Maximum SPL',         'value'=>'133dB liên tục, đỉnh 139dB'],
                ['section'=>'', 'key'=>'Trở kháng',           'value'=>'8Ω (LF) + 16Ω (HF)'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Trọng lượng',         'value'=>'32 kg / module'],
            ]),
            'advantages' => $specs([
                ['value'=>'Line array trải âm đều, không méo ở khoảng cách xa'],
                ['value'=>'Ghép module linh hoạt 2–16 unit'],
                ['value'=>'Neodymium LF+HF, trọng lượng nhẹ dễ treo'],
                ['value'=>'Phân tán ngang 110° phủ sóng khán giả rộng'],
            ]),
            'description'=>'<h2>Loa Array HZDG LA210</h2><p>HZDG LA210 là module line array 2-way với 2 woofer 10 inch và 2 driver HF 1.5 inch neodymium, công suất 800W.</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>1, 'is_new'=>1, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>280, 'sort_order'=>18, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 19. Cục Đẩy Class H HZDG H4000 ---
        DB::table('products')->insert([
            'id'=>19, 'category_id'=>1, 'slug'=>'cuc-day-class-h-hzdg-h4000', 'name'=>'Cục Đẩy Class H HZDG H4000',
            'price'=>18500000, 'sale_price'=>16800000,
            'specs_summary' => $specs([
                ['key'=>'Model',        'value'=>'H4000'],
                ['key'=>'Công nghệ',    'value'=>'Class H'],
                ['key'=>'Bảo hành',     'value'=>'24 tháng'],
            ]),
            'specs_full' => $specs([
                ['section'=>'THÔNG SỐ CÔNG SUẤT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất 8Ω Stereo', 'value'=>'1200W × 2'],
                ['section'=>'', 'key'=>'Công suất 4Ω Stereo', 'value'=>'2000W × 2'],
                ['section'=>'', 'key'=>'Công suất 8Ω Bridge',  'value'=>'4000W'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',    'value'=>'20Hz – 20kHz ±0.5dB'],
                ['section'=>'', 'key'=>'Tỷ lệ S/N',            'value'=>'>105dB'],
                ['section'=>'', 'key'=>'THD',                   'value'=>'<0.03% tại 1kHz'],
                ['section'=>'', 'key'=>'Hệ số Damping',         'value'=>'>300'],
                ['section'=>'THÔNG SỐ VẬT LÝ', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Kích thước',            'value'=>'483 × 132 × 520 mm (3U)'],
                ['section'=>'', 'key'=>'Trọng lượng',           'value'=>'28 kg'],
            ]),
            'advantages' => $specs([
                ['value'=>'Class H âm thanh analog ấm áp, tự nhiên hơn Class D'],
                ['value'=>'Hệ số Damping >300, kiểm soát loa sắc nét'],
                ['value'=>'Bộ nguồn xuyến transformer cao cấp'],
                ['value'=>'Phù hợp loa sub và hệ thống hi-fi chuyên nghiệp'],
            ]),
            'description'=>'<h2>Cục Đẩy Class H HZDG H4000</h2><p>HZDG H4000 sử dụng công nghệ Class H mang lại chất âm ấm áp, tự nhiên với công suất 4000W (8Ω bridge).</p>',
            'in_stock'=>1, 'is_bestseller'=>0, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>185, 'sort_order'=>19, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // --- 20. Loa Âm Trần HZDG CT6.5 ---
        DB::table('products')->insert([
            'id'=>20, 'category_id'=>2, 'slug'=>'loa-am-tran-hzdg-ct65', 'name'=>'Loa Âm Trần HZDG CT6.5',
            'price'=>850000, 'sale_price'=>720000,
            'specs_summary' => $specs([
                ['key'=>'Model',        'value'=>'CT6.5'],
                ['key'=>'Đường kính',   'value'=>'6.5 inch'],
                ['key'=>'Bảo hành',     'value'=>'12 tháng'],
                ['key'=>'Đơn vị',       'value'=>'Chiếc'],
            ]),
            'specs_full' => $specs([
                ['section'=>'TRÌNH ĐIỀU KHIỂN', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Woofer',                'value'=>'6.5 inch (165mm)'],
                ['section'=>'', 'key'=>'Tweeter',               'value'=>'1 inch (25mm) textile dome'],
                ['section'=>'THÔNG SỐ KỸ THUẬT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Công suất',             'value'=>'60W RMS / 120W Peak'],
                ['section'=>'', 'key'=>'Trở kháng',             'value'=>'8Ω'],
                ['section'=>'', 'key'=>'Độ nhạy',               'value'=>'88dB / 1W / 1m'],
                ['section'=>'', 'key'=>'Đáp tuyến tần số',      'value'=>'60Hz – 20kHz'],
                ['section'=>'', 'key'=>'Góc phân tán',         'value'=>'120°'],
                ['section'=>'THÔNG SỐ LẮP ĐẶT', 'key'=>'', 'value'=>''],
                ['section'=>'', 'key'=>'Đường kính lắp đặt',   'value'=>'Ø195mm'],
            ]),
            'advantages' => $specs([
                ['value'=>'Lắp âm trần gọn đẹp, không chiếm diện tích'],
                ['value'=>'Phủ sóng 120°, phù hợp không gian văn phòng, nhà hàng'],
                ['value'=>'Giá tốt, phù hợp lắp số lượng lớn'],
            ]),
            'description'=>'<h2>Loa Âm Trần HZDG CT6.5</h2><p>HZDG CT6.5 là loa âm trần 2-way với woofer 6.5 inch và tweeter dome 1 inch, công suất 60W, phù hợp hệ thống nhạc nền.</p>',
            'in_stock'=>1, 'is_bestseller'=>1, 'is_hot'=>0, 'is_new'=>0, 'is_visible'=>1, 'is_promotion'=>0,
            'view_count'=>620, 'sort_order'=>20, 'created_at'=>now(), 'updated_at'=>now(),
        ]);

        // ============================================================
        // ĐÁNH GIÁ SẢN PHẨM MẪU
        // ============================================================
        DB::table('product_reviews')->insert([
            ['product_id'=>1,  'reviewer_name'=>'Nguyễn Văn An',   'reviewer_email'=>'an.nguyen@gmail.com',  'reviewer_phone'=>'0901234567', 'rating'=>5, 'comment'=>'Cục đẩy chạy rất mát, công suất mạnh. Dùng 3 tháng vẫn ổn định!',    'is_approved'=>1, 'created_at'=>now()],
            ['product_id'=>1,  'reviewer_name'=>'Trần Minh Tuấn',  'reviewer_email'=>'tuan.tran@gmail.com',  'reviewer_phone'=>'0912345678', 'rating'=>4, 'comment'=>'Hàng chính hãng, đóng gói cẩn thận. Âm thanh tốt, đúng thông số.',   'is_approved'=>1, 'created_at'=>now()],
            ['product_id'=>2,  'reviewer_name'=>'Lê Hoàng Nam',    'reviewer_email'=>'nam.le@gmail.com',     'reviewer_phone'=>'0923456789', 'rating'=>5, 'comment'=>'Loa hát karaoke cực hay, bass ấm, mid dày, treble sắc.',             'is_approved'=>1, 'created_at'=>now()],
            ['product_id'=>9,  'reviewer_name'=>'Phạm Thị Lan',    'reviewer_email'=>'lan.pt@gmail.com',     'reviewer_phone'=>'0934567890', 'rating'=>5, 'comment'=>'Vang số kết nối app dễ dùng, chỉnh âm cực tiện!',                   'is_approved'=>1, 'created_at'=>now()],
            ['product_id'=>8,  'reviewer_name'=>'Võ Văn Hùng',     'reviewer_email'=>'hung.vv@gmail.com',    'reviewer_phone'=>'0945678901', 'rating'=>4, 'comment'=>'Bộ 2 mic giá tốt, dùng karaoke gia đình là hoàn hảo.',               'is_approved'=>1, 'created_at'=>now()],
        ]);

        // ============================================================
        // BÀI VIẾT MẪU
        // ============================================================
        DB::table('posts')->insert([
            [
                'category_id'=>11, 'slug'=>'cach-chon-cuc-day-cho-phong-karaoke',
                'title'=>'Cách Chọn Cục Đẩy Công Suất Cho Phòng Karaoke',
                'excerpt'=>'Hướng dẫn chi tiết cách chọn cục đẩy công suất phù hợp với diện tích phòng karaoke.',
                'content'=>'<h2>1. Xác định diện tích phòng</h2><p>Phòng 15–25m² cần cục đẩy 500–800W, phòng 25–40m² cần 800–1500W.</p><h2>2. Phối ghép với loa</h2><p>Công suất cục đẩy nên lớn hơn công suất danh định loa khoảng 20–30%.</p><h2>3. Class D hay Class AB?</h2><p>Class D tiết kiệm điện, nhẹ, phù hợp lắp rack. Class AB/H cho chất âm analog ấm áp hơn.</p>',
                'author'=>'HZDG Việt Nam', 'is_visible'=>1, 'is_featured'=>1, 'view_count'=>1250,
                'published_at'=>'2025-01-10 08:00:00', 'created_at'=>now(), 'updated_at'=>now(),
            ],
            [
                'category_id'=>12, 'slug'=>'huong-dan-chinh-vang-so-karaoke',
                'title'=>'Hướng Dẫn Chỉnh Vang Số Hát Karaoke Hay',
                'excerpt'=>'Bật mí cách chỉnh vang số để giọng hát karaoke trong sáng, hay hơn.',
                'content'=>'<h2>1. Chỉnh Reverb</h2><p>Nên để mức 30–50% tuỳ theo kích thước phòng.</p><h2>2. Chỉnh Echo</h2><p>Delay time nên để 150–250ms, tránh tiếng vang quá dài gây khó nghe.</p>',
                'author'=>'HZDG Việt Nam', 'is_visible'=>1, 'is_featured'=>0, 'view_count'=>890,
                'published_at'=>'2025-02-05 10:00:00', 'created_at'=>now(), 'updated_at'=>now(),
            ],
        ]);

        // ============================================================
        // 10 DỰ ÁN MẪU
        // ============================================================
        DB::table('projects')->insert([
            ['category_id'=>14, 'slug'=>'du-an-karaoke-luxury-quan-1',               'title'=>'Dự Án Phòng Karaoke Luxury – Quận 1, TP.HCM',          'excerpt'=>'Thi công hệ thống âm thanh ánh sáng cao cấp cho chuỗi 15 phòng karaoke Luxury.',          'content'=>'<h2>Thông tin dự án</h2><p>15 phòng từ 20–50m², mỗi phòng trang bị HZDG K212 + PA3000 + DSP-V8 + MH200.</p>',           'client_name'=>'Karaoke Luxury',           'location'=>'Quận 1, TP.HCM',                 'is_visible'=>1, 'is_featured'=>1, 'view_count'=>560, 'completed_at'=>'2025-01-20', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>15, 'slug'=>'du-an-san-khau-nha-van-hoa-binh-duong',      'title'=>'Dự Án Sân Khấu Nhà Văn Hóa Bình Dương',                'excerpt'=>'Lắp đặt hệ thống âm thanh ánh sáng cho nhà văn hóa tỉnh Bình Dương sức chứa 500 người.', 'content'=>'<h2>Thông tin dự án</h2><p>8 module LA210 + 4 sub S215 Dual + 2 cục đẩy P5000.</p>',                                       'client_name'=>'Nhà Văn Hóa Bình Dương',   'location'=>'TP. Thủ Dầu Một, Bình Dương',    'is_visible'=>1, 'is_featured'=>1, 'view_count'=>320, 'completed_at'=>'2024-12-15', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>14, 'slug'=>'du-an-karaoke-gia-dinh-ha-noi',              'title'=>'Thi Công Karaoke Gia Đình – Hoàng Mai, Hà Nội',         'excerpt'=>'Lắp đặt bộ dàn karaoke gia đình cho biệt thự 3 tầng tại Hoàng Mai, Hà Nội.',             'content'=>'<h2>Giải pháp</h2><p>K310 × 2 + P2600 + DSP-V8 + M800 + PAR100 × 8.</p>',                                               'client_name'=>'Anh Minh – Hộ gia đình',   'location'=>'Hoàng Mai, Hà Nội',               'is_visible'=>1, 'is_featured'=>0, 'view_count'=>215, 'completed_at'=>'2025-03-10', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>15, 'slug'=>'du-an-san-khau-nha-hang-tiec-cuoi-hcm',     'title'=>'Sân Khấu Nhà Hàng Tiệc Cưới Kim Oanh – TP.HCM',        'excerpt'=>'Thiết kế và lắp đặt hệ thống âm thanh ánh sáng sân khấu tiệc cưới 800 khách.',          'content'=>'<h2>Thiết bị</h2><p>6 module LA210 + 2 sub S215 Dual + H4000 × 2 + FX12 Pro + MH200 × 6 + PAR100 × 20.</p>',          'client_name'=>'Nhà Hàng Tiệc Cưới Kim Oanh','location'=>'Quận 7, TP.HCM',                'is_visible'=>1, 'is_featured'=>1, 'view_count'=>480, 'completed_at'=>'2025-02-28', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>16, 'slug'=>'du-an-hoi-truong-ubnd-da-nang',              'title'=>'Hội Trường UBND Tỉnh Đà Nẵng',                          'excerpt'=>'Nâng cấp hệ thống âm thanh hội trường 300 chỗ ngồi cho UBND tỉnh Đà Nẵng.',             'content'=>'<h2>Thiết bị triển khai</h2><p>4 module LA210 + 2 sub S18 + Q4800 + APP-V16 Pro + FX12 Pro.</p>',                        'client_name'=>'UBND Tỉnh Đà Nẵng',        'location'=>'TP. Đà Nẵng',                    'is_visible'=>1, 'is_featured'=>1, 'view_count'=>390, 'completed_at'=>'2024-11-30', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>15, 'slug'=>'du-an-san-khau-truong-thpt-nguyen-du',       'title'=>'Sân Khấu Trường THPT Nguyễn Du – TP.HCM',              'excerpt'=>'Lắp đặt hệ thống âm thanh sân khấu đa năng cho Trường THPT Nguyễn Du.',                 'content'=>'<h2>Thiết bị</h2><p>K212 × 4 + S18 × 2 + PA3000 + FX8 + M800 × 4.</p>',                                                 'client_name'=>'Trường THPT Nguyễn Du',    'location'=>'Quận 10, TP.HCM',                'is_visible'=>1, 'is_featured'=>0, 'view_count'=>175, 'completed_at'=>'2025-01-05', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>14, 'slug'=>'du-an-karaoke-vip-hai-phong',                'title'=>'Karaoke VIP 360 Bar & Lounge – Hải Phòng',              'excerpt'=>'Thi công hệ thống âm thanh ánh sáng cao cấp cho 20 phòng karaoke VIP.',                  'content'=>'<h2>Nổi bật</h2><p>Tất cả vang số DSP-V8 điều khiển qua app, đèn DMX đồng bộ theo nhạc.</p>',                          'client_name'=>'Karaoke VIP 360',           'location'=>'Hải Phòng',                      'is_visible'=>1, 'is_featured'=>1, 'view_count'=>440, 'completed_at'=>'2025-02-14', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>16, 'slug'=>'du-an-khach-san-crown-nha-trang',            'title'=>'Khách Sạn Crown Hotel 4 Sao – Nha Trang',               'excerpt'=>'Thi công hệ thống âm thanh nhạc nền và phòng hội nghị cho khách sạn Crown 4 sao.',      'content'=>'<h2>Phạm vi</h2><p>40 loa âm trần CT6.5 + 8 zone controller + 2 loa K212 hội trường + PA3000.</p>',                      'client_name'=>'Crown Hotel Nha Trang',    'location'=>'Nha Trang, Khánh Hoà',           'is_visible'=>1, 'is_featured'=>0, 'view_count'=>260, 'completed_at'=>'2024-10-20', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>16, 'slug'=>'du-an-nha-tho-bac-ninh',                     'title'=>'Hệ Thống Âm Thanh Nhà Thờ Cổ Loa – Bắc Ninh',          'excerpt'=>'Lắp đặt hệ thống âm thanh nhà thờ công giáo sức chứa 600 người tại Bắc Ninh.',          'content'=>'<h2>Giải pháp</h2><p>Hệ thống delay speaker với 6 loa column + 2 sub âm trần + DSP xử lý delay time chính xác đến ms.</p>','client_name'=>'Giáo xứ Cổ Loa',          'location'=>'Bắc Ninh',                       'is_visible'=>1, 'is_featured'=>0, 'view_count'=>310, 'completed_at'=>'2024-09-15', 'created_at'=>now(), 'updated_at'=>now()],
            ['category_id'=>16, 'slug'=>'du-an-trung-tam-hoi-nghi-da-lat-palace',     'title'=>'Trung Tâm Hội Nghị Đà Lạt Palace',                     'excerpt'=>'Nâng cấp toàn diện hệ thống âm thanh ánh sáng cho trung tâm hội nghị 1000 chỗ.',         'content'=>'<h2>Thiết bị chính</h2><p>12 module LA210 + 6 sub S215 Dual + P5000 × 4 + APP-V16 Pro + FX12 Pro + toàn bộ hệ thống đèn DMX.</p>', 'client_name'=>'Đà Lạt Palace Hotel',  'location'=>'TP. Đà Lạt, Lâm Đồng',          'is_visible'=>1, 'is_featured'=>1, 'view_count'=>520, 'completed_at'=>'2025-02-01', 'created_at'=>now(), 'updated_at'=>now()],
        ]);

        // ============================================================
        // LIÊN HỆ MẪU
        // ============================================================
        DB::table('contacts')->insert([
            ['product_id'=>1,    'full_name'=>'Nguyễn Thanh Hùng', 'phone'=>'0901111222', 'email'=>'hung.nt@gmail.com',  'message'=>'Tôi muốn mua cục đẩy P2600, cho tôi giá tốt nhất.',        'is_read'=>1, 'created_at'=>now()],
            ['product_id'=>2,    'full_name'=>'Trần Văn Đức',       'phone'=>'0912222333', 'email'=>'duc.tv@gmail.com',   'message'=>'Loa K310 còn hàng không? Tôi cần 4 cái.',                 'is_read'=>1, 'created_at'=>now()],
            ['product_id'=>null, 'full_name'=>'Lê Thị Mai',         'phone'=>'0923333444', 'email'=>'mai.lt@gmail.com',   'message'=>'Tôi muốn tư vấn bộ dàn karaoke cho phòng 30m².',         'is_read'=>0, 'created_at'=>now()],
            ['product_id'=>9,    'full_name'=>'Phạm Quốc Việt',     'phone'=>'0934444555', 'email'=>'viet.pq@gmail.com',  'message'=>'Vang DSP-V8 có dùng được với loa 4Ω không?',             'is_read'=>0, 'created_at'=>now()],
            ['product_id'=>18,   'full_name'=>'Hoàng Minh Khoa',    'phone'=>'0945555666', 'email'=>'khoa.hm@gmail.com',  'message'=>'Báo giá bộ line array LA210 cho hội trường 500 người.',   'is_read'=>0, 'created_at'=>now()],
        ]);
    }
}
        // ============================================================
