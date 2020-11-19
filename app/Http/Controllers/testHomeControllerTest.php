
    /*public function index(){*/
        //$data = DB::table('country')->get(); //"select * from `country`"
        //$data = DB::table('country')->limit(5)->get(); //"select * from `country` limit 5"
        //$data = DB::table('country')->select('Code', 'Name')->limit(5)->get(); //"select `Code`, `Name` from `country` limit 5"
        //$data = DB::table('country')->select('Code', 'Name')->first(); //"select `Code`, `Name` from `country` limit 1"
        //$data = DB::table('country')->select('Code', 'Name')->orderBy('Code', 'desc')->first(); //"select `Code`, `Name` from `country` order by `Code` desc limit 1"
        //$data = DB::table('city')->select('ID', 'Name')->find(254); // "select `ID`, `Name` from `city` where `id` = ? limit 1"
        //$data = DB::table('city')->select('ID', 'Name')->where('id', '=', 2)->get(); //"select `ID`, `Name` from `city` where `id` = ?"
        /*$data = DB::table('city')->select('ID', 'Name')->where([
            ['id', '>', 1],
            ['id', '<', 5],
        ])->get();*/ // "select `ID`, `Name` from `city` where (`id` > ? and `id` < ?)"

        /*$data = DB::table('city')->where([
            ['id', '>', 1],
            ['id', '<', 5],
        ])->get();*/ // "select * from `city` where (`id` > ? and `id` < ?)"

        //$data = DB::table('city')->where('id', '<', 5)->value('Name'); //"select `Name` from `city` where `id` < ? limit 1"
        /*$data = DB::table('country')->limit(10)->pluck('Name', 'Code'); *///"select `Name`, `Code` from `country` limit 10"
        /*$data = DB::table('country')->count();*/ // "select count(*) as aggregate from `country`"
        /*$data = DB::table('country')->max('Population');*/ // "select max(`Population`) as aggregate from `country`"

        /*$data = DB::table('city')->select('CountryCode')->distinct()->get();*/ // "select distinct `CountryCode` from `city`"

        /*$data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')
            ->limit(10)
            ->join('country','city.CountryCode', '=', 'country.Code')
            ->get();*/ //"select `city`.`ID`, `city`.`Name` as `city_name`, `country`.`Code`, `country`.`Name` as `country_name` from `city` inner join `country` on `city`.`CountryCode`  ▶"

        /*$data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as country_name')
            ->limit(10)
            ->join('country','city.CountryCode', '=', 'country.Code')
            ->orderBy('ID')

    //->get();*/ //"select `city`.`ID`, `city`.`Name` as `city_name`, `country`.`Code`, `country`.`Name` as `country_name` from `city` inner join `country` on `city`.`CountryCode`  ▶"
    //$post = new Post(); //"insert into `posts` (`title`, `content`, `updated_at`, `created_at`) values (?, ?, ?, ?)"
   //$post->title = 'Articolul nr2';
    //$post->content = 'Lorem ipsum nr1';
   //$post->save();

    //$data = Country::all(); // "select * from `country`" intoarce toate datele din tabel
    //$data = Country::limit(5)->get(); // "select * from `country` limit 5" intoarce 5 rinduri din tabel
    //$data = Country::query()->limit(5)->get(); // alternativ pentru phpstorm ca sa depisteze metodele "select * from `country` limit 5" "select * from `country` limit 5" intoarce 5 rinduri din tabel
    //$data = Country::where('Code', '<', 'ALB')->get(); // "select * from `country` where `Code` < ?"
    //$data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->get(); // "select `Code`, `Name` from `country` where `Code` < ?"
    //$data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->offset(1)->limit(2)->get(); // "select `Code`, `Name` from `country` where `Code` < ? limit 2 offset 1"
    //$data = City::find(5); // "select * from `city` where `city`.`id` = ? limit 1"
    //$data = Country::find('AGO'); // "select * from `country` where `country`.`Code` = ? limit 1" namespace App\Models; Country.php am scris ca protected $primaryKey = 'Code'; protected $keyType = 'string';
    //dd($data);

    /*// adaugarea datelor in tabel
    $post = new Post(); //"insert into `posts` (`content`, `title`, `updated_at`, `created_at`) values (?, ?, ?, ?)"
    $post->title = 'Post 4';
    $post->content = 'Lorem ipsum 4 ';
    $post->save();*/

    //Post::create(['title' => 'Post 7', 'content' => 'Lorem ipsum 7']); // adaugarea datelor in masa, ca sa functioneze trebuie sa setam "insert into `posts` (`title`, `content`, `updated_at`, `created_at`) values (?, ?, ?, ?)"

    /*$post = new Post(); //"insert into `posts` (`title`, `content`, `updated_at`, `created_at`) values (?, ?, ?, ?)"
    $post->fill(['title' => 'Post 8', 'content' => 'Lorem ipsum 8 ']);
    $post->save();*/

    /*$post = Post::find(5);
    $post->content = 'Lorem ipsum 6'; // actualizarea uni cimp din tabel dupa ID "select * from `posts` where `posts`.`id` = ? limit 1"  "update `posts` set `content` = ?, `posts`.`updated_at` = ? where `id` = ?"
    $post->save();*/

    /* Post::where('id', '>', 3)
    ->update(['updated_at' => NOW()]);*/ //"update `posts` set `posts`.`updated_at` = ? where `id` > ?"

    /* $post = Post::find(6);
    $post->delete();*/ // "select * from `posts` where `posts`.`id` = ? limit 1" "delete from `posts` where `id` = ?"

    /*Post::destroy(8);*/ // sterge un rind dupa IDs "select * from `posts` where `id` in (?)" "delete from `posts` where `id` = ?"

    /*$post = Post::find(1); //Один к одному One To One Rubrica pentru post
    dump($post->title, $post->rubric->title); //"select * from `posts` where `posts`.`id` = ? limit 1"
    //"select * from `rubrics` where `rubrics`.`id` = ? limit 1"
    //"Articolul nr1"
    //"Rubric 4"*/

    /*$rubric = Rubric::find(4); // //Один к одному One To One Post pentru Rubrica
    dump($rubric->title, $rubric->post->title); //"select * from `rubrics` where `rubrics`.`id` = ? limit 1"
    //"select * from `posts` where `posts`.`rubric_id` = ? and `posts`.`rubric_id` is not null limit 1"
    //"Rubric 4"
    //"Articolul nr1"*/
    // One To Many
    /*$rubric = Rubric::find(1);
    dump($rubric->posts);*/

    /*$post = Post::find(2); //One To Many
    dump($post->content, $post->rubric->title); //"select * from `posts` where `posts`.`id` = ? limit 1"
    //"select * from `rubrics` where `rubrics`.`id` = ? limit 1"
    //"Lorem ipsum 4 "
    //"Rubric 3"*/

    /*//One To Many
    $posts = Rubric::find(1)->posts()->select('title')->where('id','>','2')->get();
    dump($posts); // "select * from `rubrics` where `rubrics`.`id` = ? limit 1"
    //"select `title` from `posts` where `posts`.`rubric_id` = ? and `posts`.`rubric_id` is not null and `id` > ?"*/

    // жадная загрузка laravel
    /*$posts = Post::with('rubric')->where('id','>',1)->get();
    foreach ($posts as $post){
    dump($post->title);
    }*/   /*"select * from `posts` where `id` > ?"
    "select * from `rubrics` where `rubrics`.`id` in (1, 3)"
    "Articolul nr2"
    "Post 4"
    "Articol 4"
    "Articol 5"*/

    // Many To Many Post::find()
    /*"select * from `posts` where `posts`.`id` = ? limit 1"
    "Articolul nr1"
    "select `tags`.*, `post_tag`.`post_id` as `pivot_post_id`, `post_tag`.`tag_id` as `pivot_tag_id` from `tags` inner join `post_tag` on `tags`.`id` = `post_tag`.`t ▶"
    "Tag 2"
    "Tag 3"*/
    /*$post = Post::find(1);
    dump($post->title);
    foreach ($post->tags as $tag){
    dump($tag->title);
    }*/


    // Many To Many Tag::find()
    /*"select * from `tags` where `tags`.`id` = ? limit 1"
    "Tag 2"
    "select `posts`.*, `post_tag`.`tag_id` as `pivot_tag_id`, `post_tag`.`post_id` as `pivot_post_id` from `posts` inner join `post_tag` on `posts`.`id` = `post_tag` ▶"
    "Articolul 1"
    "Articolul 2"
    "Articolul 3"
    "Articolul 9"*/
    /*$tag = Tag::find(2);
    dump($tag->title);
    foreach ($tag->posts as $post) {
    dump($post->title);
    }*/

    $h3 = 'home page';

    $data1 = range(1, 20); // masiv numeric

    // masiv asociativ
    $data2 = [
    'title' => 'Title',
    'content' => 'Content',
    'keys' => 'Keywords'
    ];

    //Cookie::queue(Cookie::forget('test'));// sterge cookie
    //Cookie::queue('test', 'Test cooke', 5); // setarea cookie
    //dump(Cookie::get('test'));
    /*dump($request->cookie('test'));*/
    //$posts = Post::all();

    //exeplul 1
    //$request->session()->put('Test 1', 'Test 1 Value');
    //exeplul 2
    /*session(['cart' => [
    ['id' => 1, 'title' => 'Product 1'],
    ['id' => 2, 'title' => 'Product 2']
    ]]);*/

    // adaugarea datelor la cele care deja cunt nefiind inlocuite
    /*$request->session()->push('cart', ['cart' => 3, 'title' => 'Product 3']);
    $request->session()->push('Test 2', 'Test 2 Value');*/

    /*
    // trei exemple de primire a dateleor
    dump(session('test'));
    dump(session('cart')[1]['title']);
    dump($request->session()->get('cart')[0]['title']);*/

    //dump($request->session()->all()); // afisarea sessiei

    // Citirea datelor din sessie apoi stergerea datelor
    /*dump($request->session()->pull('test'));*/

    /*$request->session()->forget('Test 2'); */ // stergerea unei sessii
    /*$request->session()->flush();*/ // stergerea completa a sessiei si a tokenului

    //dump(session()->all()); // afisarea sessiei

    public function store(Request $request){
    /*dump($request->input('title'));
    dump($request->input('content'));
    dd($request->input('rubric_id'));*/
    //dd($request->all());

    //validarea defauld datelor din forma
    /*$this->validate($request, [
    'title' => 'required|min:5|max:100',
    'content' => 'required',
    'rubric_id' => 'integer',
    ]);*/


    /*// validarea costumizata personalizata
    $rules = [
    'title' => 'required|min:5|max:100',
    'content' => 'required',
    'rubric_id' => 'integer',
    ];
    $messages = [
    'title.required' => 'Completat titlul',
    'title.min' => 'Minim 5 caractere pentru titlu',
    'title.max' => 'Maxim 100 caractere pentru titlu',
    'content.required' => 'Completati Contentul',
    'rubric_id.integer' => 'Selectati rubrica din lista',
    ];
    $validator = Validator::make($request->all(), $rules, $messages)->validate(); // validarea costumizata personalizata*/

    $this->validate($request, [
    'title' => 'required|min:5|max:100',
    'content' => 'required',
    'rubric_id' => 'integer',
    ]);

    Post::create($request->all()); // important sa daugam coloanele in care salvam informatia in tabele protected mapa Models Post.php protected $fillable = ['title', 'content', 'rubric_id'];
    //$request->session()->flash('success', 'Datele au fost salvate!');
    return redirect()->route('home'); // resirect la pagina principala
    }
    }

