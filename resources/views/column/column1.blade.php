{{-- コラム：美容鍼の効果を感じるのは何回目？ 本文は components/column/column1、本文のスタイルは css/column/article.css。 --}}
@extends('layouts.renewal')
@section('title', 'コラム')
@section('full_title', '美容鍼を続けた結果は？変化を感じる回数・頻度と通い続けた方の写真｜水戸市のリオ鍼灸サロン')
@section('description', '美容鍼の施術回数や頻度が気になる方も多いのではないでしょうか。この記事では、美容鍼で変化を感じやすいタイミングやおすすめの頻度などをご紹介します。また、施術を続けた方のビフォーアフター写真もご紹介しています。水戸市のリオ鍼灸サロンでは、美容鍼の施術も行っておりますので、ぜひチェックしてみてください。')
@section('canonical', 'column/column1')
@section('og_image', 'column1/column0.jpg')
@section('og_type', 'article')
@push('head')
<link rel="stylesheet" href="{{ asset('css/column/article.css') }}">
{{-- 構造化データ：記事。公開日はお知らせの日付、更新日は sitemap.xml の lastmod と合わせる。書き手はサロン名（個人名は載せない） --}}
<script type="application/ld+json">{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'Article',
  'headline' => '美容鍼を続けた結果は？変化を感じる回数・頻度と通い続けた方の写真',
  'image' => ['https://rio-salon.com/img/column1/column0.jpg'],
  'datePublished' => '2022-06-12',
  'dateModified' => '2026-11-08',
  'mainEntityOfPage' => 'https://rio-salon.com/column/column1',
  'author' => ['@type' => 'Organization', 'name' => config('salon.name'), 'url' => 'https://rio-salon.com/'],
  'publisher' => ['@type' => 'Organization', 'name' => config('salon.name'), 'logo' => ['@type' => 'ImageObject', 'url' => 'https://rio-salon.com/img/logo1.jpg']],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}</script>
@endpush

@section('content')
<x-breadcrumb :items="[['name' => 'コラム'], ['name' => '美容鍼の効果を感じるのは何回目？']]" />
<main class="p-article">
  <x-column.column1></x-column.column1>
</main>
@endsection
