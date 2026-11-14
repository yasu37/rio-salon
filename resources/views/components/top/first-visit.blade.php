{{-- はじめての方へ。流れは番号と名前だけを見せ、説明とよくある質問は「はじめての方へ」のページに任せる。 --}}
@php($steps = ['受付', 'カウンセリング', 'お着替え', '施術', 'お会計'])
<section class="t-section t-first" id="first">
  <div class="t-wrap">
    {{-- スマホは見出しを中央に置いて写真・流れの順、PCは写真の右に見出しと流れを並べる --}}
    <div class="t-first__inner">
      <div class="t-head t-head--center t-first__head">
        <p class="t-en" aria-hidden="true">First Visit</p>
        <h2 class="t-heading">はじめての方へ</h2>
      </div>
      <div class="t-first__photo">
        <x-top.photo name="about" alt="院長がお客様のお話を伺っている様子" />
      </div>
      <div class="t-first__text">
        <ol class="t-steps" aria-label="ご来店の流れ">
          @foreach ($steps as $step)
            <li><span class="t-steps__no">{{ $loop->iteration }}</span>{{ $step }}</li>
          @endforeach
        </ol>
        <p>ご不安なことは、施術の前にお気軽にご相談ください。</p>
        <a class="t-link" href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="home_first_visit">ご来店の流れと持ち物を詳しく見る</a>
      </div>
    </div>
  </div>
</section>
