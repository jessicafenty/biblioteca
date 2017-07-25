<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'descricao', 'sumario',
        'valor', 'ano_pub', 'num_pag', 'idAutor', 'idEditora', 'idCategoria', 'idIdioma'];

    public function autor(){
        return $this->hasOne('App\Autor');
    }
    public function editora(){
        return $this->hasOne('App\Editora');
    }
    public function categoria(){
        return $this->hasOne('App\Categoria');
    }
    public function idioma(){
        return $this->hasOne('App\Idioma');
    }
}
