<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $fillable = ['descricao'];

    public function livro(){
        return $this->hasMany('App\Livro', 'idEditora');
    }
}
