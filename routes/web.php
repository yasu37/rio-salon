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
Route::get('menu/menu5', [PageController::class, 'menu5']);
Route::get('menu/menu6', [PageController::class, 'menu6']);
Route::get('menu/menu7', [PageController::class, 'menu7']);
Route::get('menu/menu8', [PageController::class, 'menu8']);
Route::get('menu/menu9', [PageController::class, 'menu9']);
/*質問 */
Route::get('question', [PageController::class, 'question']);
/*ニュース */
Route::get('news', [PageController::class, 'news']);
/*予約 */
Route::get('reserve', [PageController::class, 'reserve']);
/*コラム */
Route::get('column/column1', [PageController::class, 'column1']);
/*サイトマップ*/
Route::get('sitemap', [PageController::class, 'sitemap']);
