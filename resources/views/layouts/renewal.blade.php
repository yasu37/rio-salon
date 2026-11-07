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
  {{-- full_title があればそのまま使う（コラムなど、店名を付けない題名のページ用） --}}
  @php($pageTitle = View::hasSection('full_title') ? View::yieldContent('full_title') : View::yieldContent('title') . '｜リオ鍼灸サロン')
  <title>{{ $pageTitle }}</title>
  <link rel="canonical" href="https://rio-salon.com/@yield('canonical')">
  {{-- コラムなどの記事ページは @section('og_type', 'article') を指定する --}}
  <meta property="og:type" content="@yield('og_type', 'website')">
  <meta property="og:url" content="https://rio-salon.com/@yield('canonical')">
  <meta property="og:title" content="{{ $pageTitle }}">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:site_name" content="リオ鍼灸サロン">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="https://rio-salon.com/img/@yield('og_image', 'course1.jpg')">
  <meta name="twitter:card" content="summary_large_image">
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
