@extends('default')

@section('titulo', 'Exibir Livro')

@section('conteudo')

    <div>
        <p>{{$livro->descricao}}</p>
        <p>{{$livro->sumario}}</p>
        <p>{{$livro->valor}}</p>
        <p>{{$livro->ano_pub}}</p>
        <p>{{$livro->num_pag}}</p>
        <p>{{$livro->autors->nome}}</p>
        <p>{{$livro->editoras->descricao}}</p>
        <p>{{$livro->categorias->descricao}}</p>
        <p>{{$livro->idiomas->nome}}</p>
        <p><small>Criado em: {{$livro->created_at->format('d/m/Y H:i')}} | Atualizado em: {{$livro->updated_at->format('d/m/Y H:i')}}</small></p>
    </div>

    <div>
        <a class="btn btn-default" href="{{route('livro.index')}}">Voltar</a>
        {!! Form::close() !!}
        <a class="btn btn-default" href="{{route('livro.edit', $livro->id)}}">Editar</a>
        {!! Form::open(array('route' => array('livro.destroy', $livro->id), 'method' => 'delete', 'style'=>'display: inline-block')) !!}
        {!! csrf_field() !!}
        <button class="btn btn-danger" type="submit">Excluir</button>
        {!! Form::close() !!}
    </div>
@endsection