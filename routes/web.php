<?php

use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::resource('/users', UserController::class);

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [GuestController::class, 'index'])->name('admin.index');
    Route::post('/daftar-tamu', [GuestController::class, 'daftar'])->name('admin.daftar');
    route::post('/cetak', [GuestController::class, 'cetak']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
