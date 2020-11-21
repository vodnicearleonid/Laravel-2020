<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

/**
 * Class Rubric
 * @package App\Models
 * @mixin Builder
 */
class Rubric extends Model
{
    use HasFactory;
    public function posts(){
        //return $this->hasOne('App\Post'); //nu merge
        return $this->hasMany(Post::class);
    }
}

/*class Rubric extends Model
{
    use HasFactory;
    public function post(){
        //return $this->hasOne('App\Post'); //nu merge
        return $this->hasOne(Post::class);
    }
}*/
