{{csrf_field()}}

<div class="form-group">
    <label for="titulo" class="control-label col-sm-2">Título</label>
    <div class="col-sm-10">
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{$livro->titulo ?? ''}}" placeholder="Título">
    </div>
</div>
<div class="form-group">
    <label for="descricao" class="control-label col-sm-2">Descrição</label>
    <div class="col-sm-10">
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$livro->descricao ?? ''}}" placeholder="Descrição">
    </div>
</div>
<div class="form-group">
    <label for="sumario" class="control-label col-sm-2">Sumário</label>
    <div class="col-sm-10">
        <textarea  class="form-control" name="sumario" id="sumario" cols="30" rows="10">{{$livro->sumario ?? ''}}</textarea>
    </div>
</div>
<div class="form-group">
    <label for="num_pag" class="control-label col-sm-2">Número de Páginas</label>
    <div class="col-sm-10">
        <input type="text" name="num_pag" id="num_pag" class="form-control" value="{{$livro->num_pag ?? ''}}" placeholder="Número de Páginas">
    </div>
</div>
<div class="form-group">
    <label for="ano_pub" class="control-label col-sm-2">Ano de Publicação</label>
    <div class="col-sm-10">
        <input type="text" name="ano_pub" id="ano_pub" class="form-control" value="{{$livro->ano_pub ?? ''}}" placeholder="Ano de Publicação">
    </div>
</div>
<div class="form-group">
    <label for="valor" class="control-label col-sm-2">Valor</label>
    <div class="col-sm-10">
        <input type="text" name="valor" id="valor" class="form-control" value="{{$livro->valor ?? ''}}" placeholder="Valor">
    </div>
</div>
<div class="form-group">
    <label for="idCategoria" class="control-label col-sm-2">Categoria</label>
    <div class="col-sm-10">
        <select name="categoria" id="categoria">
            <?php $categorias = \App\Categoria::all(); ?>
            @foreach($categorias as $key => $value)
                <option value="{{$key}}">{{$value['descricao']}}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-primary">
        <a href="javascript:window.history.go(-1)" class="btn btn-default">Cancelar</a>
    </div>
</div>