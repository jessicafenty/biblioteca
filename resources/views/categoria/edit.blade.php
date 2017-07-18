@extends('default')

@section('titulo', 'Editar Categoria')

@section('conteudo')

    <form action="{{route('categoria.update', $categoria->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('categoria.form')

    </form>

@endsection