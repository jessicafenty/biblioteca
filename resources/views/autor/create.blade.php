@extends('default')

@section('titulo','Criar Autor')

@section('conteudo')

    <form action="{{route('autor.store')}}" class="form-horizontal" method="post">
        <p>Inserir autor</p>
        @include('autor.form')

    </form>

@endsection