<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected  $table = 'country'; //conventia cind nu se respecta, spre exemplu in baza de date tabelul trebuia sa se umeasca 'countrys'
    protected $primaryKey = 'Code';
    public $incrementing = false;
    protected $keyType = 'string';
}
