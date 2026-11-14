<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="水戸市米沢町の美容鍼・鍼灸サロン。美容鍼とからだの鍼灸、カッピング、フェイシャルエステ、オイルマッサージを、お悩みに合わせてご提案します。鍼灸師歴20年以上の院長が担当。駐車場4台、火曜定休。">
  <meta name="theme-color" content="#0F6B61">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@500;700&family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Cormorant+Garamond:wght@500&display=swap">
  {{-- ?v= にファイルの更新日時を付け、CSSを更新したときにブラウザが古いCSSを使い続けないようにする --}}
  <link rel="stylesheet" href="{{ asset('css/top.css') }}?v={{ filemtime(public_path('css/top.css')) }}">
  <title>水戸市の美容鍼・鍼灸・カッピング｜RIO鍼灸サロン</title>
  <link rel="canonical" href="https://rio-salon.com/">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rio-salon.com/">
  <meta property="og:title" content="水戸市の美容鍼・鍼灸・カッピング｜RIO鍼灸サロン">
  <meta property="og:description" content="水戸市米沢町の美容鍼・鍼灸サロン。美容鍼とからだの鍼灸、カッピング、フェイシャルエステ、オイルマッサージを、お悩みに合わせてご提案します。鍼灸師歴20年以上の院長が担当。駐車場4台、火曜定休。">
  <meta property="og:site_name" content="RIO鍼灸サロン">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="https://rio-salon.com/img/course1.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <x-gtm />
  <script src="/js/analytics.js" defer></script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HealthAndBeautyBusiness",
    "name": "{{ config('salon.name') }}",
    "alternateName": "{{ config('salon.name_en') }}",
    "@id": "https://rio-salon.com/#salon",
    "image": "https://rio-salon.com/img/logo1.jpg",
    "logo": "https://rio-salon.com/img/logo1.jpg",
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
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": {{ config('salon.geo.latitude') }},
      "longitude": {{ config('salon.geo.longitude') }}
    },
    "hasMap": {!! json_encode(config('salon.google_map_url') ?: 'https://www.google.com/maps/search/?api=1&query=' . urlencode(config('salon.address.full') . ' ' . config('salon.name')), JSON_UNESCAPED_SLASHES) !!},
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
      "{{ config('salon.sns.line') }}",
      "{{ config('salon.reservation.hotpepper.url') }}"
    ]
  }
  </script>
</head>
<body class="t-body">
  <x-top.header />
  <main>
    <x-top.hero />
    <x-top.values />
    <x-top.greeting />
    <x-top.care />
    <x-top.menu />
    <x-top.first-visit />
    <x-top.shop />
    <x-top.letter />
  </main>
  <x-top.footer />
  <x-top.mobile-bar />
</body>
</html>
