{{--
  リニューアル版の共通レイアウト（トップページ以外）。トップページと同じヘッダー・フッター・スマホ下の固定ボタンを使う。
  各ページで @section('title')・@section('description')・@section('canonical') と @section('content') を指定する。
--}}
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@yield('description')">
  <meta name="theme-color" content="#0B7D72">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@700&family=Zen+Maru+Gothic:wght@500;700&family=Klee+One:wght@600&display=swap">
  <link rel="stylesheet" href="{{ asset('css/top.css') }}">
  <link rel="stylesheet" href="{{ asset('css/page.css') }}">
  <title>@yield('title')|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <link rel="canonical" href="https://rio-salon.com/@yield('canonical')">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rio-salon.com/@yield('canonical')">
  <meta property="og:title" content="@yield('title')|リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-">
  <meta property="og:site_name" content="リオ鍼灸サロン">
  <meta property="og:image" content="https://rio-salon.com/img/@yield('og_image', 'course1.jpg')">
  <meta name="twitter:card" content="summary">
  <x-gtm />
  <script src="/js/analytics.js" defer></script>
  @stack('head')
</head>
<body class="t-body">
  <x-top.header />
  @yield('content')
  <x-top.footer />
  <x-top.mobile-bar />
</body>
</html>
