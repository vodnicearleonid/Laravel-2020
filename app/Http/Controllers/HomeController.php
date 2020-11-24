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

        $posts = Post::orderBy('id', 'desc')->paginate(6);
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

