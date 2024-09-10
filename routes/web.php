<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
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

Route::middleware('cache.views')->group(function () {
    Route::view('/', 'home')->name('home');
    Route::view('about', 'about')->name('about');
    Route::view('career', 'career')->name('career');
    Route::view('service', 'service')->name('service');
    Route::view('pricing', 'pricing')->name('pricing');
    Route::view('contact/page', 'contact')->name('contact');
    Route::view('portfolio/page', 'portfolio')->name('portfolio');
});
