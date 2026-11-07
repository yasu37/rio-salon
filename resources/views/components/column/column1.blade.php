@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['美容鍼の効果はいつから感じますか？何日後ですか？', '施術の直後に引き締まった印象を感じる方と、2〜3日後にハリやうるおいを感じる方がいらっしゃいます。感じ方には個人差があり、1回目では変化を感じにくい方もいます。'],
    ['美容鍼の効果はどのくらい続きますか？', '1回の施術で感じる変化は、数日〜1週間ほどで落ち着くことが多いと言われています。続けて受けることで、変化を感じやすくなる方もいらっしゃいます。持続には個人差があります。'],
    ['最初はどのくらいの頻度で通えばいいですか？', 'はじめの1か月は1〜2週間に1回、その後は月に1〜2回を目安におすすめしています。お顔とからだの様子を見ながら、一緒にペースを決めていきます。'],
    ['月1回だけでも意味はありますか？', '月1回でも、お肌やからだの調子を整える時間として続けていらっしゃる方は多くいます。最初の数回だけ間隔を短めにすると、変化を感じやすいと言われています。'],
    ['メイクをしたまま行っても大丈夫ですか？', 'お顔の施術の前にクレンジングを行いますので、メイクをしたままお越しいただけます。施術後のお直し用に、普段お使いのコスメをお持ちいただくと安心です。'],
    ['内出血することはありますか？', 'まれに、鍼をした場所に小さな内出血ができることがあります。多くは1〜2週間ほどで目立たなくなります。大切な予定の直前の場合は、事前にご相談ください。'],
    ['施術を受けた日に控えた方がいいことはありますか？', '当日は、激しい運動、長風呂やサウナ、たくさんの飲酒は控えめにして、ゆっくりお過ごしください。眠気やだるさを感じる方もいらっしゃいます。'],
  ];
