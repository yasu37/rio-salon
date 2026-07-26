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
Route::get('menu/menu1', [PageController::class, 'menu1']);
Route::get('menu/menu2', [PageController::class, 'menu2']);
Route::get('menu/menu3', [PageController::class, 'menu3']);
Route::get('menu/menu4', [PageController::class, 'menu4']);
/* menu5（姿勢矯正リンパオイルトリートメント）は 2024-05-07 に提供終了。
   同一料金帯の後継である menu6（オイルトリートメント）へ恒久リダイレクトする。 */
Route::redirect('menu/menu5', '/menu/menu6', 301);
Route::get('menu/menu6', [PageController::class, 'menu6']);
Route::get('menu/menu7', [PageController::class, 'menu7']);
Route::get('menu/menu8', [PageController::class, 'menu8']);
Route::get('menu/menu9', [PageController::class, 'menu9']);
Route::get('menu/menu10', [PageController::class, 'menu10']);
/*質問 */
Route::get('question', [PageController::class, 'question']);
/*ニュース */
Route::get('news', [PageController::class, 'news']);
/*予約 */
Route::get('reserve', [PageController::class, 'reserve']);
/*キャンペーン */
Route::get('campaign/term', [PageController::class, 'term']);
Route::get('campaign/first', [PageController::class, 'first']);
/*コラム */
Route::get('column/column1', [PageController::class, 'column1']);
/*サイトマップ*/
/* 実体は public/sitemap.xml（静的ファイル）に一元化した。
   旧 /sitemap を失わないよう恒久リダイレクトのみ残す。 */
Route::redirect('sitemap', '/sitemap.xml', 301);
