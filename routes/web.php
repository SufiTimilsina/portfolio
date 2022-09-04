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



Route::group(['prefix' => 'sufiadmin'], function () {
    Voyager::routes();
});

Route::get('/' , [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'getabout'])->name('about');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'getblog'])->name('blog');
Route::get('/readblog/{id}', [App\Http\Controllers\BlogController::class, 'readblog'])->name('readblog');



Route::get('/contact', [App\Http\Controllers\ContactController::class, 'getcontact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'contactus'])->name('contactus');


Route::get('/gallary', [App\Http\Controllers\GallaryController::class, 'getgallary'])->name('gallary');

