<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // Leer todos los registros
    {
        $documentos= TipoDocumento::all();
        return view('admin.tipodocumentos.index',compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // Abrir formulario para nuevo registro
    {
        return view('admin.tipodocumentos.create');
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
        $documento = TipoDocumento::create($request->all());
        return redirect()->route('admin.tipodocumentos.index', $documento);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TipoDocumento $tipodocumento) // Visualizar un registro a detaller
    {
        //
        return view('admin.tipodocumentos.show');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoDocumento $tipodocumento) // Para abrir un formulario para edicion de un registro
    {
        //
        return view('admin.tipodocumentos.edit',compact('tipodocumento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoDocumento $tipodocumento) // Para actualizar la informacion del registro en la base de datos
    {
        //
        $request->validate(
            ['descripcion'=>'required']
        );
        $tipodocumento->update($request->all());
        return redirect()->route('admin.tipodocumentos.index', $tipodocumento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoDocumento $tipodocumento) // Para Eliminar un registro
    {
        $tipodocumento->delete();
        return redirect()->route('admin.tipodocumentos.index');
    }
}
