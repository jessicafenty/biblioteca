<?php

namespace App\Http\Controllers;

use App\Autor;
use App\Categoria;
use App\Editora;
use App\Idioma;
use App\Livro;
use Illuminate\Http\Request;
use App\Http\Requests\LivroRequest;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livros = Livro::paginate(5);

        return view('livro.index',compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $editoras = Editora::all();
        $autors = Autor::all();
        $idiomas = Idioma::all();
        return view('livro.create', compact( 'categorias', 'editoras', 'autors', 'idiomas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivroRequest $request)
    {

        $categoria = Categoria::find($request->input('categoria'));
        $editora = Editora::find($request->input('editora'));
        $autor = Autor::find($request->input('autor'));
        $idioma = Idioma::find($request->input('idioma'));
        $livro = new Livro();
        $livro->titulo = $request->input('titulo');
        $livro->descricao = $request->input('descricao');
        $livro->sumario = $request->input('sumario');
        $livro->num_pag = $request->input('num_pag');
        $livro->ano_pub = $request->input('ano_pub');
        $livro->valor = $request->input('valor');
        $livro->categoria()->associate($categoria);
        $livro->editora()->associate($editora);
        $livro->autor()->associate($autor);
        $livro->idioma()->associate($idioma);
        $livro->save();
        return redirect('admin/livro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $livro = Livro::findOrFail($id);
        return view('livro.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $editoras = Editora::all();
        $autors = Autor::all();
        $idiomas = Idioma::all();
        $livro = Livro::findOrFail($id);
        return view('livro.edit', compact( 'livro','categorias', 'editoras', 'autors', 'idiomas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LivroRequest $request, $id)
    {
        $categoria = Categoria::find($request->input('categoria'));
        $editora = Editora::find($request->input('editora'));
        $autor = Autor::find($request->input('autor'));
        $idioma = Idioma::find($request->input('idioma'));
        $livro = Livro::findOrFail($id);
        $livro->categoria()->associate($categoria);
        $livro->editora()->associate($editora);
        $livro->autor()->associate($autor);
        $livro->idioma()->associate($idioma);
        $livro->update($request->all());

        return redirect()->route('livro.show', ['id' => $livro->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();

        return redirect('admin/livro');
    }
}
