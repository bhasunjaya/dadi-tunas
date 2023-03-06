<?php

use App\Http\Controllers\AuthLoginGet;
use App\Http\Controllers\AuthLoginPost;
use App\Http\Controllers\AuthLogoutPost;
use App\Http\Controllers\DashboardGet;
use App\Http\Controllers\ProfileGet;
use App\Http\Controllers\ProfilePost;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('login', AuthLoginGet::class)->name('login');
Route::post('login', AuthLoginPost::class)->name('login.post');



Route::group(['middleware' => ['auth']], function () {

    Route::get('/', DashboardGet::class)->name('dashboard');
    Route::get('profile', ProfileGet::class)->name('profile');
    Route::post('profile', ProfilePost::class)->name('profile.post');
    Route::post('logout', AuthLogoutPost::class)->name('logout');
});
