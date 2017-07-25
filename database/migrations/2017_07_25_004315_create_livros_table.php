<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descricao');
            $table->string('sumario');
            $table->integer('num_pag');
            $table->integer('ano_pub');
            $table->decimal('valor');
            $table->integer('idCategoria')->unsigned();
            $table->integer('idEditora')->unsigned();
            $table->integer('idAutor')->unsigned();
            $table->integer('idIdioma')->unsigned();
            $table->foreign('idCategoria')->references('id')->on('categorias');
            $table->foreign('idEditora')->references('id')->on('editoras');
            $table->foreign('idAutor')->references('id')->on('autors');
            $table->foreign('idIdioma')->references('id')->on('idiomas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
