@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['ハーブピーリングのダウンタイムはどのくらいですか？', '一般的には、赤みやヒリヒリ感は当日〜数日ほど、皮むけは数日目ごろから始まり1週間前後で落ち着くことが多いと言われています。使う製品や塗る量、お肌の状態によって大きく変わり、皮むけがほとんど目立たない方もいらっしゃいます。'],
    ['ハーブピーリングの皮むけはいつから始まりますか？', '一般的な目安として、施術から2〜4日目ごろに始まる方が多いと言われています。口のまわりや小鼻のまわりなど、よく動く部分から始まりやすい傾向があります。皮むけの出方には個人差があります。'],
    ['ハーブピーリングのあと、赤みはいつまで続きますか？', '赤みやほてりは、当日〜翌日ほどで落ち着くことが多いと言われています。お肌が敏感な方は、数日ほど続くこともあります。強い赤みや腫れ、かゆみが続く場合は、施術を受けたお店や皮膚科にご相談ください。'],
    ['ハーブピーリングをした日にメイクはできますか？', 'お店によって案内が異なります。当日はできるだけお肌を休ませ、メイクは控えめにするのが一般的です。リオ鍼灸サロンでは、施術の最後にALEXのローション・ビタミンクリーム・BBクリームを塗ってお仕上げします。'],
    ['ハーブピーリングのあと、洗顔やお風呂はいつも通りで大丈夫ですか？', '当日は、ぬるま湯でやさしく洗い、ゴシゴシこすらないようにしましょう。長風呂やサウナ、汗をたくさんかく運動は、当日〜数日は控えめにすると安心です。'],
    ['むけてきた皮は、自分ではがしてもいいですか？', '無理にはがすのは避けましょう。まだはがれる準備ができていない部分まではがれて、赤みやヒリヒリ感が出やすくなると言われています。気になるときは、保湿をして自然にはがれるのを待つのがおすすめです。'],
    ['ハーブピーリングはどのくらいの頻度で受ければいいですか？', 'お肌の生まれ変わりの周期に合わせて、前回の皮むけや赤みが落ち着いてから、4週間前後あけて受けるのが一般的な目安と言われています。お肌の様子を見ながら、施術者と相談して決めていきましょう。'],
  ];
  $menu = config('menus.pages.menu4');
  $items = collect($menu['groups'])->firstWhere('name', 'ALEXハーブピーリング')['items'] ?? [];
  $alex = collect(config('campaign.groups'))->firstWhere('id', 'alex');
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $img = fn ($n) => asset("img/column6/column{$n}");
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
        <img src="{{ $img(0) }}.jpg" alt="あお向けに寝た方のお顔に緑色のハーブを塗り、こめかみに手を添えている様子" width="1200" height="900">
      </picture>
    </div>
    <h1>ハーブピーリングのダウンタイムは？<br>赤み・皮むけはいつまで続くか、施術後の過ごし方</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>ハーブピーリングが気になっているけれど、「皮がむけるって本当？」「赤みはいつまで続くの？」「仕事や予定に影響しない？」と迷っている方も多いのではないでしょうか。</p>
    <p>この記事では、ハーブピーリングのダウンタイムの目安、赤みや皮むけが出る時期、施術後の過ごし方、次に受けるまでの頻度、大切な予定がある方の注意点を、水戸市の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>ハーブピーリングのあとは、<strong>ヒリヒリ感・赤み・皮むけ</strong>が出ることがあります</li>
      <li>一般的な目安として、赤みは<strong>当日〜数日</strong>、皮むけは<strong>2〜4日目ごろから始まり、1週間前後</strong>で落ち着くことが多いと言われています</li>
      <li>出方は、使う製品や塗る量、お肌の状態で大きく変わります。<strong>皮むけがほとんど目立たない方</strong>もいらっしゃいます</li>
      <li>施術後は<strong>保湿と紫外線対策</strong>を心がけ、むけてきた皮は無理にはがさないようにしましょう</li>
      <li>次に受けるのは<strong>4週間前後あけて</strong>が一般的な目安。大切な予定の前は<strong>2週間ほど前まで</strong>に受けると安心です</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#about">ハーブピーリングとは？</a></li>
      <li><a href="#downtime">ハーブピーリングのダウンタイムは？経過の目安</a></li>
      <li><a href="#redness">赤み・ヒリヒリ感はいつまで続く？</a></li>
      <li><a href="#peeling">皮むけはいつから？どのくらい続く？</a></li>
      <li><a href="#aftercare">ハーブピーリングのあとの過ごし方</a></li>
      <li><a href="#frequency">ハーブピーリングの頻度は？次はいつ受ける？</a></li>
      <li><a href="#schedule">結婚式・撮影など、予定がある方は</a></li>
      <li><a href="#caution">ハーブピーリングの前に相談した方がよい場合</a></li>
      <li><a href="#column-faq">ハーブピーリングのよくある質問</a></li>
      <li><a href="#rio">水戸市でハーブピーリングを受けるなら{{ config('salon.name') }}</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="about" class="headline">
      <h2>ハーブピーリングとは？</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(1) }}.webp" type="image/webp">
          <img src="{{ $img(1) }}.jpg" alt="ALEXのクレンジングミルク、グリーントニック、BBクリーム、ビタミンクリームを木のテーブルに並べた写真" width="1280" height="960" loading="lazy">
        </picture>
      </div>
      <p>ハーブピーリングは、ハーブなどの植物を原料にしたものをお肌に塗り込み、古い角質にアプローチする角質ケアです。お肌のごわつきやくすみが気になる方に選ばれています。</p>
      <p>薬剤を使うケミカルピーリングとちがい、細かいハーブの粒をお肌になじませるのが特徴です。塗っているときや塗ったあとに、チクチクとした刺激を感じる方が多いと言われています。刺激の感じ方には個人差があります。</p>
      <div class="subheading">
        <h3>{{ config('salon.name') }}のALEXハーブピーリング</h3>
        <p>{{ config('salon.name') }}では、1945年に世界で初めてハーブピーリングを開発したALEXハーブを使っています。オーガニックハーブで古い角質にアプローチし、お肌のターンオーバーを促す働きかけを行う施術です。感じ方には個人差があります。</p>
        <p>首・肩のうつ伏せマッサージから始まり、クレンジング、ハーブの塗布、ALEXのローション・ビタミンクリーム・BBクリームでのお仕上げまでを行います。</p>
      </div>
    </div>

    <div id="downtime" class="headline">
      <h2>ハーブピーリングのダウンタイムは？経過の目安</h2>
      <p>ダウンタイムとは、施術のあとにお肌が落ち着くまでの期間のことです。ハーブピーリングのあとは、<strong>ヒリヒリ感・赤み・つっぱり感・皮むけ</strong>などが出ることがあります。</p>
      <p>一般的な経過の目安は、次のとおりです。</p>
      <ul class="point2">
        <li>当日：チクチク・ヒリヒリ感、ほてり、赤みが出やすい</li>
        <li>翌日〜2日目ごろ：赤みが落ち着いてきて、つっぱり感やごわつきを感じることがある</li>
        <li>2〜4日目ごろ：口や小鼻のまわりなどから、皮むけが始まることがある</li>
        <li>1週間前後：皮むけが落ち着いてくることが多い</li>
      </ul>
      <p>あくまで一般的な目安です。<strong>ダウンタイムの長さや出方は、使う製品や塗り込む量、お肌の状態によって大きく変わります。</strong>皮むけがほとんど目立たない方もいれば、細かい皮むけがしばらく続く方もいらっしゃいます。</p>
      <p>強い痛みや腫れ、かゆみが続く場合や、水ぶくれのような変化が出た場合は、自己判断せずに、施術を受けたお店や皮膚科にご相談ください。</p>
    </div>

    <div id="redness" class="headline">
      <h2>赤み・ヒリヒリ感はいつまで続く？</h2>
      <p>ハーブピーリングのあとの赤みやヒリヒリ感は、<strong>当日〜翌日ほど</strong>で落ち着くことが多いと言われています。お肌が敏感な方や、乾燥しやすい時期は、数日ほど続くこともあります。</p>
      <div class="subheading">
        <h3>チクチク感が出る理由</h3>
        <p>細かいハーブの粒がお肌に入り込むことで、チクチクとした刺激を感じると言われています。洗顔のときや、タオルでお顔をふいたときに、ピリッとした感じが出る方もいらっしゃいます。</p>
      </div>
      <div class="subheading">
        <h3>赤みがあるときに気をつけたいこと</h3>
        <ul class="point1">
          <li>お顔をこすったり、さわったりしない</li>
          <li>熱いお湯やサウナで、お肌を温めすぎない</li>
          <li>冷やしたいときは、清潔なタオルで包んだ保冷剤などを、短い時間そっと当てる</li>
          <li>刺激の強い化粧品は使わない</li>
        </ul>
        <p>赤みが日に日に強くなる、腫れてきた、かゆみが強いといった場合は、施術を受けたお店や皮膚科にご相談ください。</p>
      </div>
    </div>

    <div id="peeling" class="headline">
      <h2>皮むけはいつから？どのくらい続く？</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(2) }}.webp" type="image/webp">
          <img src="{{ $img(2) }}.jpg" alt="お顔全体に細かいハーブがのっている、ハーブピーリングの施術中の様子" width="960" height="800" loading="lazy">
        </picture>
      </div>
      <p>ハーブピーリングの皮むけは、一般的な目安として<strong>施術から2〜4日目ごろ</strong>に始まり、<strong>1週間前後</strong>で落ち着くことが多いと言われています。</p>
      <p>皮むけは、口のまわりや小鼻のまわり、あごなど、よく動く部分から始まりやすい傾向があります。粉をふいたような細かい皮むけのこともあれば、うすい皮がはがれるように感じることもあります。</p>
      <div class="subheading">
        <h3>皮むけが目立たないこともあります</h3>
        <p>皮むけの出方には個人差があり、ほとんど目立たない方もいらっしゃいます。皮むけが少ないからといって、施術がうまくいかなかったということではありません。</p>
      </div>
      <div class="subheading">
        <h3>むけてきた皮は、無理にはがさない</h3>
        <p>むけかけた皮が気になっても、指でつまんだり、はがしたりするのは避けましょう。まだはがれる準備ができていない部分まではがれて、赤みやヒリヒリ感が出やすくなると言われています。保湿をしながら、自然にはがれるのを待つのがおすすめです。</p>
      </div>
    </div>

    <div id="aftercare" class="headline">
      <h2>ハーブピーリングのあとの過ごし方</h2>
      <p>施術のあとのお肌は、とてもデリケートな状態になっています。ダウンタイムの間は、次のことを心がけて過ごしましょう。</p>
      <div class="subheading">
        <h3>保湿をしっかりする</h3>
        <p>施術のあとは、お肌が乾燥しやすくなると言われています。いつもより丁寧に保湿をしましょう。新しい化粧品を試すのは、お肌が落ち着いてからにすると安心です。</p>
      </div>
      <div class="subheading">
        <h3>紫外線対策をする</h3>
        <p>施術のあとは、紫外線の刺激を受けやすい状態と言われています。外に出るときは、日焼け止めや帽子、日傘などで紫外線を防ぎましょう。</p>
      </div>
      <div class="subheading">
        <h3>洗顔・メイク</h3>
        <p>洗顔は、ぬるま湯でやさしく洗い、タオルはこすらずに押さえるようにふきましょう。当日はできるだけお肌を休ませ、メイクは控えめにするのがおすすめです。{{ config('salon.name') }}では、施術の最後にALEXのBBクリームを塗ってお仕上げします。</p>
      </div>
      <div class="subheading">
        <h3>しばらく控えたいこと</h3>
        <ul class="point1">
          <li>スクラブ洗顔やほかのピーリング、刺激の強い化粧品</li>
          <li>お顔のシェービング（顔そり）や、お顔の脱毛</li>
          <li>長風呂・サウナ・岩盤浴</li>
          <li>汗をたくさんかく運動</li>
          <li>たくさんの飲酒</li>
        </ul>
        <p>控える期間は、お肌の様子やお店の案内によって変わります。施術のあとにお伝えする注意事項もあわせてご確認ください。</p>
      </div>
    </div>

    <div id="frequency" class="headline">
      <h2>ハーブピーリングの頻度は？次はいつ受ける？</h2>
      <p>お肌は、少しずつ新しい細胞に生まれ変わっています（ターンオーバー）。ハーブピーリングは、この周期に合わせて、<strong>前回の赤みや皮むけが落ち着いてから、4週間前後あけて</strong>受けるのが一般的な目安と言われています。</p>
      <p>お肌が落ち着かないうちに重ねて受けると、刺激を感じやすくなることがあります。お肌の様子や季節、ご予定に合わせて、無理のないペースを一緒に決めていきます。</p>
      @if ($alex && $alex['show'])
      <div class="subheading">
        <h3>2回目以降の方へ</h3>
        <p>{{ config('salon.name') }}では、{{ $alex['period'] }}の期間、{{ $alex['target'] }}を対象に、ALEXハーブピーリングをお得に受けられる料金をご用意しています。</p>
        <ul class="point2">
          @foreach ($alex['items'] as $item)
            <li>{{ $item['name'] }} {{ $item['time'] }}　{{ $yen($item['price']) }}@if ($item['regular'])（通常 {{ $yen($item['regular']) }}）@endif</li>
          @endforeach
        </ul>
        <p>くわしくは<a href="{{ url('campaign/term#alex') }}">キャンペーンのページ</a>をご覧ください。</p>
      </div>
      @endif
      <div class="column_guide">
        <p>{{ config('salon.name') }}のALEXハーブピーリングの内容と料金は、こちらからご覧いただけます。</p>
        <a href="{{ url('menu/menu4') }}" data-gtm-event="select_menu" data-gtm-menu-name="フェイシャルエステ" data-gtm-cta-position="column_mid">フェイシャルエステのメニューと料金を見る</a>
      </div>
    </div>

    <div id="schedule" class="headline">
      <h2>結婚式・撮影など、予定がある方は</h2>
      <p>ハーブピーリングのあとは、赤みや皮むけが出ることがあります。次のようなご予定がある方は、<strong>2週間ほど前まで</strong>に受けておくと安心です。</p>
      <ul class="point1">
        <li>結婚式やパーティー</li>
        <li>写真の撮影や面接</li>
        <li>旅行や、日差しの強い場所へのお出かけ</li>
      </ul>
      <p>はじめての方は、大切な予定の直前ではなく、早めに一度受けて、ご自身のお肌の反応を知っておくのがおすすめです。ご予定がある方は、ご予約のときにお知らせください。</p>
    </div>

    <div id="caution" class="headline">
      <h2>ハーブピーリングの前に相談した方がよい場合</h2>
      <p>次にあてはまる方は、ハーブピーリングを控えた方がよい場合があります。ご予約のときや施術の前にお知らせください。</p>
      <ul class="point1">
        <li>お顔に傷、炎症、日焼け、湿疹などの肌トラブルがある</li>
        <li>お肌がとても敏感な時期、アトピー性皮膚炎などで皮膚科に通っている</li>
        <li>植物にアレルギーがある、化粧品でかぶれたことがある</li>
        <li>直前にお顔のシェービングや脱毛、ほかのピーリングをした</li>
        <li>妊娠中・授乳中、または妊娠の可能性がある</li>
      </ul>
      <p>皮膚科に通院中の方や、お薬・塗り薬を使っている方は、かかりつけの医師にもご相談ください。</p>
    </div>

    <div id="column-faq" class="headline">
      <h2>ハーブピーリングのよくある質問</h2>
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
      <h2>水戸市でハーブピーリングを受けるなら{{ config('salon.name') }}</h2>
      <div class="image">
        <picture>
          <source srcset="{{ $img(3) }}.webp" type="image/webp">
          <img src="{{ $img(3) }}.jpg" alt="うつ伏せの方の首から肩まわりを両手でマッサージしている様子" width="1280" height="854" loading="lazy">
        </picture>
      </div>
      <p>水戸市米沢町の{{ config('salon.name') }}では、ALEXハーブを使ったハーブピーリングをご用意しています。施術の前に首・肩をほぐすマッサージを行うので、ゆったりとした時間をお過ごしいただけます。美容鍼と組み合わせたコースもあります。</p>
      <ul class="point2">
        @foreach ($items as $item)
          <li>{{ $item['name'] }}　{{ $yen($item['price']) }}@if ($item['first_price'])（はじめての方 {{ $yen($item['first_price']) }}）@endif</li>
        @endforeach
      </ul>
      <p>料金は税込です。駐車場{{ config('salon.parking_spaces') }}台、{{ config('salon.business_hours.closed_day_label') }}です。</p>
      <p>ダウンタイムのことや、お肌に合うかどうか不安な方も、お気軽にご相談ください。</p>
    </div>

    @php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。ハーブピーリングのダウンタイムや、ご予定との合わせ方など、気になることがあれば気軽にご相談くださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu4') }}" data-gtm-event="select_menu" data-gtm-menu-name="フェイシャルエステ" data-gtm-cta-position="column_end">フェイシャルエステ・ハーブピーリングのメニューと料金</a></li>
        <li><a href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">はじめての方へ（来店の流れ・持ち物）</a></li>
        <li><a href="{{ url('column/column4') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">コラム：{{ config('columns.column4.short') }}</a></li>
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
