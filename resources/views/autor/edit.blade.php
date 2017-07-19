@extends('default')

@section('titulo','Editar Autor')

@section('conteudo')

    <form action="{{route('autor.update',$autor->id)}}" class="form-horizontal" method="post">
        @include('autor.form')
        <input type="hidden" name="_method" value="PUT">
    </form>

@endsection