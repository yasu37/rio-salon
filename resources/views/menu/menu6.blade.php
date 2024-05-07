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
  <title>オイルマッサージ＆ホットストーンボディオイルメニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <style>
    #menu_list .menu_course .button_menu6 {
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
      <x-slot name="menu_name">オイルトリートメント</x-slot>
      <x-slot name="image_src">../img/course8.jpg</x-slot>
      <x-slot name="image_alt">オイルマッサージの施術写真</x-slot>
      <x-slot name="menu_explanation">【リンパオイルトリートメント】</x-slot>
      <x-slot name="menu_description">オイルで全身を流していきます。全身のリンパの流れや血行が良くなり、血行促進はもちろん、むくみの解消や疲労の回復の効果も期待できます。</x-slot>
    </x-menu.menu_overview>
    <section class="menu_course">
      <x-menu.accordion_simple>
        <x-slot name="menu_name">全身リンパオイルマッサージ 60分</x-slot>
        <x-slot name="menu_concept">【全身の疲れ・むくみ改善】</x-slot>
        <x-slot name="time">60分</x-slot>
        <x-slot name="price">￥7200円／初回 6700円(税込)</x-slot>
      </x-menu.accordion_simple>
      <x-menu.accordion_simple>
        <x-slot name="menu_name">全身リンパオイルマッサージ 90分</x-slot>
        <x-slot name="menu_concept">【デトックス術で全身の老廃物を排出】</x-slot>
        <x-slot name="time">90分</x-slot>
        <x-slot name="price">￥10500円／初回 10000円(税込)</x-slot>
      </x-menu.accordion_simple>
      <x-menu.accordion_simple>
        <x-slot name="menu_name">全身リンパオイルマッサージ 120分</x-slot>
        <x-slot name="menu_concept">【極上×デトックスで新陳代謝UP】</x-slot>
        <x-slot name="time">120分</x-slot>
        <x-slot name="price">￥13800円／初回 13300円(税込)</x-slot>
      </x-menu.accordion_simple>
      <x-menu.accordion_simple>
        <x-slot name="menu_name">フットリンパオイルマッサージ 45分</x-slot>
        <x-slot name="menu_concept">【足のむくみ・ほっそり美脚へ】</x-slot>
        <x-slot name="time">45分</x-slot>
        <x-slot name="price">￥6000円／初回 5500円(税込)</x-slot>
      </x-menu.accordion_simple>
    </section>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>
