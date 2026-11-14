@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['美容鍼のあと、メイクはすぐにしてもいいですか？', '施術のあとにメイクをすることはできますが、当日はお肌に負担をかけないよう、軽めのメイクにするのがおすすめです。施術の前にクレンジングを行うお店が多いので、お直し用のコスメを持っていくと安心です。'],
    ['美容鍼のあとに内出血が出ることはありますか？', 'まれに、鍼をした場所に小さな内出血が出ることがあります。多くは1〜2週間ほどで目立たなくなると言われています。こすったり、強く揉んだりしないようにしましょう。気になるときは、施術を受けたお店にご相談ください。'],
    ['美容鍼の当日にお風呂に入ってもいいですか？', 'シャワーや、ぬるめのお湯に短めに入るのは問題ないことが多いです。長風呂やサウナは、当日は控えめにしましょう。'],
    ['美容鍼のあと、お酒を飲んでもいいですか？', '当日は、たくさんの飲酒は控えめにするのがおすすめです。施術のあとは血の巡りがよくなっていると言われ、酔いやすく感じる方もいらっしゃいます。'],
    ['美容鍼のあとに眠くなったり、だるくなったりするのはなぜですか？', '施術でからだがリラックスした状態になり、眠気やだるさを感じる方がいらっしゃいます。多くは当日〜翌日ほどで落ち着くと言われています。その日は無理をせず、ゆっくり休みましょう。'],
    ['結婚式や大切な予定の前に美容鍼を受けてもいいですか？', 'まれに内出血が出ることがあるため、大切なご予定の直前は避け、1〜2週間ほど前までに受けておくと安心です。はじめての方は、早めに一度受けて、ご自身の肌の反応を知っておくのがおすすめです。'],
    ['次の美容鍼はいつ受ければいいですか？', 'はじめの1か月は1〜2週間に1回、その後は月に1〜2回が目安と言われています。お肌やからだの様子を見ながら、施術者と相談して決めていきましょう。'],
  ];
  $menu = config('menus.pages.menu1');
  $items = collect($menu['groups'])->flatMap(fn ($group) => $group['items'])->take(3);
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first();
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
      <x-top.photo name="course24" alt="美容鍼のあと、フェイスマスクでお肌を整えている様子" :eager="true" />
    </div>
    <h1>美容鍼のあとに気をつけること<br>当日の過ごし方・メイク・内出血・翌日の変化</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>美容鍼を受けたあと、「メイクはすぐにしていいの？」「お風呂やお酒は大丈夫？」「内出血が出たらどうしよう」と気になる方も多いのではないでしょうか。</p>
    <p>この記事では、美容鍼のあとの当日の過ごし方、メイク、内出血、眠気やだるさ、翌日以降の変化、大切な予定がある方の注意点を、水戸市の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>当日は、<strong>長風呂・サウナ・たくさんの飲酒・激しい運動</strong>を控えめにして、ゆっくり過ごしましょう</li>
      <li>メイクはできますが、当日は<strong>軽めのメイク</strong>がおすすめです</li>
      <li>まれに<strong>内出血</strong>が出ることがあり、多くは<strong>1〜2週間ほど</strong>で目立たなくなると言われています</li>
      <li>大切な予定がある方は、<strong>1〜2週間ほど前まで</strong>に受けておくと安心です</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#today">美容鍼の当日の過ごし方</a></li>
      <li><a href="#makeup">メイクはいつからしていい？</a></li>
      <li><a href="#bruise">内出血が出たときは</a></li>
      <li><a href="#sleepy">眠気やだるさを感じたときは</a></li>
      <li><a href="#nextday">翌日以降に感じる変化</a></li>
      <li><a href="#schedule">結婚式・撮影など、大切な予定がある方は</a></li>
      <li><a href="#caution">美容鍼の前に相談した方がよい場合</a></li>
      <li><a href="#column-faq">美容鍼のあとのよくある質問</a></li>
      <li><a href="#rio">水戸市で美容鍼を受けるなら{{ config('salon.name') }}</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="today" class="headline">
      <h2>美容鍼の当日の過ごし方</h2>
      <p>美容鍼のあとは、からだがリラックスした状態になっていると言われています。当日は次のことを心がけて、ゆっくり過ごしましょう。</p>
      <div class="subheading">
        <h3>控えめにしたいこと</h3>
        <ul class="point1">
          <li>長風呂・サウナ・岩盤浴</li>
          <li>たくさんの飲酒</li>
          <li>激しい運動</li>
          <li>お顔を強くこする・マッサージする</li>
        </ul>
      </div>
      <div class="subheading">
        <h3>おすすめの過ごし方</h3>
        <ul class="point1">
          <li>お水や白湯で、こまめに水分をとる</li>
          <li>化粧水などで、いつもどおり保湿する</li>
          <li>夜は早めに休む</li>
        </ul>
        <p>お風呂は、シャワーやぬるめのお湯に短めに入る程度にしましょう。</p>
      </div>
    </div>

    <div id="makeup" class="headline">
      <h2>メイクはいつからしていい？</h2>
      <p>美容鍼のあとにメイクをすることはできます。ただし、当日はお肌に負担をかけないよう、<strong>軽めのメイク</strong>にするのがおすすめです。</p>
      <p>お顔の施術の前にクレンジングを行うお店が多いので、施術のあとにお出かけの予定がある方は、<strong>お直し用のコスメ</strong>を持っていくと安心です。</p>
      <p>{{ config('salon.name') }}でも、お顔の施術の前にクレンジングを行います。メイクをしたままお越しいただけます。</p>
    </div>

    <div id="bruise" class="headline">
      <h2>内出血が出たときは</h2>
      <p>美容鍼では、<strong>まれに鍼をした場所に小さな内出血が出る</strong>ことがあります。目の周りなど、皮膚の薄いところに出やすいと言われています。</p>
      <p>内出血は、少しずつ黄色っぽい色に変わりながら、<strong>多くは1〜2週間ほどで目立たなくなる</strong>と言われています。次のことに気をつけましょう。</p>
      <ul class="point1">
        <li>こすったり、強く揉んだりしない</li>
        <li>気になる場合は、コンシーラーなどのメイクで隠す</li>
        <li>痛みや腫れが続く、なかなか消えないときは、施術を受けたお店や医療機関に相談する</li>
      </ul>
    </div>

    <div id="sleepy" class="headline">
      <h2>眠気やだるさを感じたときは</h2>
      <p>美容鍼のあとに、<strong>眠気やだるさを感じる方</strong>がいらっしゃいます。施術でからだがリラックスした状態になるためと言われていて、多くは当日〜翌日ほどで落ち着きます。</p>
      <p>車の運転などは、ぼんやりしていないか確かめてからにしましょう。その日は無理をせず、ゆっくり休むのがおすすめです。</p>
    </div>

    <div id="nextday" class="headline">
      <h2>翌日以降に感じる変化</h2>
      <div class="image">
        <x-top.photo name="course6" alt="お顔をやさしくケアしている様子" />
      </div>
      <p>美容鍼は、施術の直後に引き締まった印象を、<strong>2〜3日後にハリやうるおい</strong>を感じる方が多いと言われています。翌日は、お顔のむくみが気にならなくなったと感じる方もいらっしゃいます。</p>
      <p>変化の感じ方には個人差があり、1回目では変化をあまり感じない方もいます。回数ごとの変化の目安や通うペースは、<a href="{{ url('column/column1') }}">「{{ config('columns.column1.short') }}」</a>の記事で詳しくご紹介しています。</p>
    </div>

    <div id="schedule" class="headline">
      <h2>結婚式・撮影など、大切な予定がある方は</h2>
      <p>まれに内出血が出ることがあるため、結婚式や撮影など、大切なご予定の<strong>直前は避けて、1〜2週間ほど前まで</strong>に受けておくと安心です。</p>
      <p>美容鍼がはじめての方は、早めに一度受けて、ご自身の肌の反応を知っておくのがおすすめです。結婚式に向けて計画的に準備したい方には、<a href="{{ url('menu/menu10') }}">ブライダル鍼灸のメニュー</a>もご用意しています。</p>
    </div>

    <div id="caution" class="headline">
      <h2>美容鍼の前に相談した方がよい場合</h2>
      <p>次にあてはまる方は、美容鍼を控えた方がよい場合や、施術の内容を調整した方がよい場合があります。ご予約のときや施術の前にお知らせください。</p>
      <ul class="point1">
        <li>熱がある、体調がすぐれない</li>
        <li>お酒を飲んだあと</li>
        <li>お顔に、傷・炎症・日焼け・皮膚のトラブルがある</li>
        <li>血液をサラサラにするお薬を飲んでいる、出血しやすい</li>
        <li>金属アレルギーがある</li>
        <li>妊娠中、または妊娠の可能性がある</li>
      </ul>
      <p>通院中の方やお薬を飲んでいる方は、かかりつけの医師にもご相談ください。</p>
    </div>

    <div id="column-faq" class="headline">
      <h2>美容鍼のあとのよくある質問</h2>
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
      <h2>水戸市で美容鍼を受けるなら{{ config('salon.name') }}</h2>
      <p>水戸市米沢町の{{ config('salon.name') }}では、施術の前にお悩みや体調をお伺いし、施術のあとの過ごし方もお伝えしています。気になることは、施術の前でもあとでも、遠慮なくお聞きください。</p>
      <ul class="point2">
        @foreach ($items as $item)
          <li>{{ $item['name'] }}　{{ $yen($item['price']) }}@if ($item['first_price'])（はじめての方 {{ $yen($item['first_price']) }}）@endif</li>
        @endforeach
      </ul>
      <p>料金は税込です。男性の方もご利用いただけます。駐車場{{ config('salon.parking_spaces') }}台、{{ config('salon.business_hours.closed_day_label') }}です。</p>
      <div class="column_guide">
        <p>{{ config('salon.name') }}の美容鍼のメニューと料金は、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_mid">美容鍼灸のメニューと料金を見る</a>
      </div>
    </div>

    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。施術のあとの過ごし方で気になることがあれば、気軽にご相談くださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_end">美容鍼灸のメニューと料金</a></li>
        <li><a href="{{ url('column/column3') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column3.short') }}</a></li>
        <li><a href="{{ url('column/column1') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column1.short') }}</a></li>
      </ul>

      <div class="column_reserve">
        <p>どのメニューが合うかわからない方も、まずはLINEでお気軽にご相談ください。</p>
        <div class="column_reserve_buttons">
          <a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_primary" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="column_end">Webで予約する</a>
          <a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" class="column_reserve_secondary" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="column_end">LINEで相談する</a>
        </div>
        <a href="{{ url('reserve') }}" class="column_reserve_more" data-gtm-event="begin_booking" data-gtm-cta-position="column_end">お電話・HotPepperでのご予約はこちら</a>
      </div>
    </div>

  </div>
</section>
