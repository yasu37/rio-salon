@php
  $hours = config('salon.business_hours');
  $mapUrl = config('salon.google_map_url') ?: 'https://www.google.com/maps/search/?api=1&query=' . urlencode(config('salon.address.full') . ' ' . config('salon.name'));
  $features = ['ベッド' . config('salon.bed_count') . '台の小さなサロン', '個室あり', '駐車場' . config('salon.parking_spaces') . '台', 'お飲み物あり', '当日予約も空きがあれば', '男性の方もご利用いただけます'];
@endphp
<section class="t-section t-shop" id="access" data-gtm-view="view_access">
  <div class="t-wrap">
    <h2 class="t-heading">お店のこと・アクセス</h2>
    <div class="t-shop__inner">
      <div class="t-shop__photos">
        <div class="t-shop__photo">
          <x-top.photo name="location2" alt="施術のお部屋" width="640" height="480" />
        </div>
        <div class="t-shop__photo">
          <x-top.photo name="location6" alt="お店の外観と駐車場" width="1280" height="960" />
        </div>
      </div>
      <div class="t-shop__info">
        <ul class="t-chips">
          @foreach ($features as $feature)
            <li>{{ $feature }}</li>
          @endforeach
        </ul>
        <a class="t-map" href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" data-gtm-event="click_google_map" data-gtm-cta-position="home_access">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 21s-7-6.2-7-11.5A7 7 0 0 1 19 9.5C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/></svg>
          <span>Googleマップで見る<small>県庁から車で約5分</small></span>
        </a>
        <dl class="t-info">
          <dt>住所</dt><dd>{{ config('salon.address.full') }}</dd>
          <dt>営業時間</dt><dd>{{ $hours['open'] }}〜{{ $hours['close'] }}（@if ($hours['last_reception'])最終受付 {{ $hours['last_reception'] }}／@endif{{ $hours['closed_day'] }}お休み）</dd>
          <dt>電話</dt><dd><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="home_access">{{ config('salon.tel') }}</a></dd>
          <dt>お支払い</dt><dd>現金、クレジットカード、{{ implode('・', array_slice(config('salon.payment.e_money'), 0, 2)) }}などの電子マネー</dd>
        </dl>
      </div>
    </div>
  </div>
</section>
