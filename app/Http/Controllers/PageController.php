<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //トップ
    public function index() {
        return view('index');
    }

    //リオについて
    public function about() {
        return view('about');
    }

    //メニュー（内容は config/menus.php）
    public function menu(string $slug) {
        abort_unless(array_key_exists($slug, config('menus.pages')), 404);
        return view('menu.show', ['slug' => $slug]);
    }

    //初めての方へ
    public function firstVisit() {
        return view('first-visit');
    }

    //質問
    public function question() {
        return view('question');
    }

    //ニュース
    public function news() {
        return view('news');
    }

    //予約
    public function reserve() {
        return view('reserve');
    }

    //キャンペーン（期間限定クーポン）
    public function term() {
        return view('campaign.term');
    }


    //コラム（一覧は config/columns.php、本文は components/column/{slug}）
    public function column(string $slug) {
        // 公開日前の記事は 404 にする（App\Support\Columns）
        $column = config('columns')[$slug] ?? null;
        abort_unless($column && \App\Support\Columns::isPublished($column), 404);
        return view('column.show', ['slug' => $slug, 'column' => $column]);
    }
}
