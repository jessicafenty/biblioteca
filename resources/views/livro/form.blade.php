{{csrf_field()}}

<div class="form-group">
    <label for="descricao" class="control-label col-sm-2">Descrição</label>
    <div class="col-sm-10">
        <input type="text" name="descricao" id="descricao" class="form-control" value="{{$editora->descricao ?? ''}}" placeholder="Descrição">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="Salvar" class="btn btn-primary">
        <a href="javascript:window.history.go(-1)" class="btn btn-default">Cancelar</a>
    </div>
</div>