<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['descricao'];

    public function livro(){
        return $this->hasMany('App\Livro', 'idCategoria');
    }
}
