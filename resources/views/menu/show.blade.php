{{-- メニューページ（/menu/menu1 など）。内容はすべて config/menus.php から読み込む。 --}}
@extends('layouts.renewal')
@php
  $pages = config('menus.pages');
  $page = $pages[$slug];
  $yen = fn ($n) => number_format($n) . '円';
  $areas = ['face' => 'お顔', 'face_neck' => 'お顔＋首・肩', 'face_body' => 'お顔＋からだ', 'body' => 'からだ', 'hand' => '手', 'scalp' => '頭皮', 'legs' => '足', 'belly' => 'お腹'];
@endphp
@section('title', $page['title'])
@section('description', $page['description'])
@section('canonical', 'menu/' . $slug)
@section('og_image', $page['groups'][0]['photo'] . '.jpg')

@section('content')
<x-breadcrumb :items="[['name' => 'メニューと料金', 'url' => '/menu/menu1'], ['name' => $page['nav']]]" />
<main data-gtm-view="view_menu" data-gtm-menu-name="{{ $page['nav'] }}">
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow">メニューと料金</p>
      <h1 class="p-head__title">{{ $page['nav'] }}</h1>
      <nav class="p-tabs" aria-label="メニューの種類">
        <ul>
          @foreach ($pages as $key => $item)
            <li><a href="{{ url('menu/' . $key) }}" @if ($key === $slug) aria-current="page" @endif>{{ $item['nav'] }}</a></li>
          @endforeach
        </ul>
      </nav>
    </div>
  </section>

  @foreach ($page['groups'] as $group)
    <section class="t-section p-group">
      <div class="t-wrap">
        <div class="p-group__intro">
          <div class="p-group__photo">
            <x-top.photo :name="$group['photo']" :alt="$group['alt']" :eager="$loop->first" />
          </div>
          <div class="p-group__text">
            {{-- ページ名と同じ名前のまとまりは、見出しが重ならないよう「美容鍼灸とは？」などの説明見出しを h2 にする --}}
            @if ($group['name'] === $page['nav'] && $group['heading'])
              <h2 class="t-heading">{{ $group['heading'] }}</h2>
            @else
              <h2 class="t-heading">{{ $group['name'] }}</h2>
              @if ($group['heading'] && $group['heading'] !== $group['name'])
                <p class="p-group__label">{{ $group['heading'] }}</p>
              @endif
            @endif
            @if ($group['text'])
              <p>{!! nl2br(e($group['text'])) !!}</p>
            @endif
            @if ($group['points'])
              <ul class="p-points">
                @foreach ($group['points'] as $point)
                  <li>{{ $point }}</li>
                @endforeach
              </ul>
            @endif
            @foreach ($group['notes'] as $note)
              <p class="t-small">※{{ $note }}</p>
            @endforeach
          </div>
        </div>

        <ul class="p-items">
          @foreach ($group['items'] as $item)
            <li class="p-item">
              <div class="p-item__head">
                @if (!empty($item['area']))
                  <span class="p-area p-area--{{ $item['area'] }}">{{ $areas[$item['area']] }}</span>
                @endif
                <h3 class="p-item__name u-phrase">{!! \App\Support\Text::wbr($item['name']) !!}</h3>
                @if ($item['concept'] && empty($item['for']))
                  <p class="p-item__concept">{{ $item['concept'] }}</p>
                @endif
              </div>
              <div class="p-item__price">
                <span class="p-item__time">{{ $item['time'] }}</span>
                <span class="p-item__yen">{{ $yen($item['price']) }}</span>
                @if ($item['first_price'])
                  <span class="p-item__first">はじめての方 <strong>{{ $yen($item['first_price']) }}</strong></span>
                @endif
              </div>
              @if (!empty($item['for']))
                {{-- 「こんな方に」と施術の内容を先に見せ、説明文と施術の流れは「詳しく見る」の中に入れる --}}
                <p class="p-item__for"><span>こんな方に</span>{{ $item['for'] }}</p>
                @if (!empty($item['tags']))
                  <ul class="p-item__tags" aria-label="施術の内容">
                    @foreach ($item['tags'] as $tag)
                      <li>{{ $tag }}</li>
                    @endforeach
                  </ul>
                @endif
                @if ($item['text'] || $item['flow'])
                  <details class="p-item__flow p-item__more">
                    <summary>詳しく見る</summary>
                    <div class="p-more">
                      @if ($item['text'])
                        <div class="p-more__block">
                          <p class="p-more__title">{{ str_contains($item['text'], '回目') ? 'プランの内容' : 'このメニューについて' }}</p>
                          <x-page.rich-text :text="$item['text']" />
                        </div>
                      @endif
                      @if ($item['flow'])
                        <div class="p-more__block p-more__block--flow">
                          <p class="p-more__title">施術の流れ</p>
                          <x-page.steps :text="$item['flow']" />
                        </div>
                      @endif
                    </div>
                  </details>
                @endif
              @else
                @if ($item['text'])
                  <p class="p-item__text">{!! nl2br(e($item['text'])) !!}</p>
                @endif
                @if ($item['flow'])
                  <details class="p-item__flow">
                    <summary>施術の流れ</summary>
                    <p>{!! nl2br(e($item['flow'])) !!}</p>
                  </details>
                @endif
              @endif
              @foreach ($item['notes'] as $note)
                <p class="p-item__note">{{ $note }}</p>
              @endforeach
              <a class="p-item__reserve" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-menu-name="{{ $item['name'] }}" data-gtm-cta-position="menu_page">このメニューを予約する</a>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  @endforeach

  @if (!empty($page['gallery']))
    <section class="t-section p-gallery-section">
      <div class="t-wrap">
        <ul class="p-gallery">
          @foreach ($page['gallery'] as $image)
            <li><x-top.photo :name="$image" :alt="$page['nav'] . 'のご案内'" width="640" height="640" /></li>
          @endforeach
        </ul>
      </div>
    </section>
  @endif

  @if ($page['show_options'] ?? true)
    <section class="t-section t-bg-mint p-options">
      <div class="t-wrap">
        <h2 class="t-heading">組み合わせできるオプション</h2>
        <p>ほかのメニューに追加できます。オプションだけのご利用はできません。</p>
        <ul class="p-options__list">
          @foreach (config('menus.options') as $option)
            <li>
              <div class="p-options__row">
                <span class="p-options__name u-phrase">{!! \App\Support\Text::wbr($option['name']) !!}</span>
                <span class="p-options__price">{{ $option['time'] }}　＋{{ $yen($option['price']) }}</span>
              </div>
              <p>{{ $option['text'] }}</p>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  @endif

  <section class="t-section p-notice">
    <div class="t-wrap">
      <p class="t-small">料金はすべて税込です。「はじめての方」の料金は、初回のご来店時に適用されます。<br>期間限定のお得なメニューは<a href="{{ url('campaign/term') }}">キャンペーンのページ</a>をご覧ください。</p>
    </div>
  </section>
</main>
<x-page.cta position="menu_page" />
@endsection
