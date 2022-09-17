<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Genero;
use Illuminate\Http\Request;


class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Leer todos los registros
    {
        $generos= Genero::all();
        return view('admin.generos.index',compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Abrir formulario para nuevo registro
    {
         return view('admin.generos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Para almacenar en la base de datos el nuevo registro
    {
        //
        $request->validate(
            ['descripcion'=>'required']
        );
        $genero = Genero::create($request->all());
        return redirect()->route('admin.generos.edit', $genero);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(Genero $genero) // visualizar un registro a detaller
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(Genero $genero) //Para abrir un formulario para edicion de un registro
    {
        //
        return view('admin.generos.edit',compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genero $genero) //Para actualizar la informacion del registro en la base de datos
    {
        //
        $request->validate(
            ['descripcion'=>'required']
        );
        $genero->update($request->all());
        return redirect()->route('admin.generos.index', $genero);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genero $genero)//Para Eliminar un registro
    {
        //
        $genero->delete();
        return redirect()->route('admin.generos.index');
    }
}
