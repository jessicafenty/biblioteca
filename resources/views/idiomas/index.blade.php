@extends('default')

@section('titulo', 'Cadastro de Idiomas')

@section('conteudo')
    <div>
        <a href="{{route('idiomas.create')}}" class="btn btn-success">Novo Idioma</a>
        <a href="javascript:window.history.go(-1)" class="btn btn-default">Cancelar</a>
    </div>
    <br>
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