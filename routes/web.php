<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/services', [\App\Http\Controllers\ServiceController::class,'index'])->name('service');
Route::get('/services/{id}/{slug}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/portfolio', [\App\Http\Controllers\PortfolioController::class,'index'])->name('portfolio');
//Route::get('/contact', ContactController::class)->name('contact');
Route::get('/contact-us',[ContactController::class,'index'])->name('contact.index');
Route::post('contact-send',[ContactController::class,'store'])->name('contact.store');
//Route::post('/contact-post', ContactController::class, 'store')->name('contact.post');
Route::get('/news', [PostController::class, 'index'])->name('news.index');
Route::get('/news/{id}/{slug}', [PostController::class, 'show'])->name('news.show');
/*Route::get('/', function () {
    return view('layouts.index');
});*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
