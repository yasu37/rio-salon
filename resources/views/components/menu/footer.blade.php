<footer>
  <div class="container">
    <div>
      <p class="number"><span>ご予約・ご相談</span><br><span class="number_color"><a href="tel:{{ config('salon.tel_href') }}">{{ config('salon.tel') }}</a></span></p>
      <p>平日：{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}<span>({{ config('salon.business_hours.closed_day_label') }})</span><br>土日祝：{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}</p>
    </div>
    <div class="list">
      <ul class="sns">
        <li><a href="{{ config('salon.sns.instagram') }}" target="_blank" rel="noopener noreferrer"><picture><source srcset="../img/instagram2.webp" type="image/webp"><img src="../img/instagram2.png" alt="{{ config('salon.name') }}の公式Instagram" width="73" height="73" loading="lazy"></picture></a></li>
        <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer"><picture><source srcset="../img/line2.webp" type="image/webp"><img src="../img/line2.png" alt="{{ config('salon.name') }}の公式LINE" width="72" height="73" loading="lazy"></picture></a></li>
      </ul>
    </div>
  </div>
  <p class="copyright">&copy;2022-{{ date('Y') }}&nbsp;{{ config('salon.name') }}</p>
  <x-mobile-cta />
</footer>
