<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Cargo;
use App\Models\Admin\Genero;
use App\Models\Admin\TipoDireccion;
use App\Models\Admin\TipoDocumento;
use App\Models\Admin\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $empleados = Empleado::all();
        $cargos = Cargo::pluck('descripcion');
        $generos = Genero::pluck('descripcion');
        $tipoDireccion = TipoDireccion::pluck('descripcion');
        $tipoDocumento = TipoDocumento::pluck('descripcion');

        return view('admin.empleados.index',compact('empleados', 'cargos','generos','tipoDireccion', 'tipoDocumento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $empleado = Empleado::all();
        $cargos = Cargo::pluck('descripcion');
        $generos = Genero::pluck('descripcion');
        $tipoDireccion = TipoDireccion::pluck('descripcion');
        $tipoDocumento = TipoDocumento::pluck('descripcion');
        //dd($generos);
        return view('admin.empleados.create', compact('cargos', 'generos','tipoDireccion', 'tipoDocumento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['genero_id'=>'required',
             'nombres'=>'required',
             'apellidos'=>'required',
             'tipo_documento_id'=>'required',
             'identificacion'=>'required',
             'tipo_direccion_id'=>'required',
             'direcccion'=>'required',
             'telefono'=>'required',
             'correo'=>'required',
             'cargo_id'=>'required']
        );

        $empleado = Empleado::create($request->all());
        return redirect()->route('admin.empleados.edit', $empleado);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {

        $empleado = Empleado::find($empleado['id']);
        $cargos = Cargo::pluck('descripcion');
        $generos = Genero::pluck('descripcion');
        dd($generos);
        $tipoDireccion = TipoDireccion::pluck('descripcion');
        $tipoDocumento = TipoDocumento::pluck('descripcion');
        return view('admin.empleados.edit', compact('empleado', 'cargos', 'generos','tipoDireccion', 'tipoDocumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
        dd($request);
        $request->validate(
            ['genero_id'=>'required',
             'nombres'=>'required',
             'apellidos'=>'required',
             'tipo_documento_id'=>'required',
             'identificacion'=>'required',
             'tipo_direccion_id'=>'required',
             'direcccion'=>'required',
             'telefono'=>'required',
             'correo'=>'required',
             'cargo_id'=>'required']
        );
        //dd('si esta pasando');
        $empleado = Empleado::find($empleado['id']);
        $empleado->update($request->all());
        return redirect()->route('admin.empleados.index', $empleado);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        //
    }
}
