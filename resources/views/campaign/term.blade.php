<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/campaign.css">
  <title>ご予約はこちら|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
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
          <li class="button_term"><a href="./term">期間限定クーポン</a></li>
          <li class="button_first"><a href="./first">初回限定クーポン</a></li>
        </ul>
      </div>
    </div>
  </section>
  <x-campaign>
    <x-slot name="campaign_name">エイジングケアCampaign</x-slot>
    <x-slot name="menu_name">美容鍼灸＋全身オイルリンパトリートメント</x-slot>
    <x-slot name="menu_price">120分&nbsp;18200円→17500円</x-slot>
    <x-slot name="conditions_text_term">2月1日〜3月31日迄</x-slot>
  </x-campaign>
  <x-campaign>
    <x-slot name="campaign_name">エイジングケアCampaign</x-slot>
    <x-slot name="menu_name">美容鍼灸美肌再生コース（顔＋全身）</x-slot>
    <x-slot name="menu_price">120分&nbsp;18500円→17000円</x-slot>
    <x-slot name="conditions_text_term">2月1日〜3月31日迄</x-slot>
  </x-campaign>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>