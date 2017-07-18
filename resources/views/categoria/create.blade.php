@extends('default')

@section('titulo', 'Cadastro de Categoria')

@section('conteudo')

    <form action="{{route('categoria.store')}}" class="form-horizontal" method="post">

        @include('categoria.form')

    </form>

@endsection