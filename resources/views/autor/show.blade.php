@extends('default')

@section('titulo', 'Autores')

@section('conteudo')

    <p>
    <h1>{{$autor->nome}}</h1>
    <small>Criado em {{date('d/m/Y',strtotime($autor->created_at))}} | Atualizado em {{date('d/m/Y',strtotime($autor->updated_at))}}</small>

    </p>

    <a href="{{route('autor.index')}}" class="btn btn-xs btn-default">Voltar</a>
    <a class="btn btn-xs btn-default" href="{{route('autor.edit',$autor->id)}}">Editar</a>

    <form action="{{route('autor.destroy',$autor->id)}}" class="form-horizontal" method="post" style="display: inline-block">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" value="Excluir" class="btn btn-xs btn-danger">
    </form>


@endsection