<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublicRoutesTest extends TestCase
{
    /**
     * @return array<string, array{0: string}>
     */
    public static function publicPages(): array
    {
        return [
            'top' => ['/'],
            'about' => ['/about'],
            'first_visit' => ['/first-visit'],
            'news' => ['/news'],
            'question' => ['/question'],
            'reserve' => ['/reserve'],
            'menu1' => ['/menu/menu1'],
            'menu2' => ['/menu/menu2'],
            'menu3' => ['/menu/menu3'],
            'menu4' => ['/menu/menu4'],
            'menu6' => ['/menu/menu6'],
            'menu7' => ['/menu/menu7'],
            'menu8' => ['/menu/menu8'],
            'menu9' => ['/menu/menu9'],
            'menu10' => ['/menu/menu10'],
            'campaign_term' => ['/campaign/term'],
            'campaign_first' => ['/campaign/first'],
            'column1' => ['/column/column1'],
        ];
    }

    /**
     * @dataProvider publicPages
     */
    public function test_public_page_returns_200(string $uri): void
    {
        $this->get($uri)->assertStatus(200);
    }

    public function test_menu5_redirects_permanently_to_menu6(): void
    {
        $this->get('/menu/menu5')->assertRedirect('/menu/menu6');
        $this->get('/menu/menu5')->assertStatus(301);
    }

    public function test_sitemap_route_redirects_permanently_to_static_sitemap(): void
    {
        $this->get('/sitemap')->assertRedirect('/sitemap.xml');
        $this->get('/sitemap')->assertStatus(301);
    }

    /**
     * PHPUnit の HTTP テストクライアントは Laravel のルーティングのみを通り、
     * public/ 直下の静的ファイル配信（Web サーバーが担う部分）は経由しないため、
     * ここではファイルの存在と内容を直接検証する。実際に HTTP 経由で 200 が
     * 返るかどうかは、デプロイ後に手動で確認すること。
     */
    public function test_static_sitemap_exists_and_is_valid_xml(): void
    {
        $path = public_path('sitemap.xml');
        $this->assertFileExists($path);
        $this->assertNotFalse(simplexml_load_file($path), 'sitemap.xml is not valid XML');
    }

    public function test_robots_txt_exists_and_references_sitemap(): void
    {
        $path = public_path('robots.txt');
        $this->assertFileExists($path);
        $this->assertStringContainsString('Sitemap:', file_get_contents($path));
    }

    public function test_unknown_route_returns_404(): void
    {
        $this->get('/no-such-page-xyz')->assertStatus(404);
    }
}
