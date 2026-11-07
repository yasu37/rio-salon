@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['美容鍼とエステは、どっちがいいですか？', 'どちらがよい、ということはなく、気になっていることによって選び方が変わります。表情のこわばりやフェイスラインなど、お顔の土台が気になる方は美容鍼、くすみや毛穴、ごわつきなど、肌の表面が気になる方はフェイシャルエステを選ぶ方が多いです。迷ったときは、施術の前に相談してみましょう。'],
    ['美容鍼とフェイシャルエステは、同じ日に受けてもいいですか？', 'はい、同じ日に受けられるお店もあります。リオ鍼灸サロンでは、美容鍼灸とハーブピーリング、美容鍼灸と炭酸パックを組み合わせたコースをご用意しています。お肌の状態によっては、日を分けた方がよい場合もあるので、施術の前にご相談ください。'],
    ['美容鍼とエステを併用するなら、どのくらいの間隔がいいですか？', 'お肌の状態や、受ける施術の内容によって変わります。ピーリングなど角質のケアをしたあとは、お肌が敏感になっていることがあるので、次の施術はお肌の様子を見てから決めるのが安心です。通うペースは、施術者と相談しながら決めていきましょう。'],
    ['美容鍼は痛いですか？エステの方が痛くないですか？', '美容鍼は髪の毛ほどの細い鍼を使いますが、チクッとした刺激を感じることがあります。フェイシャルエステは鍼を使わないので、刺激が少ないと感じる方が多いです。ただし、ピーリングなどでピリピリ感を感じることもあります。感じ方には個人差があります。'],
    ['鍼がこわいのですが、エステからはじめてもいいですか？', 'はい。まずはフェイシャルエステで、お店の雰囲気や施術者との相性を知ってから、美容鍼を試してみる方もいらっしゃいます。'],
    ['美容鍼とエステは、資格に違いがありますか？', '美容鍼は鍼を使う施術なので、はり師（国家資格）が行います。フェイシャルエステには国家資格がなく、民間の資格やお店の研修で技術を身につけている方が多くいます。どちらを受けるときも、事前の説明やカウンセリングがあるかを見ておくと安心です。'],
    ['男性も美容鍼やフェイシャルエステを受けられますか？', '男性の方も受けられるお店が多くあります。リオ鍼灸サロンでも、男性の方にご利用いただけます。'],
  ];
  // メニューと料金は config/menus.php から読む。名前が変わったら、ここの名前も合わせる
  $menuItems = fn ($page) => collect(config("menus.pages.{$page}.groups"))->flatMap(fn ($group) => $group['items'])->keyBy('name');
  $acupuncture = $menuItems('menu1');
  $facial = $menuItems('menu4');
  // 「水戸市で〜なら」に並べるメニュー：[区分, メニューの一覧, 名前]
  $pickups = [
    ['美容鍼', $acupuncture, '美容鍼灸 70分'],
    ['美容鍼', $acupuncture, '美容鍼灸(顔+全身) 90分'],
    ['フェイシャルエステ', $facial, '美肌ベーシックフェイシャル 70分'],
    ['フェイシャルエステ', $facial, 'ALEXハーブピーリング 70分'],
    ['フェイシャルエステ', $facial, 'カーボキシー高濃度炭酸フェイシャル 70分'],
    ['組み合わせ', $facial, '美容鍼灸＆ALEXハーブピーリング 90分'],
    ['組み合わせ', $facial, '美容鍼灸＆カーボキシー高濃度炭酸パック 120分'],
    ['組み合わせ', $acupuncture, '素肌美人美容鍼コース 120分'],
  ];
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $img = fn ($n) => asset("img/column7/column{$n}");
@endphp
@push('head')
<script type="application/ld+json">
{!! json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'FAQPage',
  'mainEntity' => collect($faqs)->map(fn ($f) => ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]])->all(),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_TAG) !!}
