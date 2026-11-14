{{-- 院長のあいさつ。写真は控えめな大きさにし、名前は出さない。資格は1行の控えめな文字で添える。 --}}
@php($owner = collect(config('staff'))->where('status', 'active')->sortBy('order')->first())
<section class="t-section t-greeting t-bg-mint" data-gtm-view="view_staff">
  <div class="t-wrap t-greeting__inner">
    @if ($owner)
      <div class="t-greeting__photo">
        <x-top.photo :name="$owner['photo']" alt="院長" width="440" height="550" />
      </div>
    @endif
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Greeting</p>
      <h2 class="t-heading">はじめまして。<br>リオの院長です。</h2>
    </div>
    <div class="t-greeting__text">
      <p>鍼灸師として{{ $owner['experience_label'] ?? '20年以上' }}、多くの方のお悩みに向き合ってまいりました。フェイシャルエステや化粧品の知識も活かし、お顔のこともからだのことも、まとめてご相談いただけるサロンを目指しています。どうぞお気軽にお話しください。</p>
      @if (! empty($owner['qualifications']))
        <p class="t-greeting__quals">{{ implode('／', $owner['qualifications']) }}</p>
      @endif
      <a class="t-link" href="{{ url('about') }}" data-gtm-event="select_content" data-gtm-cta-position="home_greeting">院長のこと、もう少し</a>
    </div>
  </div>
</section>
