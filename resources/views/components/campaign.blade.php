@php
  // menu_overview と同じ方針。WebP 版が実在する場合だけ <source> を出す。
  $imgSrc     = trim((string) $menu_img);
  $imgFile    = public_path(ltrim(preg_replace('#^(\.\./|\./)+#', '', $imgSrc), '/'));
  $imgWebpSrc = preg_replace('/\.(jpe?g|png)$/i', '.webp', $imgSrc);
  $hasWebp    = is_file(preg_replace('/\.(jpe?g|png)$/i', '.webp', $imgFile));
  $imgSize    = is_file($imgFile) ? @getimagesize($imgFile) : false;
@endphp
<div class="design">
    <p class="campaign_name">【 {{ $campaign_name }} 】</p>
    <div class="menu">
        <div class="menu_img">
            <picture>
                @if ($hasWebp)
                <source srcset="{{ $imgWebpSrc }}" type="image/webp">
                @endif
                <img src="{{ $imgSrc }}" alt="{{ $menu_alt }}"@if ($imgSize) width="{{ $imgSize[0] }}" height="{{ $imgSize[1] }}"@endif>
            </picture>
        </div>
        <div class="menu_detail">
            <p class="menu_name">{{ $menu_name }}</p>
            <p class="menu_price">{{ $menu_price }}</p>
        </div>
    </div>
    @isset($menu_description)
    <p class="menu_description">{{ $menu_description }}</p>
    @endisset
    <div class="conditions">
        <div class="conditions_text">
            <p><ご利用条件></p>
            <p>・有効期間 : {{ $conditions_text_term }}</p>
            <p>・期間中、何度でもご利用可能</p>
            <p>・男女共に施術可能</p>
        </div>
        <div class="button5">
            <a href="../../reserve">ご予約はこちら</a>
          </div>
    </div>
</div>

</section>