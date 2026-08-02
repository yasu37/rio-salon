<!-- 予約・お問い合わせサイト -->
<section id="inquiry">
  <div class="container">
    <div class="section_title">
      <h2>予約&amp;お問い合わせ</h2>
      <p>Reserve &amp; Inquiry</p>
    </div>
    <div class="infomation">
      <p>目的に合わせて予約方法をお選びください。</p>
      <div class="list">
        <ul>
          <li><a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="repeat" data-gtm-cta-position="reserve_page">Squareで再予約する</a></li>
          <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="reserve_page">LINEで施術を相談する</a></li>
          <li class="reserve_sub"><a href="{{ config('salon.reservation.hotpepper.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_hotpepper_click" data-gtm-provider="hotpepper" data-gtm-customer-type="new" data-gtm-cta-position="reserve_page">HotPepperで空き時間を見る</a></li>
        </ul>
      </div>
      <p class="date">営業時間</p>
      <p>平日：{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}（{{ config('salon.business_hours.closed_day_label') }}）<br>土日祝：{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}</p>
    </div>
  </div>
</section>
