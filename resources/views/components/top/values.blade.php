{{-- リオで大切にしていること。読み飛ばされやすいので、番号付きの短い言葉3つの帯にして場所を取らない。 --}}
@php($values = [
  'お顔だけでなく、からだ全体を見る',
  '東洋医学の考え方で、根本から',
  'おひとりおひとりと、ゆっくりお話しする',
])
<section class="t-values-band">
  <div class="t-wrap">
    <div class="t-head t-head--center">
      <p class="t-en" aria-hidden="true">Philosophy</p>
      <h2 class="t-heading">リオが大切にしていること</h2>
    </div>
    <ol class="t-values">
      @foreach ($values as $value)
        <li><span class="t-values__no" aria-hidden="true">{{ sprintf('%02d', $loop->iteration) }}</span>{{ $value }}</li>
      @endforeach
    </ol>
  </div>
</section>
