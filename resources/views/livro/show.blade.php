@extends('default')

@section('titulo', 'Exibir Livro')

@section('conteudo')

    <div>
        <h2>{{$livro->titulo}}</h2>
        <p>{{$livro->descricao}}</p>
        <p>{{$livro->sumario}}</p>
        <p>{{$livro->valor}}</p>
        <p>{{$livro->ano_pub}}</p>
        <p>{{$livro->num_pag}}</p>
        <p>{{App\Categoria::findOrFail($livro->idCategoria)->descricao}}</p>
        <p>{{App\Editora::findOrFail($livro->idEditora)->descricao}}</p>
        <p>{{App\Autor::findOrFail($livro->idAutor)->nome}}</p>
        <p>{{App\Idioma::findOrFail($livro->idIdioma)->nome}}</p>


    </div>

    <div>
        <a class="btn btn-default" href="{{route('livro.index')}}">Voltar</a>
        {!! Form::close() !!}
        <a class="btn btn-default" href="{{route('livro.edit', $livro->id)}}">Editar</a>
        {!! Form::open(array('route' => array('livro.destroy', $livro->id), 'method' => 'delete', 'style'=>'display: inline-block')) !!}
        {!! csrf_field() !!}
        <button class="btn btn-danger" type="submit">Excluir</button>
        {!! Form::close() !!}
    </div>
@endsection