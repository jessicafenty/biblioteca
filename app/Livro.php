<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'descricao', 'sumario',
        'num_pag', 'ano_pub', 'valor', 'idCategoria', 'idEditora', 'idAutor', 'idIdioma'];

    public function autor(){
        return $this->belongsTo('App\Autor', 'idAutor');
    }
    public function editora(){
        return $this->belongsTo('App\Editora','idEditora');
    }
    public function categoria(){
        return $this->belongsTo('App\Categoria', 'idCategoria');
    }
    public function idioma(){
        return $this->belongsTo('App\Idioma', 'idIdioma');
    }
}
