<div>
  <details>
    <summary>
      <h2>{{ $menu_name }}</h2><span class="icon"></span>
    </summary>
    <div class="content">
      <div>
        <p class="menu_concept">{{ $menu_concept }}</p>
        <p>{{ $menu_description }}</p>
      </div>
      <div>
        <p class="treatment_flow">
          【施術の流れ】
        </p>
        <p>{{ $treatment }}</p>
      </div>
      <div class="frame">
        <div class="frame_name">メニュー・料金(税込)</div>
        <div class="frame_content">
          <div class="content1">
            <div class="time">施術時間： {{ $time }}</div>
            <div class="price">{{ $price }}</div>
          </div>
          <div class="button5">
            <a href="../../reserve">ご予約はこちら</a>
          </div>
        </div>
      </div>
    </div>
  </details>
</div>
