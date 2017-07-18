@extends('default')

@section('titulo', "Exibir Idiomas")

@section('conteudo')
    <div>
        <p>{{$idiomas->nome}}</p>
    </div>
    <div>
        <a class="btn btn-default" href="{{route('idiomas.index')}}">Voltar</a>
        <a href="{{route('idiomas.edit', $idiomas->id)}}" class="btn btn-warning">Editar</a>
        <form action="{{route('idiomas.destroy', $idiomas->id)}}" class="form-horizontal" method="post"
              style="display: inline-block">
            {!! csrf_field() !!}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-danger" value="Exluir">
        </form>
    </div>
@endsection