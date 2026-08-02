<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="美容鍼が初めての方へ。ご予約方法、来店から施術までの流れ、鍼の刺激について、持ち物、お支払い方法などをご案内します。">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/first-visit.css">
  <title>美容鍼が初めての方へ｜施術の流れと予約方法-{{ config('salon.name') }}-</title>
  <link rel="canonical" href="https://rio-salon.com/first-visit">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rio-salon.com/first-visit">
  <meta property="og:title" content="美容鍼が初めての方へ｜施術の流れと予約方法-{{ config('salon.name') }}-">
  <meta property="og:site_name" content="{{ config('salon.name') }}">
  <meta property="og:image" content="https://rio-salon.com/img/logo1.jpg">
  <meta name="twitter:card" content="summary">
  <x-gtm />
  <script src="/js/analytics.js" defer></script>
</head>
<body>
  <x-header></x-header>
  <x-breadcrumb :items="[['name' => '初めての方へ']]" />
  <main>
    <x-first-visit></x-first-visit>
  </main>
  <x-footer></x-footer>
</body>
</html>
