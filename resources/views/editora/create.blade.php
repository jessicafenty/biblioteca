@extends('default')

@section('titulo', 'Cadastro de Editora')

@section('conteudo')

    <form action="{{route('editora.store')}}" class="form-horizontal" method="post">

        @include('editora.form')

    </form>

@endsection