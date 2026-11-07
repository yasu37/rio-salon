{{-- お知らせ --}}
@extends('layouts.renewal')
@php
  // コラムの公開は config/columns.php から自動で載せる。それ以外のお知らせはここに書く
  $news = collect([
    ['date' => '2022-01-11', 'title' => 'スタッフ紹介', 'url' => 'about'],
    ['date' => '2022-01-11', 'title' => 'オープンキャンペーン', 'url' => null],
    ['date' => '2022-01-11', 'title' => 'リオ鍼灸サロンオープン', 'url' => null],
  ])->merge(\App\Support\Columns::published()->map(fn ($column, $slug) => [
    'date' => $column['published'], 'title' => 'コラム「' . $column['title'] . '」', 'url' => 'column/' . $slug,
  ])->values())->sortByDesc('date')->values();
@endphp
@section('title', 'お知らせ')
@section('full_title', 'お知らせ｜水戸市のリオ鍼灸サロン')
@section('description', '水戸市米沢町のリオ鍼灸サロンからのお知らせ。オープンのご案内や、コラムの公開などをお知らせしています。')
@section('canonical', 'news')

@section('content')
<x-breadcrumb :items="[['name' => 'お知らせ']]" />
<main>
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow">お知らせ</p>
      <h1 class="p-head__title">リオからのお知らせ</h1>
    </div>
  </section>
  <section class="t-section">
    <div class="t-wrap t-narrow">
      <ul class="p-news">
        @foreach ($news as $item)
          <li>
            <time datetime="{{ $item['date'] }}">{{ str_replace('-', '.', $item['date']) }}</time>
            @if ($item['url'])
              <a href="{{ url($item['url']) }}">{{ $item['title'] }}</a>
            @else
              <span>{{ $item['title'] }}</span>
            @endif
          </li>
        @endforeach
      </ul>
    </div>
  </section>
</main>
<x-page.cta position="news_page" />
@endsection
