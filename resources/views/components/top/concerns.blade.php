@php($concerns = [
  '鏡を見て、なんだか疲れた顔をしているなと思う',
  'ほうれい線やたるみが、前より気になってきた',
  'デスクワークや運動で、首・肩・腰がつらい',
  '忙しくて、自分のことはいつも後回し',
])
<section class="t-section t-concerns">
  <div class="t-wrap t-narrow">
    <h2 class="t-heading">こんなこと、ありませんか？</h2>
    <ul class="t-concerns__list">
      @foreach ($concerns as $concern)
        <li>
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 13c2 1.5 3.5 3.5 4.5 5.5C11 12 15 7 20 4.5"/></svg>
          <span>{{ $concern }}</span>
        </li>
      @endforeach
    </ul>
    <p class="t-note-box">お顔の悩みとからだの不調は、つながっていることがあります。どちらか一方だけでなく、まとめてご相談ください。</p>
  </div>
</section>
