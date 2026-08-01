{{--
  エラーページ共通レイアウト。

  エラーページは任意の URL 階層（/menu/xxx など）で表示されるため、
  サイト本体が使っている相対パス（./css/... ../img/...）は使えない。
  すべて絶対パスとし、CSS もインラインにして外部ファイルへの依存をなくしている。
  例外の内容・スタックトレース・フレームワーク情報は一切出力しない。
--}}
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>@yield('title') | リオ鍼灸サロン-茨城県水戸市の美容鍼＆エステ＆マッサージ-</title>
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      padding: 4rem 1.5rem;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      font-family: "ヒラギノ角ゴ ProN W3", "Hiragino Kaku Gothic ProN", "Yu Gothic",
                   メイリオ, Meiryo, sans-serif;
      color: #333333;
      background: #ffffff;
      line-height: 1.8;
      text-align: center;
    }
    .logo { margin-bottom: 3rem; }
    .logo img { width: 200px; max-width: 60vw; height: auto; }
    .code {
      margin: 0 0 1rem;
      font-size: 4rem;
      font-weight: bold;
      letter-spacing: 0.1em;
      color: #B2DAD5;
    }
    h1 {
      margin: 0 0 1.5rem;
      font-size: 1.4rem;
      font-weight: bold;
      color: #008475;
    }
    .message {
      margin: 0 auto 3rem;
      max-width: 34rem;
      font-size: 0.95rem;
    }
    .links {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
      padding: 0;
      margin: 0 0 3rem;
      list-style: none;
    }
    .links a {
      display: inline-block;
      min-width: 14rem;
      padding: 0.9rem 1.5rem;
      border: 1px solid #008475;
      border-radius: 4px;
      color: #008475;
      background: #ffffff;
      font-size: 0.95rem;
      text-decoration: none;
    }
    .links a.primary { color: #ffffff; background: #008475; }
    .contact { font-size: 0.9rem; color: #666; }
    .contact a { color: #666; text-decoration: none; }
    @media screen and (max-width: 480px) {
      body { padding: 3rem 1.2rem; }
      .code { font-size: 3rem; }
      h1 { font-size: 1.2rem; }
      .links a { min-width: 100%; }
    }
  </style>
</head>
<body>
  <div class="logo">
    <a href="/"><img src="/img/logo1.jpg" alt="水戸市の美容鍼灸-{{ config('salon.name') }}（{{ config('salon.name_en') }}）-" width="664" height="181"></a>
  </div>
  <p class="code">@yield('code')</p>
  <h1>@yield('heading')</h1>
  <div class="message">@yield('message')</div>
  <ul class="links">
    <li><a class="primary" href="/">トップページへ戻る</a></li>
    <li><a href="/reserve">予約方法を見る</a></li>
    <li><a href="/menu/menu1">メニュー&amp;料金</a></li>
  </ul>
  <p class="contact">
    ご予約・ご相談：<a href="tel:{{ config('salon.tel_href') }}">{{ config('salon.tel') }}</a><br>
    平日 {{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}（{{ config('salon.business_hours.closed_day_label') }}）／土日祝 {{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}
  </p>
</body>
</html>
