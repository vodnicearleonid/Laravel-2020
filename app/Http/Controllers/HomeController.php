<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request){

        /*Cache::put('key', 'value', 60); // Modalitatea de a scrie ceva in Cache 1 minut
        dump(Cache::get('key'));*/

        /*Cache::put('key', 'value', 600);// Setarea cache, afisarea si stergerea cache-lui
        dump(Cache::pull('key'));
        dump(Cache::get('key'));*/

        //Cache::flush(); //Sterge cashe complet

        // Vaerificam cu 'has' daca in posts sunt date, daca nu sunt pe punem in cache
        if (Cache::has('posts')){
            $posts = Cache::get('posts');
        }else{
            $posts = Post::orderBy('id', 'desc')->get();
            Cache::put('posts', $posts);
        }

        $title ='Home page';
        return view('home', compact('title', 'posts'));
    }

    public function create(){
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();//primim in forma de masiv toate rubricile si le transmitem in foreach in forma prin view compact('title', 'rubrics'));
        return view('create', compact('title', 'rubrics'));// transmitem in view titlul si rubicile in primul parametru si in al doilea

    }

    public function store(Request $request){


        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer',
        ]);

        Post::create($request->all()); // important sa daugam coloanele in care salvam informatia in tabele protected mapa Models Post.php protected $fillable = ['title', 'content', 'rubric_id'];
        return redirect()->route('home'); // resirect la pagina principala
    }
}

