{{-- コラムの記事ページ。題名・説明文などは config/columns.php、本文は components/column/{slug}、本文のスタイルは css/column/article.css。 --}}
@extends('layouts.renewal')
@section('title', 'コラム')
@section('full_title', $column['title'] . '｜水戸市のRIO鍼灸サロン')
@section('description', $column['description'])
@section('canonical', 'column/' . $slug)
@section('og_image', $column['image'])
@section('og_type', 'article')
@push('head')
<link rel="stylesheet" href="{{ asset('css/column/article.css') }}?v={{ filemtime(public_path('css/column/article.css')) }}">
{{-- 構造化データ：記事。書き手はサロン名（個人名は載せない） --}}
<script type="application/ld+json">{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'Article',
  'headline' => $column['title'],
  'description' => $column['description'],
  'image' => ['https://rio-salon.com/img/' . $column['image']],
  'datePublished' => $column['published'],
  'dateModified' => $column['modified'],
  'mainEntityOfPage' => 'https://rio-salon.com/column/' . $slug,
  'author' => ['@type' => 'Organization', 'name' => config('salon.name'), 'url' => 'https://rio-salon.com/'],
  'publisher' => ['@type' => 'Organization', 'name' => config('salon.name'), 'logo' => ['@type' => 'ImageObject', 'url' => 'https://rio-salon.com/img/logo1.jpg']],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}</script>
@endpush

@section('content')
<x-breadcrumb :items="[['name' => 'コラム'], ['name' => $column['short']]]" />
<main class="p-article">
  <x-dynamic-component :component="'column.' . $slug" :column="$column" />
</main>
@endsection
