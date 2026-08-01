<!--記事7-->
<!-- ~ 店舗情報 ~ -->
<section id="location">
  <div class="container">
    <!--タイトル-->
    <div class="section_title">
      <h2>店舗情報</h2>
      <p>ACCESS</p>
    </div>
    <ul class="content">
      <!--内容3-->
      <li class="map box">
        <iframe class="google_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12855.86764302473!2d140.449371790053!3d36.337351782305326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60222568b6382539%3A0x4457e0f3746bdce1!2z44Oq44Kq6Y2854G444K144Ot44Oz44CQ576O5a656Y28JuODnuODg-OCteODvOOCuOOAkQ!5e0!3m2!1sja!2sjp!4v1641286190382!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </li>
      <!--内容4-->
      <li class="infomation box">
        <table>
          <tr>
            <th>店名</th>
            <th>{{ config('salon.name') }}</th>
          </tr>
          <tr>
            <th>住所</th>
            <th>{{ config('salon.address.full') }}</th>
          </tr>
          <tr>
            <th>営業時間</th>
            <th>{{ config('salon.business_hours.open') }}〜{{ config('salon.business_hours.close') }}</th>
          </tr>
          <tr>
            <th>定休日</th>
            <th>{{ config('salon.business_hours.closed_day') }}</th>
          </tr>
          <tr>
            <th>電話番号</th>
            <th><a href="tel:{{ config('salon.tel_href') }}">{{ config('salon.tel') }}</a></th>
          </tr>
          <tr>
            <th>駐車場</th>
            <th>{{ config('salon.parking_spaces') }}台</th>
          </tr>
          <tr>
            <th>決済方法</th>
            <th>現金<br>クレジットカード:{{ implode('/', config('salon.payment.credit_cards')) }}など<br>電子マネー:{{ implode('/', config('salon.payment.e_money')) }}</th>
          </tr>
        </table>
      </li>
    </ul>
    <ul class="img_box">
      <li>
        <picture>
          <source srcset="./img/location6.webp" type="image/webp">
          <img src="./img/location6.jpg" alt="rio鍼灸サロンの店内写真" width="1280" height="960" loading="lazy">
        </picture>
      </li>
      <li>
        <picture>
          <source srcset="./img/location.webp" type="image/webp">
          <img src="./img/location.jpg" alt="rio鍼灸サロンの店内写真" width="1200" height="900" loading="lazy">
        </picture>
      </li>
      <li>
        <picture>
          <source srcset="./img/location2.webp" type="image/webp">
          <img src="./img/location2.jpg" alt="rio鍼灸サロンの店内写真" width="640" height="480" loading="lazy">
        </picture>
      </li>
    </ul>
  </div>
</section>
</main>
