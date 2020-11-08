//dupa pozitie
/*$query = DB::insert("INSERT INTO posts (title, content) VALUES (?,?)", ['Articol nr 5', 'Lorem ipsum 5 text']);
var_dump($query);*/

// dupa nume
/*$query = DB::insert("INSERT INTO posts (title, content) VALUES (:title,:content)",
['title' => 'Articol nr 7', 'content' => 'Lorem ipsum 7 text']);
var_dump($query);*/

//adaugare data si ora in tabel func NOW()
/*DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL", [NOW(), NOW()]);*/

/*DB::delete("DELETE FROM posts WHERE id = ?", [6]);*/


//tranzactii Database Transactions целостность данных sql
DB::beginTransaction();

try {
DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]);
DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
DB::commit();
} catch (\Exception $e){
DB::rollBack();
echo $e->getMessage();
}



$posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id => 6']);
return $posts;

/*echo ("<pre>");
        var_dump($posts); //$posts;
        echo ("</pre>");*/


/*dump($_ENV['MY_SETTING']);
dump(env('MY_SETTING'));
dump(config('app.timezone'));
dump(config('database.connections.mysql.host'));
dump($_ENV);*/
