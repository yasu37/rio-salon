@php($seasonal = config('top.seasonal'))
<section class="t-section t-menu" id="menu" data-gtm-view="view_menu">
  <div class="t-wrap t-narrow">
    <h2 class="t-heading">はじめての方に、<br>おすすめしているメニュー</h2>
    <ul class="t-menu__list">
      @foreach (config('top.recommended_menus') as $menu)
        <li class="t-menu__item">
          <a href="{{ url($menu['link']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $menu['name'] }}" data-gtm-cta-position="home_recommended_menu">
            <span class="t-menu__row">
              <span class="t-menu__name u-phrase">{!! \App\Support\Text::wbr($menu['name']) !!}</span>
              <span class="t-menu__price">{{ $menu['price'] }}</span>
            </span>
            <span class="t-menu__comment">{{ $menu['comment'] }}</span>
          </a>
        </li>
      @endforeach
    </ul>
    <p class="t-small">料金はすべて税込です。「はじめての方」とあるものは、初回の料金です。</p>
    <p class="t-menu__massage">鍼を使わない「全身オイルマッサージ」もあります。</p>
    @if ($seasonal)
      <a class="t-season" href="{{ url($seasonal['link']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $seasonal['name'] }}" data-gtm-cta-position="home_campaign">
        <span class="t-season__label">{{ $seasonal['label'] }}</span>
        <span class="t-season__name">{{ $seasonal['name'] }}　{{ $seasonal['price'] }}</span>
      </a>
    @endif
    <a class="t-link" href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-cta-position="home_menu_all">ほかのメニューと料金</a>
  </div>
</section>
