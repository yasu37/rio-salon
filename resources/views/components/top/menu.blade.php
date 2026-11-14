{{--
  おすすめのメニュー。config/top.php の recommended_menus を、写真付きのカード（最初の1つを大きく、残りを控えめに）で表示する。
  料金・時間・施術内容は config/menus.php の該当メニューから読み込む（料金を書く場所を1か所にするため）。
--}}
@php
  $findItem = function (string $page, string $name) {
      foreach (config("menus.pages.{$page}.groups", []) as $group) {
          foreach ($group['items'] ?? [] as $item) {
              if ($item['name'] === $name) {
                  return $item;
              }
          }
      }
      return null;
  };
  $menus = collect(config('top.recommended_menus'))
      ->map(fn ($menu) => $menu + ['detail' => $findItem($menu['page'], $menu['item'])])
      ->filter(fn ($menu) => $menu['detail'] !== null)
      ->values();
  $main = $menus->first();
  $subs = $menus->slice(1);
  $seasonal = config('top.seasonal');
  $yen = fn ($price) => number_format($price);
@endphp
<section class="t-section t-menu t-bg-mint" id="menu" data-gtm-view="view_menu">
  <div class="t-wrap">
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Recommend</p>
      <h2 class="t-heading">おすすめのメニュー</h2>
      <p class="t-head__lead">はじめての方にご案内している3つのコースです。</p>
    </div>

    @if ($main)
      <div class="t-menu__grid">
        @foreach ($menus as $menu)
          @php($item = $menu['detail'])
          @if ($loop->index === 1)<div class="t-menu__side">@endif
          <article class="t-mcard {{ $loop->first ? 't-mcard--main' : 't-mcard--sub' }}">
            <div class="t-mcard__photo">
              <x-top.photo :name="$menu['photo']" :alt="$menu['alt']" width="900" height="675" />
            </div>
            <div class="t-mcard__body">
              <p class="t-mcard__label">{{ $menu['label'] }}</p>
              <h3 class="t-mcard__name u-phrase">{!! \App\Support\Text::wbr($menu['name']) !!}</h3>
              <p class="t-mcard__for">{{ $menu['text'] }}</p>
              @if (! empty($item['tags']))
                <p class="t-mcard__inc"><span>施術内容</span>{{ implode('・', $item['tags']) }}</p>
              @endif
              <div class="t-mcard__price">
                <span class="t-mcard__time">{{ $item['time'] }}</span>
                @if (! empty($item['first_price']))
                  <span class="t-mcard__regular">通常 {{ $yen($item['price']) }}円（税込）</span>
                  {{-- 「はじめての方」の札と初回料金は、必ず同じ行に並べる --}}
                  <span class="t-mcard__first-row"><span class="t-mcard__first">はじめての方</span><span class="t-mcard__yen">{{ $yen($item['first_price']) }}<small>円（税込）</small></span></span>
                @else
                  <span class="t-mcard__yen">{{ $yen($item['price']) }}<small>円（税込）</small></span>
                @endif
              </div>
              <div class="t-mcard__actions">
                <a class="t-button {{ $loop->first ? 't-button--primary' : '' }}" href="{{ config('salon.reservation.square.url') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_square_click" data-gtm-provider="square" data-gtm-customer-type="new" data-gtm-menu-name="{{ $menu['item'] }}" data-gtm-cta-position="home_recommended_menu">このメニューで予約する</a>
                <a class="t-link" href="{{ url('menu/' . $menu['page']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $menu['item'] }}" data-gtm-cta-position="home_recommended_menu">詳しく見る</a>
              </div>
            </div>
          </article>
          @if ($loop->index >= 1 && $loop->last)</div>@endif
        @endforeach
      </div>
    @endif

    @if ($seasonal)
      <a class="t-season" href="{{ url($seasonal['link']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $seasonal['name'] }}" data-gtm-cta-position="home_campaign">
        <span class="t-season__label">{{ $seasonal['label'] }}</span>
        <span class="t-season__name">{{ $seasonal['name'] }}　{{ $seasonal['price'] }}</span>
      </a>
    @endif

    <div class="t-more">
      <a class="t-button" href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-cta-position="home_menu_all">ほかのメニューと料金を見る</a>
    </div>
  </div>
</section>
