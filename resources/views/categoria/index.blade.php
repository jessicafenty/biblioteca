@extends('default')

@section('titulo', 'Gerenciamento de Categorias')

@section('conteudo')
    <div>
        <a href="{{route('categoria.create')}}" class="btn btn-success">Novo</a>
        <a href="javascript:window.history.go(-1)" class="btn btn-default">Cancelar</a>
    </div>
    <br>
    <table class="table table-hover">
        @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td width="85%"><strong>{{$categoria->descricao}}</strong></td>
                <td>
                    {!! Form::open(array('route' => array('categoria.show', $categoria->id), 'method' => 'GET', 'style'=>'display: inline-block')) !!}
                    {!! csrf_field() !!}
                    <button class="btn btn-default" type="submit">Exibir</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {{$categorias->links()}}
@endsection