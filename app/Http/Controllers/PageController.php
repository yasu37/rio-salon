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

    //メニュー
    public function menu1() {
        return view('menu.menu1');
    }
    public function menu2() {
        return view('menu.menu2');
    }
    public function menu3() {
        return view('menu.menu3');
    }
    public function menu4() {
        return view('menu.menu4');
    }
    public function menu5() {
        return view('menu.menu5');
    }
    public function menu6() {
        return view('menu.menu6');
    }
    public function menu7() {
        return view('menu.menu7');
    }
    public function menu8() {
        return view('menu.menu8');
    }
    public function menu9() {
        return view('menu.menu9');
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

    //コラム
    public function column1() {
        return view('column.column1');
    }

    //サイトマップ
    public function sitemap() {
        return view('sitemap');
    }
}
