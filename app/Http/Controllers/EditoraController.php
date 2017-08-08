<?php

namespace App\Http\Controllers;

use App\Editora;
use Illuminate\Http\Request;
use App\Http\Requests\EditoraRequest;

class EditoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $editoras = Editora::paginate(5);
        return view('editora.index', compact('editoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('editora.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditoraRequest $request)
    {
        Editora::create($request->all());
        return redirect('admin/editora');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $editora = Editora::find($id);
        return view('editora.show', compact('editora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editora = Editora::findOrFail($id);
        return view('editora.edit', compact('editora'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditoraRequest $request, $id)
    {
        $editora = Editora::findOrFail($id);
        $editora->update($request->all());
        //return redirect('admin/categoria');

        return redirect()->route('editora.show', ['id' => $editora->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editora = Editora::findOrFail($id);
        $editora->delete();

        return redirect('admin/editora');
    }
}
