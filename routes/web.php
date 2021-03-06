<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
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
Route::group(['middleware' => 'guest'], function (){
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');
    Route::get('/login', [UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login', [UserController::class, 'login'])->name('login');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/create', [HomeController::class, 'create'])->name('posts.create');
Route::post('/', [HomeController::class, 'store'])->name('posts.store');
Route::get('/page/about', [PageController::class, 'show'])->name('page.about');
Route::match(['get', 'post'], '/send', [ContactController::class, 'send']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function (){
   Route::get('/', [MainController::class, 'index']);
});

/*
Route::get('/admin', [MainController::class, 'index'])->middleware('admin');
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





















