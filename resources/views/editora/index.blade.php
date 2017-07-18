@extends('default')

@section('titulo', 'Gerenciamento de Editoras')

@section('conteudo')
    <p><a href="{{route('editora.create')}}" class="btn btn-success">Novo</a></p>
    <table class="table table-hover">
        @foreach($editoras as $editora)
            <tr>
                <td>{{$editora->id}}</td>
                <td width="85%"><strong>{{$editora->descricao}}</strong></td>
                <td>
                    {!! Form::open(array('route' => array('editora.show', $editora->id), 'method' => 'GET', 'style'=>'display: inline-block')) !!}
                    {!! csrf_field() !!}
                    <button class="btn btn-default" type="submit">Exibir</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{$editoras->links()}}
@endsection