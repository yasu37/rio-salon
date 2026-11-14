@php
  $hours = config('salon.business_hours');
  $mapUrl = config('salon.google_map_url') ?: 'https://www.google.com/maps/search/?api=1&query=' . urlencode(config('salon.address.full') . ' ' . config('salon.name'));
  // 写真は「リオについて」の「サロンの様子」と同じものを使う（受付・待合、個室の並ぶ通路）
  $photos = [
    ['name' => 'salon1', 'alt' => '観葉植物と木の棚がある受付と待合スペース', 'caption' => '受付・待合', 'width' => 1280, 'height' => 960],
    ['name' => 'salon2', 'alt' => 'カーテンで仕切られた個室が並ぶ通路', 'caption' => '個室の並ぶ通路', 'width' => 1280, 'height' => 960],
    ['name' => 'location2', 'alt' => '施術のお部屋', 'caption' => '施術のお部屋', 'width' => 640, 'height' => 480],
    ['name' => 'location6', 'alt' => 'お店の外観と駐車場', 'caption' => '外観・駐車場', 'width' => 1280, 'height' => 960],
  ];
  $features = ['ベッド' . config('salon.bed_count') . '台の小さなサロン', '個室あり', '駐車場' . config('salon.parking_spaces') . '台', 'お飲み物あり', '当日予約も空きがあれば', '男性の方もご利用いただけます'];
@endphp
<section class="t-section t-shop t-bg-mint" id="access" data-gtm-view="view_access">
  <div class="t-wrap">
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Salon &amp; Access</p>
      <h2 class="t-heading">お店のこと・アクセス</h2>
    </div>
    <div class="t-shop__inner">
      <ul class="t-shop__photos">
        @foreach ($photos as $photo)
          <li>
            <figure>
              <div class="t-shop__photo">
                <x-top.photo :name="$photo['name']" :alt="$photo['alt']" :width="$photo['width']" :height="$photo['height']" />
              </div>
              <figcaption>{{ $photo['caption'] }}</figcaption>
            </figure>
          </li>
        @endforeach
      </ul>
      <div class="t-shop__info">
        <ul class="t-chips">
          @foreach ($features as $feature)
            <li>{{ $feature }}</li>
          @endforeach
        </ul>
        <dl class="t-info">
          <dt>住所</dt><dd>{{ config('salon.address.full') }}</dd>
          <dt>営業時間</dt><dd>{{ $hours['open'] }}〜{{ $hours['close'] }}@if ($hours['last_reception'])（最終受付 {{ $hours['last_reception'] }}）@endif</dd>
          <dt>定休日</dt><dd>{{ $hours['closed_day'] }}</dd>
          <dt>電話</dt><dd><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="home_access">{{ config('salon.tel') }}</a></dd>
          <dt>お支払い</dt><dd>現金、クレジットカード、{{ implode('・', array_slice(config('salon.payment.e_money'), 0, 2)) }}などの電子マネー</dd>
          <dt>アクセス</dt><dd>県庁から車で約5分</dd>
        </dl>
        <a class="t-button" href="{{ $mapUrl }}" target="_blank" rel="noopener noreferrer" data-gtm-event="click_google_map" data-gtm-cta-position="home_access">Googleマップで見る</a>
        <a class="t-link t-shop__reviews" href="{{ config('salon.reservation.hotpepper.url') }}review/" target="_blank" rel="noopener noreferrer" data-gtm-event="hotpepper_reviews_click" data-gtm-cta-position="home_access">HotPepper Beautyの口コミを見る</a>
      </div>
    </div>
  </div>
</section>
