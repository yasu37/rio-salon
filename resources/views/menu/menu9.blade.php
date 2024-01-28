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
  <title>マタニティメニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <style>
    #menu_list .menu_course .button_menu9 {
      background: #B2DAD5;
    }
  </style>
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
      <x-slot name="menu_name">マタニティリンパオイル</x-slot>
      <x-slot name="image_src">"../img/course_maternity.jpg"</x-slot>
      <x-slot name="image_alt">"マタニティへのマッサージの施術写真"</x-slot>
      <x-slot name="menu_explanation">【マタニティリンパオイル】</x-slot>
      <x-slot name="menu_description">妊娠5ヶ月(妊娠16～19週)から施術を受けることができます。</x-slot>
    </x-menu.menu_overview>
    <x-menu.accordion_simple>  
      <x-slot name="menu_name">マタニティリンパオイルトリートメント 40分</x-slot>
      <x-slot name="menu_concept"></x-slot>
      <x-slot name="time">40分</x-slot>
      <x-slot name="price">6,000円</x-slot>
    </x-menu.accordion_simple>
    <x-menu.accordion_simple>  
      <x-slot name="menu_name">マタニティリンパオイルトリートメント 60分</x-slot>
      <x-slot name="menu_concept"></x-slot>
      <x-slot name="time">60分</x-slot>
      <x-slot name="price">7,200円</x-slot>
    </x-menu.accordion_simple>

  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>
