@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['自律神経の乱れに鍼は効果がありますか？', '鍼灸は、からだ全体のバランスを見ながら、自律神経の働きにアプローチすることを目的とした施術です。施術のあとに、からだがゆるんだ感じや、ほっとする感じを持つ方もいらっしゃいます。ただし、感じ方には個人差があり、効果をお約束できるものではありません。'],
    ['自律神経の鍼は、どのくらいの頻度で通えばいいですか？', 'はじめは間隔を短めにして、からだの様子が落ち着いてきたら少しずつ間隔をあけていく方が多いと言われています。お仕事やご予定、お財布とも相談しながら、無理なく続けられるペースを一緒に決めていきます。'],
    ['自律神経の鍼は、何回くらいで変化を感じますか？', '変化の感じ方や時期には、とても個人差があります。1回で、からだが軽くなったように感じる方もいらっしゃれば、何回か続けるうちに少しずつ感じる方もいらっしゃいます。回数をお約束することはできませんが、毎回からだの様子をお伺いしながら進めていきます。'],
    ['鍼は痛くないですか？', '使う鍼は、髪の毛ほどの細さのものが中心です。チクッとした感じや、ずーんと重く響くような感じを持つ方もいらっしゃいますが、強い痛みを感じることは少ないと言われています。刺激が苦手な方は、施術のときにお気軽にお伝えください。'],
    ['鍼のあとに、だるさや眠気が出るのはなぜですか？', '施術でからだがリラックスした状態になり、眠気やだるさを感じる方がいらっしゃいます。多くは時間とともに落ち着いていくと言われています。その日は無理をせず、ゆっくり休みましょう。'],
    ['病院に通っていても、鍼を受けられますか？', '受けられることが多いですが、通院中の方やお薬を飲んでいる方は、かかりつけの医師にもご相談のうえでお越しください。病院での治療をやめて鍼に切り替えるのではなく、日々のからだのケアとしてご利用ください。'],
    ['男性も受けられますか？', 'はい、男性の方もご利用いただけます。首や肩のこり、疲れが抜けにくい感じが気になる方にも選ばれています。'],
  ];
  $menu = config('menus.pages.menu2');
  $items = collect($menu['groups'][0]['items']);
  $flow = $items->first()['flow'] ?? '';
  // キャンペーン（config/campaign.php）のうち、自律神経の鍼を含むコース。キャンペーンが終わって show が false になると表示されない。
  $campaignItems = collect(config('campaign.groups'))
    ->where('show', true)
    ->flatMap(fn ($group) => collect($group['items'])->map(fn ($item) => $item + ['period' => $group['period']]))
    ->filter(fn ($item) => str_contains($item['name'], '自律神経'))
    ->values();
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $img = fn ($n) => asset("img/column5/column{$n}");
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
        <img src="{{ $img(0) }}.jpg" alt="うつ伏せの方の首から背中にかけて、細い鍼をしている様子" width="1200" height="900">
      </picture>
    </div>
    <h1>自律神経の乱れに鍼灸はどう向き合う？<br>施術の流れと通うペースの目安</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>「なんとなく疲れが抜けない」「寝つきが悪い」「肩や首がいつもこっている」。はっきりした理由がわからないまま、こうした不調が続いている方も多いのではないでしょうか。その背景のひとつとして、よく挙げられるのが<strong>自律神経の乱れ</strong>です。</p>
    <p>この記事では、自律神経の乱れで出やすいと言われる症状、鍼灸が自律神経にどう向き合うのか、施術の流れ、通う頻度の目安、施術のあとの過ごし方を、水戸市の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>自律神経の乱れでは、<strong>眠り・疲れ・こり・冷え・胃腸</strong>など、からだのあちこちに不調を感じることがあると言われています</li>
      <li>鍼灸は、症状の出ている場所だけでなく、<strong>からだ全体のバランス</strong>を見ながら自律神経の働きにアプローチすることを目的とした施術です</li>
      <li>通うペースは、はじめは<strong>間隔を短めに</strong>、落ち着いてきたら<strong>少しずつ間隔をあけていく</strong>のがひとつの目安と言われています</li>
      <li>気になる症状が強いときや長く続くときは、まず<strong>医療機関を受診</strong>しましょう。感じ方には個人差があります</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#symptoms">自律神経の乱れとは？よくある症状は？</a></li>
      <li><a href="#approach">自律神経の乱れに鍼灸はどう向き合う？</a></li>
      <li><a href="#points">自律神経の鍼では、どこに鍼をする？</a></li>
      <li><a href="#flow">自律神経の鍼灸、施術の流れは？</a></li>
      <li><a href="#frequency">自律神経の鍼はどのくらいの頻度で通う？</a></li>
      <li><a href="#care">鍼のあとの過ごし方と、毎日のセルフケア</a></li>
      <li><a href="#caution">先に医療機関に相談したい場合</a></li>
      <li><a href="#column-faq">自律神経と鍼灸のよくある質問</a></li>
      <li><a href="#rio">水戸市で自律神経の鍼灸を受けるなら{{ config('salon.name') }}</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="symptoms" class="headline">
      <h2>自律神経の乱れとは？よくある症状は？</h2>
      <p>自律神経は、心臓の動き、呼吸、体温、消化など、わたしたちが意識しなくても動いているからだの働きを調整している神経です。</p>
      <p>自律神経には、活動するときに働く<strong>「交感神経」</strong>と、休むときに働く<strong>「副交感神経」</strong>の2つがあります。昼は交感神経、夜は副交感神経が優位になるように、シーソーのように切り替わりながらバランスをとっていると言われています。</p>
      <div class="subheading">
        <h3>自律神経が乱れやすいのはどんなとき？</h3>
        <p>次のようなことが続くと、この切り替えがうまくいかなくなり、自律神経が乱れやすいと言われています。</p>
        <ul class="point1">
          <li>お仕事や家事、人間関係などのストレス</li>
          <li>夜ふかしや、寝る時間・起きる時間がばらばらな生活</li>
          <li>スマートフォンやパソコンを長い時間見ている</li>
          <li>季節の変わり目や、気温・気圧の変化</li>
          <li>年齢によるからだの変化</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>自律神経の乱れで出やすいと言われる症状</h3>
        <p>自律神経はからだ全体に関わっているため、乱れたときの不調も、人によってさまざまです。よく挙げられるのは次のようなものです。</p>
        <ul class="point2">
          <li>眠り：寝つきが悪い、夜中に目が覚める、朝すっきり起きられない</li>
          <li>疲れ：寝ても疲れが抜けない、からだが重だるい</li>
          <li>こり：首や肩のこり、頭の重さ</li>
          <li>冷え：手足が冷える、のぼせやすい</li>
          <li>お腹：胃腸の調子がすぐれない、お腹が張る</li>
          <li>こころ：イライラしやすい、気持ちが落ちこみやすい</li>
        </ul>
        <p>ただし、これらの症状は、ほかの病気が原因で出ていることもあります。<strong>症状が強いときや長く続くときは、まず医療機関を受診してください</strong>。</p>
      </div>
    </div>

    <div id="approach" class="headline">
      <h2>自律神経の乱れに鍼灸はどう向き合う？</h2>
      <p>鍼灸は、からだのツボに細い鍼をしたり、お灸であたためたりする施術です。自律神経の乱れが気になる方への鍼灸では、<strong>症状が出ている場所だけでなく、からだ全体のバランスを見ていく</strong>のが特徴です。</p>
      <div class="subheading">
        <h3>東洋医学の考え方</h3>
        <p>東洋医学では、からだの中を「気」「血（けつ）」「水（すい）」がめぐっていて、そのめぐりが滞ったり、バランスがくずれたりすると、不調として出てくると考えます。</p>
        <p>たとえば、首や肩がこっている方でも、その背景に冷えや疲れ、眠りの浅さがあるかもしれません。鍼灸では、お話を聞きながらからだ全体の様子を見て、どのツボを使うかを考えていきます。</p>
      </div>
      <div class="subheading">
        <h3>鍼の刺激とからだの反応</h3>
        <p>鍼の刺激とからだの反応については、国内外でさまざまな研究が行われていて、自律神経の働きとの関わりについても調べられています。</p>
        <p>施術中やそのあとに、からだがゆるんだ感じや、ほっとする感じ、眠くなる感じを持つ方もいらっしゃいます。ただし、<strong>感じ方には個人差があり、効果をお約束できるものではありません</strong>。病院での治療の代わりではなく、日々のからだのケアのひとつとして考えていただくのがおすすめです。</p>
      </div>
    </div>

    <div id="points" class="headline">
      <h2>自律神経の鍼では、どこに鍼をする？</h2>
      <p>どこに鍼をするかは、その日のからだの様子やお悩みによって変わります。一般的に、自律神経の乱れが気になる方への鍼灸では、次のような場所がよく使われると言われています。</p>
      <div class="subheading">
        <h3>背中（背骨の両わき）</h3>
        <p>背骨の両わきには、東洋医学で内臓とつながりがあると考えられているツボが、縦に並んでいます。うつ伏せで、首から背中、腰にかけて鍼をしていくことが多い場所です。</p>
      </div>
      <div class="subheading">
        <h3>頭・首・肩</h3>
        <p>頭や首のつけ根、肩まわりにも、よく知られたツボがあります。頭の重さや、首・肩のこりが気になる方に使われることがあります。</p>
      </div>
      <div class="subheading">
        <h3>手・足・お腹</h3>
        <p>手や足、お腹のまわりにも、からだの調子を整えると考えられているツボがあります。実際にどこに鍼をするかは、その日のお話やからだの様子によって変わります。</p>
      </div>
      <p>使う鍼の長さや太さも、場所やお悩みに合わせて変えることがあります。気になることがあれば、施術の前にお気軽にご質問ください。</p>
    </div>

    <div id="flow" class="headline">
      <h2>自律神経の鍼灸、施術の流れは？</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(1) }}.webp" type="image/webp">
          <img src="{{ $img(1) }}.jpg" alt="白衣の施術者が、ボードを手にお客様のお話を伺っている様子" width="1200" height="800" loading="lazy">
        </picture>
      </div>
      <p>{{ config('salon.name') }}の鍼灸治療は、次のような流れで進めていきます。</p>
      @if ($flow)
        <p><strong>{{ $flow }}</strong></p>
      @endif
      <div class="subheading">
        <h3>1. カウンセリング</h3>
        <p>いま気になっている不調、いつごろからか、眠りや食事、お仕事のリズムなどをお伺いします。うまく言葉にできなくても大丈夫です。「なんとなく調子がよくない」という段階でも、気軽にお話しください。</p>
      </div>
      <div class="subheading">
        <h3>2. 鍼（うつ伏せ・仰向け）</h3>
        <p>お話とからだの様子に合わせて、うつ伏せ、または仰向けで鍼をしていきます。</p>
      </div>
      <div class="subheading">
        <h3>3. 全身のもみほぐし</h3>
        <p>鍼のあとは、全身をもみほぐしていきます。こわばりやすい首・肩・背中まわりも、ていねいにほぐします。</p>
      </div>
      <div class="subheading">
        <h3>4. お仕上げ</h3>
        <p>からだの感じをお伺いしながら、施術のあとの過ごし方や、次に来るときの目安をお伝えします。</p>
      </div>
      <div class="column_guide">
        <p>{{ config('salon.name') }}の鍼灸治療のメニューと料金は、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu2') }}" data-gtm-event="select_menu" data-gtm-menu-name="鍼灸治療メニュー" data-gtm-cta-position="column_mid">鍼灸治療のメニューと料金を見る</a>
      </div>
    </div>

    <div id="frequency" class="headline">
      <h2>自律神経の鍼はどのくらいの頻度で通う？</h2>
      <p>自律神経のバランスは、毎日の生活リズムやストレスの影響を受けやすいものです。そのため、1回だけで終わりにするより、<strong>ある程度のペースで続けていく</strong>方が多いです。一般的には、はじめは間隔を短めにして、からだの様子が落ち着いてきたら、少しずつ間隔をあけていく方が多いと言われています。</p>
      <p>あくまで目安で、感じ方やペースには個人差があります。「忙しい時期の前にだけ受けたい」「季節の変わり目に受けたい」といった通い方をされる方もいらっしゃいます。お仕事やご予定、ご予算に合わせて、無理なく続けられるペースを一緒に考えていきます。</p>
      <div class="subheading">
        <h3>施術の時間はどう選ぶ？</h3>
        <p>どのコースがよいかは、お悩みやその日の体調、ご予定に合わせてご相談ください。気になるところが多い方や、ゆっくりからだを休めたい方は、長めのコースもお選びいただけます。</p>
      </div>
    </div>

    <div id="care" class="headline">
      <h2>鍼のあとの過ごし方と、毎日のセルフケア</h2>
      <div class="subheading">
        <h3>施術を受けた日の過ごし方</h3>
        <p>鍼のあとは、からだがリラックスした状態になっていると言われています。当日は次のことを心がけて、ゆっくりお過ごしください。</p>
        <ul class="point1">
          <li>長風呂・サウナ・たくさんの飲酒・激しい運動は控えめにする</li>
          <li>お水や白湯で、こまめに水分をとる</li>
          <li>からだを冷やさないようにする</li>
          <li>夜は早めに休む</li>
        </ul>
        <p>施術のあとに、眠気やだるさを感じる方もいらっしゃいます。多くは時間とともに落ち着いていくと言われていますが、気になることがあればご相談ください。</p>
      </div>
      <div class="subheading">
        <h3>毎日の生活でできること</h3>
        <p>自律神経のバランスは、毎日の過ごし方にも左右されると言われています。できそうなことから、ひとつずつ取り入れてみてください。</p>
        <ul class="point1">
          <li>朝おきたら、カーテンをあけて光を浴びる</li>
          <li>寝る前は、スマートフォンを見る時間を少し短くする</li>
          <li>ぬるめのお湯に、ゆっくりつかる</li>
          <li>首やお腹、足もとを冷やさないようにする</li>
          <li>ゆっくり息をはく深呼吸をする</li>
        </ul>
      </div>
    </div>

    <div id="caution" class="headline">
      <h2>先に医療機関に相談したい場合</h2>
      <p>次のような場合は、鍼灸を受ける前に、まず医療機関を受診してください。</p>
      <ul class="point1">
        <li>強い動悸、息苦しさ、胸の痛みがある</li>
        <li>めまいや頭痛が急に強くなった、いつもと違う</li>
        <li>眠れない日が長く続いている</li>
        <li>気持ちの落ちこみが続いて、日常生活がつらい</li>
        <li>体重が急に減った、熱が続くなど、ほかにも気になる変化がある</li>
      </ul>
      <p>自律神経の乱れと似た症状でも、ほかの病気が隠れていることがあります。通院中の方やお薬を飲んでいる方、妊娠中の方は、かかりつけの医師にもご相談のうえ、ご予約のときにお知らせください。</p>
    </div>

    <div id="column-faq" class="headline">
      <h2>自律神経と鍼灸のよくある質問</h2>
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
      <h2>水戸市で自律神経の鍼灸を受けるなら{{ config('salon.name') }}</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(3) }}.webp" type="image/webp">
          <img src="{{ $img(3) }}.jpg" alt="花が飾られた、サロンの受付" width="1200" height="900" loading="lazy">
        </picture>
      </div>
      <p>水戸市米沢町の{{ config('salon.name') }}では、首や肩のこり、疲れ、自律神経の乱れが気になる方に向けて、鍼灸治療を行っています。鍼灸師歴20年以上の院長が、その日のからだの様子をお伺いしながら施術します。</p>
      <div class="subheading">
        <h3>鍼灸治療のメニューと料金</h3>
        <ul class="point2">
          @foreach ($items as $item)
            <li>{{ $item['name'] }}　{{ $yen($item['price']) }}@if ($item['first_price'])（はじめての方 {{ $yen($item['first_price']) }}）@endif</li>
          @endforeach
        </ul>
      </div>
      @if ($campaignItems->isNotEmpty())
      <div class="subheading">
        <h3>自律神経の鍼を組み合わせたキャンペーンコース</h3>
        <p>{{ $campaignItems->first()['period'] }}のキャンペーンでは、自律神経へのアプローチを目的とした鍼に、オイルマッサージやカッピングなどを組み合わせたコースもご用意しています。</p>
        <ul class="point2">
          @foreach ($campaignItems as $item)
            <li>{{ $item['name'] }}@if (!str_contains($item['name'], $item['time']))（{{ $item['time'] }}）@endif　{{ $yen($item['price']) }}@if ($item['regular'])（通常 {{ $yen($item['regular']) }}）@endif</li>
          @endforeach
        </ul>
        <p><a href="{{ url('campaign/term') }}" data-gtm-event="select_content" data-gtm-cta-position="column_mid">キャンペーンの内容を見る</a></p>
      </div>
      @endif
      <p>料金は税込です。男性の方もご利用いただけます。駐車場{{ config('salon.parking_spaces') }}台、{{ config('salon.business_hours.closed_day_label') }}です。</p>
      <p>「どのコースが合うかわからない」「鍼ははじめてで少し不安」という方も、お気軽にご相談ください。</p>
    </div>

    @php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。「なんとなく調子がよくない」という段階でも大丈夫です。からだのことで気になることがあれば、気軽にご相談くださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu2') }}" data-gtm-event="select_menu" data-gtm-menu-name="鍼灸治療メニュー" data-gtm-cta-position="column_end">鍼灸治療のメニューと料金</a></li>
        <li><a href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">はじめての方へ（来店の流れ・持ち物）</a></li>
        <li><a href="{{ url('column/column2') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column2.short') }}</a></li>
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
