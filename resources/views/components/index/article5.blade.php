<!--記事5-->
<!-- ~ お問い合わせ情報 ~ -->
<section id="reserved">
  <div class="container">
    <div class="infomation">
      <p class="number"><span>ご予約・ご相談はこちら</span><br><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="home_final_cta">{{ config('salon.tel') }}</a></p>
      <p class="date">平日：{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}（{{ config('salon.business_hours.closed_day_label') }}）<br>土日祝：{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}</p>
    </div>
    <div class="button5">
      <a href="./reserve" data-gtm-event="begin_booking" data-gtm-cta-position="home_final_cta">予約方法を見る</a>
    </div>
  </div>
</section>
