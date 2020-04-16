@extends('blog.template')

@section('principal')

<div class="row">
    <div class="col-12 col-md-6 offset-md-3" >
        <h3>Cria post </h3>
        <form action="{{@route('salvapost')}}" method="post">

            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="resumo">Resumo</label>
                <input type="text" name="resumo" class="form-control">
            </div>
            <div class="form-group">
                <label for="conteudo">Conteudo</label>
                <textarea class="form-control" name="conteudo" cols="30 rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select class= "from-control" name="categoria_id">

                    @foreach ($categorias as $categoria )
                <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                    @endforeach

                </select>
            </div>
            <div>
                <button class="btn btn-primary">Cadastrar Post</button>
            </div>
            @csrf
        </form>
    </div>

</div>


@endsection
