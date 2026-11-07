{{-- リオについて --}}
@extends('layouts.renewal')
@section('title', 'リオについて')
@section('description', 'リオ鍼灸サロンのご挨拶と院長紹介。筋肉・神経・リンパなどの西洋医学的な知見と東洋医学的な視点を組み合わせた施術をご提案しています。')
@section('canonical', 'about')
@section('og_image', 'location.jpg')

@section('content')
<x-breadcrumb :items="[['name' => 'リオについて']]" />
<main>
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow">リオについて</p>
      <h1 class="p-head__title">からだの内側から、<br>健やかさと美しさを。</h1>
    </div>
  </section>

  <section class="t-section p-split">
    <div class="t-wrap">
      <div class="p-split__photo"><x-top.photo name="location" alt="花が飾られた受付の様子" width="1200" height="900" :eager="true" /></div>
      <div class="p-split__text">
        <p>{{ config('salon.name') }}では、筋肉、神経、リンパなどの西洋医学的な知見と東洋医学的な視点を組み合わせた施術をご提案し、「健康」と「美しさ」を引き出すサポートをしています。はじめての方も、安心してお越しください。</p>
      </div>
    </div>
  </section>

  <section class="t-section t-bg-mint p-split p-split--reverse">
    <div class="t-wrap">
      <div class="p-split__photo p-split__photo--portrait"><x-top.photo name="location5" alt="窓のある明るい施術室" width="960" height="1280" /></div>
      <div class="p-split__text">
        <h2 class="t-heading">気軽に集い、癒される場所に</h2>
        <p>東洋医学の分野である鍼灸、漢方、もみほぐしなどを通じて、からだのバランスを整えるお手伝いをしています。皆さまが気軽に集い、癒され、笑顔で過ごしていただける場所になるよう、心をこめておもてなしいたします。</p>
      </div>
    </div>
  </section>

  @foreach (collect(config('staff'))->where('status', 'active')->sortBy('order') as $member)
    <section class="t-section p-staff" data-gtm-view="view_staff">
      <div class="t-wrap">
        <h2 class="t-heading">院長のご紹介</h2>
        <div class="p-staff__inner">
          <div class="p-staff__photo"><x-top.photo :name="$member['photo']" :alt="'院長 ' . $member['name']" /></div>
          <div class="p-staff__body">
            <p class="p-staff__name">{{ $member['name'] }}@if ($member['name_en'])<span>{{ $member['name_en'] }}</span>@endif</p>
            <p>「健康や美容に悩まれている人たちのために、ご自身と向き合う場所を作りたい」と決意し、令和4年1月に「{{ config('salon.name') }}」「RIO漢方薬店」を開院しました。</p>
            <p>平成6年に国家資格を取得後、整形外科、鍼灸接骨院や指圧治療院などで臨床経験を重ねてきました。</p>
            <p>{{ $member['experience_label'] }}培ってきた鍼灸の臨床経験と、漢方、エステ、リラクゼーションの4本柱を軸に、おひとりおひとりに合った施術をご提案し、笑顔で健やかな時間を過ごしていただきたいと思っています。</p>
          </div>
        </div>
        <dl class="p-dl">
          <div><dt>資格</dt><dd><ul>@foreach ($member['qualifications'] as $qualification)<li>{{ $qualification }}</li>@endforeach</ul></dd></div>
          <div><dt>担当施術</dt><dd><ul>@foreach ($member['treatments'] as $treatment)<li>{{ $treatment }}</li>@endforeach</ul></dd></div>
          <div><dt>施術歴</dt><dd>{{ $member['experience_label'] }}</dd></div>
          @if ($member['work_days'])
            <div><dt>出勤日</dt><dd>{{ $member['work_days'] }}</dd></div>
          @endif
        </dl>
        <a class="t-link" href="{{ url('menu/menu1') }}" data-gtm-event="select_content" data-gtm-cta-position="about_page">メニューと料金を見る</a>
      </div>
    </section>
  @endforeach
</main>
<x-page.cta position="about_page" lead="気になることがあれば、LINEで気軽にご相談ください。" />
@endsection
