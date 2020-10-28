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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function (){
    return 'Hello,  world!';
});*/

//Moduri de afisare in view fara controller home.blade.php

/*Route::get('/', function (){
    $res = 2 + 3;
    $name = 'john';
    return view('home', ['var'=>$res, 'name'=>$name]);
});*/

Route::get('/', function (){
    $res = 2 + 3;
    $name = 'john';
    return view('home', compact('res', 'name'));
});

Route::get('/about', function (){
    return '<h3>About Page</h3>';
});
/*
Route::get('/contact', function (){
    return view('contact');
});

Route::post('/send-email', function (){
    if (!empty($_POST)){
        dump($_POST);
    }
    return 'send email';
});*/
/*
Route::match(['post', 'get'], '/contact', function (){
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});*/

/*Route::match(['post', 'get'], '/contact', function (){
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contacttest');*/

Route::match(['post', 'get'], '/contact', function (){
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});

Route::view('/test', 'test', ['test'=>'test data']);

//Route::redirect('/about', '/contact');
//Route::redirect('/about', '/contact', '301');
//Route::permanentRedirect('about', 'contact');
