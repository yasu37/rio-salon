<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/menu/menu.css">
  <link rel="stylesheet" href="../css/components/accordion.css">
  <title>もみほぐしメニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WTVF47M');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
  <x-menu.header></x-menu.header>
  <main>
    <x-menu.menu_list></x-menu.menu_list>
    <x-menu.menu_overview>
      <x-slot name="menu_name">もみほぐし</x-slot>
      <x-slot name="image_src">"../img/course5.jpg"</x-slot>
      <x-slot name="image_alt">"もみほぐしの施術写真"</x-slot>
      <x-slot name="menu_explanation">【もみほぐしについて】</x-slot>
      <x-slot name="menu_description">洋服の上からお身体をもみほぐしていくコース。お客様のご要望や悩みなどお伺いしていきながら施術していきます。<br>
        お着替えのご準備もございますのでお気軽にご来店ください。
      </x-slot>
    </x-menu.menu_overview>
    <section class="menu_course">
      <x-menu.accordion_simple>
        <x-slot name="menu_name">全身もみほぐし 60分</x-slot>
        <x-slot name="menu_concept">【全身の慢性こり改善！】</x-slot>
        <x-slot name="time">60分</x-slot>
        <x-slot name="price">￥6,000</x-slot>
      </x-menu.accordion_simple>
      <x-menu.accordion_simple>
        <x-slot name="menu_name">全身もみほぐし 90分</x-slot>
        <x-slot name="menu_concept">【体をゆっくり休めたい方へ】</x-slot>
        <x-slot name="time">90分</x-slot>
        <x-slot name="price">￥9,000</x-slot>
      </x-menu.accordion_simple>
      <x-menu.accordion_simple>
        <x-slot name="menu_name">全身もみほぐし 120分</x-slot>
        <x-slot name="menu_concept">【ご自身へのご褒美コース】</x-slot>
        <x-slot name="time">120分</x-slot>
        <x-slot name="price">￥12,000</x-slot>
      </x-menu.accordion_simple>
    </section>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>
