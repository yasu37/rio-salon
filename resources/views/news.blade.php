{{-- お知らせ --}}
@extends('layouts.renewal')
@php
  $news = [
    ['date' => '2022-06-12', 'title' => '記事「美容鍼の効果を感じるのは何回目？正しい頻度や通い続けた人の写真などもご紹介！」', 'url' => 'column/column1'],
    ['date' => '2022-01-11', 'title' => 'スタッフ紹介', 'url' => 'about'],
    ['date' => '2022-01-11', 'title' => 'オープンキャンペーン', 'url' => null],
    ['date' => '2022-01-11', 'title' => 'リオ鍼灸サロンオープン', 'url' => null],
  ];
@endphp
@section('title', 'お知らせ')
@section('description', 'リオ鍼灸サロンからのお知らせ一覧です。')
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
