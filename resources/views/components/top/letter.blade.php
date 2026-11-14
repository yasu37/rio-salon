{{-- ご予約・ご相談。予約の入口は「Web予約が主役、LINEが相談役」にそろえる。 --}}
@php($hours = config('salon.business_hours'))
<section class="t-section t-reserve" id="reserve">
  <div class="t-wrap t-reserve__inner">
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Reservation</p>
      <h2 class="t-heading">ご予約・ご相談</h2>
    </div>
    <p>ご予約はWebから。メニュー選びに迷われたら、LINEでお気軽にご相談ください。</p>
    <div class="t-reserve__buttons">
      <a class="t-button t-button--primary" href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="home_letter">Webで予約する</a>
      <a class="t-button" href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="home_letter">LINEで相談する</a>
    </div>
    <div class="t-reserve__tel">
      <span>お電話でも承ります（{{ $hours['open'] }}〜{{ $hours['close'] }}・{{ $hours['closed_day_label'] }}）</span>
      <a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="home_letter">{{ config('salon.tel') }}</a>
    </div>
    <a class="t-link" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-cta-position="home_letter">HotPepper Beautyからのご予約</a>
  </div>
</section>
