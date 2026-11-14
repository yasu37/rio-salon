{{-- 下層ページの最後に置く「ご予約・ご相談」。トップページ（components/top/letter.blade.php）と同じ作りで、Web予約が主役、LINEが相談役。
     position は計測用のボタンの場所（menu_page など）。 --}}
@props(['position', 'lead' => 'ご予約はWebから。メニュー選びに迷われたら、LINEでお気軽にご相談ください。'])
@php($hours = config('salon.business_hours'))
<section class="t-section t-reserve">
  <div class="t-wrap t-reserve__inner">
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Reservation</p>
      <h2 class="t-heading">ご予約・ご相談</h2>
    </div>
    <p>{{ $lead }}</p>
    <div class="t-reserve__buttons">
      <a class="t-button t-button--primary" href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-cta-position="{{ $position }}">Webで予約する</a>
      <a class="t-button" href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="{{ $position }}">LINEで相談する</a>
    </div>
    <div class="t-reserve__tel">
      <span>お電話でも承ります（{{ $hours['open'] }}〜{{ $hours['close'] }}・{{ $hours['closed_day_label'] }}）</span>
      <a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="{{ $position }}">{{ config('salon.tel') }}</a>
    </div>
    <a class="t-link" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-cta-position="{{ $position }}">HotPepper Beautyからのご予約</a>
  </div>
</section>
