@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['カッピングの跡は何日で消えますか？', '数日〜1週間ほどで目立たなくなることが多いと言われています。色が濃く出た場合は、1〜2週間ほどかかることもあります。跡の残り方には個人差があり、その日の体調や部位によっても変わります。'],
    ['跡が濃い紫色になりました。悪いことですか？', '色が濃いからといって、すぐに悪いというわけではありません。東洋医学では、濃い色の跡を血の巡りが滞っているサインと考えることがありますが、病気の診断になるものではありません。気になることがあれば、施術のときにお気軽にご相談ください。'],
    ['カッピングの跡は痛みますか？', '跡に痛みを感じることは少ないと言われています。まれに、かゆみや軽い違和感を感じる方もいらっしゃいます。強い痛みや腫れが続く場合は、ご相談ください。'],
    ['跡がつかないようにすることはできますか？', '吸引の強さや時間によって跡の残り方は変わりますが、まったく残らないようにするのは難しい施術です。結婚式や水着を着る予定など、跡が気になるご予定がある方は、ご予約のときにお知らせください。'],
    ['施術を受けた日にお風呂に入ってもいいですか？', 'シャワーや、ぬるめのお湯に短めに入るのは問題ないことが多いです。当日は長風呂やサウナ、たくさんの飲酒、激しい運動は控えめにして、ゆっくりお過ごしください。'],
    ['次のカッピングはいつ受けられますか？', '跡が消えてから次を受けるのが一般的な目安です。はじめは1〜2週間に1回、その後は月に1〜2回のペースで続けられる方が多いです。からだの様子を見ながら一緒に決めていきます。'],
    ['男性も受けられますか？', 'はい、男性の方もご利用いただけます。肩や背中のこり、重だるさが気になる方に選ばれています。'],
  ];
  $menu = config('menus.pages.menu7');
  $items = collect($menu['groups'])->flatMap(fn ($group) => $group['items']);
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $img = fn ($n) => asset("img/column2/column{$n}");
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
        <img src="{{ $img(0) }}.jpg" alt="うつ伏せの方の背中と肩にカッピングのカップを並べている様子" width="1280" height="854">
      </picture>
    </div>
    <h1>カッピングの跡はいつ消える？<br>色の違いと消えるまでの日数、施術後の過ごし方</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>カッピング（吸い玉）を受けたあと、背中に丸い跡が残って「これはいつ消えるの？」「色が濃いのは大丈夫？」と気になった方も多いのではないでしょうか。</p>
    <p>この記事では、カッピングの跡が消えるまでの日数の目安、跡ができる理由と色の違い、早く目立たなくするための過ごし方、結婚式や水着などのご予定がある方の注意点を、水戸市の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>カッピングの跡は、<strong>数日〜1週間ほど</strong>で目立たなくなることが多く、色が濃い場合は<strong>1〜2週間</strong>ほどかかることもあります</li>
      <li>跡は、吸引で皮膚の下の細い血管から血液の成分がにじみ出て、色として見えているものと言われています</li>
      <li>色の出方は、体調や部位、吸引の強さによって変わります。<strong>色が濃い＝悪い、というわけではありません</strong></li>
      <li>当日は長風呂・サウナ・飲酒・激しい運動を控えめに。跡を見せたくない予定がある方は、<strong>2週間ほど前まで</strong>に受けるのが安心です</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#days">カッピングの跡はいつ消える？日数の目安</a></li>
      <li><a href="#why">カッピングの跡はなぜできる？</a></li>
      <li><a href="#color">跡の色の違い（薄い・濃い・紫）</a></li>
      <li><a href="#care">跡を早く目立たなくするための過ごし方</a></li>
      <li><a href="#schedule">結婚式・水着など、予定がある方は</a></li>
      <li><a href="#frequency">次のカッピングはいつ？頻度の目安</a></li>
      <li><a href="#caution">カッピングを控えた方がよい場合</a></li>
      <li><a href="#column-faq">カッピングの跡のよくある質問</a></li>
      <li><a href="#rio">水戸市でカッピングを受けるなら{{ config('salon.name') }}</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="days" class="headline">
      <h2>カッピングの跡はいつ消える？日数の目安</h2>
      <p>カッピングの跡は、<strong>数日〜1週間ほどで目立たなくなることが多い</strong>と言われています。色が濃く出た場合は、<strong>1〜2週間ほど</strong>かかることもあります。</p>
      <p>跡は少しずつ薄くなり、赤紫色から茶色っぽい色、黄色っぽい色へと変わりながら消えていくのが一般的です。消えるまでの日数には個人差があり、その日の体調や部位、吸引の強さによっても変わります。</p>
      <div class="subheading">
        <h3>色ごとの消えるまでの目安</h3>
        <ul class="point2">
          <li>薄いピンク・赤色：当日〜数日ほど</li>
          <li>赤紫色：数日〜1週間ほど</li>
          <li>濃い紫色・黒っぽい色：1〜2週間ほど</li>
        </ul>
        <p>あくまで一般的な目安です。2週間以上たっても消えない場合や、痛み・腫れが続く場合は、施術を受けたお店や医療機関にご相談ください。</p>
      </div>
    </div>

    <div id="why" class="headline">
      <h2>カッピングの跡はなぜできる？</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(1) }}.webp" type="image/webp">
          <img src="{{ $img(1) }}.jpg" alt="背中にカップを付けて吸引している、カッピングの施術中の様子" width="1280" height="854" loading="lazy">
        </picture>
      </div>
      <p>カッピングは、カップの中の空気を抜いて皮膚を吸い上げる施術です。吸い上げられることで、皮膚の下にある細い血管から血液の成分がにじみ出て、それが皮膚の上から丸い色として見えている、と言われています。</p>
      <p>ぶつけてできるあざと見た目は似ていますが、強い衝撃が加わったわけではないので、<strong>跡に痛みを感じることは少ない</strong>のが一般的です。</p>
      <p>カッピングは、古くから東洋でも西洋でも行われてきた技法です。吸引して皮膚や筋肉を持ち上げることで、肩まわりや背中の重だるさが気になる方に選ばれています。感じ方には個人差があります。</p>
    </div>

    <div id="color" class="headline">
      <h2>跡の色の違い（薄い・濃い・紫）</h2>
      <p>同じように吸引しても、跡の色は人によって、また同じ方でも部位やその日の体調によって変わります。</p>
      <div class="subheading">
        <h3>薄いピンク・赤色の跡</h3>
        <p>比較的早く消えることが多い跡です。跡がほとんど残らない方もいらっしゃいます。</p>
      </div>
      <div class="subheading">
        <h3>赤紫色・濃い紫色の跡</h3>
        <p>東洋医学では、色が濃く出た跡を、血の巡りが滞った状態（「瘀血（おけつ）」と呼ばれます）のサインと考えることがあります。肩や背中のこりが気になる部分に、濃く出やすいと感じる方もいらっしゃいます。</p>
        <p>ただし、跡の色は病気の診断になるものではありません。<strong>色が濃いからといって、すぐに悪いというわけではない</strong>ので、心配しすぎなくて大丈夫です。</p>
      </div>
      <div class="subheading">
        <h3>回数を重ねると、色の出方が変わることも</h3>
        <p>続けて受けるうちに、跡の色が前より薄くなったと感じる方もいらっしゃいます。色の変化は、からだの様子を知るひとつの目安として、施術のときに一緒に見ていきます。</p>
      </div>
    </div>

    <div id="care" class="headline">
      <h2>跡を早く目立たなくするための過ごし方</h2>
      <p>跡そのものを今すぐ消す方法はありませんが、次のような過ごし方を心がけると、からだの巡りを妨げにくいと言われています。</p>
      <ul class="point1">
        <li>当日は、長風呂・サウナ・飲酒・激しい運動を控えめにする</li>
        <li>お水や白湯で、こまめに水分をとる</li>
        <li>からだを冷やさないようにする</li>
        <li>跡をこすったり、強く揉んだりしない</li>
        <li>夜はしっかり眠る</li>
      </ul>
      <p>当日のお風呂は、シャワーやぬるめのお湯に短めに入る程度にしましょう。施術のあとは眠気やだるさを感じる方もいらっしゃるので、ゆっくりお過ごしください。</p>
    </div>

    <div id="schedule" class="headline">
      <h2>結婚式・水着など、予定がある方は</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(2) }}.webp" type="image/webp">
          <img src="{{ $img(2) }}.jpg" alt="脚の裏側にカッピングのカップを並べている様子" width="1280" height="854" loading="lazy">
        </picture>
      </div>
      <p>カッピングの跡は、施術を受けた場所にしばらく残ります。次のようなご予定がある方は、<strong>2週間ほど前まで</strong>に受けるか、ご予定のあとに受けるのが安心です。</p>
      <ul class="point1">
        <li>結婚式やパーティー（背中の開いたドレス）</li>
        <li>海やプール、温泉</li>
        <li>撮影やスポーツの試合</li>
        <li>健康診断・病院での診察</li>
      </ul>
      <p>健康診断や病院で跡を見られたときは、「カッピングの跡です」と伝えると安心です。</p>
      <div class="subheading">
        <h3>{{ config('salon.name') }}のカッピングで跡が出る場所</h3>
        <p>コースによって、カッピングを行う場所が変わります。</p>
        {{-- config/menus.php の menu7 の各コースの説明（text）に合わせている。コースを変えたらここも見直す --}}
        <ul class="point2">
          <li>全身カッピングオイル 60分：上半身・下半身の背中側と、デコルテ</li>
          <li>全身カッピングオイル 90分：からだの背中側と前側（うつ伏せ・仰向け）</li>
          <li>全身カッピングオイル 120分：お腹まわりを含めた全身</li>
          <li>腸揉みカッピングオイル 45分：お腹まわり</li>
        </ul>
        <p>跡が気になるご予定がある方は、ご予約のときにお知らせください。</p>
      </div>
    </div>

    <div id="frequency" class="headline">
      <h2>次のカッピングはいつ？頻度の目安</h2>
      <p>次のカッピングは、<strong>前回の跡が消えてから</strong>受けるのが一般的な目安です。跡が残っている場所に重ねて行うのは避けるのが一般的です。</p>
      <p>はじめは1〜2週間に1回、その後は月に1〜2回のペースで、からだの調子を整える時間として続けていらっしゃる方が多いです。お仕事や予定に合わせて、無理のないペースを一緒に決めていきます。</p>
      <div class="column_guide">
        <p>{{ config('salon.name') }}のカッピングのメニューと料金は、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu7') }}" data-gtm-event="select_menu" data-gtm-menu-name="カッピングメニュー" data-gtm-cta-position="column_mid">カッピングのメニューと料金を見る</a>
      </div>
    </div>

    <div id="caution" class="headline">
      <h2>カッピングを控えた方がよい場合</h2>
      <p>次にあてはまる方は、カッピングを控えた方がよい場合があります。ご予約のときや施術の前にお知らせください。</p>
      <ul class="point1">
        <li>熱がある、体調がすぐれない</li>
        <li>お酒を飲んだあと</li>
        <li>施術する場所に、傷・炎症・日焼け・皮膚のトラブルがある</li>
        <li>血液をサラサラにするお薬を飲んでいる、出血しやすい</li>
        <li>妊娠中、または妊娠の可能性がある</li>
      </ul>
      <p>通院中の方やお薬を飲んでいる方は、かかりつけの医師にもご相談ください。妊娠中の方には、<a href="{{ url('menu/menu9') }}">マタニティ向けのメニュー</a>もご用意しています。</p>
    </div>

    <div id="column-faq" class="headline">
      <h2>カッピングの跡のよくある質問</h2>
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
      <h2>水戸市でカッピングを受けるなら{{ config('salon.name') }}</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(3) }}.webp" type="image/webp">
          <img src="{{ $img(3) }}.jpg" alt="オイルを使って脚をマッサージしている様子" width="1280" height="854" loading="lazy">
        </picture>
      </div>
      <p>水戸市米沢町の{{ config('salon.name') }}では、カッピングのあとにアロマオイルで全身をマッサージする「オイルカッピング」をご用意しています。鍼灸師歴20年以上の院長が、その日のからだの様子をお伺いしながら施術します。</p>
      <ul class="point2">
        @foreach ($items as $item)
          <li>{{ $item['name'] }}　{{ $yen($item['price']) }}@if ($item['first_price'])（はじめての方 {{ $yen($item['first_price']) }}）@endif</li>
        @endforeach
      </ul>
      <p>料金は税込です。男性の方もご利用いただけます。駐車場{{ config('salon.parking_spaces') }}台、{{ config('salon.business_hours.closed_day_label') }}です。</p>
      <p>肩や背中の重だるさが気になる方、全身をまとめてケアしたい方は、お気軽にご相談ください。</p>
    </div>

    @php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。カッピングの跡のことや、どのコースが合うかなど、気になることがあれば気軽にご相談くださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu7') }}" data-gtm-event="select_menu" data-gtm-menu-name="カッピングメニュー" data-gtm-cta-position="column_end">カッピングのメニューと料金</a></li>
        <li><a href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">はじめての方へ（来店の流れ・持ち物）</a></li>
        <li><a href="{{ url('column/column1') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column1.short') }}</a></li>
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
