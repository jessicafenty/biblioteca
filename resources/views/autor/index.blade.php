@extends('default')

@section('titulo','Gestão de autores')

@section('conteudo')
    <p> <a href="{{route('autor.create')}}" class="btn btn-success">Novo Autor</a></p>
    <table class="table table-hover">
        @foreach($autores as $autor)
            <tr>
                <td width="80%"><strong>{{$autor->nome}}</strong></td>
                <td>

                    <a class="btn btn-default" href="{{route('autor.show',$autor->id)}}">Ver</a>


                </td>
            </tr>

        @endforeach
    </table>

    {{$autores->links()}}

@endsection