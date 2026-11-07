{{-- よくある質問。画面の Q&A と構造化データ（FAQPage）は同じ配列から作る。 --}}
@extends('layouts.renewal')
@php
  $faqs = [
    ['鍼灸による、内側からの美と健康づくりとは？', '東洋医学に基づいた鍼灸治療と、美容を専門とするエステティックの技術を組み合わせてご提案しています。お一人お一人の体質やお悩みに合わせて、内側からのお手入れをサポートし、心身ともに軽やかに過ごせる毎日を目指します。'],
    ['美容鍼灸にはどんな効果がありますか？', '美容鍼灸は、顔まわりの筋肉や巡りに着目した施術です。すっきりとした印象やハリ感、透明感を目指す方に選ばれています。感じ方には個人差があり、施術後の変化をお約束するものではありません。また、肩こりや冷え、頭痛など身体のお悩みに合わせた施術もご相談いただけます。'],
    ['鍼は痛くないですか？', '使用する鍼は髪の毛ほど細いものですが、部位やその日の体調によって刺激を感じる場合があります。使い捨ての鍼を使用しており、衛生面にも配慮しております。'],
    ['美容鍼灸は男性も受けられますか？', 'もちろんお受けいただけます。お顔への美容鍼施術はもちろん、肩こりや腰痛など気になる症状のケアにもご利用いただけます。感じ方には個人差がございますので、体調に合わせてご相談ください。'],
    ['美容鍼灸はどれくらいのペースで通えばいいですか？', 'お顔や身体の状態を良い状態に保っていただくため、特に通い始めの時期は1～2週間に1回程度のペースをおすすめしております。その後はご様子に合わせて間隔を調整いただけます。'],
    ['鍼の施術後に気をつけることはありますか？', '施術後に内出血や赤み、眠気、だるさなどが生じる場合があります。感じ方や経過には個人差がありますので、体調がすぐれない場合はご自宅でゆっくりお過ごしください。ご不安な点は施術前にお気軽にご相談ください。'],
  ];
@endphp
@section('title', 'よくある質問')
@section('full_title', 'よくある質問（美容鍼・鍼灸）｜水戸市のリオ鍼灸サロン')
@section('description', 'リオ鍼灸サロンによく寄せられるご質問。美容鍼灸について、鍼の刺激、通うペース、施術後の過ごし方などをご案内します。')
@section('canonical', 'question')
@push('head')
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => collect($faqs)->map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]])->all(),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@section('content')
<x-breadcrumb :items="[['name' => 'よくある質問']]" />
<main data-gtm-view="view_faq">
  <section class="p-head">
    <div class="t-wrap">
      <p class="p-head__eyebrow">よくある質問</p>
      <h1 class="p-head__title">よくいただくご質問</h1>
    </div>
  </section>
  <section class="t-section p-faq-section">
    <div class="t-wrap t-narrow">
      <dl class="p-faq">
        @foreach ($faqs as [$question, $answer])
          <div>
            <dt><span class="p-faq__mark" aria-hidden="true">Q</span>{{ $question }}</dt>
            <dd><span class="p-faq__mark p-faq__mark--a" aria-hidden="true">A</span>{{ $answer }}</dd>
          </div>
        @endforeach
      </dl>
      <a class="t-link" href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="question_page">はじめての方へ（ご来店の流れ）</a>
    </div>
  </section>
</main>
<x-page.cta position="question_page" lead="ほかにも気になることがあれば、LINEで気軽にご質問ください。" />
@endsection
