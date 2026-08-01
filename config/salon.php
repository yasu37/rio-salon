<?php

return [

    // 正式名称。画面表示は「name」を基準とし、alt属性等で英字併記が必要な場合のみ name_en を使う
    'name' => 'リオ鍼灸サロン',
    'name_en' => 'RIO鍼灸サロン',

    'address' => [
        'postal_code' => '310-0847',
        'prefecture' => '茨城県',
        'city' => '水戸市',
        'street' => '米沢町627',
        // フル表示用（〒付き）
        'full' => '〒310-0847 茨城県水戸市米沢町627',
    ],

    'tel' => '029-279-8639',
    'tel_href' => '0292798639',
    'tel_e164' => '+81-29-279-8639',

    'business_hours' => [
        'open' => '10:00',
        'close' => '20:00',
        // 確定情報がないため空欄。画面には表示せず、確定次第ここへ設定する
        'last_reception' => null,
        'closed_day' => '火曜日',
        'closed_day_label' => '火曜定休',
    ],

    'payment' => [
        'cash' => true,
        'credit_cards' => ['VISA', 'MasterCard', 'JCB'],
        'e_money' => ['PayPay', 'iD', 'QUIC Pay', 'Apple Pay'],
    ],

    'parking_spaces' => 4,
    'bed_count' => 2,

    // Googleマップの埋め込み・リンク先URL。未確定のため空欄
    'google_map_url' => null,

    'sns' => [
        'instagram' => 'https://www.instagram.com/rio_shinkyu_salon',
        'line' => 'https://line.me/R/ti/p/@834dvkdq',
        // 実際のFacebookページが存在しないため未設定（リンクは掲載しない）
        'facebook' => null,
    ],

    // 予約導線。customer_type は表示側のイベント計測用ラベルとして使用する
    'reservation' => [
        'square' => [
            'url' => 'https://squareup.com/appointments/book/m56hqg7x5peigt/LW3NV5ZDJP453/start',
            'provider' => 'square',
        ],
        'line' => [
            'url' => 'https://line.me/R/ti/p/@834dvkdq',
            'provider' => 'line',
        ],
        'hotpepper' => [
            'url' => 'https://beauty.hotpepper.jp/kr/slnH000577689/',
            'provider' => 'hotpepper',
        ],
        'phone' => [
            'url' => 'tel:0292798639',
            'provider' => 'phone',
        ],
    ],

    'gtm_id' => 'GTM-WTVF47M',
];
