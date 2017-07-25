@extends('default')

@section('titulo', 'Cadastro de Livros')

@section('conteudo')

    <form action="{{route('livro.store')}}" class="form-horizontal" method="post">

        @include('livro.form')

    </form>

@endsection