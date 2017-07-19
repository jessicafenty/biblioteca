{!! csrf_field() !!}

<div class="form-group">
    <label for="nome" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" class="form-control" value="{{$autor->nome or ''}}" placeholder="Nome">

    </div>
</div>

<div class="form-goup">

    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" class="btn btn-primary" value="Salvar">
        <a href="javascript:window.history.go(-1)" class="btn btn-default">Cancelar</a>
    </div>

</div>