@endphp
@push('head')
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => collect($faqs)->map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]])->all(),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush
<section>
  <div class="headline">
    <div class="image top-image">
      <picture>
        <source srcset="../img/column1/column0.webp" type="image/webp">
        <img src="../img/column1/column0.jpg" alt="白背景の鍼セット" width="640" height="427">
      </picture>
    </div>
    <h1>美容鍼を続けた結果は？<br>変化を感じる回数・頻度と通い続けた方の写真</h1>
    <p class="column_meta">最終更新：2026年11月8日　／　書いた人：{{ config('salon.name') }} 院長（鍼灸師歴{{ collect(config('staff'))->where('status', 'active')->first()['experience_label'] ?? '20年以上' }}）</p>
    <p>美容鍼を続けるとどうなるのか、何回目から変化を感じるのか、どのくらいの頻度で通えばいいのかが気になる方も多いのではないでしょうか。<br>この記事では、水戸市の{{ config('salon.name') }}の院長が、美容鍼で変化を感じやすいタイミングやおすすめの頻度、通い続けた方のビフォーアフター写真をご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>施術の<strong>直後</strong>に引き締まった印象を、<strong>2〜3日後</strong>にハリやうるおいを感じる方が多いと言われています</li>
      <li>1回の変化は<strong>数日〜1週間</strong>ほどで落ち着くことが多く、続けることで変化を感じやすくなる方もいます</li>
      <li>頻度の目安は、<strong>最初の1か月は1〜2週間に1回</strong>、その後は<strong>月1〜2回</strong>です</li>
      <li>感じ方には個人差があります。お顔とからだの様子を見ながら、ペースを一緒に決めていきます</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#column1">美容鍼の効果を感じるのは何回目？</a></li>
      <li><a href="#column2">美容鍼とは？</a></li>
      <li><a href="#column3">美容鍼で感じる変化</a></li>
      <li><a href="#column4">美容鍼のおすすめの頻度は？</a></li>
      <li><a href="#column5">変化を感じやすいタイミング（何日後？）</a></li>
      <li><a href="#column-duration">変化はどのくらい続く？</a></li>
      <li><a href="#column-continue">美容鍼を続けた結果、どう変わる？</a></li>
      <li><a href="#column6">{{ config('salon.name') }}で施術を受けた方のビフォーアフター写真</a></li>
      <li><a href="#column-faq">美容鍼のよくある質問</a></li>
      <li><a href="#column7">水戸市で美容鍼を受けるなら{{ config('salon.name') }}がおすすめ!</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="column1" class="headline">
      <h2>美容鍼の効果を感じるのは何回目？</h2>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column1.webp" type="image/webp">
          <img src="../img/column1/column1.jpg" alt="顔の美容鍼の施術写真" width="640" height="427" loading="lazy">
        </picture>
      </div>
      <p>美容鍼は、施術直後から肌の変化を感じやすいと言われる施術です。ただし感じ方には個人差があり、全ての方に同じ変化が起こるわけではありません。</p>
      <p>初回の施術で変化を感じにくい方もいらっしゃいます。施術を重ねながらご自身の体調や肌の状態に合わせて調整していきますので、気になる点は鍼灸師にご相談ください。</p>
    </div>
    <div id="column2" class="headline">
      <h2>美容鍼とは？</h2>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column2.webp" type="image/webp">
          <img src="../img/column1/column2.jpg" alt="体の鍼灸施術写真" width="640" height="359" loading="lazy">
        </picture>
      </div>
      <p>美容鍼とは、東洋医学に基づき、髪の毛ほどの細い鍼を用いてお顔のツボや筋肉に直接アプローチする美容法です。エステとは異なるアプローチ方法として選ばれています。</p>
      <p>お顔の肌は「表皮」「真皮」「皮下組織」の3層から成り立っています。お顔の肌に鍼で微細な刺激を加えることで、コラーゲンなどの生成に関わる反応が促されると言われていますが、感じ方や結果には個人差があります。</p>
      <p>また、美容鍼で顔に使用する鍼の太さは0.14〜0.18mm程度と細いものですが、部位やその日の状態によって刺激を感じる場合があります。</p>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column3.webp" type="image/webp">
          <img src="../img/column1/column3.jpg" alt="肌の構造画像" width="1400" height="1050" loading="lazy">
        </picture>
      </div>
    </div>
    <div id="column3" class="headline">
      <h2>美容鍼で感じる変化</h2>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column4.webp" type="image/webp">
          <img src="../img/column1/column4.jpg" alt="顔の美容鍼の施術写真" width="640" height="427" loading="lazy">
        </picture>
      </div>
      <p>美容鍼は、施術直後から変化を感じやすいと言われています。小顔感やハリ、ほうれい線・シワへの変化を感じる方もいらっしゃいますが、感じ方には個人差があります。</p>
      <div class="subheading">
        <h3>肌に関して感じる変化の例</h3>
        <p>お顔に美容鍼を打つことで、表情筋や肌への直接アプローチにより、以下のような変化を感じる方もいます。</p>
        <ul class="point1">
          <li>小顔・引き締め感</li>
          <li>ハリ・うるおい</li>
          <li class="u-phrase">シワ・ほうれい線のケア</li>
          <li>肌荒れのケア</li>
          <li>肌質のケア</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>自律神経や女性ホルモンについて</h3>
        <p>美容鍼は、お顔の施術に加えて、自律神経や女性ホルモンのバランスに関わるとされるツボを使用することもあります。以下のような変化を感じる方もいらっしゃいます。</p>
        <ul class="point1">
          <li>睡眠の質に関する変化</li>
          <li>眼精疲労のケア</li>
          <li class="u-phrase">ホルモンバランスに関する変化</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>自然治癒力について</h3>
        <p>お顔のツボに鍼で刺激を与えることで、身体が本来持っている自然治癒力に働きかけると言われています。感じ方には個人差があります。</p>
      </div>
    </div>
    <div id="column4" class="headline">
      <h2>美容鍼のおすすめの頻度は？</h2>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column5.webp" type="image/webp">
          <img src="../img/column1/column5.jpg" alt="右肩上がりのグラフ写真" width="640" height="382" loading="lazy">
        </picture>
      </div>
      <p>一般的に、施術を重ねることで変化を感じやすくなる傾向があると言われています。感じ方には個人差があります。</p>
      <div class="subheading">
        <h3>最初の月は週１回のペースがおすすめ！</h3>
        <p>個人差はありますが、初めて施術を受けられる方には1～2週間に一度のペースをおすすめしています。ご自身の体調や肌の様子に合わせて、鍼灸師と相談しながら無理のない範囲で頻度を調整していきましょう。</p>
      </div>
      <div class="subheading">
        <h3>月1～2回が目安のペース</h3>
        <p>施術を重ねることで、コラーゲンなどの生成に関わる反応が促されると考えられていますが、感じ方や持続感には個人差があります。</p>
        <p>その後は月1～2回程度のペースでケアを続けていただくことをおすすめしています。</p>
      </div>
      <div class="subheading">
        <h3>月1回だけでも意味はある？</h3>
        <p>お仕事や家事で忙しく、月1回が精いっぱいという方も多くいらっしゃいます。月1回でも、お肌やからだの調子を整える時間として続けていらっしゃる方は多いです。</p>
        <p>はじめの数回だけ間隔を短めにすると、変化を感じやすいと言われています。ご予定に合わせて無理のないペースをご提案しますので、お気軽にご相談ください。</p>
      </div>
      <div class="column_guide">
        <p>通うペースは、お顔とからだの様子を見ながら一緒に決めていきます。{{ config('salon.name') }}の美容鍼のメニューと料金は、こちらからご覧いただけます。</p>
        <a href="../menu/menu1" target="_self" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_mid">美容鍼灸のメニューと料金を見る</a>
      </div>
    </div>
    <div id="column5" class="headline">
      <h2>変化を感じやすいタイミング（何日後？）</h2>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column6.webp" type="image/webp">
          <img src="../img/column1/column6.jpg" alt="時計の写真" width="640" height="427" loading="lazy">
        </picture>
      </div>
      <p>美容鍼は、変化を感じやすいタイミングが2段階あると言われています。施術後すぐに感じやすい「直後の変化」と、2〜3日後に感じやすい「その後の変化」です。感じ方には個人差があります。</p>
      <div class="subheading">
        <h3>① 施術直後に感じやすい変化</h3>
        <p>施術直後に感じる方が多い変化として、次のようなものが挙げられます。</p>
        <ul class="point2">
          <li>肌の引き締まった印象</li>
          <li>むくみのケア</li>
          <li class="u-phrase">シワ・ほうれい線のケア</li>
          <li>眼精疲労のケア</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>② 数日後に感じやすい変化</h3>
        <p>施術から2〜3日後に感じる方が多い変化として、次のようなものが挙げられます。</p>
        <ul class="point2">
          <li>ハリ感・うるおい</li>
          <li>化粧水や美容液のなじみ</li>
          <li class="u-phrase">シワ・ほうれい線のケア</li>
          <li>肌荒れのケア</li>
          <li>毛穴の目立ちにくさ</li>
        </ul>
      </div>
    </div>

    <div id="column-duration" class="headline">
      <h2>美容鍼の変化はどのくらい続く？</h2>
      <p>1回の施術で感じる引き締まった印象やハリ感は、<strong>数日〜1週間ほどで落ち着くことが多い</strong>と言われています。お肌の生まれ変わりの周期や、睡眠・食事・疲れなど、その時の生活の様子によっても変わります。</p>
      <p>そのため、美容鍼は1回で終わりにするよりも、<strong>間隔をあけすぎずに続けていく</strong>ことで、変化を感じやすくなる方が多い施術です。持続のしかたには個人差があります。</p>
    </div>

    <div id="column-continue" class="headline">
      <h2>美容鍼を続けた結果、どう変わる？</h2>
      <p>続けて通われている方からは、回数を重ねるにつれて、次のような声をいただくことがあります。あくまで目安で、感じ方には個人差があります。</p>
      <div class="subheading">
        <h3>1回目：直後の変化を感じる方が多い</h3>
        <p>施術の直後に「顔がすっきりした」「目がぱっちりした」と感じる方が多いです。一方で、1回目は変化をあまり感じない方もいらっしゃいます。</p>
      </div>
      <div class="subheading">
        <h3>3〜5回目（最初の1か月）：変化を感じやすくなる方が増える</h3>
        <p>1〜2週間に1回のペースで続けると、化粧のりやお肌のハリなど、日々の変化に気づく方が増えてきます。</p>
      </div>
      <div class="subheading">
        <h3>それ以降：調子のよい状態を保つためのケアに</h3>
        <p>月1〜2回のペースに切り替えて、お肌やからだの調子を整える時間として続けていらっしゃる方が多いです。お顔だけでなく、肩こりや冷えなど、からだのことも一緒にご相談いただけます。</p>
      </div>
    </div>

    <div id="column6" class="headline">
      <h2>{{ config('salon.name') }}で施術を受けた方のビフォーアフター写真</h2>
      <p>{{ config('salon.name') }}で美容鍼の施術を受けられたお客様の写真です。</p>
      <p>施術事例としてご覧ください。効果の感じ方には個人差があります。</p>
      <div class="image BA-image">
        <picture>
          <source srcset="../img/column1/column8.webp" type="image/webp">
          <img src="../img/column1/column8.jpg" alt="ビフォーアフター写真" width="260" height="260" loading="lazy">
        </picture>
      </div>
      <div class="image BA-image">
        <picture>
          <source srcset="../img/column1/column9.webp" type="image/webp">
          <img src="../img/column1/column9.jpg" alt="ビフォーアフター写真" width="640" height="521" loading="lazy">
        </picture>
      </div>
    </div>

    <div id="column-faq" class="headline">
      <h2>美容鍼のよくある質問</h2>
      <dl class="column_faq">
        @foreach ($faqs as [$question, $answer])
          <div>
            <dt>{{ $question }}</dt>
            <dd>{{ $answer }}</dd>
          </div>
        @endforeach
      </dl>
    </div>

    <div id="column7" class="headline">
      <h2>水戸市で美容鍼を受けるなら{{ config('salon.name') }}がおすすめ！</h2>
      <div class="image">
        <picture>
          <source srcset="../img/column1/column7.webp" type="image/webp">
          <img src="../img/column1/column7.jpg" alt="施術者写真" width="1600" height="1067" loading="lazy">
        </picture>
      </div>
      <p>水戸市米沢町の{{ config('salon.name') }}では、鍼灸師歴20年以上の院長が、お悩みに合わせて美容鍼をご提案しています。</p>
      <ul class="point2">
        <li>お顔とからだを一緒にケアできるコースがあります（美容鍼灸 顔＋全身 90分）</li>
        <li>はじめての方は、美容鍼灸70分を10,500円でお試しいただけます</li>
        <li>フェイシャルエステティシャン、化粧品検定1級の資格を持つ院長が担当します</li>
        <li>駐車場4台。火曜定休</li>
      </ul>
      <p>水戸市で美容鍼を受けてみたい方は、お気軽にご相談ください。</p>
    </div>
    @php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。鍼灸師として{{ $owner['experience_label'] }}、たくさんの方のお顔とからだに向き合ってきました。美容鍼がはじめての方も、気になることがあれば気軽にご相談くださいね。</p>
          <a href="../about" target="_self" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="../menu/menu1" target="_self" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_end">美容鍼灸のメニューと料金</a></li>
        <li><a href="../first-visit" target="_self" data-gtm-event="select_content" data-gtm-cta-position="column_end">はじめての方へ（来店の流れ・持ち物）</a></li>
      </ul>

      <div class="column_reserve">
        <p>どのメニューが合うかわからない方も、まずはLINEでお気軽にご相談ください。</p>
        <div class="column_reserve_buttons">
          <a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_primary" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="column_end">LINEで相談する</a>
          <a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_secondary" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="column_end">Webで予約する</a>
        </div>
        <a href="../reserve" target="_self" class="column_reserve_more" data-gtm-event="begin_booking" data-gtm-cta-position="column_end">お電話・HotPepperでのご予約はこちら</a>
      </div>
    </div>

  </div>
</section>
