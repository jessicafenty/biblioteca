@extends('default')

@section('titulo', 'Novo Idioma')

@section('conteudo')
    <form action="{{route('idiomas.store')}}" method="post" class="form-horizontal">
        @include('idiomas.form')
    </form>
@endsection