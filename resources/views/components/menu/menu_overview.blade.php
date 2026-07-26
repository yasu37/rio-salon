@php
  // 呼び出し側は「../img/xxx.jpg」形式の相対パスを渡す。
  // WebP 版が実在する場合だけ <source> を出し、無ければ従来どおり元画像のみを表示する。
  $imgSrc     = trim((string) $image_src);
  $imgFile    = public_path(ltrim(preg_replace('#^(\.\./|\./)+#', '', $imgSrc), '/'));
  $imgWebpSrc = preg_replace('/\.(jpe?g|png)$/i', '.webp', $imgSrc);
  $hasWebp    = is_file(preg_replace('/\.(jpe?g|png)$/i', '.webp', $imgFile));
  $imgSize    = is_file($imgFile) ? @getimagesize($imgFile) : false;
@endphp
<section class="menu_overview">
  <div class="section_title">
    <h1>{{ $menu_name }}</h1>
  </div>
  <div class="container">
    <div class="menu_overview_left">
      <picture>
        @if ($hasWebp)
        <source srcset="{{ $imgWebpSrc }}" type="image/webp">
        @endif
        <img class="menu_img1" src="{{ $imgSrc }}" alt="{{ $image_alt }}"@if ($imgSize) width="{{ $imgSize[0] }}" height="{{ $imgSize[1] }}"@endif>
      </picture>
    </div>
    <div class="menu_overview_right">
      <div class="text_area">
        <h2>{{ $menu_explanation }}</h2>
        <p>{{ $menu_description }}</p>
      </div>
    </div>
  </div>
</section>
