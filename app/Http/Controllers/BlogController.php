<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        //Pega todos os posts do banco de dados
        $posts = Post::all();
        //resources/views/blog/index.blade.php
        return view('blog.index',[
            'postagens' =>$posts
        ]);
    }
    public function sobre()
    {
        return view('blog.sobre');
    }
    public function busca()
    {
        
    }
}
