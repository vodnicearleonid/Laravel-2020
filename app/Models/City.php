<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected  $table = 'city';// conventia cind nu se respecta, spre exemplu in baza de date tabelul trebuia sa se umeasca 'citys'
}
