<nav class="mobile_cta" aria-label="予約・お問い合わせ">
  <a class="mobile_cta_item" href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="mobile_fixed">電話</a>
  <a class="mobile_cta_item" href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="mobile_fixed">LINE相談</a>
  <div class="mobile_cta_item mobile_cta_reserve">
    <input type="checkbox" id="mobile-reservation-toggle" class="reservation_toggle">
    <label for="mobile-reservation-toggle" class="mobile_cta_summary" data-gtm-event="begin_booking" data-gtm-cta-position="mobile_fixed">予約する</label>
    <div class="mobile_cta_menu">
      <p class="mobile_cta_menu_lead">目的に合わせてお選びください</p>
      <ul>
        <li><a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="repeat" data-gtm-cta-position="mobile_fixed">Squareで再予約する</a></li>
        <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="mobile_fixed">LINEで施術を相談する</a></li>
        <li><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="mobile_fixed">電話で空き状況を確認する</a></li>
        <li class="mobile_cta_menu_sub"><a href="{{ config('salon.reservation.hotpepper.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_hotpepper_click" data-gtm-provider="hotpepper" data-gtm-customer-type="new" data-gtm-cta-position="mobile_fixed">HotPepperで空き時間を見る</a></li>
      </ul>
    </div>
  </div>
</nav>
