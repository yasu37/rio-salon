<?php

// スタッフ情報。将来的なスタッフ増加に備えて配列化している。
// 未確定の項目（得意な相談、出勤日、指名可否など）は null のままにし、
// 確定するまで画面には表示しない。

return [
    [
        'name' => '李 清恵',
        'name_kana' => null,
        'name_en' => 'Lee Kiyoe',
        'photo' => 'ceo',
        'qualifications' => [
            '鍼灸師',
            '登録販売管理者',
            '化粧品検定1級',
            'アロマ検定1級',
            'フェイシャルエステティシャン',
            'コスメコンシェルジュ',
        ],
        'treatments' => [
            '美容鍼灸',
            '鍼治療',
            'エステ',
            'オイルカッピング',
        ],
        // 施術歴の表示用ラベル。HotPepperなど他の掲載先と表記を揃えるため「20年以上」とする。
        'experience_label' => '20年以上',
        'specialties' => null,
        'motto' => null,
        'work_days' => null,
        'bookable_by_name' => null,
        'status' => 'active',
        'order' => 1,
    ],
];
