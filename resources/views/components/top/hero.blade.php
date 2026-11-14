{{-- ファーストビュー。写真と言葉だけで見せる（数字・料金・ボタンは置かない。予約はヘッダーとスマホの固定ボタンから）。
     はじめての方が鍼に怖さを感じないよう、最初の写真は鍼の写らないものにしている。 --}}
<section class="t-hero">
  <div class="t-wrap t-hero__inner">
    <div class="t-hero__photo">
      <x-top.photo name="course6" alt="お顔に手を添えてケアを受けている女性" :eager="true" />
    </div>
    <div class="t-hero__text">
      {{-- 検索エンジンに地域と業種が伝わるよう、小さな説明文も大見出し（h1）の中に入れている --}}
      <h1 class="t-hero__heading">
        <span class="t-hero__place">水戸市米沢町の美容鍼・鍼灸サロン</span>
        <span class="t-hero__title">お顔のことも、<br>からだのことも。</span>
      </h1>
      <p class="t-hero__lead">東洋医学の考え方で、根本から。<br>おひとりおひとりに合わせたケアをご提案します。</p>
    </div>
  </div>
</section>
