<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\AdminController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/admin/login',[AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login',[AdminLoginController::class, 'login'])->name('admin.submit.login');
Route::post('/admin/logout',[AdminLoginController::class, 'logout'])->name('admin.logout');

Route::get('/admin/dashboard',[AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
