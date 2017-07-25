<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $fillable = ['nome'];

    public function livro(){
        return $this->belongsTo('App\Livro');
    }
}
