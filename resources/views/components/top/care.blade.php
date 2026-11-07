@php($values = [
  ['title' => 'お顔だけでなく、からだ全体を見ること。', 'text' => '美容鍼とからだの鍼灸、両方をしています。'],
  ['title' => '東洋医学の考え方で、根本から。', 'text' => '漢方薬店も併設しています。'],
  ['title' => 'おひとりおひとりと、ゆっくり話すこと。', 'text' => 'その日の体調に合うケアをご提案します。'],
])
<section class="t-section t-care t-bg-mint">
  <div class="t-wrap">
    <h2 class="t-heading">リオで大切にしていること</h2>
    <ul class="t-values">
      @foreach ($values as $value)
        <li>
          <span class="t-values__title">{{ $value['title'] }}</span>
          <span class="t-values__text">{{ $value['text'] }}</span>
        </li>
      @endforeach
    </ul>

    <h2 class="t-heading t-care__sub">リオでできること</h2>
    <ul class="t-services">
      @foreach (config('top.services') as $service)
        <li class="t-services__item t-services__item--{{ $service['tone'] }}">
          <div class="t-services__photo">
            <x-top.photo :name="$service['photo']" :alt="$service['alt']" width="600" height="400" />
          </div>
          {{-- 施術名のリンクをカード全体に広げ、写真や説明を押してもメニューページが開くようにしている --}}
          <h3 class="t-services__name"><a href="{{ url($service['link']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $service['name'] }}" data-gtm-cta-position="home_services">{{ $service['name'] }}</a></h3>
          <p class="t-services__text">{{ $service['text'] }}</p>
          @isset($service['sub_link'])
            <a class="t-services__sub" href="{{ url($service['sub_link']['link']) }}" data-gtm-event="select_menu" data-gtm-menu-name="{{ $service['sub_link']['menu_name'] }}" data-gtm-cta-position="home_services">{{ $service['sub_link']['label'] }}</a>
          @endisset
        </li>
      @endforeach
    </ul>
  </div>
</section>
