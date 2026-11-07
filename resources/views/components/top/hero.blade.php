<section class="t-hero">
  <div class="t-wrap t-hero__inner">
    <div class="t-hero__photo">
      <x-top.photo name="course1" alt="美容鍼を受けて、くつろいでいるお客様" :eager="true" />
    </div>
    <div class="t-hero__text">
      {{-- 検索エンジンに地域と業種が伝わるよう、小さな説明文も大見出し（h1）の中に入れている --}}
      <h1 class="t-hero__heading">
        <span class="t-hero__place">水戸市米沢町の美容鍼・鍼灸サロンです</span>
        <span class="t-hero__title">お顔のことも、<br>からだのことも。</span>
      </h1>
      <p class="t-hand t-hero__lead">まずはゆっくり、お話を聞かせてください。</p>
      <ul class="t-hero__tags" aria-label="施術の種類">
        <li class="t-tag">美容鍼</li>
        <li class="t-tag">鍼灸</li>
        <li class="t-tag t-tag--apricot">フェイシャルエステ</li>
        <li class="t-tag t-tag--apricot">マッサージ</li>
      </ul>
    </div>
  </div>
</section>
