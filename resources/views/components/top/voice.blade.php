{{--
  お客様の声。config/top.php の reviews のうち 'approved' => true のものだけ表示する。
  掲載許可の取れた口コミが1件もない間は、見出しを一般的な文言にし、口コミ評価とHotPepperへのリンクだけを表示する。
--}}
@php
  $reviews = collect(config('top.reviews'))->where('approved', true);
  $groups = $reviews->groupBy('group');
  $rating = config('top.review_rating');
@endphp
<section class="t-section t-voice" data-gtm-view="view_reviews">
  <div class="t-wrap">
    <p class="t-en" aria-hidden="true">Voice</p>
    @if ($reviews->isNotEmpty())
      <p class="t-eyebrow">通ってくださっている方の言葉より</p>
    @endif
    <h2 class="t-heading">
      @if ($reviews->isNotEmpty())
        {{ config('top.reviews_heading') }}
      @else
        お客様の声
      @endif
    </h2>

    @if ($rating)
      <p class="t-voice__rating">{{ $rating['source'] }}の口コミ　平均 {{ $rating['score'] }}（{{ $rating['count'] }}件・{{ $rating['as_of'] }}）</p>
    @endif

    @if ($groups->isNotEmpty())
      <div class="t-voice__groups">
        @foreach ($groups as $group => $items)
          <div class="t-voice__group">
            <h3 class="t-hand t-voice__group-title">{{ $group }}</h3>
            @foreach ($items as $review)
              <figure class="t-card">
                <blockquote>{{ $review['text'] }}</blockquote>
                <figcaption>{{ $review['author'] }}</figcaption>
              </figure>
            @endforeach
          </div>
        @endforeach
      </div>
    @else
      <p class="t-voice__empty">はじめての方の感想や、長く通ってくださっている方の声を、HotPepper Beautyでご覧いただけます。</p>
    @endif

    <a class="t-link" href="{{ config('salon.reservation.hotpepper.url') }}review/" target="_blank" rel="noopener noreferrer" data-gtm-event="hotpepper_reviews_click" data-gtm-cta-position="home_reviews">口コミをもっと読む（HotPepper Beauty）</a>
  </div>
</section>
