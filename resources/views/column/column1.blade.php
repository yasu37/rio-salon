{{-- コラム：美容鍼の効果を感じるのは何回目？ 本文は components/column/column1、本文のスタイルは css/column/article.css。 --}}
@extends('layouts.renewal')
@section('title', 'コラム')
@section('full_title', '美容鍼を続けた結果は？変化を感じる回数・頻度と通い続けた方の写真｜水戸市のリオ鍼灸サロン')
@section('description', '美容鍼の施術回数や頻度が気になる方も多いのではないでしょうか。この記事では、美容鍼で変化を感じやすいタイミングやおすすめの頻度などをご紹介します。また、施術を続けた方のビフォーアフター写真もご紹介しています。水戸市のリオ鍼灸サロンでは、美容鍼の施術も行っておりますので、ぜひチェックしてみてください。')
@section('canonical', 'column/column1')
@section('og_image', 'column1/column0.jpg')
@push('head')
<link rel="stylesheet" href="{{ asset('css/column/article.css') }}">
@endpush

@section('content')
<x-breadcrumb :items="[['name' => 'コラム'], ['name' => '美容鍼の効果を感じるのは何回目？']]" />
<main class="p-article">
  <x-column.column1></x-column.column1>
</main>
@endsection
