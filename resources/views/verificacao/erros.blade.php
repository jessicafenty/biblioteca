<script type="text/javascript">
    function fechar () {
        document.getElementById('mensagem').style.display = 'none';
    }
</script>
@if($errors->any())

    <div id="mensagem" class="box alert alert-danger">
        <div class="box-header with-border">
            <h3 class="box-title text-gray">Opss! Alguma coisa está errada</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-default"
                        data-widget="remove" data-toggle="tooltip" title="Fechar" onclick="return fechar()">
                    <i class="fa fa-times"></i>OK
                </button>
            </div>
        </div>
        <div class="box-body">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>

@endif