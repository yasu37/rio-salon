{{-- はじめての方へ --}}
@extends('layouts.renewal')
@php
  // 「QUIC Pay」などの名前の途中で改行しないよう、空白を改行しない空白にする
  $nobreak = fn ($names) => array_map(fn ($n) => str_replace(' ', "\u{00A0}", $n), $names);
  $flow = [
    ['ご来店・受付', 'ご予約のお時間になりましたら、ご来店ください。'],
    ['カウンセリング', 'お悩みや体調、気になることをお伺いします。'],
    ['お着替え', '施術の内容に合わせて、お着替えをご用意しています。'],
    ['施術', 'カウンセリングの内容に合わせて施術します。'],
    ['お会計', 'お支払いのあと、次回のご相談もお気軽にどうぞ。'],
  ];
  $notes = [
    ['鍼の刺激について', '使用する鍼は髪の毛ほど細い使い捨てのものですが、部位やその日の体調によって刺激を感じる場合があります。施術後に内出血、赤み、眠気、だるさなどが生じる場合があります。不安なことは、施術の前に遠慮なくご相談ください。'],
    ['メイク・服装について', 'お顔への施術がある場合、メイクが崩れることがあります。気になる方は、お直し用のコスメをお持ちください。お着替えが必要な施術は、動きやすい服装でのご来店をおすすめします。'],
    ['事前にご相談いただきたいこと', 'ご妊娠中の方、服薬中の方、持病のある方は、事前にご相談ください。体調に合わせて施術の内容をご提案します。'],
    ['駐車場', '駐車場を' . config('salon.parking_spaces') . '台ご用意しています。'],
    ['遅刻・キャンセル', 'ご来店が遅れる場合は、あらかじめお電話でご連絡ください。キャンセル・変更も、なるべく早めにご連絡いただけると助かります。'],
    ['男性の方', '男性の方もご利用いただけます。'],
    ['お支払い方法', '現金、クレジットカード（' . implode('／', $nobreak(config('salon.payment.credit_cards'))) . 'など）、電子マネー（' . implode('／', $nobreak(config('salon.payment.e_money'))) . '）がご利用いただけます。'],
  ];
@endphp
@section('title', 'はじめての方へ')
@section('full_title', 'はじめての方へ（施術の流れ・鍼の刺激）｜水戸市のRIO鍼灸サロン')
@section('description', 'RIO鍼灸サロンにはじめてお越しの方へ。ご来店から施術までの流れ、鍼の刺激について、服装や駐車場、お支払い方法をご案内します。')
@section('canonical', 'first-visit')
@section('og_image', 'about.jpg')

@section('content')
<x-breadcrumb :items="[['name' => 'はじめての方へ']]" />
<main>
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow" aria-hidden="true">First Visit</p>
      <h1 class="p-head__title">はじめてでも、<br>安心してお越しください。</h1>
    </div>
  </section>

  <section class="t-section p-split">
    <div class="t-wrap">
      <div class="p-split__photo"><x-top.photo name="about" alt="院長がお客様のお話を伺っている様子" :eager="true" /></div>
      <div class="p-split__text">
        <p>まずはお話を伺ってから、施術を始めます。お着替えはこちらでご用意していますので、手ぶらでお越しいただけます。</p>
        <a class="t-link" href="{{ url('menu/menu1') }}" data-gtm-event="select_content" data-gtm-cta-position="first_visit_page">メニューと料金を見る</a>
      </div>
    </div>
  </section>

  <section class="t-section t-bg-mint">
    <div class="t-wrap">
      <div class="t-head t-head--center">
        <p class="t-en" aria-hidden="true">Flow</p>
        <h2 class="t-heading">ご来店から施術までの流れ</h2>
      </div>
      <ol class="p-flow">
        @foreach ($flow as [$title, $text])
          <li><span class="p-flow__num">{{ $loop->iteration }}</span><div><p class="p-flow__title">{{ $title }}</p><p>{{ $text }}</p></div></li>
        @endforeach
      </ol>
    </div>
  </section>

  <section class="t-section">
    <div class="t-wrap t-narrow">
      <div class="t-head t-head--center">
        <p class="t-en" aria-hidden="true">Before Your Visit</p>
        <h2 class="t-heading">ご来店の前に</h2>
      </div>
      <dl class="p-qa">
        @foreach ($notes as [$title, $text])
          <div><dt>{{ $title }}</dt><dd>{{ $text }}</dd></div>
        @endforeach
      </dl>
      <a class="t-link" href="{{ url('question') }}" data-gtm-event="select_content" data-gtm-cta-position="first_visit_page">よくある質問</a>
    </div>
  </section>
</main>
<x-page.cta position="first_visit_page" lead="わからないことがあれば、ご予約の前にLINEで気軽にご相談ください。" />
@endsection
