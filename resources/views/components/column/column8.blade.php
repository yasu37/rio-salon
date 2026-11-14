@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['ブライダル美容鍼はいつから始めればいいですか？', '挙式の数か月前から始めると、肌の反応を確かめながら、無理のないペースで準備しやすいと言われています。短い期間で集中してケアする方もいらっしゃいます。前撮りがある方は、前撮りの日から逆算して考えましょう。'],
    ['ブライダル美容鍼は何回くらい受ければいいですか？', '回数に決まりはありません。変化の感じ方には個人差があるため、挙式までの期間やお肌の様子に合わせてご相談しながら決めていきます。RIO鍼灸サロンでは、期間に合わせたコースをご用意しています。'],
    ['結婚式の直前に美容鍼を受けても大丈夫ですか？', '美容鍼では、まれに小さな内出血が出ることがあります。とくに美容鍼がはじめての方は、挙式の直前にはじめて受けるのは避け、早めに一度受けて、ご自身の肌の反応を知っておくと安心です。'],
    ['最後の美容鍼は、挙式の何日前に受けるのがいいですか？', 'まれに内出血が出ることを考えて、挙式の直前は避け、日にちに余裕をもって受けておくと安心です。これまでに美容鍼を受けていて肌の反応がわかっている方は、ご予約のときにご相談ください。'],
    ['美容鍼で内出血が出たら、結婚式までに消えますか？', '内出血が目立たなくなるまでの日数には、個人差があります。そのため、大切な日の直前は避けて計画するのがおすすめです。'],
    ['挙式まで1か月を切っていても間に合いますか？', '残りの期間に合わせたケアをご提案できます。ただし、美容鍼がはじめての方が挙式の直前に受けるのは避けた方が安心なので、気になったら早めにご相談ください。'],
    ['ブライダルエステとブライダル美容鍼は、いつから始めるのが一般的ですか？', 'ブライダルエステもブライダル美容鍼も、挙式の数か月前から、ゆとりをもって始める方が多いと言われています。日程に合わせてご相談ください。'],
  ];
  // config/menus.php の menu10 のコース（並び順：1Day・1か月集中・2〜3か月ベーシック）。コースを変えたら、本文のコース説明も見直す
  $items = collect(config('menus.pages.menu10.groups'))->flatMap(fn ($group) => $group['items'])->values();
  $oneday = $items[0];
  $month = $items[1];
  $basic = $items[2];
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $img = fn ($n) => asset("img/column8/column{$n}");
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
        <img src="{{ $img(0) }}.jpg" alt="チャペルでブーケを持って立つ、ウェディングドレスの花嫁" width="640" height="427">
      </picture>
    </div>
    <h1>ブライダル美容鍼はいつから始める？<br>挙式までの逆算スケジュールと、直前に気をつけること</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>結婚式に向けて美容鍼を考えはじめたとき、「いつから始めればいいの？」「何回くらい受ければいいの？」「直前に受けても大丈夫？」と迷う方も多いのではないでしょうか。</p>
    <p>この記事では、ブライダル美容鍼を始める時期の目安、回数とペース、挙式の数か月前から当日までの逆算スケジュール、直前に気をつけたいことを、水戸市の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>ブライダル美容鍼は、<strong>挙式の数か月前</strong>から始めると、ゆとりをもって準備しやすいと言われています</li>
      <li>回数は、<strong>挙式までの期間に合わせて</strong>決めていきます。感じ方には個人差があります</li>
      <li>美容鍼では、まれに内出血が出ることがあります。<strong>挙式の直前に、はじめての美容鍼を受けるのは避けましょう</strong></li>
      <li>挙式が近づいたら、<strong>新しい化粧品やはじめての施術はお休み</strong>して、睡眠と体調を整えることを優先します</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#when">ブライダル美容鍼はいつから始める？目安は挙式の数か月前</a></li>
      <li><a href="#howmany">ブライダル美容鍼は何回受ける？回数とペースの目安</a></li>
      <li><a href="#three-months">挙式の数か月前：はじめての美容鍼で肌の反応を知る</a></li>
      <li><a href="#one-month">挙式1か月前：仕上げに向けた集中ケア</a></li>
      <li><a href="#one-week">挙式の直前：ブライダル美容鍼で気をつけること</a></li>
      <li><a href="#day-before">挙式の前日・当日の過ごし方</a></li>
      <li><a href="#esthe">ブライダルエステとブライダル美容鍼、いつから・どうちがう？</a></li>
      <li><a href="#column-faq">ブライダル美容鍼のよくある質問</a></li>
      <li><a href="#rio">水戸市でブライダル美容鍼なら{{ config('salon.name') }}</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="when" class="headline">
      <h2>ブライダル美容鍼はいつから始める？目安は挙式の数か月前</h2>
      <p>ブライダル美容鍼は、<strong>挙式の数か月前から始める</strong>と、ゆとりをもって準備しやすいと言われています。</p>
      <p>早めに始めるとよい理由は、おもに3つあります。</p>
      <ul class="point1">
        <li>はじめての美容鍼で、ご自身の肌の反応（赤み・内出血の出やすさなど）を知っておける</li>
        <li>回数を重ねながら、お肌やからだの様子を見てペースを決められる</li>
        <li>ドレスの試着や打ち合わせなど、ほかの準備と重ならないように予定を組みやすい</li>
      </ul>
      <p>前撮りやフォトウェディングがある方は、<strong>いちばん早い撮影の日</strong>から逆算して考えましょう。</p>
      <p>「もう1か月しかない」という方も、あきらめなくて大丈夫です。残りの期間に合わせたケアの考え方を、このあと順番にご紹介します。</p>
    </div>

    <div id="howmany" class="headline">
      <h2>ブライダル美容鍼は何回受ける？回数とペースの目安</h2>
      <p>ブライダル美容鍼の回数に、決まりはありません。挙式までの期間と、お肌やからだの様子に合わせて考えます。考え方の例は、次のとおりです。</p>
      <ul class="point2">
        <li>挙式まで時間がある方：回数を重ねて、<strong>少しずつ整えていく</strong></li>
        <li>挙式まであまり時間がない方：<strong>短い期間で集中して</strong>ケアする</li>
        <li>挙式の直前に整えたい方：<strong>1日で</strong>時間をかけてケアする</li>
      </ul>
      <p>どのくらいのペースで通うかは、挙式までの日程やお肌の様子に合わせて、ご相談しながら決めていきます。</p>
      <p>美容鍼は、受けた直後に引き締まった印象を感じる方もいれば、何回か続けて変化に気づく方もいらっしゃいます。感じ方には個人差があります。回数ごとの変化の目安は、<a href="{{ url('column/column1') }}">「{{ config('columns.column1.short') }}」</a>の記事でもご紹介しています。</p>
      <div class="subheading">
        <h3>{{ config('salon.name') }}のブライダル鍼灸のコース</h3>
        <p>{{ config('salon.name') }}では、挙式までの期間に合わせて、次の3つのコースをご用意しています。</p>
        <ul class="point2">
          <li>{{ $basic['name'] }}　{{ $yen($basic['price']) }}<br>{{ $basic['for'] }}に</li>
          <li>{{ $month['name'] }}　{{ $yen($month['price']) }}<br>{{ $month['for'] }}に</li>
          <li>{{ $oneday['name'] }}　{{ $yen($oneday['price']) }}<br>{{ $oneday['for'] }}に</li>
        </ul>
        @if (! empty($basic['notes']))
          <p>{{ $basic['name'] }}には、早めのご予約で使える早割があります。</p>
          <ul class="point1">
            @foreach ($basic['notes'] as $note)
              <li>{{ $note }}</li>
            @endforeach
          </ul>
        @endif
        <p>料金は税込です。シェービングをご希望の方は、別途料金がかかります。</p>
      </div>
      <div class="column_guide">
        <p>{{ config('salon.name') }}のブライダル鍼灸のコース内容と料金は、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu10') }}" data-gtm-event="select_menu" data-gtm-menu-name="ブライダル鍼灸メニュー" data-gtm-cta-position="column_mid">ブライダル鍼灸のコースと料金を見る</a>
      </div>
    </div>

    <div id="three-months" class="headline">
      <h2>挙式の数か月前：はじめての美容鍼で肌の反応を知る</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(1) }}.webp" type="image/webp">
          <img src="{{ $img(1) }}.jpg" alt="仰向けの方のお顔に鍼をして、電気を流している様子" width="1200" height="800" loading="lazy">
        </picture>
      </div>
      <p>挙式まで数か月ある時期は、準備を始めやすい時期です。美容鍼がはじめての方は、まず一度受けて、<strong>ご自身の肌がどんな反応をするか</strong>を知っておきましょう。</p>
      <p>このころは、お肌の状態を整えながら、表情筋のこわばりや、首・肩まわりの疲れにも目を向けていきます。結婚式の準備は思った以上に忙しく、からだの疲れが顔に出やすいと感じる方もいらっしゃいます。</p>
      <div class="subheading">
        <h3>この時期にしておきたいこと</h3>
        <ul class="point1">
          <li>はじめての美容鍼を受けて、赤みや内出血の出やすさを知る</li>
          <li>挙式・前撮りの日から逆算して、通う日の予定を立てる</li>
          <li>ピーリングなど、お肌に刺激のあるケアを受けるなら、挙式まで日数のあるこの時期に</li>
          <li>夜ふかしや食生活のみだれに気づいたら、少しずつ整える</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>2〜3か月ベーシックプランの流れ</h3>
        {{-- config/menus.php の menu10「2〜3ヶ月ベーシックプラン : 8回コース」の text に合わせている。コースを変えたらここも見直す --}}
        <p>{{ config('salon.name') }}の{{ $basic['name'] }}では、美容鍼灸を中心に、ハーブピーリング、炭酸や海藻を使ったフェイシャル、姿勢矯正オイルトリートメント、漢方浴を組み合わせて、8回かけて整えていきます。</p>
        <p>回ごとの内容は、お肌やからだの様子を見ながらご案内します。くわしくは<a href="{{ url('menu/menu10') }}">ブライダル鍼灸のページ</a>をご覧ください。</p>
        <p>挙式の3か月前、または2か月前までにご予約いただくと、早割をご利用いただけます。</p>
      </div>
    </div>

    <div id="one-month" class="headline">
      <h2>挙式1か月前：仕上げに向けた集中ケア</h2>
      <p>挙式の1か月前は、ドレスの最終の試着や、ヘアメイクのリハーサルなどが重なりやすい時期です。この時期に、お顔とからだをまとめてケアする方もいらっしゃいます。</p>
      <p>ウェディングドレスは、背中やデコルテ、二の腕が見えるデザインが多いものです。お顔だけでなく、<strong>肩まわりや姿勢</strong>を整えておくと、ドレス姿の印象が変わったと感じる方もいらっしゃいます。</p>
      <div class="subheading">
        <h3>1か月集中ケアの流れ</h3>
        {{-- config/menus.php の menu10「1ヶ月集中ケア : 4回コース」の text に合わせている。コースを変えたらここも見直す --}}
        <p>{{ config('salon.name') }}の{{ $month['name'] }}は、4回でお顔とからだを整えるコースです。</p>
        <p>美容鍼灸を中心に、からだのケアも組み合わせて進めていきます。最後の回は、挙式の直前を避けて受けられるよう、日程を逆算しておくと安心です。</p>
      </div>
      <div class="subheading">
        <h3>挙式まで1か月を切ってしまった方は</h3>
        <p>{{ config('salon.name') }}には、{{ $oneday['for'] }}のための{{ $oneday['name'] }}もあります。角質ケア、美容鍼、美容液マスク、姿勢矯正オイルトリートメントを、1日で受けていただくコースです。</p>
        <p>ただし、<strong>美容鍼がはじめての方は、挙式の直前にはじめて受けるのは避けた方が安心</strong>です。直前のケアを考えている方も、できればその前に一度美容鍼を受けて、肌の反応を知っておきましょう。日程は、ご予約のときにご相談ください。</p>
      </div>
    </div>

    <div id="one-week" class="headline">
      <h2>挙式の直前：ブライダル美容鍼で気をつけること</h2>
      <p>挙式が近づいてきたら、「新しいことを足す」よりも、「いまの状態を整える」ことを大切にする時期です。</p>
      <div class="subheading">
        <h3>はじめての美容鍼は、この時期より前に</h3>
        <p>美容鍼では、まれに鍼をした場所に小さな内出血が出ることがあります。目立たなくなるまでの日数には、個人差があります。</p>
        <p>そのため、<strong>挙式の直前に、はじめての美容鍼を受けるのは避けましょう</strong>。早めに一度受けて、ご自身の肌の反応を知っておくと安心です。内出血が出たときの過ごし方は、<a href="{{ url('column/column4') }}">「{{ config('columns.column4.short') }}」</a>の記事で詳しくご紹介しています。</p>
      </div>
      <div class="subheading">
        <h3>この時期に控えたいこと</h3>
        <ul class="point1">
          <li>使ったことのない化粧品やパックを試す</li>
          <li>はじめてのピーリング・脱毛・エステなど、お肌に刺激のある施術</li>
          <li>長時間の日焼け</li>
          <li>夜ふかしや、たくさんの飲酒</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>この時期にしておきたいこと</h3>
        <ul class="point1">
          <li>いつもの化粧水などで、しっかり保湿する</li>
          <li>お水や白湯で、こまめに水分をとる</li>
          <li>できるだけ早めに休んで、睡眠時間を確保する</li>
          <li>顔そり（シェービング）の日を、ヘアメイクの担当の方と確認しておく</li>
        </ul>
        <p>結婚式の準備で忙しい時期ですが、からだを休める時間も予定に入れておきましょう。</p>
      </div>
    </div>

    <div id="day-before" class="headline">
      <h2>挙式の前日・当日の過ごし方</h2>
      <p>前日と当日は、特別なことをするより、<strong>いつもどおりに過ごして、しっかり休む</strong>ことがいちばんです。</p>
      <div class="subheading">
        <h3>前日</h3>
        <ul class="point1">
          <li>塩分の多い食事や、たくさんの飲酒は控えめにする</li>
          <li>ぬるめのお湯につかって、からだを温める</li>
          <li>新しい化粧品は使わず、いつものスキンケアで保湿する</li>
          <li>早めに休む</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>当日</h3>
        <ul class="point1">
          <li>朝はいつもどおりに洗顔と保湿をする</li>
          <li>軽くでも朝ごはんを食べ、こまめに水分をとる</li>
          <li>緊張したときは、ゆっくり深呼吸をして肩の力を抜く</li>
        </ul>
        <p>むくみが気になる朝は、首すじや耳のまわりをやさしくさする程度にしておきましょう。強くこすったり揉んだりするのは避けます。</p>
      </div>
    </div>

    <div id="esthe" class="headline">
      <h2>ブライダルエステとブライダル美容鍼、いつから・どうちがう？</h2>
      <p>ブライダルエステもブライダル美容鍼も、挙式の<strong>数か月前から</strong>、ゆとりをもって始める方が多いと言われています。</p>
      <div class="subheading">
        <h3>ちがいの目安</h3>
        <ul class="point2">
          <li>ブライダルエステ：お肌の表面のお手入れや、トリートメントでのリラックスが中心</li>
          <li>ブライダル美容鍼：細い鍼でツボや表情筋に働きかけ、お顔のこわばりをほぐしていく施術</li>
        </ul>
        <p>どちらがよい、というものではなく、目的や好みに合わせて選ぶものです。{{ config('salon.name') }}のブライダル鍼灸は、美容鍼灸に、フェイシャルやオイルトリートメント、漢方浴を組み合わせて、お顔とからだの両方を整えていくコースです。</p>
        <p>エステに通っている方が、美容鍼を組み合わせることもできます。施術の日が重ならないように、それぞれの予定をお知らせください。</p>
      </div>
      <div class="subheading">
        <h3>美容鍼を控えた方がよい場合</h3>
        <p>次にあてはまる方は、美容鍼を控えた方がよい場合や、施術の内容を調整した方がよい場合があります。ご予約のときや施術の前にお知らせください。</p>
        <ul class="point1">
          <li>熱がある、体調がすぐれない</li>
          <li>お顔に、傷・炎症・日焼け・皮膚のトラブルがある</li>
          <li>血液をサラサラにするお薬を飲んでいる、出血しやすい</li>
          <li>金属アレルギーがある</li>
          <li>妊娠中、または妊娠の可能性がある</li>
        </ul>
        <p>妊娠中の方には、<a href="{{ url('menu/menu9') }}">マタニティ向けのメニュー</a>もご用意しています。</p>
      </div>
    </div>

    <div id="column-faq" class="headline">
      <h2>ブライダル美容鍼のよくある質問</h2>
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
      <h2>水戸市でブライダル美容鍼なら{{ config('salon.name') }}</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(3) }}.webp" type="image/webp">
          <img src="{{ $img(3) }}.jpg" alt="白い背景に置かれた、2つの結婚指輪" width="640" height="352" loading="lazy">
        </picture>
      </div>
      <p>水戸市米沢町の{{ config('salon.name') }}では、挙式までの期間に合わせて選べるブライダル鍼灸のコースをご用意しています。鍼灸師歴20年以上の院長が、お肌やからだの様子、挙式や前撮りの日程をお伺いしながら施術します。</p>
      <ul class="point2">
        @foreach ($items as $item)
          <li>{{ $item['name'] }}　{{ $yen($item['price']) }}</li>
        @endforeach
      </ul>
      <p>料金は税込です。駐車場{{ config('salon.parking_spaces') }}台、{{ config('salon.business_hours.closed_day_label') }}です。</p>
      <p>「どのコースが合うかわからない」「挙式までの日数で間に合うか知りたい」という方も、お気軽にご相談ください。</p>
    </div>

    @php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。挙式までのスケジュールや、どのコースが合うかなど、気になることがあれば気軽にご相談くださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu10') }}" data-gtm-event="select_menu" data-gtm-menu-name="ブライダル鍼灸メニュー" data-gtm-cta-position="column_end">ブライダル鍼灸のコースと料金</a></li>
        <li><a href="{{ url('column/column4') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column4.short') }}</a></li>
        <li><a href="{{ url('column/column1') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column1.short') }}</a></li>
        <li><a href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">はじめての方へ（来店の流れ・持ち物）</a></li>
      </ul>

      <div class="column_reserve">
        <p>挙式までの日数に合うコースがわからない方も、まずはLINEでお気軽にご相談ください。</p>
        <div class="column_reserve_buttons">
          <a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_primary" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="column_end">Webで予約する</a>
          <a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_secondary" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="column_end">LINEで相談する</a>
        </div>
        <a href="{{ url('reserve') }}" class="column_reserve_more" data-gtm-event="begin_booking" data-gtm-cta-position="column_end">お電話・HotPepperでのご予約はこちら</a>
      </div>
    </div>

  </div>
</section>
