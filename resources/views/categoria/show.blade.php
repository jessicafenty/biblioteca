@extends('default')

@section('titulo', 'Exibir Categoria')

@section('conteudo')

    <div>
        <p>{{$categoria->descricao}}</p>
        <p><small>Criada em: {{$categoria->created_at->format('d/m/Y H:i')}} | Atualizada em: {{$categoria->updated_at->format('d/m/Y H:i')}}</small></p>
    </div>

    <div>
        <a class="btn btn-default" href="{{route('categoria.index')}}">Voltar</a>
        {!! Form::close() !!}
        <a class="btn btn-default" href="{{route('categoria.edit', $categoria->id)}}">Editar</a>
        {!! Form::open(array('route' => array('categoria.destroy', $categoria->id), 'method' => 'delete', 'style'=>'display: inline-block')) !!}
        {!! csrf_field() !!}
        <button class="btn btn-danger" type="submit">Excluir</button>
        {!! Form::close() !!}
    </div>
@endsection