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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/about', [App\Http\Controllers\AboutController::class, 'getabout'])->name('about');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'getblog'])->name('blog');


Route::get('/contact', [App\Http\Controllers\ContactController::class, 'getcontact'])->name('contact');


Route::get('/gallary', [App\Http\Controllers\GallaryController::class, 'getgallary'])->name('gallary');

