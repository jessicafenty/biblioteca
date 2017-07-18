@extends('default')

@section('titulo', 'Cadastro de Idiomas')

@section('conteudo')
    <p><a href="{{route('idiomas.create')}}" class="btn btn-success">Novo Idioma</a></p>
    <table class="table table-hover">
        @foreach($idiomas as $idioma)
            <tr>
                <td width="80%"><strong>{{$idioma->nome}}</strong></td>
                <td>
                    <a class="btn btn-default" href="{{route('idiomas.show', $idioma->id)}}">Ver</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$idiomas->links()}}
@endsection