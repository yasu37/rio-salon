<!--スタッフ紹介-->
<section id="staff" data-gtm-view="view_staff">
  <div class="section_title">
    <h2>スタッフ紹介</h2>
  </div>
  @foreach (collect(config('staff'))->where('status', 'active')->sortBy('order') as $member)
  <div class="information">
    <div class="staff_information">
      <div class="name">
        <h3>{{ $member['name'] }}</h3>
        @if ($member['name_en'])
          <p>{{ $member['name_en'] }}</p>
        @endif
      </div>
      <div class="content">
        <p>「健康や美容に悩まれている人達のためにご自身と向き合う場所を作りたい」と決意し、令和4年1月に「{{ config('salon.name') }}」「RIO漢方薬店」を開院いたしました。</p>
        <p>平成6年に国家資格取得後は、整形外科、鍼灸接骨院や指圧治療院など、臨床経験を重ねて参りました。</p>
        <p>{{ $member['experience_years'] }}年間培ってきた鍼灸の臨床経験と漢方、エステ、リラクゼーションの4本柱を軸に、お一人お一人に合った治療を提案し、皆様に笑顔で健やかな時間を過ごして頂きたいと思います。</p>
      </div>
    </div>
    <div class="ceo_img">
      <picture>
        <source srcset="./img/{{ $member['photo'] }}.webp" type="image/webp">
        <img src="./img/{{ $member['photo'] }}.jpg" alt="{{ $member['name'] }}の顔写真" width="1200" height="800" loading="lazy">
      </picture>
    </div>
    <div class="list">
      <dl>
        <dt>資格</dt>
        <dd>@foreach ($member['qualifications'] as $qualification)・{{ $qualification }}@if (!$loop->last)<br>@endif @endforeach</dd>
        <dt>担当施術</dt>
        <dd>@foreach ($member['treatments'] as $treatment)・{{ $treatment }}@if (!$loop->last)<br>@endif @endforeach</dd>
        <dt>施術歴</dt>
        <dd>{{ $member['experience_years'] }}年</dd>
        @if ($member['work_days'])
          <dt>出勤日</dt>
          <dd>{{ $member['work_days'] }}</dd>
        @endif
        @if (!is_null($member['bookable_by_name']))
          <dt>指名</dt>
          <dd>{{ $member['bookable_by_name'] ? '指名可' : '指名不可' }}</dd>
        @endif
      </dl>
    </div>
  </div>
  @endforeach
</section>
