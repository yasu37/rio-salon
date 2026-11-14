{{-- リオでできること。施術の一覧は config/top.php の services で管理する。下に、すべてのメニューへのボタンを置く。 --}}
<section class="t-section t-care" id="treatment">
  <div class="t-wrap">
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Treatment</p>
      <h2 class="t-heading">リオでできること</h2>
    </div>
    <ul class="t-services">
      @foreach (config('top.services') as $service)
        <li class="t-services__item">
          <div class="t-services__photo">
            <x-top.photo :name="$service['photo']" :alt="$service['alt']" width="600" height="450" />
          </div>
          {{-- 施術名のリンクをカード全体に広げ、写真や説明を押してもメニューページが開くようにしている --}}
          <h3 class="t-services__name"><a href="{{ url($service['link']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $service['name'] }}" data-gtm-cta-position="home_services">{{ $service['name'] }}</a></h3>
          <p class="t-services__text">{{ $service['text'] }}</p>
        </li>
      @endforeach
    </ul>
    <div class="t-more">
      <a class="t-button" href="{{ url('menu/menu1') }}" data-gtm-event="select_menu" data-gtm-cta-position="home_services_all">すべてのメニューを見る</a>
    </div>
  </div>
</section>
