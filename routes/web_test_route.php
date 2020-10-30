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

/*Route::get('/', function (){
    $res = 2 + 3;
    $name = 'john';
    return view('home', compact('res', 'name'));
})->name('home');

Route::get('/about', function (){
    return '<h3>About Page</h3>';
});*/

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

/*
  Route::match(['post', 'get'], '/contact', function (){
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
})->name('contacttest');
*/

/*Route::match(['post', 'get', 'put'], '/contact', function (){
    if (!empty($_POST)){
        dump($_POST);
    }
    return view('contact');
});

Route::view('/test', 'test', ['test'=>'test data']);*/

//Route::redirect('/about', '/contact');
//Route::redirect('/about', '/contact', '301');
//Route::permanentRedirect('about', 'contact');

/*Route::get('/post/{id}', function ($id){
   return "Post $id";
});*/

/*Route::get('/post/{id}/{slug}', function ($id, $slug){
    return "Post $id | $slug";
});*/

/*Route::get('/post/{id}/{slug}', function ($id, $slug){
    return "Post $id | $slug";
})->where('id', '[0-9]+');*/

/*Route::get('/post/{id}/{slug}', function ($id, $slug){
    return "Post $id | $slug";
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-]+']);*/

/*
// namespace App\Providers; RouteServiceProvider.php регулярные выражения pentru uri
Route::get('/post/{id}/{slug}', function ($id, $slug){
    return "Post $id | $slug";
});
*/


/*//Как создать админку..? Route::prefix('admin')->group(function (){ //...});

Route::prefix('admin')->group(function (){
    Route::get('/posts', function (){
        return 'Posts List';
    });

    Route::get('/posts/create', function (){
        return 'Posts Create';
    });

    Route::get('/post/{id}/edit', function ($id){
        return "Edit Post $id";
    });
});*/

/*//{slug?} daca nu este obligatoriu..
Route::get('/post/{id}/{slug?}', function ($id, $slug = null){
    return "Post $id | $slug";
});*/


/*Route::get('/post/{id}/{slug?}', function ($id, $slug = null){
    return "Post $id | $slug";
})->name('post'); //name Route {{ route('post') }} in home.blade.php

Route::prefix('admin')->name('admin.')->group(function (){ //->name('admin.')->group
    Route::get('/posts', function (){
        return 'Posts List';
    });

    Route::get('/posts/create', function (){
        return 'Posts Create';
    });

    Route::get('/post/{id}/edit', function ($id){
        return "Edit Post $id";
    })->name('post');//name Route {{ route('post') }} in home.blade.php
});*/

//Redirectionarea tuturor paginilor care nu exiata spre o ruta anumita
/*Route::fallback(function (){
    return redirect()->route('home');
});*/



Route::fallback(function (){
    abort(404, 'Oops! Page not found.. .'); // <h3>{{ $exception->getmessage() }}</h3> 404.blade.php
});





















