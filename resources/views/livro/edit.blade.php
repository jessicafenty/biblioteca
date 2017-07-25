@extends('default')

@section('titulo', 'Atualizar Livro')

@section('conteudo')

    <form action="{{route('livro.update', $livro->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('livro.form')

    </form>

@endsection