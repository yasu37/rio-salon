<?php

namespace App\Support;

use Illuminate\Support\Collection;

/**
 * コラム（config/columns.php）の公開管理。
 * published の日付になるまでは、記事ページ・お知らせ・メニューページの「関連する記事」に出さない。
 * ローカルで公開前の記事を確認したいときは .env に COLUMN_PREVIEW=true を書く（本番では書かない）。
 */
class Columns
{
    /** 公開済みのコラム（キーは column1 などの番号） */
    public static function published(): Collection
    {
        return collect(config('columns'))->filter(fn ($column) => self::isPublished($column));
    }

    /** そのコラムを表示してよいか（公開日を過ぎているか、確認用の設定が有効か） */
    public static function isPublished(array $column): bool
    {
        return config('salon.column_preview') || $column['published'] <= now()->toDateString();
    }
}
