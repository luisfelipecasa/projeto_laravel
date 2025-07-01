<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use SoftDeletes;
    //listagem de campos para inserção no banco 
    protected $fillable = ['nome'];

    public function produtos():HasMany{
        return $this->hasMany(Produto::class);
    }
}
