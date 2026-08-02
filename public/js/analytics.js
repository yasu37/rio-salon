(function () {
  window.dataLayer = window.dataLayer || [];

  function isMobile() {
    return window.matchMedia('(max-width: 780px)').matches;
  }

  function pushEvent(eventName, params) {
    var payload = { event: eventName, page_path: location.pathname, device_category: isMobile() ? 'mobile' : 'desktop' };
    for (var key in params) {
      if (params[key]) payload[key] = params[key];
    }
    window.dataLayer.push(payload);
  }

  // クリック計測: data-gtm-event を持つ要素（予約リンク・メニューCTA等）
  document.addEventListener('click', function (e) {
    var el = e.target.closest('[data-gtm-event]');
    if (!el) return;
    pushEvent(el.getAttribute('data-gtm-event'), {
      booking_provider: el.getAttribute('data-gtm-provider'),
      customer_type: el.getAttribute('data-gtm-customer-type'),
      menu_name: el.getAttribute('data-gtm-menu-name'),
      staff_name: el.getAttribute('data-gtm-staff-name'),
      cta_position: el.getAttribute('data-gtm-cta-position')
    });
  });

  // 表示計測: data-gtm-view を持つ要素はページ読み込み時に1回だけ発火
  document.querySelectorAll('[data-gtm-view]').forEach(function (el) {
    pushEvent(el.getAttribute('data-gtm-view'), {
      menu_name: el.getAttribute('data-gtm-menu-name')
    });
  });

  // Googleマップ（外部originのiframe）クリック計測。
  // iframe内のクリックイベントは親ドキュメントに伝播しないため、
  // フォーカスがiframeへ移った瞬間（クリックで発生するwindow blur）で代替検知する。
  var mapFrames = document.querySelectorAll('[data-gtm-map]');
  if (mapFrames.length) {
    window.addEventListener('blur', function () {
      if (document.activeElement && document.activeElement.tagName === 'IFRAME') {
        mapFrames.forEach(function (frame) {
          if (frame === document.activeElement) pushEvent('click_google_map', {});
        });
      }
    });
  }
})();
