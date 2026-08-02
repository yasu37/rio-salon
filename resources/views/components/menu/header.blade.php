<header>
  <div>
    <!--ロゴ-->
    <h1 class="logo logo1"><a href="../../" target="_self"><picture><source srcset="../img/logo1.webp" type="image/webp"><img src="../img/logo1.jpg" alt="水戸市の美容鍼灸-{{ config('salon.name') }}（{{ config('salon.name_en') }}）-" width="664" height="181"></picture></a></h1>
    <h2 class="logo logo2"><a href="../../" target="_self"><picture><source srcset="../img/logo2.webp" type="image/webp"><img src="../img/logo2.jpg" alt="水戸市の美容鍼灸-{{ config('salon.name') }}（{{ config('salon.name_en') }}）-" width="140" height="24"></picture></a></h2>
    <!--内容-->
    <div class="content">
      <ul class="sns">
        <li><a href="{{ config('salon.sns.instagram') }}" target="_blank" rel="noopener noreferrer"><picture><source srcset="../img/instagram1.webp" type="image/webp"><img src="../img/instagram1.jpg" alt="{{ config('salon.name') }}の公式Instagram" width="73" height="73"></picture></a></li>
        <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer"><picture><source srcset="../img/line1.webp" type="image/webp"><img src="../img/line1.jpg" alt="{{ config('salon.name') }}の公式LINE" width="72" height="73"></picture></a></li>
      </ul>
      <ul class="reservation">
        <li class="reservation_panel">
          <input type="checkbox" id="header-reservation-toggle" class="reservation_toggle">
          <label for="header-reservation-toggle" class="reservation_summary" data-gtm-event="begin_booking" data-gtm-cta-position="header">予約する</label>
          <div class="reservation_menu">
            <p class="reservation_menu_lead">目的に合わせてお選びください</p>
            <ul>
              <li><a href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="repeat" data-gtm-cta-position="header">Squareで再予約する</a></li>
              <li><a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="header">LINEで施術を相談する</a></li>
              <li><a href="tel:{{ config('salon.tel_href') }}" data-gtm-event="reservation_phone_click" data-gtm-provider="phone" data-gtm-cta-position="header">電話で空き状況を確認する（{{ config('salon.tel') }}）</a></li>
              <li class="reservation_menu_sub"><a href="{{ config('salon.reservation.hotpepper.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_hotpepper_click" data-gtm-provider="hotpepper" data-gtm-customer-type="new" data-gtm-cta-position="header">HotPepperで空き時間を見る</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
    <!--プルダウン用-->
    <label class="pull_down" for="menu">
      <span class="pull1"></span>
      <span class="pull2"></span>
      <span class="pull3"></span>
    </label>
    <input type="checkbox" id="menu" class="pull_down">
    <nav class="header_menu">
      <ul class="navi">
        <li><a href="../" target="_self">トップ</a></li>
        <li class="is_pc">／</li>
        <li><a href="../about" target="_self">リオについて</a></li>
        <li class="is_pc">／</li>
        <li><a href="../first-visit" target="_self">初めての方へ</a></li>
        <li class="is_pc">／</li>
        <li><a href="../news" target="_self">お知らせ</a></li>
        <li class="is_pc">／</li>
        <li><a href="../menu/menu1" target="_self">メニュー&料金</a></li>
        <li class="is_pc">／</li>
        <li><a href="../campaign/term" target="_self">キャンペーン</a></li>
        <li class="is_pc">／</li>
        <li><a href="../question" target="_self">Q&A</a></li>
        <li class="is_pc">／</li>
        <li><a href="../reserve" target="_self">予約</a></li>
      </ul>
    </nav>
  </div>
</header>