</script>
@endpush
<section>
  <div class="headline">
    <div class="image top-image">
      <picture>
        <source srcset="{{ $img(0) }}.webp" type="image/webp">
        <img src="{{ $img(0) }}.jpg" alt="あお向けに寝た女性の額やほお、あごのまわりに細い鍼を打っている美容鍼の様子" width="1200" height="800">
      </picture>
    </div>
    <h1>美容鍼とエステの違いは？<br>どっちが合うか、お悩み別の選び方と併用のコツ</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>「美容鍼とフェイシャルエステ、どっちを受けたらいいの？」「何がちがうの？」と迷っている方も多いのではないでしょうか。どちらもお顔のケアですが、施術する人、使うもの、働きかける場所がちがいます。</p>
    <p>この記事では、美容鍼とエステの違い、お悩み別の選び方、美容鍼とエステを併用するときのポイントを、美容鍼もフェイシャルエステも行っている水戸市の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>美容鍼は<strong>はり師（国家資格）</strong>が行う施術で、細い鍼で肌の内側や表情筋に働きかけると言われています</li>
      <li>フェイシャルエステは、クレンジングやマッサージ、パックなどで<strong>肌の表面</strong>を整えるケアです</li>
      <li>表情のこわばりやフェイスラインが気になる方は美容鍼、<strong>くすみ・毛穴・ごわつき</strong>が気になる方はエステを選ぶ方が多いです</li>
      <li>どちらかに決めなくても大丈夫。<strong>美容鍼とエステの併用</strong>で、内側と表面の両方をケアする方もいらっしゃいます</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#difference">美容鍼とエステの違いは？ひと目でわかる比較</a></li>
      <li><a href="#acupuncture">美容鍼とは？はり師が行う、お顔の内側からのケア</a></li>
      <li><a href="#facial">フェイシャルエステとは？肌の表面を整えるケア</a></li>
      <li><a href="#choose">美容鍼とエステ、どっちが合う？お悩み別の選び方</a></li>
      <li><a href="#suited">美容鍼が向いている人・エステが向いている人</a></li>
      <li><a href="#combination">美容鍼とエステは併用できる？組み合わせ方のポイント</a></li>
      <li><a href="#caution">受ける前に知っておきたいこと</a></li>
      <li><a href="#column-faq">美容鍼とエステの違いのよくある質問</a></li>
      <li><a href="#rio">水戸市で美容鍼・エステを受けるなら{{ config('salon.name') }}</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="difference" class="headline">
      <h2>美容鍼とエステの違いは？ひと目でわかる比較</h2>
      <p>美容鍼とフェイシャルエステは、どちらもお顔をきれいに整えたい方が受けるケアです。いちばん大きなちがいは、<strong>鍼を使って内側に働きかけるか、手や化粧品、機器で表面を整えるか</strong>という点です。</p>
      <div class="subheading">
        <h3>美容鍼の場合</h3>
        <dl class="column_facts">
          <div><dt>施術する人</dt><dd>はり師（国家資格）</dd></div>
          <div><dt>使うもの</dt><dd>髪の毛ほどの細い鍼。電気を流すこともあります</dd></div>
          <div><dt>働きかける場所</dt><dd>肌の内側、表情筋、お顔のツボ</dd></div>
          <div><dt>刺激</dt><dd>チクッとした刺激を感じることがあります</dd></div>
          <div><dt>気になる方</dt><dd>表情のこわばり、フェイスライン、ほうれい線まわり、むくみ</dd></div>
        </dl>
      </div>
      <div class="subheading">
        <h3>フェイシャルエステの場合</h3>
        <dl class="column_facts">
          <div><dt>施術する人</dt><dd>エステティシャン（国家資格はなく、民間の資格やお店の研修で技術を身につけている方が多くいます）</dd></div>
          <div><dt>使うもの</dt><dd>手によるマッサージ、化粧品、パック、美顔器など</dd></div>
          <div><dt>働きかける場所</dt><dd>主に肌の表面（角質・毛穴・うるおい）</dd></div>
          <div><dt>刺激</dt><dd>少ないと感じる方が多いです。ピーリングでピリピリ感を感じることも</dd></div>
          <div><dt>気になる方</dt><dd>くすみ、ごわつき、毛穴、乾燥、リラックスしたい</dd></div>
        </dl>
      </div>
      <p>どちらがすぐれている、ということではありません。ねらうところがちがうので、<strong>今いちばん気になっていることで選ぶ</strong>のがおすすめです。</p>
    </div>

    <div id="acupuncture" class="headline">
      <h2>美容鍼とは？はり師が行う、お顔の内側からのケア</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(1) }}.webp" type="image/webp">
          <img src="{{ $img(1) }}.jpg" alt="目を閉じてあお向けになった女性の額、目の下、ほお、あごに、色つきの持ち手の細い鍼を打っている様子" width="1272" height="955" loading="lazy">
        </picture>
      </div>
      <p>美容鍼は、髪の毛ほどの細い鍼をお顔のツボや表情筋に打つ施術です。鍼を使う施術は、医師をのぞくと、<strong>はり師という国家資格を持つ人</strong>しか仕事として行うことができません。</p>
      <p>鍼の刺激によって、お顔の巡りや表情筋に働きかけると言われています。お顔だけでなく、肩や首、からだのツボにもあわせて鍼をするお店もあり、からだ全体の調子もいっしょに整えたい方に選ばれています。</p>
      <p>施術のあとに、すっきりした印象や、ハリを感じる方もいらっしゃいます。感じ方には個人差があります。美容鍼で感じる変化や通う回数の目安は、<a href="{{ url('column/column1') }}">コラム「{{ config('columns.column1.short') }}」</a>でくわしくご紹介しています。</p>
    </div>

    <div id="facial" class="headline">
      <h2>フェイシャルエステとは？肌の表面を整えるケア</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(2) }}.webp" type="image/webp">
          <img src="{{ $img(2) }}.jpg" alt="あお向けに寝た女性のおでこからほおにかけて、施術者が手のひらでやさしくマッサージしている様子" width="1280" height="854" loading="lazy">
        </picture>
      </div>
      <p>フェイシャルエステは、クレンジング、マッサージ、毛穴のケア、パックなどで、<strong>肌の表面を整えるケア</strong>です。鍼を使わないので、刺激の少ないケアを受けたい方や、ゆったりリラックスしたい方にも選ばれています。</p>
      <p>フェイシャルエステには、いくつかの種類があります。</p>
      <ul class="point1">
        <li>ベーシックなフェイシャル：クレンジング、マッサージ、パックで肌を整える</li>
        <li>毛穴のケア：毛穴吸引などで、毛穴の汚れの取り残しをケアする</li>
        <li>ピーリング：ハーブや酵素などで、古い角質をケアする</li>
        <li>炭酸パック：炭酸ガスを使ったパックで、肌の巡りに働きかけるとされるケア</li>
        <li>美顔器を使ったケア：専用の機器で、お顔をケアする</li>
      </ul>
      <p>施術のあとに、肌のなめらかさやうるおいを感じる方もいらっしゃいます。感じ方には個人差があります。</p>
    </div>

    <div id="choose" class="headline">
      <h2>美容鍼とエステ、どっちが合う？お悩み別の選び方</h2>
      <p>「美容鍼とフェイシャル、どっちにしよう」と迷ったら、まずは今いちばん気になっていることを思い浮かべてみてください。ここでは、お悩みごとに選ばれることが多いケアをご紹介します。あくまで目安なので、迷ったときは施術の前に相談しましょう。</p>
      <div class="subheading">
        <h3>表情のこわばり・フェイスライン・ほうれい線まわりが気になる</h3>
        <p>表情筋のこわばりや、食いしばりによるお顔の疲れが気になる方には、<strong>美容鍼</strong>が選ばれることが多いです。表情筋やその周りの巡りに働きかけると言われています。</p>
      </div>
      <div class="subheading">
        <h3>くすみ・ごわつき・毛穴が気になる</h3>
        <p>肌の表面の古い角質や毛穴の汚れが気になる方には、ピーリングや毛穴吸引などの<strong>フェイシャルエステ</strong>が選ばれることが多いです。</p>
      </div>
      <div class="subheading">
        <h3>乾燥・ハリのなさが気になる</h3>
        <p>パックや美容液で肌にうるおいを与えるエステと、肌の内側に働きかける美容鍼の、<strong>どちらも選ばれています</strong>。両方を組み合わせたコースを選ぶ方もいらっしゃいます。</p>
      </div>
      <div class="subheading">
        <h3>むくみ・肩こり・冷えなど、からだのことも気になる</h3>
        <p>お顔のむくみが、首や肩のこり、冷えと関係していると感じる方もいらっしゃいます。からだのことも気になる方は、お顔とからだにいっしょに鍼をする<strong>美容鍼のコース</strong>が選ばれることが多いです。</p>
      </div>
      <div class="subheading">
        <h3>鍼が少しこわい・はじめてで不安</h3>
        <p>鍼に不安がある方は、まずは<strong>フェイシャルエステ</strong>から始めるのもひとつの方法です。どちらから始めるかは、施術の前にお気軽にご相談ください。お店の雰囲気や施術者との相性を知ってから、美容鍼を試してみる方もいらっしゃいます。</p>
      </div>
      <div class="subheading">
        <h3>結婚式や撮影など、大切な予定が近い</h3>
        <p>美容鍼は、まれに小さな内出血が出ることがあります。予定の直前は、鍼を使わない<strong>フェイシャルエステ</strong>を選ぶか、美容鍼は早めに受けておくと安心です。美容鍼のあとの注意点は、<a href="{{ url('column/column4') }}">コラム「{{ config('columns.column4.short') }}」</a>にまとめています。</p>
      </div>
      <div class="column_guide">
        <p>{{ config('salon.name') }}のフェイシャルエステと、美容鍼との組み合わせコースは、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu4') }}" data-gtm-event="select_menu" data-gtm-menu-name="フェイシャルエステメニュー" data-gtm-cta-position="column_mid">フェイシャルエステのメニューと料金を見る</a>
      </div>
    </div>

    <div id="suited" class="headline">
      <h2>美容鍼が向いている人・エステが向いている人</h2>
      <p>選び方を、向いている人という形でまとめました。あてはまるものが多い方を、ひとつの目安にしてみてください。</p>
      <div class="subheading">
        <h3>美容鍼が向いている人</h3>
        <ul class="point1">
          <li>表情のこわばりや、フェイスラインが気になる</li>
          <li>食いしばりや、目の疲れが気になる</li>
          <li>肩や首のこり、冷えなど、からだのこともいっしょにケアしたい</li>
          <li>国家資格を持つはり師に施術してほしい</li>
          <li>鍼の刺激が、それほど苦手ではない</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>フェイシャルエステが向いている人</h3>
        <ul class="point1">
          <li>くすみ、ごわつき、毛穴の汚れが気になる</li>
          <li>肌のうるおいや、なめらかさを大切にしたい</li>
          <li>鍼に不安がある、刺激の少ないケアがいい</li>
          <li>大切な予定が近く、内出血が心配</li>
          <li>ゆったりとリラックスする時間がほしい</li>
        </ul>
      </div>
      <p>両方にあてはまる方は、次にご紹介する「併用」も考えてみてください。</p>
    </div>

    <div id="combination" class="headline">
      <h2>美容鍼とエステは併用できる？組み合わせ方のポイント</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(3) }}.webp" type="image/webp">
          <img src="{{ $img(3) }}.jpg" alt="あお向けに寝た女性のほおに、毛穴吸引の機器をあてている様子" width="1280" height="961" loading="lazy">
        </picture>
      </div>
      <p>美容鍼とエステは、どちらかひとつに決めなければいけないものではありません。<strong>美容鍼で内側に、エステで表面に</strong>と、ねらうところがちがうので、組み合わせて受ける方もいらっしゃいます。</p>
      <div class="subheading">
        <h3>同じ日に組み合わせる</h3>
        <p>美容鍼とエステをひとつのコースにしているお店もあります。一度の来店で両方を受けられるので、忙しい方にも選ばれています。{{ config('salon.name') }}では、次のような組み合わせのコースをご用意しています。</p>
        <ul class="point2">
          @foreach ($pickups as [$kind, $list, $name])
            @if ($kind === '組み合わせ' && isset($list[$name]))
              <li>{{ $name }}</li>
            @endif
          @endforeach
        </ul>
      </div>
      <div class="subheading">
        <h3>日を分けて交互に受ける</h3>
        <p>美容鍼とフェイシャルエステを、日を分けて交互に受ける方もいらっしゃいます。ピーリングなどで角質のケアをしたあとは、お肌が敏感になっていることがあるので、<strong>次の施術はお肌の様子を見てから</strong>決めると安心です。</p>
        <p>美容鍼の通うペースの目安は、<a href="{{ url('column/column1') }}">コラム「{{ config('columns.column1.short') }}」</a>でご紹介しています。</p>
      </div>
      <div class="subheading">
        <h3>併用するときは、同じお店で相談すると安心</h3>
        <p>美容鍼とエステを別々のお店で受けるときは、それぞれのお店に、もう一方のケアを受けていることを伝えておきましょう。同じお店で両方を受けられると、お肌の様子を見ながら順番や間隔を相談しやすくなります。</p>
      </div>
    </div>

    <div id="caution" class="headline">
      <h2>受ける前に知っておきたいこと</h2>
      <p>美容鍼もフェイシャルエステも、からだやお肌の状態によっては、控えた方がよい場合や、内容を変えた方がよい場合があります。次にあてはまる方は、ご予約のときや施術の前にお知らせください。</p>
      <ul class="point1">
        <li>熱がある、体調がすぐれない</li>
        <li>お顔に、傷・炎症・日焼け・肌荒れがある</li>
        <li>肌が敏感、化粧品でかぶれたことがある</li>
        <li>血液をサラサラにするお薬を飲んでいる、出血しやすい（美容鍼の場合）</li>
        <li>妊娠中、または妊娠の可能性がある</li>
      </ul>
      <p>通院中の方やお薬を飲んでいる方は、かかりつけの医師にもご相談ください。美容鍼のお店を選ぶときに見ておきたいことは、<a href="{{ url('column/column3') }}">コラム「{{ config('columns.column3.short') }}」</a>にまとめています。</p>
    </div>

    <div id="column-faq" class="headline">
      <h2>美容鍼とエステの違いのよくある質問</h2>
      <dl class="column_faq">
        @foreach ($faqs as [$question, $answer])
          <div>
            <dt>{{ $question }}</dt>
            <dd>{{ $answer }}</dd>
          </div>
        @endforeach
      </dl>
    </div>

    <div id="rio" class="headline">
      <h2>水戸市で美容鍼・エステを受けるなら{{ config('salon.name') }}</h2>
      <p>水戸市米沢町の{{ config('salon.name') }}では、美容鍼とフェイシャルエステの両方をご用意しています。鍼灸師（はり師・きゅう師）の院長が、施術の前にお悩みや体調、お肌の様子をお伺いして、美容鍼とエステのどちらが合うか、いっしょに考えます。</p>
      <ul class="point2">
        @foreach ($pickups as [$kind, $list, $name])
          @if (isset($list[$name]))
            @php($item = $list[$name])
            <li>【{{ $kind }}】{{ $item['name'] }}　{{ $yen($item['price']) }}@if ($item['first_price'])（はじめての方 {{ $yen($item['first_price']) }}）@endif</li>
          @endif
        @endforeach
      </ul>
      <p>料金は税込です。男性の方もご利用いただけます。駐車場{{ config('salon.parking_spaces') }}台、{{ config('salon.business_hours.closed_day_label') }}です。</p>
      <p>「美容鍼とエステ、どっちがいいかわからない」という方も、お気軽にご相談ください。</p>
      <div class="column_guide">
        <p>{{ config('salon.name') }}の美容鍼のメニューと料金は、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_mid">美容鍼灸のメニューと料金を見る</a>
      </div>
    </div>

    @php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。美容鍼とエステ、どちらにするか迷ったら、今気になっていることを気軽に聞かせてくださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu4') }}" data-gtm-event="select_menu" data-gtm-menu-name="フェイシャルエステメニュー" data-gtm-cta-position="column_end">フェイシャルエステのメニューと料金</a></li>
        <li><a href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_end">美容鍼灸のメニューと料金</a></li>
        <li><a href="{{ url('column/column3') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column3.short') }}</a></li>
      </ul>

      <div class="column_reserve">
        <p>どのメニューが合うかわからない方も、まずはLINEでお気軽にご相談ください。</p>
        <div class="column_reserve_buttons">
          <a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_primary" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="column_end">LINEで相談する</a>
          <a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_secondary" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="column_end">Webで予約する</a>
        </div>
        <a href="{{ url('reserve') }}" class="column_reserve_more" data-gtm-event="begin_booking" data-gtm-cta-position="column_end">お電話・HotPepperでのご予約はこちら</a>
      </div>
    </div>

  </div>
</section>
