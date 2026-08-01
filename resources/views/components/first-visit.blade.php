<!--初めての方へ-->
<section id="first_visit">
  <div class="container">
    <div class="section_title">
      <h2>初めての方へ</h2>
      <p>FIRST VISIT</p>
    </div>

    <div class="first_visit_block">
      <h2>ご予約方法</h2>
      <p>目的に合わせて予約方法をお選びください。</p>
      <ul class="first_visit_reserve_list">
        <li><a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-cta-position="first_visit_page">Squareで予約する</a></li>
        <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="first_visit_page">LINEで相談する</a></li>
        <li><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="first_visit_page">電話で空き状況を確認する（{{ config('salon.tel') }}）</a></li>
        <li class="first_visit_reserve_sub"><a href="{{ config('salon.reservation.hotpepper.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_hotpepper_click" data-gtm-provider="hotpepper" data-gtm-customer-type="new" data-gtm-cta-position="first_visit_page">HotPepperで予約する</a></li>
      </ul>
    </div>

    <div class="first_visit_block">
      <h2>ご来店から施術までの流れ</h2>
      <ol class="first_visit_flow">
        <li><strong>ご来店・受付</strong><br>お時間になりましたらご来店ください。</li>
        <li><strong>カウンセリング</strong><br>お悩みや体調、気になる点についてお伺いします。</li>
        <li><strong>お着替え</strong><br>施術内容に応じてお着替えいただく場合があります。</li>
        <li><strong>施術</strong><br>カウンセリング内容に合わせて施術を行います。</li>
        <li><strong>お会計</strong></li>
        <li><strong>次回のご提案</strong><br>今後のペースなどについてご案内します。</li>
      </ol>
    </div>

    <div class="first_visit_block">
      <h2>鍼の刺激について</h2>
      <p>使用する鍼は髪の毛ほど細いものですが、部位やその日の体調によって刺激を感じる場合があります。施術後に内出血、赤み、眠気、だるさなどが生じる場合があります。感じ方や経過には個人差がありますので、体調がすぐれない場合はご自宅でゆっくりお過ごしください。ご不安な点は施術前にお気軽にご相談ください。</p>
    </div>

    <div class="first_visit_block">
      <h2>メイク・服装・お着替えについて</h2>
      <p>お顔への施術がある場合、メイクが崩れる可能性があります。気になる方は、お直し用のコスメをご持参いただくと安心です。</p>
      <p>お着替えが必要な施術については、動きやすい服装でのご来店をおすすめします。</p>
    </div>

    <div class="first_visit_block">
      <h2>事前にご相談いただきたいこと</h2>
      <p>ご妊娠中の方、服薬中の方、持病をお持ちの方は、事前にご相談ください。体調に合わせて施術内容をご提案します。</p>
    </div>

    <div class="first_visit_block">
      <h2>駐車場について</h2>
      <p>駐車場を{{ config('salon.parking_spaces') }}台ご用意しております。</p>
    </div>

    <div class="first_visit_block">
      <h2>遅刻・キャンセルについて</h2>
      <p>ご来店が遅れる場合は、あらかじめお電話にてご連絡ください。ご予約のキャンセル・変更をされる場合も、なるべく早めにご連絡いただけますと幸いです。</p>
    </div>

    <div class="first_visit_block">
      <h2>男性のご利用について</h2>
      <p>男性の方もお受けいただけます。</p>
    </div>

    <div class="first_visit_block">
      <h2>お支払い方法</h2>
      <p>現金でのお支払いに対応しております。<br>クレジットカード：{{ implode('/', config('salon.payment.credit_cards')) }}など<br>電子マネー：{{ implode('/', config('salon.payment.e_money')) }}</p>
    </div>
  </div>
</section>
