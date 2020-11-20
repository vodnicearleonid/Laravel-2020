<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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
Route::get('/create', [HomeController::class, 'create'])->name('posts.create');
Route::post('/', [HomeController::class, 'store'])->name('posts.store');
Route::get('/page/about', [PageController::class, 'show'])->name('page.about');
Route::match(['get', 'post'], '/send', [ContactController::class, 'send']);

/*
Route::match(['get', 'post'], '/send', 'App\Http\Controllers\ContactController@send');
Route::resource('/admin/posts', PostController::class, ['parameters' =>['posts' => 'slug']]);
Route::resources(['posts' => PostController::class]);
Route::get('/', 'HomeController@index');
Route::get('/create', 'HomeController@create')->name('posts.create');
Route::post('/', 'HomeController@store')->name('posts.store');
Route::get('/send', 'ContactController@send');
*/


Route::fallback(function (){
    abort(404, 'Oops! Page not found.. .'); // <h3>{{ $exception->getmessage() }}</h3> 404.blade.php
});





















