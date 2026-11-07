@php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
<div class="t-wave t-wave--top" aria-hidden="true"></div>
<section class="t-section t-greeting" data-gtm-view="view_staff">
  <div class="t-wrap t-greeting__inner">
    <h2 class="t-heading">はじめまして。<br>リオの院長です。</h2>
    <div class="t-greeting__body">
      @if ($owner)
        <div class="t-greeting__photo">
          <x-top.photo :name="$owner['photo']" alt="院長" />
        </div>
      @endif
      <div class="t-greeting__text">
        <p>鍼灸師になって{{ $owner['experience_label'] ?? '20年以上' }}。フェイシャルエステや化粧品の資格も持っています。お顔のこともからだのことも、なんでもお話しくださいね。</p>
        <div class="t-greeting__foot">
          <a class="t-link" href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="home_greeting">院長のこと、もう少し</a>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="t-wave t-wave--bottom" aria-hidden="true"></div>
