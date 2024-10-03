<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/campaign.css">
  <link rel="stylesheet" href="../css/campaign_first.css">
  <title>初回限定クーポンページ|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
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
  <section id="campaign">
    <div class="container">
      <div class="section_title">
        <h2>CAMPAIGN</h2>
        <p>キャンペーン</p>
      </div>
      <div class="list">
        <ul>
            <li><a href="./term" class="button_term">期間限定クーポン</a></li>
            <li><a href="./first" class="button_first">初回限定クーポン</a></li>
        </ul>
      </div>
    </div>
  </section>
  <x-campaign>
    <x-slot name="campaign_name">美容鍼灸施術が初めての方限定</x-slot>
    <x-slot name="menu_img">../img/course1.jpg</x-slot>
    <x-slot name="menu_alt">美容鍼灸の施術写真</x-slot>
    <x-slot name="menu_name">美容鍼灸</x-slot>
    <x-slot name="menu_price">70分&nbsp;11,000円→10,500円<br>90分&nbsp;14,300円→13,800円</x-slot>
    <x-slot name="conditions_text_term">美容鍼灸の施術が初めての方限定</x-slot>
  </x-campaign>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>