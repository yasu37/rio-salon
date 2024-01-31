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

  <title>漢方浴メニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <style>
    #menu_list .menu_course .button_menu3 {
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
        <x-slot name="menu_description">60分以上のメニューとセットの場合、1回3,500円<br>※回数券の場合、4回で13,200円</x-slot>
        <x-slot name="treatment"></x-slot>
        <x-slot name="time">40分</x-slot>
        <x-slot name="price">3,800円</x-slot>
      </x-menu.accordion>
    </section>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>
