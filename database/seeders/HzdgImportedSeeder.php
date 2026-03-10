<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Seeder được tạo tự động bởi lệnh: php artisan scrape:hzdg
 * Nguồn dữ liệu: https://www.hongzhuolight.com/
 * Thời gian tạo: 2026-03-10 15:22:12
 */
class HzdgImportedSeeder extends Seeder
{
    public function run(): void
    {
        $enc = fn(array $arr) => json_encode($arr, JSON_UNESCAPED_UNICODE);

        // Tắt kiểm tra FK để tránh lỗi thứ tự insert
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        // ============================================================
        // ĐẢM BẢO CATEGORY CHA (id=5) TỒN TẠI
        // ============================================================
        DB::table('categories')->updateOrInsert(
            ['id' => 5],
            [
                'parent_id'   => null,
                'name'        => 'Đèn sân khấu',
                'slug'        => 'den-san-khau',
                'type'        => 'product',
                'description' => 'Đèn sân khấu chuyên nghiệp',
                'image'       => null,
                'sort_order'  => 5,
                'is_visible'  => 1,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]
        );

        // ============================================================
        // DANH MỤC ĐÈN SÂN KHẤU (thêm nếu chưa có)
        // ============================================================
        $categories = [
            ['id'=>21, 'parent_id'=>5, 'name'=>'Đèn Moving Head Beam',           'slug'=>'den-moving-head-beam',           'type'=>'product', 'sort_order'=>1, 'is_visible'=>1],
            ['id'=>22, 'parent_id'=>5, 'name'=>'Đèn Moving Head Spot',           'slug'=>'den-moving-head-spot',           'type'=>'product', 'sort_order'=>2, 'is_visible'=>1],
            ['id'=>23, 'parent_id'=>5, 'name'=>'Đèn Laser Sân Khấu',             'slug'=>'den-laser-san-khau',             'type'=>'product', 'sort_order'=>3, 'is_visible'=>1],
            ['id'=>24, 'parent_id'=>5, 'name'=>'Đèn Wash/染色',                  'slug'=>'den-wash-nhiem-mau',             'type'=>'product', 'sort_order'=>4, 'is_visible'=>1],
            ['id'=>25, 'parent_id'=>5, 'name'=>'Đèn Chống Nước Ngoài Trời',     'slug'=>'den-chong-nuoc-ngoai-troi',      'type'=>'product', 'sort_order'=>5, 'is_visible'=>1],
            ['id'=>26, 'parent_id'=>5, 'name'=>'Bàn Điều Khiển DMX',            'slug'=>'ban-dieu-khien-dmx',             'type'=>'product', 'sort_order'=>6, 'is_visible'=>1],
            ['id'=>27, 'parent_id'=>5, 'name'=>'Thiết Bị Hiệu Ứng Sân Khấu',   'slug'=>'thiet-bi-hieu-ung-san-khau',     'type'=>'product', 'sort_order'=>7, 'is_visible'=>1],
            ['id'=>28, 'parent_id'=>null, 'name'=>'Kiến Thức Đèn Sân Khấu',    'slug'=>'kien-thuc-den-san-khau',         'type'=>'post',    'sort_order'=>4, 'is_visible'=>1],
        ];

        foreach ($categories as $cat) {
            DB::table('categories')->updateOrInsert(
                ['id' => $cat['id']],
                array_merge($cat, [
                    'description' => null,
                    'image'       => null,
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ])
            );
        }

        // ============================================================
        // SẢN PHẨM (scraped từ hongzhuolight.com)
        // ============================================================

        // Nguồn: https://www.hongzhuolight.com/productdetails/30.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-420w'], [
            'id'                   => 101,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-420w',
            'name'                 => 'Đèn pha di chuyển 420W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-420B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"OSRAM SIRIUS HRI 420W S, 4000 giờ, nhiệt độ màu 7700K\"},{\"key\":\"Công suất định mức\",\"value\":\"520W\"},{\"key\":\"chế độ kênh\",\"value\":\"16 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-420B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"OSRAM SIRIUS HRI 420W S, 4000 giờ, nhiệt độ màu 7700K\"},{\"key\":\"Công suất định mức\",\"value\":\"520W\"},{\"key\":\"chế độ kênh\",\"value\":\"16 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính lớn 180, điểm sáng dày và đầy\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 3 mét đến vô cực\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Hiệu ứng nhấp nháy cơ học 5-13 lần\\/giây. Có thể điều chỉnh tốc độ và nhấp nháy ngẫu nhiên\"},{\"key\":\"bánh xe màu\",\"value\":\"14 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"14 mẫu + nước chảy + ánh sáng trắng. Tấm mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn là 8 lăng kính và 8+16 lăng kính. Mỗi lăng kính quay tiến và lùi độc lập. Hai lăng kính có thể được xếp chồng lên nhau để có hiệu quả tốt hơn.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình cảm ứng màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Bóng đèn sử dụng 2 quạt gió 5020 có thể điều chỉnh tốc độ + 2 quạt bi hướng trục 8025 để tản nhiệt. Chức năng con quay hồi chuyển được sử dụng để điều khiển máy thổi đôi. Hộp dưới cùng sử dụng chế độ thông gió và tản nhiệt với các quạt hướng trục hình cầu ra vào.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với công tắc điều khiển nhiệt độ bảo vệ quá nhiệt, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"},{\"key\":\"Thiết bị nhà ở\",\"value\":\"Vỏ đầu sử dụng cấu trúc khóa nhanh, giúp tháo vỏ dễ dàng và thuận tiện. Vỏ ngoài được trang bị một sợi dây an toàn nhỏ, có thể treo trực tiếp lên thân đèn sau khi tháo vỏ, giải quyết vấn đề không có chỗ để đặt vỏ ngoài.\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-420B\"},{\"value\":\"Thông số nguồn sáng: OSRAM SIRIUS HRI 420W S, 4000 giờ\"},{\"value\":\"Công suất định mức:520W\"},{\"value\":\"Bánh xe màu: 14 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn cố định: 14 hoa văn + nước chảy + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 420W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-420B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC100V-240V/50-60HZ</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>OSRAM SIRIUS HRI 420W S, 4000 giờ, nhiệt độ màu 7700K</td></tr><tr><td><strong>Công suất định mức</strong></td><td>520W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>16 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống mờ</strong></td><td>Điều chỉnh tuyến tính 0-100%</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 101,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/63.html
        DB::table('products')->updateOrInsert(['slug' => 'den-chieu-chum-don-40w'], [
            'id'                   => 102,
            'category_id'          => 21,
            'slug'                 => 'den-chieu-chum-don-40w',
            'name'                 => 'Đèn chiếu chùm đơn 40W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-0140BEAM\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC90V-240V\\/50-60HZ\"},{\"key\":\"nguồn sáng chính\",\"value\":\"1 hạt đèn 4 trong 1 RGBW 40W\"},{\"key\":\"Điền thông số kỹ thuật nguồn sáng\",\"value\":\"18 hạt đèn LED RGB 0,2W\"},{\"key\":\"Tổng công suất\",\"value\":\"50W\"},{\"key\":\"chế độ kênh\",\"value\":\"CH7, CH9, CH15, CH58\"},{\"key\":\"Phương pháp điều khiển\",\"value\":\"Giao thức tín hiệu DMX512 tiêu chuẩn, nhiều chương trình hiệu ứng tích hợp, điều khiển bằng giọng nói, tự hành, hiệu ứng điều khiển giọng nói tuyệt vời, giao thức RDM512 tích hợp, v.v.\"},{\"key\":\"nhấp nháy\",\"value\":\"Nhấp nháy điện tử 0-30 lần\\/giây, nhấp nháy ngẫu nhiên\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-0140BEAM\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC90V-240V\\/50-60HZ\"},{\"key\":\"nguồn sáng chính\",\"value\":\"1 hạt đèn 4 trong 1 RGBW 40W\"},{\"key\":\"Điền thông số kỹ thuật nguồn sáng\",\"value\":\"18 hạt đèn LED RGB 0,2W\"},{\"key\":\"Tổng công suất\",\"value\":\"50W\"},{\"key\":\"chế độ kênh\",\"value\":\"CH7, CH9, CH15, CH58\"},{\"key\":\"Phương pháp điều khiển\",\"value\":\"Giao thức tín hiệu DMX512 tiêu chuẩn, nhiều chương trình hiệu ứng tích hợp, điều khiển bằng giọng nói, tự hành, hiệu ứng điều khiển giọng nói tuyệt vời, giao thức RDM512 tích hợp, v.v.\"},{\"key\":\"nhấp nháy\",\"value\":\"Nhấp nháy điện tử 0-30 lần\\/giây, nhấp nháy ngẫu nhiên\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng thấu kính quang học đường kính 80, điểm dày và đầy\"},{\"key\":\"Góc chùm tia\",\"value\":\"2,4 độ\"},{\"key\":\"Tính năng đèn\",\"value\":\"Chùm + nhấp nháy + ánh sáng lấp đầy, nhiều đơn vị có thể được kết hợp để tạo hiệu ứng ma trận. Nó có nhiều hiệu ứng nước đua ngựa tích hợp và thậm chí cả pha trộn màu sắc, có thể tạo ra hiệu ứng sân khấu đẹp và năng động.\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình ống kỹ thuật số LED\"},{\"key\":\"Chất liệu vỏ\",\"value\":\"Chất liệu kim loại\"},{\"key\":\"Phương pháp làm mát\",\"value\":\"Chất liệu nhôm tản nhiệt, tích hợp cảm biến nhiệt độ phát hiện có tác dụng bảo vệ quá nhiệt\"},{\"key\":\"Mức độ bảo vệ\",\"value\":\"IP20\"},{\"key\":\"môi trường làm việc\",\"value\":\"-20 độ 40 độ\"},{\"key\":\"trọng lượng tịnh của sản phẩm\",\"value\":\"1,2kg\"},{\"key\":\"Tổng trọng lượng sản phẩm\",\"value\":\"1,5kg\"},{\"key\":\"Kích thước sản phẩm\",\"value\":\"150X105X190MM(L*W*H)\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-0140BEAM\"},{\"value\":\"Nguồn sáng chính: 1 hạt đèn 4 trong 1 RGBW 40W\"},{\"value\":\"Thông số nguồn sáng phụ: 18 hạt đèn LED RGB 0,2W MM (L*W*H)\"},{\"value\":\"Chế độ kênh: CH7, CH9, CH15, CH58\"},{\"value\":\"Góc chùm tia: 2,4 độ\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn chiếu chùm đơn 40W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-0140BEAM</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC90V-240V/50-60HZ</td></tr><tr><td><strong>nguồn sáng chính</strong></td><td>1 hạt đèn 4 trong 1 RGBW 40W</td></tr><tr><td><strong>Điền thông số kỹ thuật nguồn sáng</strong></td><td>18 hạt đèn LED RGB 0,2W</td></tr><tr><td><strong>Tổng công suất</strong></td><td>50W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>CH7, CH9, CH15, CH58</td></tr><tr><td><strong>Phương pháp điều khiển</strong></td><td>Giao thức tín hiệu DMX512 tiêu chuẩn, nhiều chương trình hiệu ứng tích hợp, điều khiển bằng giọng nói, tự hành, hiệu ứng điều khiển giọng nói tuyệt vời, giao thức RDM512 tích hợp, v.v.</td></tr><tr><td><strong>nhấp nháy</strong></td><td>Nhấp nháy điện tử 0-30 lần/giây, nhấp nháy ngẫu nhiên</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 102,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/64.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-480w'], [
            'id'                   => 103,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-480w',
            'name'                 => 'Đèn pha di chuyển 480W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-480B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Philips MSD Silver 480LL, 3000 giờ, nhiệt độ màu 7700K\"},{\"key\":\"Công suất định mức\",\"value\":\"520W\"},{\"key\":\"chế độ kênh\",\"value\":\"16 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-480B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Philips MSD Silver 480LL, 3000 giờ, nhiệt độ màu 7700K\"},{\"key\":\"Công suất định mức\",\"value\":\"520W\"},{\"key\":\"chế độ kênh\",\"value\":\"16 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính lớn 180, điểm sáng dày và đầy\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 3 mét đến vô cực\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Hiệu ứng nhấp nháy cơ học 5-13 lần\\/giây. Có thể điều chỉnh tốc độ và nhấp nháy ngẫu nhiên\"},{\"key\":\"bánh xe màu\",\"value\":\"14 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"14 mẫu + nước chảy + ánh sáng trắng. Tấm mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn là 8 lăng kính và 8+16 lăng kính. Mỗi lăng kính quay tiến và lùi độc lập. Hai lăng kính có thể được xếp chồng lên nhau để có hiệu quả tốt hơn.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình cảm ứng màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Bóng đèn sử dụng 2 quạt gió 5020 có thể điều chỉnh tốc độ + 2 quạt bi hướng trục 8025 để tản nhiệt. Chức năng con quay hồi chuyển được sử dụng để điều khiển máy thổi đôi. Hộp dưới cùng sử dụng chế độ thông gió và tản nhiệt với các quạt hướng trục hình cầu ra vào.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với công tắc điều khiển nhiệt độ bảo vệ quá nhiệt, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"},{\"key\":\"Thiết bị nhà ở\",\"value\":\"Vỏ đầu sử dụng cấu trúc khóa nhanh, giúp tháo vỏ dễ dàng và thuận tiện. Vỏ ngoài được trang bị một sợi dây an toàn nhỏ, có thể treo trực tiếp lên thân đèn sau khi tháo vỏ, giải quyết vấn đề không có chỗ để đặt vỏ ngoài.\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-480B\"},{\"value\":\"Công suất định mức:520W\"},{\"value\":\"Thông số nguồn sáng: Philips MSD Silver 480LL, 3000 giờ\"},{\"value\":\"Bánh xe màu: 14 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn cố định: 14 hoa văn + nước chảy + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 480W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-480B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC100V-240V/50-60HZ</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Philips MSD Silver 480LL, 3000 giờ, nhiệt độ màu 7700K</td></tr><tr><td><strong>Công suất định mức</strong></td><td>520W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>16 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống mờ</strong></td><td>Điều chỉnh tuyến tính 0-100%</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 103,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/31.html
        DB::table('products')->updateOrInsert(['slug' => 'den-chum-di-chuyen-led150w'], [
            'id'                   => 104,
            'category_id'          => 21,
            'slug'                 => 'den-chum-di-chuyen-led150w',
            'name'                 => 'Đèn chùm di chuyển LED150W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED150B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Công suất định mức\",\"value\":\"200W\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Mô-đun LED 150W\"},{\"key\":\"nhiệt độ màu\",\"value\":\"8000K\"},{\"key\":\"Tuổi thọ đèn LED\",\"value\":\"20.000 giờ\"},{\"key\":\"chế độ kênh\",\"value\":\"16\\/18\\/24 kênh (tiêu chuẩn 24 kênh)\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED150B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Công suất định mức\",\"value\":\"200W\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Mô-đun LED 150W\"},{\"key\":\"nhiệt độ màu\",\"value\":\"8000K\"},{\"key\":\"Tuổi thọ đèn LED\",\"value\":\"20.000 giờ\"},{\"key\":\"chế độ kênh\",\"value\":\"16\\/18\\/24 kênh (tiêu chuẩn 24 kênh)\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính trơn tru 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính 120, điểm sáng sắc nét và đầy đủ\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"nhấp nháy\",\"value\":\"0-30 lần\\/giây, hiệu ứng nhấp nháy tuyệt vời, tốc độ nhấp nháy có thể điều chỉnh\"},{\"key\":\"màu cố định\",\"value\":\"12 màu + ánh sáng trắng. Hiệu ứng cầu vồng hai chiều. Chức năng nửa màu của chip màu\"},{\"key\":\"mẫu cố định\",\"value\":\"13 mẫu + ánh sáng trắng. Hiệu ứng nước quay tiến và lùi của bánh xe hoa văn, với chức năng jitter hoa văn\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn: 8 lăng kính, lăng kính có thể thực hiện quay tiến và lùi độc lập\"},{\"key\":\"Nguyên tử hóa + hệ màu 7 màu\",\"value\":\"1 hiệu ứng sương mù độc lập, 1 bánh xe màu 7 màu, có thể sử dụng kết hợp với lăng kính\"},{\"key\":\"Hệ thống ánh sáng lấp đầy\",\"value\":\"Vòng tròn ánh sáng gồm 34 đèn ba trong một 5050RGB có thể chảy nước, với nhiều hiệu ứng nước đua khác nhau, màu sắc được trộn đều, tạo hiệu ứng sân khấu đẹp mắt và sống động.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bàn điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Hạt đèn sử dụng quạt hướng trục 9015 có thể điều chỉnh tốc độ để tản nhiệt và hộp phía dưới sử dụng quạt hướng trục bóng 5015 để thông gió và tản nhiệt.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với chức năng bảo vệ quá nhiệt điều khiển nhiệt độ điện tử, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED150B\"},{\"value\":\"Công suất định mức: 200W\"},{\"value\":\"Thông số nguồn sáng: module LED 150W\"},{\"value\":\"Màu cố định: 12 màu + ánh sáng trắng\"},{\"value\":\"Mẫu cố định: 13 mẫu + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn chùm di chuyển LED150W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED150B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC110V-240V/50-60HZ</td></tr><tr><td><strong>Công suất định mức</strong></td><td>200W</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Mô-đun LED 150W</td></tr><tr><td><strong>nhiệt độ màu</strong></td><td>8000K</td></tr><tr><td><strong>Tuổi thọ đèn LED</strong></td><td>20.000 giờ</td></tr><tr><td><strong>chế độ kênh</strong></td><td>16/18/24 kênh (tiêu chuẩn 24 kênh)</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 104,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/33.html
        DB::table('products')->updateOrInsert(['slug' => 'den-chum-di-chuyen-led320w'], [
            'id'                   => 105,
            'category_id'          => 21,
            'slug'                 => 'den-chum-di-chuyen-led320w',
            'name'                 => 'Đèn chùm di chuyển LED320W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED320B\"},{\"key\":\"tổng công suất\",\"value\":\"320W\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Mô-đun LED 300W\"},{\"key\":\"bánh xe màu\",\"value\":\"14 màu + ánh sáng trắng\"},{\"key\":\"mẫu cố định\",\"value\":\"14 mẫu + nước chảy + ánh sáng trắng\"},{\"key\":\"2025-10-09 15\",\"value\":\"35\"},{\"key\":\"*Để ý\",\"value\":\"Hãy nhớ điền thông tin chính xác và giữ liên lạc cởi mở. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED320B\"},{\"key\":\"tổng công suất\",\"value\":\"320W\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Mô-đun LED 300W\"},{\"key\":\"bánh xe màu\",\"value\":\"14 màu + ánh sáng trắng\"},{\"key\":\"mẫu cố định\",\"value\":\"14 mẫu + nước chảy + ánh sáng trắng\"},{\"key\":\"2025-10-09 15\",\"value\":\"35\"},{\"key\":\"*Để ý\",\"value\":\"Hãy nhớ điền thông tin chính xác và giữ liên lạc cởi mở. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED320B\"},{\"value\":\"Tổng công suất: 320W\"},{\"value\":\"Thông số nguồn sáng: module LED 300W\"},{\"value\":\"Bánh xe màu: 14 màu + ánh sáng trắng\"},{\"value\":\"Mẫu cố định: 14 mẫu + nước chảy + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn chùm di chuyển LED320W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED320B</td></tr><tr><td><strong>tổng công suất</strong></td><td>320W</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Mô-đun LED 300W</td></tr><tr><td><strong>bánh xe màu</strong></td><td>14 màu + ánh sáng trắng</td></tr><tr><td><strong>mẫu cố định</strong></td><td>14 mẫu + nước chảy + ánh sáng trắng</td></tr><tr><td><strong>2025-10-09 15</strong></td><td>35</td></tr><tr><td><strong>*Để ý</strong></td><td>Hãy nhớ điền thông tin chính xác và giữ liên lạc cởi mở. Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 105,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/66.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-295w'], [
            'id'                   => 106,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-295w',
            'name'                 => 'Đèn pha di chuyển 295W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-295B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"欧司朗SIRIUS HRI 295W ,2500小时长寿命，色温7800K\"},{\"key\":\"Công suất định mức\",\"value\":\"400W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-295B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"欧司朗SIRIUS HRI 295W ,2500小时长寿命，色温7800K\"},{\"key\":\"Công suất định mức\",\"value\":\"400W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính lớn 152, điểm sáng dày và đầy đủ\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 3 mét đến vô cực\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Hiệu ứng nhấp nháy cơ học 5-13 lần\\/giây. Có thể điều chỉnh tốc độ và nhấp nháy ngẫu nhiên\"},{\"key\":\"bánh xe màu\",\"value\":\"13 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"13 mẫu + ánh sáng trắng. Bánh xe mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn là 8 lăng kính và 8+16 lăng kính. Mỗi lăng kính quay tiến và lùi độc lập. Hai lăng kính có thể được xếp chồng lên nhau để có hiệu quả tốt hơn.\"},{\"key\":\"Hệ thống ánh sáng lấp đầy\",\"value\":\"Vòng đèn gồm 48 đèn ba trong một 5050RGB có thể chảy nước, với nhiều hiệu ứng nước đua khác nhau, màu sắc được trộn đều, tạo hiệu ứng sân khấu đẹp mắt và sống động.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Bóng đèn sử dụng 1 quạt gió 5020 + 2 quạt bi hướng trục 8025 để tản nhiệt. Hộp dưới cùng sử dụng chế độ thông gió và tản nhiệt với các quạt hướng trục hình cầu ra vào.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với công tắc điều khiển nhiệt độ bảo vệ quá nhiệt, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-295B\"},{\"value\":\"Công suất định mức: 400W\"},{\"value\":\"Thông số nguồn sáng: OSRAM SIRIUS HRI 295W\"},{\"value\":\"Bánh xe màu: 13 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn cố định: 13 hoa văn + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 295W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-295B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC110V-240V/50-60HZ</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>欧司朗SIRIUS HRI 295W ,2500小时长寿命，色温7800K</td></tr><tr><td><strong>Công suất định mức</strong></td><td>400W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>24 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống mờ</strong></td><td>Điều chỉnh tuyến tính 0-100%</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 106,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/34.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-300w'], [
            'id'                   => 107,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-300w',
            'name'                 => 'Đèn pha di chuyển 300W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-300B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Philips MSD Sliver 300LL, tuổi thọ 3000 giờ, nhiệt độ màu 7800K\"},{\"key\":\"Công suất định mức\",\"value\":\"400W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-300B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Philips MSD Sliver 300LL, tuổi thọ 3000 giờ, nhiệt độ màu 7800K\"},{\"key\":\"Công suất định mức\",\"value\":\"400W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính lớn 152, điểm sáng dày và đầy đủ\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 3 mét đến vô cực\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Hiệu ứng nhấp nháy cơ học 5-13 lần\\/giây. Có thể điều chỉnh tốc độ và nhấp nháy ngẫu nhiên\"},{\"key\":\"bánh xe màu\",\"value\":\"13 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"13 mẫu + ánh sáng trắng. Bánh xe mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn là 8 lăng kính và 8+16 lăng kính. Mỗi lăng kính quay tiến và lùi độc lập. Hai lăng kính có thể được xếp chồng lên nhau để có hiệu quả tốt hơn.\"},{\"key\":\"Hệ thống ánh sáng lấp đầy\",\"value\":\"Vòng đèn gồm 48 đèn ba trong một 5050RGB có thể chảy nước, với nhiều hiệu ứng nước đua khác nhau, màu sắc được trộn đều, tạo hiệu ứng sân khấu đẹp mắt và sống động.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Bóng đèn sử dụng 1 quạt gió 5020 + 2 quạt bi hướng trục 8025 để tản nhiệt. Hộp dưới cùng sử dụng chế độ thông gió và tản nhiệt với các quạt hướng trục hình cầu ra vào.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với công tắc điều khiển nhiệt độ bảo vệ quá nhiệt, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-300B\"},{\"value\":\"Công suất định mức: 400W\"},{\"value\":\"Thông số nguồn sáng: Philips MSD Sliver 300LL\"},{\"value\":\"Bánh xe màu: 13 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn cố định: 13 hoa văn + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 300W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-300B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC110V-240V/50-60HZ</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Philips MSD Sliver 300LL, tuổi thọ 3000 giờ, nhiệt độ màu 7800K</td></tr><tr><td><strong>Công suất định mức</strong></td><td>400W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>24 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống mờ</strong></td><td>Điều chỉnh tuyến tính 0-100%</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 107,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/67.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-311w'], [
            'id'                   => 108,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-311w',
            'name'                 => 'Đèn pha di chuyển 311W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-311B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Công suất định mức\",\"value\":\"400W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính lớn 152, điểm sáng dày và đầy đủ\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-311B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Công suất định mức\",\"value\":\"400W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học đường kính lớn 152, điểm sáng dày và đầy đủ\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 3 mét đến vô cực\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Hiệu ứng nhấp nháy cơ học 5-13 lần\\/giây. Có thể điều chỉnh tốc độ và nhấp nháy ngẫu nhiên\"},{\"key\":\"bánh xe màu\",\"value\":\"13 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"13 mẫu + ánh sáng trắng. Bánh xe mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn là 8 lăng kính và 8+16 lăng kính. Mỗi lăng kính quay tiến và lùi độc lập. Hai lăng kính có thể được xếp chồng lên nhau để có hiệu quả tốt hơn.\"},{\"key\":\"Hệ thống ánh sáng lấp đầy\",\"value\":\"Vòng đèn gồm 48 đèn ba trong một 5050RGB có thể chảy nước, với nhiều hiệu ứng nước đua khác nhau, màu sắc được trộn đều, tạo hiệu ứng sân khấu đẹp mắt và sống động.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Bóng đèn sử dụng 1 quạt gió 5020 + 2 quạt bi hướng trục 8025 để tản nhiệt. Hộp dưới cùng sử dụng chế độ thông gió và tản nhiệt với các quạt hướng trục hình cầu ra vào.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với công tắc điều khiển nhiệt độ bảo vệ quá nhiệt, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"},{\"key\":\"Thiết bị nhà ở\",\"value\":\"Vỏ đầu sử dụng cấu trúc khóa nhanh, giúp tháo vỏ dễ dàng và thuận tiện. Vỏ ngoài được trang bị một sợi dây an toàn nhỏ, có thể treo trực tiếp lên thân đèn sau khi tháo vỏ, giải quyết vấn đề không có chỗ để đặt vỏ ngoài.\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-311B\"},{\"value\":\"Công suất định mức: 400W\"},{\"value\":\"Chế độ kênh: 24 kênh\"},{\"value\":\"Bánh xe màu: 13 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn cố định: 13 hoa văn + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 311W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-311B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC110V-240V/50-60HZ</td></tr><tr><td><strong>Công suất định mức</strong></td><td>400W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>24 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống mờ</strong></td><td>Điều chỉnh tuyến tính 0-100%</td></tr><tr><td><strong>Hệ thống quang học</strong></td><td>Sử dụng ống kính quang học đường kính lớn 152, điểm sáng dày và đầy đủ</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 108,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/83.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-350w'], [
            'id'                   => 109,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-350w',
            'name'                 => 'Đèn pha di chuyển 350W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-350B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Bóng đèn Phoenix nhập khẩu 350W, 1500 giờ, nhiệt độ màu 7700K\"},{\"key\":\"Công suất định mức\",\"value\":\"450W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-350B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC110V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Bóng đèn Phoenix nhập khẩu 350W, 1500 giờ, nhiệt độ màu 7700K\"},{\"key\":\"Công suất định mức\",\"value\":\"450W\"},{\"key\":\"chế độ kênh\",\"value\":\"24 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng thấu kính quang học có đường kính lớn 160, điểm sáng dày và đầy\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 3 mét đến vô cực\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Hiệu ứng nhấp nháy cơ học 5-13 lần\\/giây. Có thể điều chỉnh tốc độ và nhấp nháy ngẫu nhiên\"},{\"key\":\"bánh xe màu\",\"value\":\"13 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"13 mẫu + ánh sáng trắng. Bánh xe mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn là 8 lăng kính và 8+16 lăng kính. Mỗi lăng kính quay tiến và lùi độc lập. Hai lăng kính có thể được xếp chồng lên nhau để có hiệu quả tốt hơn.\"},{\"key\":\"Hệ thống ánh sáng lấp đầy\",\"value\":\"Vòng đèn gồm 48 đèn ba trong một 5050RGB có thể chảy nước, với nhiều hiệu ứng nước đua khác nhau, màu sắc được trộn đều, tạo hiệu ứng sân khấu đẹp mắt và sống động.\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Bóng đèn sử dụng 1 quạt gió 5020 + 2 quạt bi hướng trục 8025 để tản nhiệt. Hộp dưới cùng sử dụng chế độ thông gió và tản nhiệt với các quạt hướng trục hình cầu ra vào.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với công tắc điều khiển nhiệt độ bảo vệ quá nhiệt, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chức năng chương trình tích hợp\",\"value\":\"Tích hợp nhiều chương trình hiệu ứng ánh sáng, có thể được đồng bộ hóa mà không cần điều khiển bằng giọng nói trên bảng điều khiển\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-350B\"},{\"value\":\"Thông số nguồn sáng: bóng đèn Phoenix nhập khẩu 350W, 1500 giờ\"},{\"value\":\"Công suất định mức: 450W\"},{\"value\":\"Bánh xe màu: 13 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn cố định: 13 hoa văn + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 350W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-350B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC110V-240V/50-60HZ</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Bóng đèn Phoenix nhập khẩu 350W, 1500 giờ, nhiệt độ màu 7700K</td></tr><tr><td><strong>Công suất định mức</strong></td><td>450W</td></tr><tr><td><strong>chế độ kênh</strong></td><td>24 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống mờ</strong></td><td>Điều chỉnh tuyến tính 0-100%</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 109,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/100.html
        DB::table('products')->updateOrInsert(['slug' => 'dau-lac-50w'], [
            'id'                   => 110,
            'category_id'          => 21,
            'slug'                 => 'dau-lac-50w',
            'name'                 => 'Đầu lắc 50W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LM50B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"tổng công suất\",\"value\":\"160W\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Laser trắng 50W\"},{\"key\":\"nhiệt độ màu\",\"value\":\"7500K\"},{\"key\":\"chế độ kênh\",\"value\":\"16\\/18\\/24 kênh, mặc định 16 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LM50B\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"tổng công suất\",\"value\":\"160W\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Laser trắng 50W\"},{\"key\":\"nhiệt độ màu\",\"value\":\"7500K\"},{\"key\":\"chế độ kênh\",\"value\":\"16\\/18\\/24 kênh, mặc định 16 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống quang học\",\"value\":\"Sử dụng ống kính quang học có đường kính 136, điểm sáng dày và đầy\"},{\"key\":\"Nguyên tử hóa + hệ màu 7 màu\",\"value\":\"1 hiệu ứng sương mù độc lập, 1 bánh xe màu 7 màu, có thể sử dụng kết hợp với lăng kính\"},{\"key\":\"Góc chùm tia\",\"value\":\"1,8 độ\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Nhấp nháy điện tử 0-30 lần\\/giây, nhấp nháy ngẫu nhiên.\"},{\"key\":\"bánh xe màu\",\"value\":\"14 màu + ánh sáng trắng. Hiệu ứng cầu vồng với vòng xoay. Chức năng nửa màu\"},{\"key\":\"Bánh xe hoa văn cố định\",\"value\":\"14 mẫu + nước chảy + ánh sáng trắng. Tấm mẫu quay tiến và lùi, với chức năng jitter mẫu\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Cấu hình tiêu chuẩn: 8 lăng kính và 6 + 12 lăng kính, mỗi lăng kính quay tiến và lùi độc lập\"},{\"key\":\"Hệ thống ánh sáng lấp đầy\",\"value\":\"36 Vòng đèn ba trong một 5050RGB\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển, chức năng bong bóng chuyển đổi bảng điều khiển, chức năng tự hành tích hợp\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"môi trường làm việc\",\"value\":\"-20oC~45oC\"},{\"key\":\"Mức độ bảo vệ\",\"value\":\"IP20\"},{\"key\":\"trọng lượng tịnh của sản phẩm\",\"value\":\"12,2kg\"},{\"key\":\"Tổng trọng lượng sản phẩm\",\"value\":\"14,5kg\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LM50B\"},{\"value\":\"Tổng công suất: 160W\"},{\"value\":\"Quét ngang: sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"value\":\"Quét dọc: sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"value\":\"Góc chùm tia: 1,8 độ\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đầu lắc 50W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LM50B</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC100V-240V/50-60HZ</td></tr><tr><td><strong>tổng công suất</strong></td><td>160W</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Laser trắng 50W</td></tr><tr><td><strong>nhiệt độ màu</strong></td><td>7500K</td></tr><tr><td><strong>chế độ kênh</strong></td><td>16/18/24 kênh, mặc định 16 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 110,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/88.html
        DB::table('products')->updateOrInsert(['slug' => 'den-pha-di-chuyen-275w'], [
            'id'                   => 111,
            'category_id'          => 21,
            'slug'                 => 'den-pha-di-chuyen-275w',
            'name'                 => 'Đèn pha di chuyển 275W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-275B\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-275B\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm:HZ-275B\"},{\"value\":\"Công suất định mức: 380W\"},{\"value\":\"Thông số nguồn sáng: Pháo Phượng Hoàng Nhật Bản 275W, tuổi thọ 1500 giờ\"},{\"value\":\"Bánh xe màu: 14 màu + ánh sáng trắng\"},{\"value\":\"Tấm hoa văn: 14 mẫu + nước chảy + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn pha di chuyển 275W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Beam</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-275B</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 111,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/29.html
        DB::table('products')->updateOrInsert(['slug' => 'den-hoa-van-dau-di-chuyen-led150w'], [
            'id'                   => 112,
            'category_id'          => 22,
            'slug'                 => 'den-hoa-van-dau-di-chuyen-led150w',
            'name'                 => 'Đèn hoa văn đầu di chuyển LED150W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED150BSW\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED150BSW\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED150BSW\"},{\"value\":\"Công suất định mức: 200W\"},{\"value\":\"Thông số nguồn sáng: LED 150W\"},{\"value\":\"固定颜色：7 种颜色 + 白光\"},{\"value\":\"Hoa văn: 8 mẫu + 5 mẫu kính\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn hoa văn đầu di chuyển LED150W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED150BSW</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 112,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/28.html
        DB::table('products')->updateOrInsert(['slug' => 'den-cat-led700800w'], [
            'id'                   => 113,
            'category_id'          => 22,
            'slug'                 => 'den-cat-led700800w',
            'name'                 => 'Đèn cắt LED700/800W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED700P\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Nguồn sáng\",\"value\":\"Hạt đèn mô-đun 600W\"},{\"key\":\"Công suất định mức\",\"value\":\"700W\"},{\"key\":\"Thử nghiệm mô phỏng kênh\",\"value\":\"Tiêu chuẩn 34 kênh, mở rộng 39 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống cắt\",\"value\":\"Hệ thống cắt có thể xoay một góc 108°, với lưỡi cắt bốn mảnh, một mảnh duy nhất có thể được đóng hoàn toàn và mô-đun cắt đồ họa toàn quy trình 8 động cơ. Hướng và góc của mỗi lưỡi cắt có thể được điều khiển độc lập và nó có thể cắt liên tục và trơn tru các hình tam giác, tứ giác, cung, vòng cung và đồ họa khác theo bất kỳ hướng nào theo 8 hướng;\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED700P\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Nguồn sáng\",\"value\":\"Hạt đèn mô-đun 600W\"},{\"key\":\"Công suất định mức\",\"value\":\"700W\"},{\"key\":\"Thử nghiệm mô phỏng kênh\",\"value\":\"Tiêu chuẩn 34 kênh, mở rộng 39 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống cắt\",\"value\":\"Hệ thống cắt có thể xoay một góc 108°, với lưỡi cắt bốn mảnh, một mảnh duy nhất có thể được đóng hoàn toàn và mô-đun cắt đồ họa toàn quy trình 8 động cơ. Hướng và góc của mỗi lưỡi cắt có thể được điều khiển độc lập và nó có thể cắt liên tục và trơn tru các hình tam giác, tứ giác, cung, vòng cung và đồ họa khác theo bất kỳ hướng nào theo 8 hướng;\"},{\"key\":\"ống kính quang học\",\"value\":\"Thấu kính quang học 3 mô-đun, lớp phủ độ nét cao và sự kết hợp thấu kính thạch anh có độ chính xác cao giúp giảm thiểu hiện tượng thất thoát ánh sáng.\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 1 mét đến vô cực\"},{\"key\":\"hệ thống khuếch đại\",\"value\":\"Điều chỉnh tuyến tính, chùm tia 0-4 độ, mẫu 4-35 độ\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Nhấp nháy điện tử 0-30 lần\\/giây, nhấp nháy ngẫu nhiên.\"},{\"key\":\"màu cố định\",\"value\":\"10种颜色+白光，\"},{\"key\":\"CMY+CTO\",\"value\":\"Hệ thống trộn màu CMY tuyến tính, CTO tuyến tính\"},{\"key\":\"cố định màu cố định\",\"value\":\"10 màu + ánh sáng trắng\"},{\"key\":\"mẫu kính xoay\",\"value\":\"7 mẫu kính có thể thay thế + ánh sáng trắng, mỗi mẫu kính có thể đảo ngược\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Được trang bị 1 mặt 3 lăng kính và 1 mặt 8 lăng kính, mỗi lăng kính quay tiến và lùi độc lập, hai lăng kính có thể được xếp chồng lên nhau và tích hợp các hiệu ứng lăng kính phong phú và đầy màu sắc;\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp làm mát\",\"value\":\"Nó sử dụng bộ tản nhiệt mô-đun với sự kết hợp giữa nhôm + vây + ống đồng dẫn nhiệt cao, độ dẫn điện cao và chế độ tản nhiệt hiệu quả, đồng thời sử dụng 4 quạt hướng trục để tăng cường thông gió và làm mát. Bộ nguồn của hộp phía dưới sử dụng chế độ tản nhiệt xả bên ngoài của quạt hướng trục bóng 6015.\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"},{\"key\":\"thiết bị móc đèn\",\"value\":\"Móc đèn gấp + móc đèn thông thường, lựa chọn linh hoạt\"},{\"key\":\"môi trường làm việc\",\"value\":\"-20oC~40oC\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED700P\"},{\"value\":\"Công suất nguồn sáng: hạt đèn mô-đun 600W\"},{\"value\":\"Công suất định mức: 700W\"},{\"value\":\"Màu cố định: 10 màu + ánh sáng trắng\"},{\"value\":\"Mẫu kính xoay: 7 mẫu kính có thể thay thế + ánh sáng trắng\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn cắt LED700/800W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED700P</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC100V-240V/50-60HZ</td></tr><tr><td><strong>Nguồn sáng</strong></td><td>Hạt đèn mô-đun 600W</td></tr><tr><td><strong>Công suất định mức</strong></td><td>700W</td></tr><tr><td><strong>Thử nghiệm mô phỏng kênh</strong></td><td>Tiêu chuẩn 34 kênh, mở rộng 39 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>hệ thống cắt</strong></td><td>Hệ thống cắt có thể xoay một góc 108°, với lưỡi cắt bốn mảnh, một mảnh duy nhất có thể được đóng hoàn toàn và mô-đun cắt đồ họa toàn quy trình 8 động cơ. Hướng và góc của mỗi lưỡi cắt có thể được điều khiển độc lập và nó có thể cắt liên tục và trơn tru các hình tam giác, tứ giác, cung, vòng cung và đồ họa khác theo bất kỳ hướng nào theo 8 hướng;</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 113,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/38.html
        DB::table('products')->updateOrInsert(['slug' => 'den-cat-led450w'], [
            'id'                   => 114,
            'category_id'          => 22,
            'slug'                 => 'den-cat-led450w',
            'name'                 => 'Đèn cắt LED450W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED450P\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Nguồn sáng\",\"value\":\"Hạt đèn mô-đun 450W\"},{\"key\":\"Công suất định mức\",\"value\":\"550W\"},{\"key\":\"Thử nghiệm mô phỏng kênh\",\"value\":\"điều khiển 27 kênh\"},{\"key\":\"Ổ điện\",\"value\":\"Nguồn điện điều khiển dòng điện không đổi\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED450P\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Nguồn sáng\",\"value\":\"Hạt đèn mô-đun 450W\"},{\"key\":\"Công suất định mức\",\"value\":\"550W\"},{\"key\":\"Thử nghiệm mô phỏng kênh\",\"value\":\"điều khiển 27 kênh\"},{\"key\":\"Ổ điện\",\"value\":\"Nguồn điện điều khiển dòng điện không đổi\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"hệ thống cắt\",\"value\":\"Lưỡi cắt bốn mảnh, mô-đun cắt đồ họa toàn quy trình 8 động cơ, hướng và góc của mỗi lưỡi cắt có thể được điều khiển độc lập và nó có thể cắt liên tục và trơn tru các hình tam giác, tứ giác, cung, vòng cung và các kiểu biến đổi khác theo bất kỳ hướng nào trong 8 hướng;\"},{\"key\":\"Hệ thống khẩu độ\",\"value\":\"Hệ thống cắt được trang bị 1 khẩu độ tiêu chuẩn và góc điểm có thể được chuyển đổi nhanh chóng giữa các kích thước;\"},{\"key\":\"ống kính quang học\",\"value\":\"Thấu kính quang học 3 mô-đun, lớp phủ độ nét cao và sự kết hợp thấu kính thạch anh có độ chính xác cao giúp giảm thiểu hiện tượng thất thoát ánh sáng.\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 1 mét đến vô cực\"},{\"key\":\"hệ thống khuếch đại\",\"value\":\"Điều chỉnh tuyến tính, chùm tia 0-4 độ, mẫu 4-35 độ\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Nhấp nháy điện tử 0-30 lần\\/giây, nhấp nháy ngẫu nhiên.\"},{\"key\":\"màu cố định\",\"value\":\"12 màu + ánh sáng trắng, chức năng nửa màu, hiệu ứng cầu vồng chuyển tiếp tốc độ thay đổi, định vị màu \\/ màu tùy chọn ở bất kỳ vị trí nào\"},{\"key\":\"mẫu cố định\",\"value\":\"12 mẫu cố định + ánh sáng trắng\"},{\"key\":\"mẫu kính xoay\",\"value\":\"7 mẫu kính + ánh sáng trắng\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Được trang bị 1 mặt 3 lăng kính và 1 mặt 8 lăng kính, mỗi lăng kính quay tiến và lùi độc lập, hai lăng kính có thể được xếp chồng lên nhau và tích hợp các hiệu ứng lăng kính phong phú và đầy màu sắc;\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình cảm ứng màu LCD 2,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp làm mát\",\"value\":\"Nó sử dụng bộ tản nhiệt mô-đun với sự kết hợp giữa nhôm + vây + ống đồng dẫn nhiệt cao, độ dẫn điện cao và chế độ tản nhiệt hiệu quả, đồng thời sử dụng 4 quạt hướng trục để tăng cường thông gió và làm mát. Bộ nguồn của hộp phía dưới sử dụng chế độ tản nhiệt xả bên ngoài của quạt hướng trục bóng 6015.\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED450P\"},{\"value\":\"Công suất nguồn sáng: hạt đèn mô-đun 450W\"},{\"value\":\"Công suất định mức: 550W\"},{\"value\":\"Màu cố định: 12 màu + ánh sáng trắng\"},{\"value\":\"12 mẫu cố định + 7 mẫu kính\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn cắt LED450W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED450P</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC100V-240V/50-60HZ</td></tr><tr><td><strong>Nguồn sáng</strong></td><td>Hạt đèn mô-đun 450W</td></tr><tr><td><strong>Công suất định mức</strong></td><td>550W</td></tr><tr><td><strong>Thử nghiệm mô phỏng kênh</strong></td><td>điều khiển 27 kênh</td></tr><tr><td><strong>Ổ điện</strong></td><td>Nguồn điện điều khiển dòng điện không đổi</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 114,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/90.html
        DB::table('products')->updateOrInsert(['slug' => 'den-cat-10001200w'], [
            'id'                   => 115,
            'category_id'          => 22,
            'slug'                 => 'den-cat-10001200w',
            'name'                 => 'Đèn cắt 1000/1200W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED1000P\"},{\"key\":\"Điện áp định mức\",\"value\":\"AC100-240V,50\\/60Hz\"},{\"key\":\"quyền lực\",\"value\":\"1350W\"},{\"key\":\"nguồn sáng\",\"value\":\"Mô-đun LED 1000W, mô-đun LED 1200W\"},{\"key\":\"Tuổi thọ nguồn sáng\",\"value\":\"20.000 giờ\"},{\"key\":\"nhiệt độ màu\",\"value\":\"CRI cao 6500K: Ra ≥93\\/96 R9 ≥90\\/96\\/7500K\"},{\"key\":\"CRI thấp\",\"value\":\"Ra ≥70\"},{\"key\":\"Điều chỉnh tiêu điểm\",\"value\":\"Sử dụng ống kính thủy tinh có độ chính xác cao, zoom tuyến tính tốc độ cao 5,5 ° ~ 50 °, điểm sáng đồng đều trong mọi phạm vi\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED1000P\"},{\"key\":\"Điện áp định mức\",\"value\":\"AC100-240V,50\\/60Hz\"},{\"key\":\"quyền lực\",\"value\":\"1350W\"},{\"key\":\"nguồn sáng\",\"value\":\"Mô-đun LED 1000W, mô-đun LED 1200W\"},{\"key\":\"Tuổi thọ nguồn sáng\",\"value\":\"20.000 giờ\"},{\"key\":\"nhiệt độ màu\",\"value\":\"CRI cao 6500K: Ra ≥93\\/96 R9 ≥90\\/96\\/7500K\"},{\"key\":\"CRI thấp\",\"value\":\"Ra ≥70\"},{\"key\":\"Điều chỉnh tiêu điểm\",\"value\":\"Sử dụng ống kính thủy tinh có độ chính xác cao, zoom tuyến tính tốc độ cao 5,5 ° ~ 50 °, điểm sáng đồng đều trong mọi phạm vi\"},{\"key\":\"mô hình xoay\",\"value\":\"Bánh xe mô hình xoay có 6 mẫu\\/7 mẫu để lựa chọn, biến động tốc độ thay đổi và xoay hai chiều, đồng thời xoay mẫu có khả năng tinh chỉnh chính xác 16 bit.\"},{\"key\":\"mẫu cố định\",\"value\":\"Một bánh xe kiểu cố định có 8 kiểu mẫu\\/tùy chọn plug-in, tốc độ lắc thay đổi và xoay hai chiều.\"},{\"key\":\"đĩa hiệu ứng\",\"value\":\"1 đĩa hiệu ứng động, có thể mô phỏng các hiệu ứng động như ngọn lửa và dòng nước chảy.\"},{\"key\":\"bảng màu\",\"value\":\"Một bánh xe chip màu có 7 loại chip màu, có thể đạt được hiệu ứng cầu vồng hai chiều, nửa màu và điều chỉnh tuyến tính.\"},{\"key\":\"C M Y\",\"value\":\"无极混色        \"},{\"key\":\"C T Ô\",\"value\":\"Điều chỉnh nhiệt độ màu tuyến tính\"},{\"key\":\"khẩu độ\",\"value\":\"Điều chỉnh tuyến tính 5-100%, với nhiều hiệu ứng chức năng macro\"},{\"key\":\"nhấp nháy\",\"value\":\"Nhấp nháy điện tử nhanh 1-25Hz mỗi giây, với hiệu ứng nhấp nháy xung, đồng bộ và không đồng bộ\"},{\"key\":\"mờ đi\",\"value\":\"Làm mờ tuyến tính 0-100%\"},{\"key\":\"lăng kính\",\"value\":\"1 gương bốn hàng, 1 gương bốn hàng, có thể quay với tốc độ thay đổi theo cả hai hướng\"},{\"key\":\"làm mờ sương\",\"value\":\"1 gương sương mù độc lập\"},{\"key\":\"trình diễn\",\"value\":\"Màn hình cảm ứng màu 2,8 inch, có thể chuyển đổi tiếng Trung và tiếng Anh theo ý muốn\"},{\"key\":\"mức độ\",\"value\":\"Góc ngang 540° (tinh chỉnh chính xác 16BIT), tự động sửa lỗi\"},{\"key\":\"thẳng đứng\",\"value\":\"Góc dọc 270° (tinh chỉnh chính xác 16BIT), tự động sửa lỗi\"},{\"key\":\"chế độ điều khiển\",\"value\":\"DMX512, RDM, tự hành, điều khiển bằng giọng nói, cảnh, chế độ chủ-phụ, truyền không dây tùy chọn\"},{\"key\":\"kênh điều khiển\",\"value\":\"41 kênh\"},{\"key\":\"Mức độ bảo vệ\",\"value\":\"IP20\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED1000P\"},{\"value\":\"Công suất: 1350W\"},{\"value\":\"Nguồn sáng: mô-đun LED 1000W, mô-đun LED 1200W\"},{\"value\":\"Bảng màu: 1 tấm chip màu có 7 loại chip màu\"},{\"value\":\"Kiểu dáng: 7 kiểu xoay + 8 kiểu cố định\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn cắt 1000/1200W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED1000P</td></tr><tr><td><strong>Điện áp định mức</strong></td><td>AC100-240V,50/60Hz</td></tr><tr><td><strong>quyền lực</strong></td><td>1350W</td></tr><tr><td><strong>nguồn sáng</strong></td><td>Mô-đun LED 1000W, mô-đun LED 1200W</td></tr><tr><td><strong>Tuổi thọ nguồn sáng</strong></td><td>20.000 giờ</td></tr><tr><td><strong>nhiệt độ màu</strong></td><td>CRI cao 6500K: Ra ≥93/96 R9 ≥90/96/7500K</td></tr><tr><td><strong>CRI thấp</strong></td><td>Ra ≥70</td></tr><tr><td><strong>Điều chỉnh tiêu điểm</strong></td><td>Sử dụng ống kính thủy tinh có độ chính xác cao, zoom tuyến tính tốc độ cao 5,5 ° ~ 50 °, điểm sáng đồng đều trong mọi phạm vi</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 115,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/36.html
        DB::table('products')->updateOrInsert(['slug' => 'led320w-ba-trong-mot'], [
            'id'                   => 116,
            'category_id'          => 22,
            'slug'                 => 'led320w-ba-trong-mot',
            'name'                 => 'LED320W ba trong một',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED320BSW\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Nhiệt độ màu mô-đun LED 200W: 8000K\"},{\"key\":\"Công suất định mức\",\"value\":\"320W\"},{\"key\":\"Thử nghiệm mô phỏng kênh\",\"value\":\"điều khiển 19 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"ống kính quang học\",\"value\":\"Thấu kính quang học 3 mô-đun, lớp phủ độ nét cao và sự kết hợp thấu kính thạch anh có độ chính xác cao giúp giảm thiểu hiện tượng thất thoát ánh sáng.\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED320BSW\"},{\"key\":\"điện áp đầu vào\",\"value\":\"AC100V-240V\\/50-60HZ\"},{\"key\":\"Thông số nguồn sáng\",\"value\":\"Nhiệt độ màu mô-đun LED 200W: 8000K\"},{\"key\":\"Công suất định mức\",\"value\":\"320W\"},{\"key\":\"Thử nghiệm mô phỏng kênh\",\"value\":\"điều khiển 19 kênh\"},{\"key\":\"quét ngang\",\"value\":\"Sửa lỗi điện tử 540 độ (quét chính xác 16bit)\"},{\"key\":\"quét dọc\",\"value\":\"Sửa lỗi điện tử 270 độ (quét chính xác 16bit)\"},{\"key\":\"ống kính quang học\",\"value\":\"Thấu kính quang học 3 mô-đun, lớp phủ độ nét cao và sự kết hợp thấu kính thạch anh có độ chính xác cao giúp giảm thiểu hiện tượng thất thoát ánh sáng.\"},{\"key\":\"Hệ thống lấy nét\",\"value\":\"Điều chỉnh tuyến tính, 1 mét đến vô cực\"},{\"key\":\"hệ thống khuếch đại\",\"value\":\"Điều chỉnh tuyến tính, góc chùm 3,3-30 độ\"},{\"key\":\"hệ thống mờ\",\"value\":\"Điều chỉnh tuyến tính 0-100%\"},{\"key\":\"Hệ thống phun sương\",\"value\":\"1 hiệu ứng sương mù độc lập, các điểm sáng mềm mại và tự nhiên\"},{\"key\":\"Hiệu chỉnh nhiệt độ màu\",\"value\":\"3200K-7500K\"},{\"key\":\"Nhấp nháy tốc độ cao\",\"value\":\"Nhấp nháy điện tử 0-30 lần\\/giây, nhấp nháy ngẫu nhiên.\"},{\"key\":\"màu cố định\",\"value\":\"12 màu + ánh sáng trắng, chức năng nửa màu, hiệu ứng cầu vồng chuyển tiếp tốc độ thay đổi, định vị màu \\/ màu tùy chọn ở bất kỳ vị trí nào\"},{\"key\":\"mẫu cố định\",\"value\":\"14 mẫu cố định + ánh sáng trắng\"},{\"key\":\"mẫu kính xoay\",\"value\":\"7 mẫu kính + ánh sáng trắng\"},{\"key\":\"hệ thống lăng kính\",\"value\":\"Được trang bị 1 mặt 3 lăng kính và 1 mặt 8 lăng kính, mỗi lăng kính quay tiến và lùi độc lập, hai lăng kính có thể được xếp chồng lên nhau và tích hợp các hiệu ứng lăng kính phong phú và đầy màu sắc;\"},{\"key\":\"Chức năng vĩ mô\",\"value\":\"Chức năng đặt lại bảng điều khiển\"},{\"key\":\"Chế độ hiển thị\",\"value\":\"Màn hình LCD màu LCD 1,8 inch\"},{\"key\":\"tín hiệu điều khiển\",\"value\":\"Tiêu chuẩn quốc tế DMX512, tự hành, master-slave, điều khiển bằng giọng nói, có chức năng RDM\"},{\"key\":\"Phương pháp tản nhiệt\",\"value\":\"Hạt đèn sử dụng quạt hướng trục 9225 có thể điều chỉnh tốc độ để tản nhiệt và hộp phía dưới sử dụng quạt hướng trục bóng 6015 để thông gió và tản nhiệt.\"},{\"key\":\"thiết bị an toàn\",\"value\":\"Với chức năng bảo vệ quá nhiệt điều khiển nhiệt độ điện tử, công tắc điều khiển nhiệt độ sẽ tự động cắt điện khi hệ thống quá nhiệt bị lỗi.\"},{\"key\":\"Chất liệu ngoại hình\",\"value\":\"Chất liệu nhựa nylon chịu nhiệt độ cao và chống cháy\"},{\"key\":\"Thiết bị nhà ở\",\"value\":\"Vỏ đầu sử dụng cấu trúc khóa nhanh, giúp tháo vỏ dễ dàng và thuận tiện. Vỏ ngoài được trang bị một sợi dây an toàn nhỏ, có thể treo trực tiếp lên thân đèn sau khi tháo vỏ, giải quyết vấn đề không có chỗ để đặt vỏ ngoài.\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"HZ-LED320BSW\"},{\"value\":\"Công suất định mức: 320W\"},{\"value\":\"Thông số nguồn sáng: module LED 200W\"},{\"value\":\"Màu cố định: 12 màu + ánh sáng trắng\"},{\"value\":\"Hoa văn: 14 mẫu cố định + 7 mẫu kính\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>LED320W ba trong một</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED320BSW</td></tr><tr><td><strong>điện áp đầu vào</strong></td><td>AC100V-240V/50-60HZ</td></tr><tr><td><strong>Thông số nguồn sáng</strong></td><td>Nhiệt độ màu mô-đun LED 200W: 8000K</td></tr><tr><td><strong>Công suất định mức</strong></td><td>320W</td></tr><tr><td><strong>Thử nghiệm mô phỏng kênh</strong></td><td>điều khiển 19 kênh</td></tr><tr><td><strong>quét ngang</strong></td><td>Sửa lỗi điện tử 540 độ (quét chính xác 16bit)</td></tr><tr><td><strong>quét dọc</strong></td><td>Sửa lỗi điện tử 270 độ (quét chính xác 16bit)</td></tr><tr><td><strong>ống kính quang học</strong></td><td>Thấu kính quang học 3 mô-đun, lớp phủ độ nét cao và sự kết hợp thấu kính thạch anh có độ chính xác cao giúp giảm thiểu hiện tượng thất thoát ánh sáng.</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 116,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/50.html
        DB::table('products')->updateOrInsert(['slug' => 'led450w-ba-trong-mot'], [
            'id'                   => 117,
            'category_id'          => 22,
            'slug'                 => 'led450w-ba-trong-mot',
            'name'                 => 'LED450W ba trong một',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED450BSW\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED450BSW\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED450BSW\"},{\"value\":\"Công suất nguồn sáng: hạt đèn mô-đun 450W\"},{\"value\":\"Công suất định mức: 550W\"},{\"value\":\"Màu sắc: 8 màu + ánh sáng trắng\"},{\"value\":\"Hoa văn: 7 mẫu kính + 12 mẫu cố định\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>LED450W ba trong một</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED450BSW</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 117,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/39.html
        DB::table('products')->updateOrInsert(['slug' => '350w-ba-trong-mot'], [
            'id'                   => 118,
            'category_id'          => 22,
            'slug'                 => '350w-ba-trong-mot',
            'name'                 => '350W ba trong một',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-350BSW\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-350BSW\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-350BSW\"},{\"value\":\"Nguồn sáng: Pháo Phượng Hoàng Nhật Bản 350W, tuổi thọ 1500 giờ, nhiệt độ màu 7800K\"},{\"value\":\"Công suất định mức: 470W\"},{\"value\":\"Màu sắc: 12 màu + ánh sáng trắng\"},{\"value\":\"Hoa văn: 14 mẫu cố định + 7 mẫu kính\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>350W ba trong một</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-350BSW</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 118,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/104.html
        DB::table('products')->updateOrInsert(['slug' => '470w-ba-trong-mot'], [
            'id'                   => 119,
            'category_id'          => 22,
            'slug'                 => '470w-ba-trong-mot',
            'name'                 => '470W ba trong một',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"môi trường làm việc\",\"value\":\"-20 độ, 40 độ\"},{\"key\":\"thiết bị móc đèn\",\"value\":\"Móc đèn gấp + móc đèn thông thường, lựa chọn mức độ bảo vệ linh hoạt; IP20\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"môi trường làm việc\",\"value\":\"-20 độ, 40 độ\"},{\"key\":\"thiết bị móc đèn\",\"value\":\"Móc đèn gấp + móc đèn thông thường, lựa chọn mức độ bảo vệ linh hoạt; IP20\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm;HZ-470BSW\"},{\"value\":\"Công suất định mức: 650W\"},{\"value\":\"Thông số nguồn sáng: Bóng đèn OSRAM 461\"},{\"value\":\"Bánh xe màu: 12 chip màu + ánh sáng trắng tinh khiết\"},{\"value\":\"Tấm hoa văn: 7 mảnh hoa văn có thể cắm + 14 mảnh hoa văn cố định\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>470W ba trong một</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>môi trường làm việc</strong></td><td>-20 độ, 40 độ</td></tr><tr><td><strong>thiết bị móc đèn</strong></td><td>Móc đèn gấp + móc đèn thông thường, lựa chọn mức độ bảo vệ linh hoạt; IP20</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 119,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/productdetails/91.html
        DB::table('products')->updateOrInsert(['slug' => 'den-cat-led600w'], [
            'id'                   => 120,
            'category_id'          => 22,
            'slug'                 => 'den-cat-led600w',
            'name'                 => 'Đèn cắt LED600W',
            'price'                => 0,
            'sale_price'           => null,
            'specs_summary'        => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED600P\"}]', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('[{\"key\":\"Mẫu sản phẩm\",\"value\":\"HZ-LED600P\"}]', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('[{\"value\":\"Model sản phẩm: HZ-LED600P\"},{\"value\":\"Công suất định mức: 700W\"},{\"value\":\"Nguồn sáng: LED trắng công suất cao 600W, 6500K\"},{\"value\":\"Màu sắc: 6 chip màu cố định + ánh sáng trắng\"},{\"value\":\"Mẫu: 6 mảnh mẫu xoay plug-in + 7 mảnh mẫu cố định plug-in\"}]', true), JSON_UNESCAPED_UNICODE),
            'description'          => '<h2>Đèn cắt LED600W</h2><p>Sản phẩm thuộc dòng <strong>Đèn Moving Head Spot</strong> của Hongzhuo Light. Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p><h3>Thông số kỹ thuật</h3><table><tr><td><strong>Mẫu sản phẩm</strong></td><td>HZ-LED600P</td></tr></table>',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => 1,
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => 120,
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);


        // ============================================================
        // BÀI VIẾT (scraped từ hongzhuolight.com)
        // ============================================================

        // Nguồn: https://www.hongzhuolight.com/news_details_2/19.html
        DB::table('posts')->updateOrInsert(['slug' => 'cac-vi-tri-den-thuong-duoc-su-dung-de-chieu-sang-san-khau-giai-thich-chi-tiet-y'], [
            'id'           => 101,
            'category_id'  => 28,
            'slug'         => 'cac-vi-tri-den-thuong-duoc-su-dung-de-chieu-sang-san-khau-giai-thich-chi-tiet-y',
            'title'        => 'Các vị trí đèn thường được sử dụng để chiếu sáng sân khấu. Giải thích chi tiết ý nghĩa của từng vị trí đèn.',
            'thumbnail'    => 'https://omo-oss-image.thefastimg.com/portal-saas/pg2025061821504085724/cms/image/95997d39-b3df-47a0-8b24-767b01dfc092.png',
            'excerpt'      => 'Các vị trí đèn thường được sử dụng để chiếu sáng sân khấu. Giải thích chi tiết ý nghĩa của từng vị trí đèn. Ánh sáng sân khấu có thể mang đến cho khán giả trải nghiệm xem tốt hơn. Không thể phủ nhận rằng ánh sáng sân khấu đóng một vai trò rất lớn trong bu',
            'content'      => '<h2>Các vị trí đèn thường được sử dụng để chiếu sáng sân khấu. Giải thích chi tiết ý nghĩa của từng vị trí đèn.</h2> <p>Ánh sáng sân khấu có thể mang đến cho khán giả trải nghiệm xem tốt hơn. Không còn nghi ngờ gì nữa, ánh sáng sân khấu đóng một vai trò rất lớn trong các buổi biểu diễn. Có một số vị trí đèn thường được sử dụng trong chiếu sáng sân khấu. Tuy chỉ là một vài vị trí đèn đơn giản nhưng chúng có thể mang lại hiệu quả rất tốt. Nhưng để các vị trí đèn phát huy tốt công năng thì bạn phải hiểu rõ hơn về từng vị trí đèn thường sử dụng.</p> <p>Được lắp đặt ở phía trên khán phòng bên ngoài rèm sân khấu. Ánh sáng được chiếu vào khu vực biểu diễn phía trước sân khấu từ phía trước, vị trí đèn chiếu sáng mặt diễn viên là đèn bề mặt.</p> <p>Nó có thể đạt được độ sáng phổ quát và loại bỏ các \"điểm chết\" dễ tạo ra trong ảnh. Nó cũng có thể điều chỉnh tỷ lệ ánh sáng và tăng hoặc giảm độ tương phản để đạt được hiệu ứng cân bằng và tránh hiện tượng thiếu sáng cục bộ.</p> <p>Tuy nhiên, nếu ánh sáng này không được sử dụng kết hợp với ánh sáng từ các vị trí ánh sáng khác sẽ thiếu độ sáng và tính ba chiều.</p> <p>Vì vậy, ánh sáng bề mặt chỉ có thể được sử dụng làm ánh sáng cơ bản và tông màu cơ bản. Nó không đóng vai trò chủ đạo trên sân khấu và không thể là ánh sáng chính hay công cụ tạo hình cho hình ảnh.</p> ',
            'author'       => 'HZDG Vietnam',
            'is_visible'   => 1,
            'is_featured'  => 0,
            'view_count'   => rand(50, 300),
            'sort_order'   => 101,
            'published_at' => '2025-07-09 08:00:00',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/news_details_2/20.html
        DB::table('posts')->updateOrInsert(['slug' => 'thiet-ke-anh-sang-san-khau-quan-bar-da-dang'], [
            'id'           => 102,
            'category_id'  => 28,
            'slug'         => 'thiet-ke-anh-sang-san-khau-quan-bar-da-dang',
            'title'        => 'Thiết kế ánh sáng sân khấu quán bar đa dạng',
            'thumbnail'    => 'https://omo-oss-image.thefastimg.com/portal-saas/pg2025061821504085724/cms/image/2f93f57a-b8d6-43ce-b559-3ee4ced518c9.png',
            'excerpt'      => 'Thiết kế ánh sáng sân khấu quán bar đa dạng Cuộc sống của con người hiện đại ngày càng căng thẳng và các địa điểm vui chơi giải trí đã trở thành nơi thư giãn lý tưởng cho mọi người, đặc biệt là thế hệ trẻ. Những nơi phổ biến nhất là một số quán bar độc đá',
            'content'      => '<h2>Thiết kế ánh sáng sân khấu quán bar đa dạng</h2> <p>Nhịp sống của con người hiện đại ngày càng căng thẳng, các địa điểm vui chơi giải trí đã trở thành nơi tốt để mọi người thư giãn, đặc biệt là thế hệ trẻ. Những nơi phổ biến nhất là một số quán bar độc đáo. Theo các phong cách khác nhau, quán bar có thể được chia thành các quán bar trong trẻo, quán bar biểu diễn nghệ thuật, quán bar Slow rock, quán bar disco,… Nói một cách đơn giản, quán bar yên tĩnh và giản dị, thích hợp để trò chuyện và nghe nhạc; quán bar biểu diễn có sân khấu để bạn có thể xem biểu diễn; thanh chậm thường có DJ, nhạc chơi chủ yếu là downtempo, một loại nhạc mới, có tiết tấu chậm hơn; Quán bar disco chủ yếu phục vụ khiêu vũ, có sân khấu cho khách hàng nhảy, hiệu ứng ánh sáng và âm thanh tương đối mạnh.</p> <p>Thanh Qingba có yêu cầu cao về thiết kế và trang trí. Nói chung, ánh sáng được trang bị xung quanh thiết kế và trang trí. Vì vậy, yêu cầu chiếu sáng của thanh Qingba chủ yếu dựa trên hiệu ứng nhuộm LED đơn giản. Độ sáng không nên quá cao. Chúng thường được cố định và không cần nhân viên đặc biệt để kiểm soát.</p> ',
            'author'       => 'HZDG Vietnam',
            'is_visible'   => 1,
            'is_featured'  => 0,
            'view_count'   => rand(50, 300),
            'sort_order'   => 102,
            'published_at' => '2025-07-09 08:00:00',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/news_details_2/21.html
        DB::table('posts')->updateOrInsert(['slug' => 'he-thong-phoi-hop-den-chum-chieu-sang-san-khau-chuyen-nghiep'], [
            'id'           => 103,
            'category_id'  => 28,
            'slug'         => 'he-thong-phoi-hop-den-chum-chieu-sang-san-khau-chuyen-nghiep',
            'title'        => 'Hệ thống phối hợp đèn chùm chiếu sáng sân khấu chuyên nghiệp',
            'thumbnail'    => 'https://omo-oss-image.thefastimg.com/portal-saas/pg2025061821504085724/cms/image/47e87e91-38e1-4d61-972e-64b88354262a.png',
            'excerpt'      => 'Hệ thống đèn chùm chiếu sáng sân khấu chuyên nghiệp và đèn chùm chiếu sáng sân khấu là sản phẩm chiếu sáng sân khấu công nghệ cao tích hợp thiết bị điện tử, máy móc và quang học. Nhà sản xuất đèn sân khấu Kezun tin rằng một chùm đèn tốt phải có hiệu suất ',
            'content'      => '<h2>Hệ thống phối hợp đèn chùm chiếu sáng sân khấu chuyên nghiệp</h2> <p>Beam light là sản phẩm chiếu sáng sân khấu công nghệ cao tích hợp thiết bị điện tử, máy móc và quang học. Nhà sản xuất đèn sân khấu Kezun tin rằng một chùm đèn tốt phải có hiệu suất ổn định, hiệu suất ánh sáng chất lượng cao, định vị chính xác, tản nhiệt tốt, thân đèn và cấu trúc vật liệu phải đáp ứng các yêu cầu về công thái học.</p> <p>Trong số đó, trong hệ thống quang học, vấn đề cần quan tâm chính là tốc độ sử dụng quang thông của nguồn sáng, bao gồm cường độ, độ đồng đều, độ bão hòa và kích thước điểm của ánh sáng. Các yếu tố ảnh hưởng tương ứng là nguồn sáng, cấu trúc hệ thống quang học và lựa chọn vật liệu.</p> <p>Hệ thống cơ khí bao gồm nhiều khía cạnh, bao gồm vật liệu, cấu trúc, tính chất cơ học, yêu cầu về vỏ và yêu cầu về đặc tính tản nhiệt. Với mục đích đáp ứng chức năng tổng thể của đèn, các vật liệu khác nhau được sử dụng ở các bộ phận khác nhau của đèn thiết kế. Cấu trúc của đèn quyết định các tính chất cơ học, khả năng tản nhiệt, cường độ, tiếng ồn, trọng lượng và các yếu tố khác. Đặc tính cơ học của thân đèn chủ yếu thể hiện ở độ bền cơ học của các bộ phận trên thân đèn, giúp thân đèn không bị biến dạng, mài mòn, ăn mòn, nén, va đập trong quá trình hoạt động liên tục và hiệu quả; Vỏ đèn phải có yêu cầu nghiêm ngặt về chống nước, chống bụi, chống tĩnh điện và chống ẩm. Yêu cầu tản nhiệt cũng rất quan trọng. Nếu hệ thống tản nhiệt bị lỗi thường sẽ gây ra hiện tượng lệch thông số, nứt màng, mảng bám và gây ra hậu quả nghiêm trọng như treo máy, không đồng bộ, mất kiểm soát.</p> ',
            'author'       => 'HZDG Vietnam',
            'is_visible'   => 1,
            'is_featured'  => 0,
            'view_count'   => rand(50, 300),
            'sort_order'   => 103,
            'published_at' => '2025-07-09 08:00:00',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // Nguồn: https://www.hongzhuolight.com/news_details_2/22.html
        DB::table('posts')->updateOrInsert(['slug' => 'nhung-loai-den-san-khau-nao-duoc-san-xuat-boi-cac-nha-san-xuat-den-san-khau'], [
            'id'           => 104,
            'category_id'  => 28,
            'slug'         => 'nhung-loai-den-san-khau-nao-duoc-san-xuat-boi-cac-nha-san-xuat-den-san-khau',
            'title'        => 'Những loại đèn sân khấu nào được sản xuất bởi các nhà sản xuất đèn sân khấu?',
            'thumbnail'    => 'https://omo-oss-image.thefastimg.com/portal-saas/pg2025061821504085724/cms/image/c13474e5-2aed-441c-8546-33971488a400.png',
            'excerpt'      => 'Những loại đèn sân khấu nào được sản xuất bởi các nhà sản xuất đèn sân khấu? Thiết bị chiếu sáng sân khấu không thể thiếu trong các quán bar, rạp chiếu phim thông minh, sân khấu phòng hội nghị lớn và các hoạt động biểu diễn ngoài trời. Đối với các nhà sản',
            'content'      => '<h2>Những loại đèn sân khấu nào được sản xuất bởi các nhà sản xuất đèn sân khấu?</h2> <p>Thiết bị chiếu sáng sân khấu không thể thiếu trong các quán bar, rạp chiếu phim thông minh, sân khấu phòng hội thảo, các hoạt động biểu diễn ngoài trời. Đối với các nhà sản xuất đèn sân khấu, việc sử dụng các loại thiết bị chiếu sáng sân khấu khác nhau đều có những đặc điểm riêng.</p> <p>(1) Ánh sáng sân khấu thông thường. Bao gồm đèn định vị, đèn phản hồi, đèn dịu, đèn tạo ảnh, đèn PAR, đèn khuếch tán, đèn follow, đèn lưới, đèn ba màu cơ bản, đèn LED tiết kiệm năng lượng, v.v.</p> <p>(3) Ánh sáng laze. Bao gồm đèn laser nguồn sáng laser bán dẫn và đèn laser nguồn sáng laser rắn.</p> <p>（4）舞台特殊效果设备。包括频闪灯、烟雾机、烟机、泡泡机、雪花机、礼花炮等。</p> ',
            'author'       => 'HZDG Vietnam',
            'is_visible'   => 1,
            'is_featured'  => 0,
            'view_count'   => rand(50, 300),
            'sort_order'   => 104,
            'published_at' => '2025-07-09 08:00:00',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

        // Bật lại kiểm tra FK
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}