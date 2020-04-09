<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OlaController extends Controller
{
    //metodo representa a ação
    //do nosso controller
    public function ola($nome)
    {
        //Lógica da rota (/ola/{nome})
        return view('ola',[
            'nome_cliente' => $nome,
            'titulo' => 'Olá via view!'
        ]);
    }

    public function olaSimples()
    {
        //Lógica da rota (/ola/{nome})
        return 'Olá mundo, via Laravel';
    }
}
