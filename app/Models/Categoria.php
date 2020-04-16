<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillabel = ['nome'];

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }
}
