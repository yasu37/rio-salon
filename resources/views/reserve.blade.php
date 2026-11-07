{{-- ご予約・お問い合わせ --}}
@extends('layouts.renewal')
@php($hours = config('salon.business_hours'))
@section('title', 'ご予約・お問い合わせ')
@section('full_title', 'ご予約・お問い合わせ｜水戸市のリオ鍼灸サロン')
@section('description', 'リオ鍼灸サロンのご予約方法。Web予約（Square）、LINE、HotPepper、お電話から、ご都合に合わせてお選びいただけます。')
@section('canonical', 'reserve')

@section('content')
<x-breadcrumb :items="[['name' => 'ご予約・お問い合わせ']]" />
<main>
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow">ご予約・お問い合わせ</p>
      <h1 class="p-head__title">ご都合に合わせて、<br>お選びください。</h1>
    </div>
  </section>
  <section class="t-section p-reserve-section">
    <div class="t-wrap t-narrow">
      <ul class="p-reserve">
        <li>
          <a class="t-button t-button--primary" href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-cta-position="reserve_page">Webで予約する</a>
          <p>空いている日時を見て、そのまま予約できます。</p>
        </li>
        <li>
          <a class="t-button" href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="reserve_page">LINEで相談する</a>
          <p>メニュー選びに迷ったときや、ご予約の前に聞きたいことがあるときに。</p>
        </li>
        <li>
          <a class="t-button" href="{{ config('salon.reservation.hotpepper.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_hotpepper_click" data-gtm-provider="hotpepper" data-gtm-customer-type="new" data-gtm-cta-position="reserve_page">HotPepperで空き時間を見る</a>
          <p>HotPepper Beautyからもご予約いただけます。</p>
        </li>
      </ul>
      <p class="p-reserve__tel">お電話でも承ります　<a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="reserve_page">{{ config('salon.tel') }}</a><br><span class="t-small">施術中は電話に出られないことがあります。その場合はLINEからのご連絡をおすすめします。</span></p>
    </div>
  </section>
  <section class="t-section t-bg-mint">
    <div class="t-wrap t-narrow">
      <h2 class="t-heading">営業時間</h2>
      <dl class="p-dl">
        <div><dt>営業時間</dt><dd>{{ $hours['open'] }}〜{{ $hours['close'] }}@if ($hours['last_reception'])（最終受付 {{ $hours['last_reception'] }}）@endif</dd></div>
        <div><dt>定休日</dt><dd>{{ $hours['closed_day_label'] }}</dd></div>
        <div><dt>住所</dt><dd>{{ config('salon.address.full') }}</dd></div>
        <div><dt>駐車場</dt><dd>{{ config('salon.parking_spaces') }}台</dd></div>
      </dl>
      <a class="t-link" href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="reserve_page">はじめての方へ（ご来店の流れ）</a>
    </div>
  </section>
</main>
@endsection
