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
  <title>パーソナルストレッチメニュー|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
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
      <x-slot name="menu_name">パーソナルストレッチ</x-slot>
      <x-slot name="image_src">"../img/course15.jpg"</x-slot>
      <x-slot name="image_alt">"パーソナルストレッチの施術写真"</x-slot>
      <x-slot name="menu_explanation">【パーソナルストレッチについて】</x-slot>
      <x-slot name="menu_description">運動不足で衰えて硬くなった筋肉を伸ばし、緩めて整えることで、根本的な姿勢改善から不調を改善。<br>
        お客様一人一人の身体の状態に合わせ、ストレッチで深層筋肉を刺激する事で、身体の運動可動域を正常化し、姿勢矯正や運動不足解消を目指します！<br>
        アスリート向けストレッチでもあるので、スポーツパフォーマンスも上がります。<br>
        まさにprime(プライム)＝極上のストレッチ。</x-slot>
    </x-menu.menu_overview>
    <section class="menu_course">
      <x-menu.accordion_simple>
        <x-slot name="menu_name">プライムストレッチ 60分</x-slot>
        <x-slot name="menu_concept">【深層部の筋肉までアプローチ】</x-slot>
        <x-slot name="time">60分</x-slot>
        <x-slot name="price">￥8,200</x-slot>
      </x-menu.accordion_simple>
      <x-slot name="menu_name">プライムストレッチ 90分</x-slot>
        <x-slot name="menu_concept">【深層部の筋肉までアプローチ】</x-slot>
        <x-slot name="time">90分</x-slot>
        <x-slot name="price">￥12,000</x-slot>
      </x-menu.accordion_simple>
      <x-slot name="menu_name">プライムストレッチ 120分</x-slot>
        <x-slot name="menu_concept">【深層部の筋肉までアプローチ】</x-slot>
        <x-slot name="time">120分</x-slot>
        <x-slot name="price">￥16,500</x-slot>
      </x-menu.accordion_simple>
    </section>
  </main>
  <x-menu.footer></x-menu.footer>
</body>
</html>
