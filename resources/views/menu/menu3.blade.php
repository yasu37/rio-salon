<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="水戸市のリオ鍼灸サロンの黄土漢方浴メニューをご紹介します。">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/menu/menu.css">
  <link rel="stylesheet" href="../css/components/accordion.css">

  <title>漢方浴メニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <link rel="canonical" href="https://rio-salon.com/menu/menu3">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rio-salon.com/menu/menu3">
  <meta property="og:title" content="漢方浴メニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-">
  <meta property="og:site_name" content="リオ鍼灸サロン">
  <meta property="og:image" content="https://rio-salon.com/img/logo1.jpg">
  <meta name="twitter:card" content="summary">
  <style>
    #menu_list .menu_course .button_menu3 {
      background: #B2DAD5;
    }
  </style>
  <x-gtm />
  <script src="/js/analytics.js" defer></script>
</head>
<body>
  <x-menu.header></x-menu.header>
  <x-breadcrumb :items="[['name' => 'メニュー&料金', 'url' => '/menu/menu1'], ['name' => '黄土漢方浴']]" />
  <main data-gtm-view="view_menu" data-gtm-menu-name="黄土漢方浴">
    <x-menu.menu_list></x-menu.menu_list>
    <x-menu.menu_overview>
      <x-slot name="menu_name">黄土漢方浴</x-slot>
      <x-slot name="image_src">../img/course19.jpg</x-slot>
      <x-slot name="image_alt">漢方浴の施術写真</x-slot>
      <x-slot name="menu_explanation">【黄土漢方浴とは？】</x-slot>
      <x-slot name="menu_description">20～30分くらい座っているだけでじっとりと汗が噴き出します。内臓器を十分に温めることによって、手足などの末端まで血液を循環させ、ぽかぽか芯から温まるのが特長です。簡単で気軽に、また健康的なエステとしてお役立ていただけることができます。</x-slot>
    </x-menu.menu_overview>
    <!-- 漢方浴のメニュー -->
    <section class="menu_course">
      <x-menu.accordion>
        <x-slot name="menu_name">漢方浴 40分</x-slot>
        <x-slot name="menu_concept">【体の芯から温まりたい方におすすめ！】</x-slot>
        <x-slot name="menu_description">60分以上のメニューとセットの場合、1回3,500円</x-slot>
        <x-slot name="treatment"></x-slot>
        <x-slot name="time">40分</x-slot>
        <x-slot name="price">4,000円（税込）</x-slot>
      </x-menu.accordion>
    </section>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>
