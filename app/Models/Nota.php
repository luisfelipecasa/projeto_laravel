<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    //listagem de campos para inserção no banco 
    protected $fillable = ['texto'];
}
