{{-- キャンペーンページ。内容はすべて config/campaign.php から作る。 --}}
@extends('layouts.renewal')
@php
  $yen = fn ($n) => number_format($n) . '円';
  // 'show' => false のキャンペーン（終了したもの）は表示しない
  $groups = collect(config('campaign.groups'))->filter(fn ($group) => $group['show'] ?? true);
  $firstItems = collect(config('campaign.first_items'));
@endphp
@section('title', 'キャンペーン')
@section('full_title', 'キャンペーン・はじめての方の料金｜水戸市のリオ鍼灸サロン')
@section('description', '水戸市米沢町のリオ鍼灸サロンのキャンペーン。美容鍼、フェイシャルエステ、カッピング、オイルマッサージの期間限定メニューと、はじめての方の料金をご案内します。')
@section('canonical', 'campaign/term')
@section('og_image', 'campaign/winter-01.jpg')

@section('content')
<x-breadcrumb :items="[['name' => 'キャンペーン']]" />
<main>
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow">キャンペーン</p>
      <h1 class="p-head__title">期間限定のメニュー</h1>
      <nav class="p-tabs" aria-label="キャンペーンの種類">
        <ul>
          @foreach ($groups as $group)
            <li><a href="#{{ $group['id'] }}">{{ $group['title'] }}</a></li>
          @endforeach
          @if ($firstItems->isNotEmpty())
            <li><a href="#first">はじめての方</a></li>
          @endif
        </ul>
      </nav>
    </div>
  </section>

  @foreach ($groups as $group)
    <section class="t-section p-campaign" id="{{ $group['id'] }}">
      <div class="t-wrap">
        <h2 class="t-heading u-phrase">{!! \App\Support\Text::wbr($group['title']) !!}</h2>
        <dl class="p-campaign__meta">
          <div><dt>対象</dt><dd>{{ $group['target'] }}</dd></div>
          <div><dt>期間</dt><dd>{{ $group['period'] ?? '期間限定' }}</dd></div>
        </dl>
        @if ($group['conditions'])
          <p class="t-small">{{ implode('。', $group['conditions']) }}。</p>
        @endif
        <ul class="p-items">
          @foreach ($group['items'] as $item)
            <li class="p-item p-item--photo">
              <div class="p-item__photo p-item__photo--square"><x-top.photo :name="$item['photo']" :alt="$item['name'] . 'の案内画像'" width="800" height="800" /></div>
              <h3 class="p-item__name u-phrase">{!! \App\Support\Text::wbr($item['name']) !!}</h3>
              <div class="p-item__price">
                @isset($item['time'])
                  <span class="p-item__time">{{ $item['time'] }}</span>
                @endisset
                @if ($item['regular'])
                  <s class="p-item__regular">{{ $yen($item['regular']) }}</s><span class="p-item__arrow" aria-hidden="true">→</span>
                @endif
                <span class="p-item__yen">{{ $yen($item['price']) }}</span>
              </div>
              <p class="p-item__text">{{ $item['text'] }}</p>
              <a class="p-item__reserve" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-menu-name="{{ $item['name'] }}" data-gtm-cta-position="campaign_page">このメニューを予約する</a>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  @endforeach

  @if ($firstItems->isNotEmpty())
    <section class="t-section t-bg-mint p-campaign" id="first">
      <div class="t-wrap">
        <h2 class="t-heading">はじめての方の料金</h2>
        <p>はじめてご来店の方は、次のメニューをお得にお試しいただけます。</p>
        <ul class="p-items">
          @foreach ($firstItems as $item)
            <li class="p-item">
              <h3 class="p-item__name u-phrase">{!! \App\Support\Text::wbr($item['name']) !!}</h3>
              <div class="p-item__price">
                <s class="p-item__regular">{{ $yen($item['regular']) }}</s><span class="p-item__arrow" aria-hidden="true">→</span>
                <span class="p-item__yen">{{ $yen($item['price']) }}</span>
              </div>
              <p class="p-item__text">{{ $item['text'] }}</p>
              <a class="p-item__reserve" href="{{ url('menu/' . $item['slug']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $item['name'] }}" data-gtm-cta-position="campaign_page">メニューの詳しい内容</a>
            </li>
          @endforeach
        </ul>
      </div>
    </section>
  @endif

  <section class="t-section t-bg-mint p-options">
    <div class="t-wrap">
      <h2 class="t-heading">組み合わせできるオプション</h2>
      <p>キャンペーンのメニューにも追加できます。オプションだけのご利用はできません。</p>
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

  <section class="t-section p-notice">
    <div class="t-wrap">
      <p class="t-small">料金はすべて税込です。通常のメニューは<a class="u-phrase" href="{{ url('menu/menu1') }}">メニューと料金</a>のページをご覧ください。</p>
    </div>
  </section>
</main>
<x-page.cta position="campaign_page" lead="キャンペーンのメニューで迷ったら、LINEで気軽にご相談ください。" />
@endsection
