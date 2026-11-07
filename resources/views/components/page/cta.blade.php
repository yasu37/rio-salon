{{-- 下層ページの最後に置く、相談・予約の案内。position は計測用のボタンの場所（menu_page など）。 --}}
@props(['position', 'lead' => 'どのメニューがいいか迷ったら、LINEで気軽にご相談ください。'])
<div class="t-wave t-wave--top" aria-hidden="true"></div>
<section class="t-section t-letter">
  <div class="t-wrap t-narrow">
    <h2 class="t-heading">ご予約・ご相談</h2>
    <p>{{ $lead }}</p>
    <div class="t-letter__buttons">
      <a class="t-button t-button--primary" href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="{{ $position }}">LINEで相談する</a>
      <a class="t-button" href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-cta-position="{{ $position }}">Webで予約する</a>
    </div>
    <p class="t-letter__tel">お電話でも承ります　<a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="{{ $position }}">{{ config('salon.tel') }}</a></p>
    <a class="t-link t-letter__more" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-cta-position="{{ $position }}">HotPepperでのご予約・予約方法の一覧</a>
  </div>
</section>
