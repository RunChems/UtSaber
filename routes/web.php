<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('/users', App\Http\Controllers\UserController::class)->middleware('admin')->except('update');
Route::Put('/users', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::resource('/articles', App\Http\Controllers\ArticleController::class)->middleware('admin');
Route::view('/', 'welcome');
Auth::routes();

Route::get('/demography', [App\Http\Controllers\GraphController::class, 'index'])->name('demography');
Route::post('/demography', [App\Http\Controllers\GraphController::class, 'getInfo'])->name('graph-demography');

Route::get('/economy', [App\Http\Controllers\EconomyController::class, 'index'])->name('economy');
Route::post('/economy', [App\Http\Controllers\EconomyController::class, 'getInfo'])->name('graph-economy');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/profile', 'user.profile')->name('profile');
Route::get('/login/{driver}',
    [App\Http\Controllers\Auth\LoginController::class, 'redirectToProvider'])
    ->name('login.redirect');
Route::get('/login/{driver}/callback',
    [App\Http\Controllers\Auth\LoginController::class, 'getUserInformation'])
    ->name('login.callback');

