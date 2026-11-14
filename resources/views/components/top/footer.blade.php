@php($hours = config('salon.business_hours'))
<footer class="t-footer">
  <div class="t-wrap t-footer__inner">
    <div class="t-footer__brand">
      <x-top.photo name="logo-rio-footer" :alt="config('salon.name')" width="813" height="320" />
    </div>

    <div class="t-footer__hours">
      @if ($hours['last_reception'])
        <p>受付時間　{{ $hours['open'] }}〜{{ $hours['last_reception'] }}</p>
      @endif
      <p>営業時間　{{ $hours['open'] }}〜{{ $hours['close'] }}（{{ $hours['closed_day_label'] }}）</p>
    </div>

    <nav aria-label="フッターメニュー">
      <ul class="t-footer__nav">
        <li><a href="{{ url('/') }}">トップ</a></li>
        <li><a href="{{ url('about') }}">リオについて</a></li>
        <li><a href="{{ url('first-visit') }}">はじめての方へ</a></li>
        <li><a href="{{ url('menu/menu1') }}">メニューと料金</a></li>
        <li><a href="{{ url('campaign/term') }}">キャンペーン</a></li>
        <li><a href="{{ url('question') }}">よくある質問</a></li>
        <li><a href="{{ url('news') }}">お知らせ</a></li>
        <li><a href="{{ url('reserve') }}">ご予約</a></li>
      </ul>
    </nav>

    <ul class="t-footer__sns">
      <li><a href="{{ config('salon.sns.instagram') }}" target="_blank" rel="noopener noreferrer">Instagram</a></li>
      <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="footer_sns">LINE</a></li>
    </ul>

    <div class="t-footer__shop">
      <p class="t-footer__name">{{ config('salon.name') }}</p>
      <p>{{ config('salon.address.full') }}</p>
      <p><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="footer">{{ config('salon.tel') }}</a></p>
    </div>
  </div>
  <p class="t-footer__copy">&copy;2022-{{ date('Y') }} {{ config('salon.name') }}</p>
</footer>
