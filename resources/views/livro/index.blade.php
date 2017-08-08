@extends('default')

@section('titulo', 'Gerenciamento de Livros')

@section('conteudo')
    <div>
        <a href="{{route('livro.create')}}" class="btn btn-success">Novo</a>
        <a href="javascript:window.history.go(-1)" class="btn btn-default">Cancelar</a>
    </div>
    <br>
    <table class="table table-hover">
        @foreach($livros as $livro)
            <tr>
                <td>{{$livro->id}}</td>
                <td width="85%"><strong>{{$livro->titulo}}</strong></td>
                <?php $autor = \App\Autor::find($livro->idAutor); ?>
                <td width="85%"><strong>{{$autor->nome}}</strong></td>
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