<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Recogida;
use Illuminate\Http\Request;

class RecogidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.recogidas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recogida  $recogida
     * @return \Illuminate\Http\Response
     */
    public function show(Recogida $recogida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recogida  $recogida
     * @return \Illuminate\Http\Response
     */
    public function edit(Recogida $recogida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recogida  $recogida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recogida $recogida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recogida  $recogida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recogida $recogida)
    {
        //
    }
}
