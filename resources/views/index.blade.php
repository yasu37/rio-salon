<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="水戸市米沢町のリオ鍼灸サロン。美容鍼、身体の鍼、フェイシャル、リンパケアを、お悩みやその日の状態に合わせてご提案します。現金・キャッシュレス決済対応。">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/index/article1.css">
  <link rel="stylesheet" href="css/index/article2.css">
  <link rel="stylesheet" href="css/index/article5.css">
  <link rel="stylesheet" href="css/index/article7.css">
  <link rel="stylesheet" href="css/index/renewal.css">
  <title>リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <link rel="canonical" href="https://rio-salon.com/">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rio-salon.com/">
  <meta property="og:title" content="リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-">
  <meta property="og:site_name" content="リオ鍼灸サロン">
  <meta property="og:image" content="https://rio-salon.com/img/logo1.jpg">
  <meta name="twitter:card" content="summary">
  <x-gtm />
  <script src="/js/analytics.js" defer></script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HealthAndBeautyBusiness",
    "name": "{{ config('salon.name') }}",
    "alternateName": "{{ config('salon.name_en') }}",
    "image": "https://rio-salon.com/img/logo1.jpg",
    "url": "https://rio-salon.com/",
    "telephone": "{{ config('salon.tel_e164') }}",
    "priceRange": "¥¥",
    "paymentAccepted": "現金, クレジットカード, 電子マネー",
    "address": {
      "@type": "PostalAddress",
      "postalCode": "{{ config('salon.address.postal_code') }}",
      "streetAddress": "{{ config('salon.address.street') }}",
      "addressLocality": "{{ config('salon.address.city') }}",
      "addressRegion": "{{ config('salon.address.prefecture') }}",
      "addressCountry": "JP"
    },
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "{{ config('salon.business_hours.open') }}",
        "closes": "{{ config('salon.business_hours.close') }}"
      }
    ],
    "sameAs": [
      "{{ config('salon.sns.instagram') }}",
      "{{ config('salon.sns.line') }}"
    ]
  }
  </script>
</head>
<body>
  <x-header></x-header>
  <main>
    <x-index.article1></x-index.article1>
    <x-index.trust></x-index.trust>
    <x-index.concerns></x-index.concerns>
    <x-index.campaign-teaser></x-index.campaign-teaser>
    <x-index.reasons></x-index.reasons>
    <x-index.first-visit-flow></x-index.first-visit-flow>
    <x-index.article2></x-index.article2>
    <x-index.reviews></x-index.reviews>
    <x-index.gallery></x-index.gallery>
    <x-index.access></x-index.access>
    <x-index.article5></x-index.article5>
  </main>
  <x-footer></x-footer>
</body>
</html>
