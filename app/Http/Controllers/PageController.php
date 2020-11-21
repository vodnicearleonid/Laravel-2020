<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(){
        return view("pages.about"); //ghilimele duble "pages.$slug"
        //return view("pages.show", ['slug'=>$slug]); //informatie dinamica pe pagina show.blade.php <h3> {{ $slug }} page</h3>
    }
}
