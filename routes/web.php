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

Route::get('/', 'HomeControllerTest@index');

Route::fallback(function (){
    abort(404, 'Oops! Page not found.. .'); // <h3>{{ $exception->getmessage() }}</h3> 404.blade.php
});





















