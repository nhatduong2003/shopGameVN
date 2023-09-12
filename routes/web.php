<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class,'home']);
Route::get('/dich-vu', [IndexController::class,'dichvu'])->name('dichvu'); //Tất cả dịch vụ thuộc game
Route::get('/dich-vu/{slug}', [IndexController::class,'dichvucon'])->name('dichvucon'); // Dịch vụ con thuộc dịch vụ
Route::get('/danh-muc-game/{slug}', [IndexController::class,'danhmuc_game'])->name('danhmucgame'); // Tất cả danh mục game
Route::get('/danh-muc/{slug}', [IndexController::class,'danhmuccon'])->name('danhmuccon');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//category
Route::resource('/category',CategoryController::class);
//slider
Route::resource('/slider',SliderController::class);
//Blog
Route::resource('/blog',BlogController::class);