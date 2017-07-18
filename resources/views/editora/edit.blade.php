@extends('default')

@section('titulo', 'Atualizar Editora')

@section('conteudo')

    <form action="{{route('editora.update', $editora->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('editora.form')

    </form>

@endsection