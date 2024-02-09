<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\gameDashboard;
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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [gameDashboard::class, 'index']);
Route::get('dashboard2', [gameDashboard::class, 'indexnew']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login/google', [AuthController::class, 'redirectToGoogle'])->name('redirectToGoogle');
Route::get('login/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('handleGoogleCallback');
