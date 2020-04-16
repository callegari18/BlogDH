<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // configuração para permitir atribuição em massa
    // $post = new Post(array(....));
    protected $fillable = ['titulo','resumo','conteudo','categoria_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

}


// Mass assignment
// $post = new Post($_POST);
// $post->save();
