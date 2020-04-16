<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Categoria;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        //Pega todos os posts do banco de dados
        //model
        $posts = Post::all();

        if ($request->has('categoria_id')){
            //$_GET['categoria_id']
            $categoria_get = $request->get('categoria_id');

            $categoria = Categoria::find($categoria_get);

            //Pegamos todos os posts da categoria selecionada pelo id
            $posts = $categoria->posts;

        }

        $categorias = Categoria::all();

        //resources/views/blog/index.blade.php
        //View
        return view('blog.index',[
            'postagens' => $posts,
            'categorias'=> $categorias
        ]);
    }

    public function criaPost()
    {
        $categorias = Categoria::all();

        // View criapost.blade.php
        return view('blog.criapost')-> with ('categorias', $categorias);
    }

    public function salvaPost(Request $request)
    {
        $post = new Post($request->all());

        if ($post->save()){
            return \redirect('/');
        }
        return 'Erro na operação!';
    }

    public function sobre()
    {
        return view('blog.sobre');
    }
    public function busca()
    {

    }
}
