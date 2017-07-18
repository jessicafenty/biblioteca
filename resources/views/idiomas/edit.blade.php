@extends('default')

@section('titulo', 'Editar Idioma')

@section('conteudo')
    <form action="{{route('idiomas.update', $idioma->id)}}" class="form-horizontal" method="post">
        <input type="hidden" name="_method" value="PUT">
        @include('idiomas.form')
    </form>
@endsection
