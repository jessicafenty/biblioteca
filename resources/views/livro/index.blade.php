@extends('default')

@section('titulo', 'Gerenciamento de Livros')

@section('conteudo')
    <p><a href="{{route('livro.create')}}" class="btn btn-success">Novo</a></p>
    <table class="table table-hover">
        @foreach($livros as $livro)
            <tr>
                <td>{{$livro->id}}</td>
                <td width="85%"><strong>{{$livro->titulo}}</strong></td>
                <td width="85%"><strong>{{$livro->autor->nome}}</strong></td>
                <td>
                    {!! Form::open(array('route' => array('livro.show', $livro->id), 'method' => 'GET', 'style'=>'display: inline-block')) !!}
                    {!! csrf_field() !!}
                    <button class="btn btn-default" type="submit">Exibir</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{$livros->links()}}
@endsection