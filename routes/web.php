<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*トップ */
Route::get('/', [PageController::class, 'index']);
/*RIOについて */
Route::get('about', [PageController::class, 'about']);
/*メニュー一覧 */
/* メニューページは config/menus.php の pages のキー（menu1 など）から作る。menu5 は下でリダイレクトする。 */
Route::get('menu/{slug}', [PageController::class, 'menu'])->where('slug', 'menu(1|2|3|4|6|7|8|9|10)');
/* menu5（姿勢矯正リンパオイルトリートメント）は 2024-05-07 に提供終了。
   同一料金帯の後継である menu6（オイルトリートメント）へ恒久リダイレクトする。 */
Route::redirect('menu/menu5', '/menu/menu6', 301);
/*初めての方へ */
Route::get('first-visit', [PageController::class, 'firstVisit']);
/*質問 */
Route::get('question', [PageController::class, 'question']);
/*ニュース */
Route::get('news', [PageController::class, 'news']);
/*予約 */
Route::get('reserve', [PageController::class, 'reserve']);
/*キャンペーン */
Route::get('campaign/term', [PageController::class, 'term']);
/* 初回限定メニューは campaign/term の「はじめての方の料金」にまとめたため、そちらへ恒久リダイレクトする。 */
Route::redirect('campaign/first', '/campaign/term#first', 301);
/*コラム */
/* 記事は config/columns.php のキー（column1, column2 …）から作る */
Route::get('column/{slug}', [PageController::class, 'column'])->where('slug', 'column[0-9]+');
/*サイトマップ*/
/* 実体は public/sitemap.xml（静的ファイル）に一元化した。
   旧 /sitemap を失わないよう恒久リダイレクトのみ残す。 */
Route::redirect('sitemap', '/sitemap.xml', 301);
