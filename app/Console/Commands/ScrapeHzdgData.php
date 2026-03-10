<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ScrapeHzdgData extends Command
{
    protected $signature = 'scrape:hzdg
                            {--products=20 : Số sản phẩm cần lấy}
                            {--posts=20    : Số bài viết cần lấy}
                            {--output=HzdgImportedSeeder : Tên file seeder đầu ra}
                            {--no-translate : Bỏ qua dịch, giữ nguyên tiếng Trung}';

    protected $description = 'Scrape sản phẩm và bài viết từ hongzhuolight.com, dịch sang tiếng Việt, tạo seeder';

    private const BASE_URL = 'https://www.hongzhuolight.com';

    // Danh sách trang sản phẩm theo danh mục (category_id => url path)
    private const CATEGORY_PAGES = [
        2 => ['name_vi' => 'Đèn Moving Head Beam', 'path' => '/products/2.html'],
        3 => ['name_vi' => 'Đèn Moving Head Spot', 'path' => '/products/3.html'],
        4 => ['name_vi' => 'Đèn Wash/染色',        'path' => '/products/4.html'],
        5 => ['name_vi' => 'Đèn Phim Trường',      'path' => '/products/5.html'],
        6 => ['name_vi' => 'Đèn Laser',             'path' => '/products/6.html'],
        7 => ['name_vi' => 'Đèn Hiệu Ứng',         'path' => '/products/7.html'],
        8 => ['name_vi' => 'Đèn Chống Nước',        'path' => '/products/8.html'],
        9 => ['name_vi' => 'Bàn Điều Khiển DMX',   'path' => '/products/9.html'],
        10 => ['name_vi' => 'Thiết Bị Hiệu Ứng Đặc Biệt', 'path' => '/products/10.html'],
    ];

    // Cache để giảm request dịch trùng lặp
    private array $translateCache = [];

    public function handle(): int
    {
        $maxProducts = (int) $this->option('products');
        $maxPosts    = (int) $this->option('posts');
        $outputClass = preg_replace('/[^A-Za-z0-9]/', '', $this->option('output'));
        $noTranslate = $this->option('no-translate');

        $this->info('╔══════════════════════════════════════════╗');
        $this->info('║  HZDG Scraper – hongzhuolight.com        ║');
        $this->info('╚══════════════════════════════════════════╝');
        $this->newLine();

        // ── 1. Thu thập sản phẩm ──────────────────────────────────
        $this->info("📦 Đang thu thập tối đa {$maxProducts} sản phẩm...");
        $products = $this->scrapeProducts($maxProducts, $noTranslate);
        $this->info('   → Đã lấy được ' . count($products) . ' sản phẩm');
        $this->newLine();

        // ── 2. Thu thập bài viết ──────────────────────────────────
        $this->info("📄 Đang thu thập tối đa {$maxPosts} bài viết...");
        $posts = $this->scrapePosts($maxPosts, $noTranslate);
        $this->info('   → Đã lấy được ' . count($posts) . ' bài viết');
        $this->newLine();

        // ── 3. Sinh seeder ────────────────────────────────────────
        $this->info("⚙️  Đang tạo file seeder {$outputClass}.php...");
        $this->generateSeeder($products, $posts, $outputClass);

        $this->newLine();
        $this->info("✅ Hoàn tất! Chạy lệnh sau để import:");
        $this->line("   php artisan db:seed --class={$outputClass}");
        $this->newLine();

        return 0;
    }

    // ═══════════════════════════════════════════════════════════════
    //  SCRAPE SẢN PHẨM
    // ═══════════════════════════════════════════════════════════════

    private function scrapeProducts(int $max, bool $noTranslate): array
    {
        $productUrls = [];

        // Duyệt qua từng trang danh mục để lấy đường dẫn sản phẩm
        foreach (self::CATEGORY_PAGES as $catId => $catInfo) {
            if (count($productUrls) >= $max) break;

            $this->line("  → Đang lấy danh sách từ: {$catInfo['path']}");
            $html = $this->fetchPage(self::BASE_URL . $catInfo['path']);
            if (!$html) continue;

            $found = $this->extractProductUrls($html, $catId, $catInfo['name_vi']);
            $productUrls = array_merge($productUrls, $found);

            // Tránh bị chặn
            usleep(300000);
        }

        // Nếu vẫn thiếu, lấy thêm từ trang tổng hợp số 2, 3...
        $extraPage = 2;
        while (count($productUrls) < $max && $extraPage <= 5) {
            $html = $this->fetchPage(self::BASE_URL . '/products/1392520366742528000-' . (($extraPage - 1) * 12) . '-12.html');
            if ($html) {
                $more = $this->extractProductUrls($html, null, null);
                $productUrls = array_merge($productUrls, $more);
            }
            $extraPage++;
            usleep(300000);
        }

        // Loại bỏ trùng
        $seen = [];
        $productUrls = array_filter($productUrls, function ($p) use (&$seen) {
            if (isset($seen[$p['url']])) return false;
            $seen[$p['url']] = true;
            return true;
        });
        $productUrls = array_values(array_slice($productUrls, 0, $max));

        // Lấy chi tiết từng sản phẩm
        $products = [];
        $bar = $this->output->createProgressBar(count($productUrls));
        $bar->start();

        foreach ($productUrls as $item) {
            $detail = $this->scrapeProductDetail($item['url'], $item['cat_id'], $item['cat_name'], $noTranslate);
            if ($detail) {
                $products[] = $detail;
            }
            $bar->advance();
            usleep(400000);
        }

        $bar->finish();
        $this->newLine();

        return $products;
    }

    private function extractProductUrls(string $html, ?int $catId, ?string $catName): array
    {
        $results = [];

        // Khớp cả URL tương đối /productdetails/... và /Products_details/...
        preg_match_all(
            '#href="(/[Pp]roduct[Ss_]?[Dd]etails?/[\w]+\.html)"#',
            $html,
            $matches
        );

        foreach (array_unique($matches[1]) as $path) {
            $results[] = [
                'url'      => self::BASE_URL . $path,
                'cat_id'   => $catId,
                'cat_name' => $catName,
            ];
        }

        return $results;
    }

    private function scrapeProductDetail(string $url, ?int $catId, ?string $catName, bool $noTranslate): ?array
    {
        $html = $this->fetchPage($url);
        if (!$html) return null;

        // ── Tên sản phẩm (lấy từ <title>) ─────────────────────────
        $name_zh = '';
        if (preg_match('/<title>([^<]+?)<\/title>/i', $html, $m)) {
            // Bỏ phần " - Công ty tên" đằng sau dấu gạch nối
            $name_zh = trim(preg_replace('/\s*[-–—|]\s*.{2,}$/', '', strip_tags($m[1])));
        }
        // Fallback từ <p class="...s_title">
        if (!$name_zh) {
            if (preg_match('/<p[^>]*s_title[^>]*>\s*([^<●●：:]{3,80}?)\s*<\/p>/isu', $html, $m)) {
                $name_zh = trim(strip_tags($m[1]));
            }
        }
        if (!$name_zh) return null;

        // ── Ảnh đại diện (thumbnail) ──────────────────────────────
        $thumbnail = '';
        if (preg_match('/omo-oss-image\.thefastimg\.com\/[^"\'\s]+?\.(?:jpg|jpeg|png|webp)/i', $html, $m)) {
            $thumbnail = 'https://' . $m[0];
        }

        // ── Thông số kỹ thuật ─────────────────────────────────────
        $specs = $this->parseSpecs($html);

        // ── Mô tả ngắn (tổng hợp từ bullet points) ───────────────
        $mainFeatures = $this->parseMainFeatures($html);

        // ── Giá (nếu có) ──────────────────────────────────────────
        $price = $this->parsePrice($html);

        // ── Dịch sang tiếng Việt ──────────────────────────────────
        $name_vi = $noTranslate ? $name_zh : $this->translate($name_zh);

        $specs_vi = [];
        foreach ($specs as $spec) {
            $specs_vi[] = [
                'key'   => $noTranslate ? $spec['key']   : $this->translate($spec['key']),
                'value' => $noTranslate ? $spec['value'] : $this->translate($spec['value']),
            ];
        }

        $features_vi = [];
        foreach ($mainFeatures as $f) {
            $features_vi[] = [
                'value' => $noTranslate ? $f : $this->translate($f),
            ];
        }

        $description_vi = $this->buildProductDescription($name_vi, $specs_vi, $catName ?? $this->guessCategoryName($name_vi));

        // ── Tạo slug ──────────────────────────────────────────────
        $slug = $this->makeSlug($name_vi ?: $name_zh);

        return [
            'category_id'  => $catId,
            'slug'         => $slug,
            'name'         => $name_vi ?: $name_zh,
            'price'        => $price,
            'sale_price'   => $price > 0 ? (int) round($price * 0.85) : null,
            'specs_summary' => array_slice($specs_vi, 0, 8),
            'specs_full'    => $specs_vi,
            'advantages'    => $features_vi,
            'description'   => $description_vi,
            'thumbnail'     => $thumbnail,
            'source_url'    => $url,
            'in_stock'      => true,
            'is_visible'    => true,
            'is_bestseller' => false,
            'is_hot'        => false,
            'is_new'        => true,
            'is_promotion'  => false,
        ];
    }

    private function parseSpecs(string $html): array
    {
        $specs = [];

        // Pattern chính: <h6>key：value</h6> (cấu trúc thực của trang)
        preg_match_all('/<h6[^>]*>(.*?)<\/h6>/is', $html, $matches);
        if (!empty($matches[1])) {
            foreach ($matches[1] as $raw) {
                $text = html_entity_decode(trim(strip_tags($raw)), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                if (preg_match('/^([^：:]{2,50})[：:]\s*(.{1,200})$/u', $text, $kv)) {
                    $key   = trim($kv[1]);
                    $value = preg_replace('/\s+/', ' ', trim($kv[2]));
                    if ($key && $value) {
                        $specs[] = ['key' => $key, 'value' => $value];
                    }
                }
            }
        }

        // Fallback: <p class="s_title">key：value</p>
        if (empty($specs)) {
            preg_match_all('/<p[^>]*s_title[^>]*>\s*([^<●]{5,200})\s*<\/p>/isu', $html, $matches);
            foreach ($matches[1] as $raw) {
                $text = html_entity_decode(trim(strip_tags($raw)), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                if (preg_match('/^([^：:]{2,50})[：:]\s*(.{1,200})$/u', $text, $kv)) {
                    $specs[] = ['key' => trim($kv[1]), 'value' => trim($kv[2])];
                }
            }
        }

        // Fallback 2: <td>
        if (empty($specs)) {
            preg_match_all('/<td[^>]*>\s*([^<]+?)\s*<\/td>\s*<td[^>]*>\s*([^<]+?)\s*<\/td>/is', $html, $matches);
            for ($i = 0; $i < count($matches[1]); $i++) {
                $key   = trim($matches[1][$i]);
                $value = trim($matches[2][$i]);
                if ($key && $value && mb_strlen($key) < 50 && mb_strlen($value) < 200) {
                    $specs[] = ['key' => $key, 'value' => $value];
                }
            }
        }

        // Loại bỏ trùng
        $seen = [];
        $unique = [];
        foreach ($specs as $s) {
            if (!isset($seen[$s['key']])) {
                $seen[$s['key']] = true;
                $unique[] = $s;
            }
        }

        return array_slice($unique, 0, 25);
    }

    private function parseMainFeatures(string $html): array
    {
        $features = [];

        // Cấu trúc trang: ● nằm trong <p> riêng, text nằm trong <p> kế tiếp cùng container
        // Pattern: <div s_layout> ... <p>●</p> ... <p>TEXT</p> ...
        preg_match_all(
            '/<div[^>]*s_layout[^>]*>[\s\S]*?<p[^>]*>\s*[●·\*]\s*<\/p>[\s\S]*?<div[^>]*>\s*<p[^>]*>\s*([^<●]{3,150}?)\s*<\/p>/isu',
            $html,
            $m
        );
        foreach ($m[1] as $f) {
            $f = html_entity_decode(trim(strip_tags($f)), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $f = preg_replace('/\s+/', ' ', $f);
            if ($f && mb_strlen($f) > 3) {
                $features[] = $f;
            }
        }

        // Fallback: dùng 5 H6 đầu tiên làm features
        if (empty($features)) {
            preg_match_all('/<h6[^>]*>(.{5,120}?)<\/h6>/is', $html, $h6m);
            foreach (array_slice($h6m[1], 0, 5) as $h) {
                $f = html_entity_decode(trim(strip_tags($h)), ENT_QUOTES | ENT_HTML5, 'UTF-8');
                if ($f) $features[] = $f;
            }
        }

        return array_slice(array_unique(array_filter($features)), 0, 5);
    }

    private function parsePrice(string $html): int
    {
        // Trang này không có giá, tạo giá mẫu theo tên sản phẩm
        // (có thể tuỳ chỉnh sau)
        if (preg_match('#[¥￥]\s*([\d,\.]+)#u', $html, $m)) {
            return (int) (str_replace([',', '.'], '', $m[1]) * 3500); // CNY → VND x 3500
        }
        return 0; // Liên hệ báo giá
    }

    private function guessCategoryName(string $name): string
    {
        $map = [
            'beam'  => 'Đèn Moving Head Beam',
            'spot'  => 'Đèn Moving Head Spot',
            'laser' => 'Đèn Laser',
            'par'   => 'Đèn Par LED',
            'wash'  => 'Đèn Wash',
            'dmx'   => 'Bàn Điều Khiển DMX',
        ];
        $lower = mb_strtolower($name);
        foreach ($map as $k => $v) {
            if (str_contains($lower, $k)) return $v;
        }
        return 'Đèn Sân Khấu';
    }

    private function buildProductDescription(string $name, array $specs, string $category): string
    {
        $specsHtml = '';
        if (!empty($specs)) {
            $rows = '';
            foreach (array_slice($specs, 0, 8) as $s) {
                $rows .= "<tr><td><strong>{$s['key']}</strong></td><td>{$s['value']}</td></tr>";
            }
            $specsHtml = "<h3>Thông số kỹ thuật</h3><table>{$rows}</table>";
        }

        return "<h2>{$name}</h2>"
            . "<p>Sản phẩm thuộc dòng <strong>{$category}</strong> của Hongzhuo Light. "
            . "Được chế tạo với công nghệ tiên tiến, phù hợp cho sân khấu chuyên nghiệp, "
            . "bar, hội trường, rạp chiếu phim và các không gian giải trí cao cấp.</p>"
            . $specsHtml;
    }

    // ═══════════════════════════════════════════════════════════════
    //  SCRAPE BÀI VIẾT
    // ═══════════════════════════════════════════════════════════════

    private function scrapePosts(int $max, bool $noTranslate): array
    {
        $articleUrls = [];

        // Các trang danh sách bài viết
        $listPages = [
            '/news/1724994144148738048.html',
            '/news/1.html',
            '/news/1724994144148738048-0-5.html',
        ];

        foreach ($listPages as $listPath) {
            if (count($articleUrls) >= $max) break;
            $html = $this->fetchPage(self::BASE_URL . $listPath);
            if (!$html) continue;

            preg_match_all(
                '#href="(https://www\.hongzhuolight\.com/news_details[^"]+\.html)"#',
                $html,
                $m
            );
            foreach (array_unique($m[1]) as $url) {
                $articleUrls[$url] = $url;
            }
            usleep(300000);
        }

        $articleUrls = array_values(array_slice($articleUrls, 0, $max));

        // Nếu không đủ bài từ API scrape, tạo danh sách bài viết mẫu
        if (count($articleUrls) < min(4, $max)) {
            for ($i = 19; $i <= 30; $i++) {
                $articleUrls[] = self::BASE_URL . "/news_details_2/{$i}.html";
            }
            $articleUrls = array_unique($articleUrls);
            $articleUrls = array_slice($articleUrls, 0, $max);
        }

        $posts = [];
        $bar = $this->output->createProgressBar(count($articleUrls));
        $bar->start();

        foreach ($articleUrls as $url) {
            $post = $this->scrapePostDetail($url, $noTranslate);
            if ($post) {
                $posts[] = $post;
            }
            $bar->advance();
            usleep(400000);
        }

        $bar->finish();
        $this->newLine();

        return $posts;
    }

    private function scrapePostDetail(string $url, bool $noTranslate): ?array
    {
        $html = $this->fetchPage($url);
        if (!$html) return null;

        // ── Tiêu đề ───────────────────────────────────────────────
        $title_zh = '';
        if (preg_match('#<h1[^>]*>\s*([^<]+?)\s*</h1>#is', $html, $m)) {
            $title_zh = trim(strip_tags($m[1]));
        }
        if (!$title_zh) return null;

        // ── Ngày đăng ─────────────────────────────────────────────
        $publishedAt = now()->format('Y-m-d H:i:s');
        if (preg_match('#(\d{4})-(\d{2})-(\d{2})#', $html, $m)) {
            $publishedAt = "{$m[1]}-{$m[2]}-{$m[3]} 08:00:00";
        }

        // ── Nội dung bài viết ─────────────────────────────────────
        $content_zh = $this->extractArticleContent($html, $title_zh);

        // ── Tóm tắt ───────────────────────────────────────────────
        $excerpt_zh = mb_substr(strip_tags($content_zh), 0, 200);

        // ── Ảnh đại diện ──────────────────────────────────────────
        $thumbnail = '';
        if (preg_match('#omo-oss-image\.thefastimg\.com/[^"\']+(?:jpg|jpeg|png|webp)#i', $html, $m)) {
            $thumbnail = 'https://' . $m[0];
        }

        // ── Dịch ──────────────────────────────────────────────────
        $title_vi   = $noTranslate ? $title_zh   : $this->translate($title_zh);
        $excerpt_vi = $noTranslate ? $excerpt_zh : $this->translate($excerpt_zh);
        $content_vi = $noTranslate ? $content_zh : $this->translateContent($content_zh);

        $slug = $this->makeSlug($title_vi ?: $title_zh);

        return [
            'slug'         => $slug,
            'title'        => $title_vi ?: $title_zh,
            'thumbnail'    => $thumbnail,
            'excerpt'      => $excerpt_vi,
            'content'      => $content_vi,
            'published_at' => $publishedAt,
            'source_url'   => $url,
        ];
    }

    private function extractArticleContent(string $html, string $titleZh): string
    {
        // Loại bỏ nav, footer, sidebar…
        $html = preg_replace('#<(script|style|nav|footer|header)[^>]*>.*?</\1>#is', '', $html);

        // Tìm các đoạn văn dựa trên nội dung thực
        preg_match_all('#<p[^>]*>\s*([^<]{20,})\s*</p>#is', $html, $m);

        $paragraphs = [];
        foreach ($m[1] as $p) {
            $text = trim(strip_tags($p));
            // Bỏ qua các đoạn chứa link điều hướng
            if (mb_strlen($text) > 30 && !str_contains($text, 'Copyright') && !str_contains($text, '版权')) {
                $paragraphs[] = "<p>{$text}</p>";
            }
        }

        if (empty($paragraphs)) {
            return "<p>Bài viết về chủ đề đèn sân khấu chuyên nghiệp từ Hongzhuo Light.</p>";
        }

        return "<h2>{$titleZh}</h2>" . implode("\n", array_slice($paragraphs, 0, 15));
    }

    // ═══════════════════════════════════════════════════════════════
    //  DỊCH TIẾNG TRUNG → TIẾNG VIỆT
    // ═══════════════════════════════════════════════════════════════

    /**
     * Gọi Google Translate unofficial (miễn phí, không cần API key).
     */
    private function translate(string $text): string
    {
        $text = trim($text);
        if (!$text || mb_strlen($text) < 2) return $text;

        // Kiểm tra cache
        $cacheKey = md5($text);
        if (isset($this->translateCache[$cacheKey])) {
            return $this->translateCache[$cacheKey];
        }

        try {
            $response = Http::timeout(10)
                ->withoutVerifying()
                ->withHeaders(['User-Agent' => 'Mozilla/5.0'])
                ->get('https://translate.googleapis.com/translate_a/single', [
                    'client' => 'gtx',
                    'sl'     => 'zh-CN',
                    'tl'     => 'vi',
                    'dt'     => 't',
                    'q'      => $text,
                ]);

            if ($response->successful()) {
                $data = $response->json();
                $translated = '';
                if (isset($data[0]) && is_array($data[0])) {
                    foreach ($data[0] as $chunk) {
                        if (isset($chunk[0])) {
                            $translated .= $chunk[0];
                        }
                    }
                }
                $translated = trim($translated);
                if ($translated) {
                    $this->translateCache[$cacheKey] = $translated;
                    usleep(100000); // 100ms giữa các request dịch
                    return $translated;
                }
            }
        } catch (\Exception $e) {
            // Nếu dịch thất bại, trả về văn bản gốc
        }

        return $text;
    }

    /**
     * Dịch toàn bộ nội dung HTML (chia nhỏ theo đoạn).
     */
    private function translateContent(string $html): string
    {
        // Tách theo thẻ <p> và <h*>
        preg_match_all('#(<(?:p|h[1-6])[^>]*>)(.*?)(</(?:p|h[1-6])>)#is', $html, $matches, PREG_SET_ORDER);

        if (empty($matches)) {
            return $this->translate(strip_tags($html));
        }

        $result = '';
        foreach ($matches as $m) {
            $inner   = strip_tags($m[2]);
            $inner   = trim($inner);
            $openTag = $m[1];
            $closeTag = $m[3];

            if (mb_strlen($inner) > 3) {
                $translated = $this->translate($inner);
                $result .= $openTag . $translated . $closeTag . "\n";
            }
        }

        return $result ?: $html;
    }

    // ═══════════════════════════════════════════════════════════════
    //  TẠO SEEDER
    // ═══════════════════════════════════════════════════════════════

    private function generateSeeder(array $products, array $posts, string $className): void
    {
        $now = now()->format('Y-m-d H:i:s');
        $productRows = $this->buildProductRows($products);
        $postRows    = $this->buildPostRows($posts);

        $stub = <<<PHP
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Seeder được tạo tự động bởi lệnh: php artisan scrape:hzdg
 * Nguồn dữ liệu: https://www.hongzhuolight.com/
 * Thời gian tạo: {$now}
 */
class {$className} extends Seeder
{
    public function run(): void
    {
        \$enc = fn(array \$arr) => json_encode(\$arr, JSON_UNESCAPED_UNICODE);

        // ============================================================
        // DANH MỤC ĐÈN SÂN KHẤU (thêm nếu chưa có)
        // ============================================================
        \$categories = [
            ['id'=>21, 'parent_id'=>5, 'name'=>'Đèn Moving Head Beam',           'slug'=>'den-moving-head-beam',           'type'=>'product', 'sort_order'=>1, 'is_visible'=>1],
            ['id'=>22, 'parent_id'=>5, 'name'=>'Đèn Moving Head Spot',           'slug'=>'den-moving-head-spot',           'type'=>'product', 'sort_order'=>2, 'is_visible'=>1],
            ['id'=>23, 'parent_id'=>5, 'name'=>'Đèn Laser Sân Khấu',             'slug'=>'den-laser-san-khau',             'type'=>'product', 'sort_order'=>3, 'is_visible'=>1],
            ['id'=>24, 'parent_id'=>5, 'name'=>'Đèn Wash/染色',                  'slug'=>'den-wash-nhiem-mau',             'type'=>'product', 'sort_order'=>4, 'is_visible'=>1],
            ['id'=>25, 'parent_id'=>5, 'name'=>'Đèn Chống Nước Ngoài Trời',     'slug'=>'den-chong-nuoc-ngoai-troi',      'type'=>'product', 'sort_order'=>5, 'is_visible'=>1],
            ['id'=>26, 'parent_id'=>5, 'name'=>'Bàn Điều Khiển DMX',            'slug'=>'ban-dieu-khien-dmx',             'type'=>'product', 'sort_order'=>6, 'is_visible'=>1],
            ['id'=>27, 'parent_id'=>5, 'name'=>'Thiết Bị Hiệu Ứng Sân Khấu',   'slug'=>'thiet-bi-hieu-ung-san-khau',     'type'=>'product', 'sort_order'=>7, 'is_visible'=>1],
            ['id'=>28, 'parent_id'=>null, 'name'=>'Kiến Thức Đèn Sân Khấu',    'slug'=>'kien-thuc-den-san-khau',         'type'=>'post',    'sort_order'=>4, 'is_visible'=>1],
        ];

        foreach (\$categories as \$cat) {
            DB::table('categories')->updateOrInsert(
                ['id' => \$cat['id']],
                array_merge(\$cat, [
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
{$productRows}

        // ============================================================
        // BÀI VIẾT (scraped từ hongzhuolight.com)
        // ============================================================
{$postRows}
    }
}
PHP;

        $path = database_path("seeders/{$className}.php");
        file_put_contents($path, $stub);
        $this->line("   → Đã ghi file: database/seeders/{$className}.php");
    }

    private function buildProductRows(array $products): string
    {
        if (empty($products)) {
            return "        // Không có sản phẩm nào được scrape";
        }

        $rows = '';
        // Lấy ID tự động bắt đầu từ 101 để tránh xung đột với seeder gốc
        $id = 101;
        $catMap = [
            2 => 21, 3 => 22, 6 => 23, 4 => 24, 8 => 25, 9 => 26, 10 => 27,
            5 => 27, 7 => 27,
        ];

        foreach ($products as $p) {
            $catId    = isset($p['category_id'], $catMap[$p['category_id']]) ? $catMap[$p['category_id']] : 21;
            $slug     = $this->phpEscape($p['slug']);
            $name     = $this->phpEscape($p['name']);
            $price    = (int) $p['price'];
            $salePrice = $p['sale_price'] !== null ? (int) $p['sale_price'] : 'null';
            $desc     = $this->phpEscape($p['description'] ?? '');
            $specsSum = addslashes(json_encode($p['specs_summary'] ?? [], JSON_UNESCAPED_UNICODE));
            $specsFull = addslashes(json_encode($p['specs_full'] ?? [], JSON_UNESCAPED_UNICODE));
            $adv      = addslashes(json_encode($p['advantages'] ?? [], JSON_UNESCAPED_UNICODE));
            $thumb    = $this->phpEscape($p['thumbnail'] ?? '');
            $src      = $this->phpEscape($p['source_url'] ?? '');
            $isNew    = $p['is_new'] ? 1 : 0;

            $salePriceVal = is_string($salePrice) ? 'null' : $salePrice;

            $rows .= <<<PHP

        // Nguồn: {$src}
        DB::table('products')->updateOrInsert(['slug' => '{$slug}'], [
            'id'                   => {$id},
            'category_id'          => {$catId},
            'slug'                 => '{$slug}',
            'name'                 => '{$name}',
            'price'                => {$price},
            'sale_price'           => {$salePriceVal},
            'specs_summary'        => json_encode(json_decode('{$specsSum}', true), JSON_UNESCAPED_UNICODE),
            'specs_full'           => json_encode(json_decode('{$specsFull}', true), JSON_UNESCAPED_UNICODE),
            'advantages'           => json_encode(json_decode('{$adv}', true), JSON_UNESCAPED_UNICODE),
            'description'          => '{$desc}',
            'video_url'            => null,
            'catalog_url'          => null,
            'in_stock'             => 1,
            'is_bestseller'        => 0,
            'is_hot'               => 0,
            'is_new'               => {$isNew},
            'is_visible'           => 1,
            'is_promotion'         => 0,
            'promotion_product_id' => null,
            'view_count'           => rand(50, 500),
            'sort_order'           => {$id},
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

PHP;
            $id++;
        }

        return $rows;
    }

    private function buildPostRows(array $posts): string
    {
        if (empty($posts)) {
            return "        // Không có bài viết nào được scrape";
        }

        $rows = '';
        $id = 101;

        foreach ($posts as $p) {
            $slug      = $this->phpEscape($p['slug']);
            $title     = $this->phpEscape($p['title']);
            $excerpt   = $this->phpEscape(mb_substr(strip_tags($p['excerpt'] ?? ''), 0, 255));
            $content   = $this->phpEscape($p['content'] ?? '');
            $thumb     = $this->phpEscape($p['thumbnail'] ?? '');
            $published = $p['published_at'] ?? now()->format('Y-m-d H:i:s');
            $src       = $this->phpEscape($p['source_url'] ?? '');

            $rows .= <<<PHP

        // Nguồn: {$src}
        DB::table('posts')->updateOrInsert(['slug' => '{$slug}'], [
            'id'           => {$id},
            'category_id'  => 28,
            'slug'         => '{$slug}',
            'title'        => '{$title}',
            'thumbnail'    => '{$thumb}',
            'excerpt'      => '{$excerpt}',
            'content'      => '{$content}',
            'author'       => 'HZDG Vietnam',
            'is_visible'   => 1,
            'is_featured'  => 0,
            'view_count'   => rand(50, 300),
            'sort_order'   => {$id},
            'published_at' => '{$published}',
            'created_at'   => now(),
            'updated_at'   => now(),
        ]);

PHP;
            $id++;
        }

        return $rows;
    }

    // ═══════════════════════════════════════════════════════════════
    //  TIỆN ÍCH
    // ═══════════════════════════════════════════════════════════════

    private function fetchPage(string $url): ?string
    {
        try {
            $response = Http::timeout(20)
                ->withoutVerifying()
                ->withHeaders([
                    'User-Agent'      => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                    'Accept-Language' => 'zh-CN,zh;q=0.9',
                    'Accept'          => 'text/html,application/xhtml+xml',
                ])
                ->get($url);

            if ($response->successful()) {
                return $response->body();
            }
            $this->warn("  ⚠ HTTP {$response->status()}: {$url}");
        } catch (\Exception $e) {
            $this->warn("  ⚠ Không thể tải: {$url} ({$e->getMessage()})");
        }

        return null;
    }

    private function makeSlug(string $text): string
    {
        // Bảng chuyển đổi dấu tiếng Việt
        $map = [
            'à'=>'a','á'=>'a','ả'=>'a','ã'=>'a','ạ'=>'a',
            'ă'=>'a','ắ'=>'a','ằ'=>'a','ẳ'=>'a','ẵ'=>'a','ặ'=>'a',
            'â'=>'a','ấ'=>'a','ầ'=>'a','ẩ'=>'a','ẫ'=>'a','ậ'=>'a',
            'è'=>'e','é'=>'e','ẻ'=>'e','ẽ'=>'e','ẹ'=>'e',
            'ê'=>'e','ế'=>'e','ề'=>'e','ể'=>'e','ễ'=>'e','ệ'=>'e',
            'ì'=>'i','í'=>'i','ỉ'=>'i','ĩ'=>'i','ị'=>'i',
            'ò'=>'o','ó'=>'o','ỏ'=>'o','õ'=>'o','ọ'=>'o',
            'ô'=>'o','ố'=>'o','ồ'=>'o','ổ'=>'o','ỗ'=>'o','ộ'=>'o',
            'ơ'=>'o','ớ'=>'o','ờ'=>'o','ở'=>'o','ỡ'=>'o','ợ'=>'o',
            'ù'=>'u','ú'=>'u','ủ'=>'u','ũ'=>'u','ụ'=>'u',
            'ư'=>'u','ứ'=>'u','ừ'=>'u','ử'=>'u','ữ'=>'u','ự'=>'u',
            'ỳ'=>'y','ý'=>'y','ỷ'=>'y','ỹ'=>'y','ỵ'=>'y',
            'đ'=>'d',
            // Uppercase
            'À'=>'a','Á'=>'a','Ả'=>'a','Ã'=>'a','Ạ'=>'a',
            'Ă'=>'a','Ắ'=>'a','Ằ'=>'a','Ẳ'=>'a','Ẵ'=>'a','Ặ'=>'a',
            'Â'=>'a','Ấ'=>'a','Ầ'=>'a','Ẩ'=>'a','Ẫ'=>'a','Ậ'=>'a',
            'È'=>'e','É'=>'e','Ẻ'=>'e','Ẽ'=>'e','Ẹ'=>'e',
            'Ê'=>'e','Ế'=>'e','Ề'=>'e','Ể'=>'e','Ễ'=>'e','Ệ'=>'e',
            'Ì'=>'i','Í'=>'i','Ỉ'=>'i','Ĩ'=>'i','Ị'=>'i',
            'Ò'=>'o','Ó'=>'o','Ỏ'=>'o','Õ'=>'o','Ọ'=>'o',
            'Ô'=>'o','Ố'=>'o','Ồ'=>'o','Ổ'=>'o','Ỗ'=>'o','Ộ'=>'o',
            'Ơ'=>'o','Ớ'=>'o','Ờ'=>'o','Ở'=>'o','Ỡ'=>'o','Ợ'=>'o',
            'Ù'=>'u','Ú'=>'u','Ủ'=>'u','Ũ'=>'u','Ụ'=>'u',
            'Ư'=>'u','Ứ'=>'u','Ừ'=>'u','Ử'=>'u','Ữ'=>'u','Ự'=>'u',
            'Ỳ'=>'y','Ý'=>'y','Ỷ'=>'y','Ỹ'=>'y','Ỵ'=>'y',
            'Đ'=>'d',
        ];

        $text = strtr(mb_strtolower(trim($text)), $map);
        $text = preg_replace('/[^a-z0-9\s-]/', '', $text);
        $text = preg_replace('/[\s-]+/', '-', $text);
        $text = trim($text, '-');

        // Giới hạn độ dài slug
        if (mb_strlen($text) > 80) {
            $text = substr($text, 0, 80);
            $text = rtrim($text, '-');
        }

        // Thêm random suffix nếu rỗng
        if (!$text) {
            $text = 'san-pham-' . Str::random(6);
        }

        return $text;
    }

    private function phpEscape(string $text): string
    {
        // Escape cho chuỗi single-quote PHP
        return addslashes(str_replace(["\n", "\r", "\t"], [' ', '', ' '], $text));
    }
}
