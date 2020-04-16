@extends('blog.template')


@section('titulo')
Home seja bem vindo !
@endsection

@section('principal')

<div class="row mt-3">
    <div class="col-12 col-sm-4">

        <div class="card">
            <div class="card-body">
                <h1>categorias</h1>
                <p>
                    @foreach ($categorias as $categoria)
                        <a href="?categoria_id={{$categoria->id}}">{{$categoria->nome}}</a>,
                    @endforeach
                                    </p>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-8">
        @foreach ($postagens as $post)
            <h3>{{$post->titulo}}</h3>
            <p>{{$post->resumo}}</p>
        @endforeach
    </div>

</div>
@endsection
