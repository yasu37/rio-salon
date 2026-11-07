{{-- スマホ画面の下に固定する予約・相談ボタン。電話はオーナーの判断で置かない（ページ内の各所に記載）。 --}}
<nav class="t-mobile-bar" aria-label="ご予約・ご相談">
  <a href="{{ config('salon.sns.line') }}" target="_blank" rel="noopener noreferrer" data-gtm-event="reservation_line_click" data-gtm-provider="line" data-gtm-cta-position="mobile_fixed">LINEで相談</a>
  <a class="is-primary" href="{{ url('reserve') }}" data-gtm-event="begin_booking" data-gtm-cta-position="mobile_fixed">ご予約</a>
</nav>
