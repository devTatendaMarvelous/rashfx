<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarketPlaceController;
use App\Http\Controllers\PagesController;

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
//Pages controller
Route::get('/about',[PagesController::class, 'about'] );
Route::get('/contact',[PagesController::class, 'contact'] );
Route::get('/service',[PagesController::class, 'service'] );
Route::get('/', function () {
    return view('welcome');
});

// MarketPlaceController
Route::get('/stock',[MarketPlaceController::class, 'stock'] );
Route::get('/crypto',[MarketPlaceController::class, 'crypto'] );
Route::get('/indices',[MarketPlaceController::class, 'indices'] );
Route::get('/cfd',[MarketPlaceController::class, 'cfd'] );
Route::get('/metatrade',[MarketPlaceController::class, 'metatrade'] );


//
Route::resource('/profiles', 'App\Http\Controllers\ProfilesController' );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
