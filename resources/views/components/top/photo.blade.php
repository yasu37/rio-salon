{{--
  トップページ用の写真。public/img/{name}.webp があれば WebP を優先し、なければ jpg / png を使う。
--}}
@props(['name', 'alt' => '', 'width' => 1200, 'height' => 800, 'eager' => false])
@php
  $webp = file_exists(public_path("img/{$name}.webp"));
  $ext = file_exists(public_path("img/{$name}.jpg")) ? 'jpg' : 'png';
@endphp
<picture>
  @if ($webp)
    <source srcset="{{ asset("img/{$name}.webp") }}" type="image/webp">
  @endif
  <img src="{{ asset("img/{$name}.{$ext}") }}" alt="{{ $alt }}" width="{{ $width }}" height="{{ $height }}"
    @if ($eager) loading="eager" fetchpriority="high" @else loading="lazy" @endif
    {{ $attributes }}>
</picture>
