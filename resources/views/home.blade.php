@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TADS Library</div>

                <div class="panel-body">
                    <div>
                        <a href="{{route('livro.index')}}">Livro</a>
                    </div>
                    <div>
                        <a href="{{route('autor.index')}}">Autor</a>
                    </div>
                    <div>
                        <a href="{{route('editora.index')}}">Editora</a>
                    </div>
                    <div>
                        <a href="{{route('categoria.index')}}">Categoria</a>
                    </div>
                    <div>
                        <a href="{{route('idiomas.index')}}">Idioma</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
