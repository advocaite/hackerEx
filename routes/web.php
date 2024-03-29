<?php

use App\Http\Controllers\RankingController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\gameDashboard;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AjaxController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/ajax/getStatic', [AjaxController::class, 'getStatic']);
Route::get('/ajax/getCommon', [AjaxController::class, 'getCommon']);
Route::get('/ajax/getPwdInfo', [AjaxController::class, 'getPwdInfo']);
Route::get('/profile/{id}', 'ProfileController@show')->name('profile.show');
Route::get('/stats', 'StatsController@show')->name('stats.show');
Route::get('/ranking/{display}', [RankingController::class, 'showRanking'])->name('ranking.indexget');
Route::get('/ranking', [RankingController::class, 'showRanking'])->name('ranking.index');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [gameDashboard::class, 'index'])->name('index_in');
Route::get('dashboard2', [gameDashboard::class, 'indexnew']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
