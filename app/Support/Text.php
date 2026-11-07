<?php

namespace App\Support;

/**
 * 表示用の文字列の整形。
 */
class Text
{
    // 長いカタカナの複合語を、この語の前で改行できるようにする（「プラセ／ンタマスク」のような途中の改行を防ぐ）
    private const WORDS = [
        'フェイシャル', 'ピーリング', 'マッサージ', 'オイル', 'トリートメント', 'マスク', 'パック',
        'ヘッドスパ', 'カッピング', 'リンパ', 'プラセンタ', 'リフトアップ', 'リリース', 'マタニティ',
    ];

    /**
     * メニュー名などの短い文字列に、改行してよい位置（<wbr>）を入れて HTML として返す。
     * 「+」「&」「・」「／」の後ろ、「(」の前、数字（70分など）の前、上の語の前で改行できるようにする。
     * CSS の word-break: keep-all と組み合わせて使う（それ以外の位置では改行しない）。
     */
    public static function wbr(?string $text): string
    {
        $html = e((string) $text);
        $html = preg_replace('/(\+|＋|&amp;|＆|・|／|\/)/u', '$1<wbr>', $html);
        $html = preg_replace('/(?<=[^\d,(（])([\(（]|\d)/u', '<wbr>$1', $html);
        $words = implode('|', array_map(fn ($w) => preg_quote($w, '/'), self::WORDS));
        $html = preg_replace('/(?<=[ァ-ヶー])(' . $words . ')/u', '<wbr>$1', $html);
        return $html;
    }
}
