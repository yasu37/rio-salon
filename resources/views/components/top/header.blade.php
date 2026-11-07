<header class="t-header">
  <div class="t-header__inner">
    <a class="t-header__logo" href="{{ url('/') }}">
      <span class="t-header__name">{{ config('salon.name') }}</span>
    </a>
    <nav class="t-nav" id="t-nav" aria-label="サイト内メニュー">
      <ul class="t-nav__list">
        <li><a href="{{ url('about') }}">リオについて</a></li>
        <li><a href="{{ url('first-visit') }}">はじめての方へ</a></li>
        <li><a href="{{ url('menu/menu1') }}">メニューと料金</a></li>
        <li><a href="{{ url('campaign/term') }}">キャンペーン</a></li>
        <li><a href="{{ url('question') }}">よくある質問</a></li>
        <li><a href="{{ url('news') }}">お知らせ</a></li>
      </ul>
    </nav>
    <div class="t-header__actions">
      <a class="t-header__reserve" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-cta-position="header_nav">ご予約</a>
      <button type="button" class="t-header__toggle" aria-controls="t-nav" aria-expanded="false" aria-label="メニューを開く">
        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" aria-hidden="true"><path d="M4 8h16M4 16h12"/></svg>
      </button>
    </div>
  </div>
</header>
<script>
  (function () {
    var button = document.querySelector('.t-header__toggle');
    var nav = document.getElementById('t-nav');
    if (!button || !nav) return;
    button.addEventListener('click', function () {
      var open = button.getAttribute('aria-expanded') === 'true';
      button.setAttribute('aria-expanded', String(!open));
      button.setAttribute('aria-label', open ? 'メニューを開く' : 'メニューを閉じる');
      nav.classList.toggle('is-open', !open);
    });
  })();
</script>
