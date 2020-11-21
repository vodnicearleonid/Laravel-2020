<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table = 'my_posts'; // cazul in care importam tabel cu un nume diferit
    //protected $primaryKey = 'post_id'; // cazul in care in se numeste diferit
    //public $incrementing = false; //
    //protected $keyType = 'string'; //
    //public $timestamps = folse; // cind nu dorim timestamps sa fie completat automat
    /*protected $attributes = [
        'content' => 'Lorem ipsum... protected $attributes' //"insert into `posts` (`content`, `title`, `updated_at`, `created_at`) values (?, ?, ?, ?)"
    ];*/

    protected $fillable = ['title', 'content', 'rubric_id'];

   /* public static function where(string $string, string $string1, int $int){
    }*/

    public function rubric(){
        return $this->belongsTo(Rubric::class);// daca schimb in baza de date numele la tabel, trebuie sa schimb si foreignKey in model (Rubric::class, 'rubric_my_id') al doilea parametru
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getPostDate(){
        return Carbon::parse($this->created_at)->diffForHumans();
    }

}
