<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\TipoDireccion;
use Illuminate\Http\Request;

class TipoDireccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // Leer todos los registros
    {
        //
         $direcciones= TipoDireccion::all();
        return view('admin.tipodirecciones.index',compact('direcciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // Abrir formulario para nuevo registro
    {
        //
        return view('admin.tipodirecciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // Para almacenar en la base de datos el nuevo registro
    {
        //
         $request->validate(
            ['descripcion'=>'required']
        );
        $direccion = TipoDireccion::create($request->all());
        return redirect()->route('admin.tipodirecciones.edit', $direccion);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoDireccion  $tipoDireccion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDireccion $tipodireccione) // Visualizar un registro a detalle
    {
        //
        return view('admin.tipodirecciones.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoDireccion  $tipoDireccion
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDireccion $tipodireccione) // Para abrir un formulario para edicion de un registro
    {
        //

        return view('admin.tipodirecciones.edit',compact('tipodireccione'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoDireccion  $tipoDireccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDireccion $tipodireccione) // Para actualizar la informacion del registro en la base de datos

    {
        //
         $request->validate(
            ['descripcion'=>'required']
        );
        $tipodireccione->update($request->all());
        return redirect()->route('admin.tipodirecciones.index', $tipodireccione);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoDireccion  $tipoDireccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDireccion $tipodireccione) // Para Eliminar un registro
    {
        //
        $tipodireccione->delete();
        return redirect()->route('admin.tipodirecciones.index');
    }
}
