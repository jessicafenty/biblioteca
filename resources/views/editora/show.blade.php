@extends('default')

@section('titulo', 'Exibir Categoria')

@section('conteudo')

    <div>
        <p>{{$editora->descricao}}</p>
        <p><small>Criada em: {{$editora->created_at->format('d/m/Y H:i')}} | Atualizada em: {{$editora->updated_at->format('d/m/Y H:i')}}</small></p>
    </div>

    <div>
        <a class="btn btn-default" href="{{route('editora.index')}}">Voltar</a>
        {!! Form::close() !!}
        <a class="btn btn-default" href="{{route('editora.edit', $editora->id)}}">Editar</a>
        {!! Form::open(array('route' => array('editora.destroy', $editora->id), 'method' => 'delete', 'style'=>'display: inline-block')) !!}
        {!! csrf_field() !!}
        <button class="btn btn-danger" type="submit">Excluir</button>
        {!! Form::close() !!}
    </div>
@endsection