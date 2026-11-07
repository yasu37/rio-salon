@props(['column'])
@php
  // よくある質問。画面の表示と、検索エンジン向けの構造化データ（FAQPage）を同じ内容から作る。
  $faqs = [
    ['美容鍼は誰でも施術できるのですか？', '鍼を使った施術は、医師を除くと「はり師」の国家資格を持つ人しか仕事として行うことができません。美容鍼を受けるときは、はり師（鍼灸師）が施術しているかを確認すると安心です。'],
    ['美容鍼は痛くないですか？', '髪の毛ほどの細い鍼を使いますが、部位やその日の体調によって、チクッとした刺激を感じることがあります。刺激が気になるときは、施術中でも遠慮なく伝えてください。'],
    ['はじめての美容鍼は、どのコースを選べばいいですか？', 'まずはお顔を中心にした基本のコースで、刺激の感じ方や施術の流れを知るのがおすすめです。肩こりや冷えなど、からだのことも気になる方は、お顔とからだを一緒にケアするコースも選べます。迷ったときは、事前にお店に相談してみましょう。'],
    ['男性も美容鍼を受けられますか？', 'はい、男性の方も受けられるお店が多くあります。リオ鍼灸サロンでも、男性の方にご利用いただいています。'],
    ['当日の予約はできますか？', 'お店によって異なります。リオ鍼灸サロンでは、空きがあれば当日のご予約も承っています。Web予約やLINEで空き状況をご確認ください。'],
  ];
  $menu = config('menus.pages.menu1');
  $items = collect($menu['groups'])->flatMap(fn ($group) => $group['items'])->keyBy('name');
  $basic = $items['美容鍼灸 70分'] ?? null;
  $faceBody = $items['美容鍼灸(顔+全身) 90分'] ?? null;
  $yen = fn ($n) => number_format($n) . '円';
  $modified = \Carbon\Carbon::parse($column['modified']);
  $hours = config('salon.business_hours');
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
      <x-top.photo name="about" alt="施術の前に、お悩みや体調をお伺いしている様子" :eager="true" />
    </div>
    <h1>水戸で美容鍼を選ぶときのポイント<br>はじめての方が見ておきたい6つのこと</h1>
    <p class="column_meta">最終更新：{{ $modified->format('Y年n月j日') }}</p>
    <p>水戸市やその周辺で美容鍼を受けてみたいけれど、「どこを選べばいいかわからない」「はじめてで不安」という方も多いのではないでしょうか。</p>
    <p>この記事では、はじめて美容鍼のお店を選ぶときに見ておきたい6つのポイントと、当日の流れ、よくある質問を、水戸市米沢町の{{ config('salon.name') }}がご紹介します。</p>
  </div>

  <div class="column_summary">
    <p class="column_summary_title">この記事のまとめ</p>
    <ul>
      <li>美容鍼は、<strong>「はり師」の国家資格</strong>を持つ人が施術しているお店を選びましょう</li>
      <li><strong>使い捨ての鍼</strong>を使っているか、<strong>施術前にカウンセリング</strong>があるかも大切です</li>
      <li>料金は、<strong>はじめての方の料金・コースの内容・追加料金</strong>まで確認しておくと安心です</li>
      <li>お顔だけでなく、<strong>からだの状態も見てくれるか</strong>、駐車場や予約方法など<strong>通いやすさ</strong>もチェックしましょう</li>
    </ul>
  </div>

  <div class="contents">
    <p>～目次～</p>
    <ol>
      <li><a href="#where">美容鍼はどこで受けられる？</a></li>
      <li><a href="#point1">ポイント1：国家資格を持つ人が施術しているか</a></li>
      <li><a href="#point2">ポイント2：使い捨ての鍼を使っているか</a></li>
      <li><a href="#point3">ポイント3：施術の前にカウンセリングがあるか</a></li>
      <li><a href="#point4">ポイント4：料金がわかりやすいか</a></li>
      <li><a href="#point5">ポイント5：からだの状態も見てくれるか</a></li>
      <li><a href="#point6">ポイント6：通いやすいか</a></li>
      <li><a href="#flow">はじめての美容鍼、当日の流れ</a></li>
      <li><a href="#column-faq">美容鍼のお店選びのよくある質問</a></li>
      <li><a href="#rio">{{ config('salon.name') }}の場合</a></li>
    </ol>
  </div>

  <div class="column">
    <div id="where" class="headline">
      <h2>美容鍼はどこで受けられる？</h2>
      <p>美容鍼は、主に<strong>鍼灸院や鍼灸サロン</strong>で受けられます。お顔の鍼に加えて、フェイシャルエステやマッサージを組み合わせているお店もあります。</p>
      <p>同じ「美容鍼」でも、お店によって施術の内容や時間、料金はさまざまです。次の6つのポイントを目安に、自分に合うお店を選んでみてください。</p>
    </div>

    <div id="point1" class="headline">
      <h2>ポイント1：国家資格を持つ人が施術しているか</h2>
      <p>鍼を使った施術は、医師を除くと、<strong>「はり師」の国家資格を持つ人しか仕事として行うことができません</strong>（あん摩マッサージ指圧師、はり師、きゅう師等に関する法律）。</p>
      <p>お店のホームページやスタッフ紹介で、施術する人が<strong>はり師（鍼灸師）</strong>かどうかを確認しておきましょう。わからないときは、予約の前に問い合わせても失礼にはあたりません。</p>
    </div>

    <div id="point2" class="headline">
      <h2>ポイント2：使い捨ての鍼を使っているか</h2>
      <p>お顔に使う鍼は、とても細いものです。衛生面で安心して受けられるよう、<strong>一度使ったら捨てる「使い捨て（ディスポーザブル）」の鍼</strong>を使っているかを確認しましょう。</p>
      <p>あわせて、施術室やタオルが清潔に保たれているかも、お店選びの目安になります。</p>
    </div>

    <div id="point3" class="headline">
      <h2>ポイント3：施術の前にカウンセリングがあるか</h2>
      <p>美容鍼は、その日の体調やお肌の状態によって、刺激の感じ方や合う施術が変わります。施術の前に、<strong>お悩みや体調、服薬・持病の有無などを聞いてくれるか</strong>は大切なポイントです。</p>
      <p>ご妊娠中の方、服薬中の方、持病のある方は、予約やカウンセリングのときに必ず伝えるようにしましょう。</p>
    </div>

    <div id="point4" class="headline">
      <h2>ポイント4：料金がわかりやすいか</h2>
      <p>美容鍼の料金は、お店や施術時間によって大きく違います。予約の前に、次の点を確認しておくと安心です。</p>
      <ul class="point1">
        <li>はじめての方向けの料金があるか</li>
        <li>コースの時間と、何が含まれているか（お顔だけ／からだも、パック、マッサージなど）</li>
        <li>追加料金やオプションがあるか</li>
        <li>回数券や、続ける場合の料金</li>
      </ul>
      <p>料金と内容がホームページや予約サイトにはっきり書かれているお店は、比べやすく安心です。</p>
    </div>

    <div id="point5" class="headline">
      <h2>ポイント5：からだの状態も見てくれるか</h2>
      <div class="image">
        <x-top.photo name="course23" alt="お顔に美容鍼をしている様子" />
      </div>
      <p>東洋医学では、お顔の状態は、からだ全体の状態とつながっていると考えます。たとえば、肩や首のこり、冷え、むくみ、睡眠の状態なども、お顔の印象に関わることがあると言われています。</p>
      <p>お顔だけでなく、<strong>からだのお悩みも一緒に相談できる</strong>お店だと、自分に合ったケアを見つけやすくなります。</p>
    </div>

    <div id="point6" class="headline">
      <h2>ポイント6：通いやすいか</h2>
      <p>美容鍼は、1回で終わりにするよりも、間隔をあけすぎずに続けることで変化を感じやすくなる方が多い施術です。<strong>無理なく通い続けられるか</strong>も大切です。</p>
      <ul class="point1">
        <li>自宅や職場から通いやすい場所か</li>
        <li>車で行く場合、駐車場があるか</li>
        <li>営業時間・定休日が、自分の予定と合うか</li>
        <li>Web予約やLINEなど、予約しやすい方法があるか</li>
      </ul>
      <p>続けるペースの目安は、<a href="{{ url('column/column1') }}">「{{ config('columns.column1.short') }}」</a>の記事でもご紹介しています。</p>
    </div>

    <div id="flow" class="headline">
      <h2>はじめての美容鍼、当日の流れ</h2>
      <p>はじめての美容鍼の当日は、一般的に次のような流れで進みます。</p>
      <ul class="point2">
        <li>1. 受付・問診票の記入</li>
        <li>2. カウンセリング（お悩み・体調の確認）</li>
        <li>3. お着替え</li>
        <li>4. クレンジング・お顔の鍼</li>
        <li>5. マッサージやパックなどの仕上げ</li>
        <li>6. お会計・次回のご相談</li>
      </ul>
      <p>施術のあとはメイクが崩れることがあるので、お直し用のコスメを持っていくと安心です。施術後の過ごし方は、<a href="{{ url('column/column4') }}">「{{ config('columns.column4.short') }}」</a>の記事で詳しくご紹介しています。</p>
      <div class="column_guide">
        <p>{{ config('salon.name') }}でのご来店から施術までの流れと持ち物は、こちらからご覧いただけます。</p>
        <a href="{{ url('first-visit') }}" data-gtm-event="select_content" data-gtm-cta-position="column_mid">はじめての方へ（来店の流れ・持ち物）を見る</a>
      </div>
    </div>

    <div id="column-faq" class="headline">
      <h2>美容鍼のお店選びのよくある質問</h2>
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
      <h2>{{ config('salon.name') }}の場合</h2>
      <div class="image">
        <x-top.photo name="location5" alt="窓のある明るい施術室" width="960" height="1280" />
      </div>
      <p>水戸市米沢町の{{ config('salon.name') }}では、6つのポイントについて、次のようにしています。</p>
      <dl class="column_facts">
        <div><dt>施術する人</dt><dd>鍼灸師（はり師・きゅう師）の院長が担当します。鍼灸師歴{{ $owner['experience_label'] ?? '20年以上' }}です</dd></div>
        <div><dt>鍼</dt><dd>髪の毛ほどの細さの、使い捨ての鍼を使っています</dd></div>
        <div><dt>カウンセリング</dt><dd>施術の前に、お悩みや体調をお伺いしてから始めます</dd></div>
        <div><dt>料金</dt><dd>
          @if ($basic)
            美容鍼灸 70分 {{ $yen($basic['price']) }}
            @if ($basic['first_price'])
              （はじめての方 {{ $yen($basic['first_price']) }}）
            @endif
            <br>
          @endif
          @if ($faceBody)
            お顔とからだを一緒にケアする 美容鍼灸(顔+全身) 90分 {{ $yen($faceBody['price']) }}<br>
          @endif
          料金はすべて税込です</dd></div>
        <div><dt>からだのケア</dt><dd>お顔だけでなく、肩こりや冷えなど、からだのことも一緒にご相談いただけます</dd></div>
        <div><dt>場所</dt><dd>{{ config('salon.address.full') }}（茨城県庁から車で約5分）</dd></div>
        <div><dt>駐車場</dt><dd>{{ config('salon.parking_spaces') }}台</dd></div>
        <div><dt>営業時間</dt><dd>{{ $hours['open'] }}〜{{ $hours['close'] }}@if ($hours['last_reception'])（最終受付 {{ $hours['last_reception'] }}）@endif／{{ $hours['closed_day_label'] }}</dd></div>
        <div><dt>ご予約</dt><dd>Web予約（Square）、LINE、HotPepper Beauty、お電話。空きがあれば当日のご予約も承ります</dd></div>
      </dl>
      <p>男性の方もご利用いただけます。はじめての方は、どのコースがいいかわからなくても大丈夫です。お気軽にご相談ください。</p>
    </div>

    <div class="column_end">
      @if ($owner)
      <div class="column_owner">
        <div class="column_owner_body">
          <p class="column_owner_name">院長　{{ $owner['name'] }}</p>
          <p>はじめまして、院長の{{ $owner['name'] }}です。はじめての美容鍼は緊張しますよね。気になることがあれば、ご予約の前でも気軽にご相談くださいね。</p>
          <a href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="column_end">院長のこと、もう少し</a>
        </div>
      </div>
      @endif

      <ul class="column_links">
        <li><a href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-menu-name="美容鍼灸メニュー" data-gtm-cta-position="column_end">美容鍼灸のメニューと料金</a></li>
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
