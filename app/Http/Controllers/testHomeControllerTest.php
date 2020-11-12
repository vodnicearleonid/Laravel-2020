
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
