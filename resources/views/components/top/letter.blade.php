@php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
<div class="t-wave t-wave--top" aria-hidden="true"></div>
<section class="t-section t-letter" id="reserve">
  <div class="t-wrap t-narrow">
    <h2 class="t-heading">お会いできるのを、<br>楽しみにしています。</h2>
    <p>どのメニューがいいかわからない方も、まずはLINEで気軽にご相談ください。</p>
    <p class="t-hand t-letter__sign">{{ config('salon.name') }}　{{ $owner['name'] ?? '' }}</p>
    <div class="t-letter__buttons">
      <a class="t-button t-button--primary" href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="home_letter">LINEで相談する</a>
      <a class="t-button" href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="home_letter">Webで予約する</a>
    </div>
    <p class="t-letter__tel">お電話でも承ります　<a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="home_letter">{{ config('salon.tel') }}</a></p>
    <a class="t-link t-letter__more" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-cta-position="home_letter">HotPepperでのご予約・予約方法の一覧</a>
  </div>
</section>
