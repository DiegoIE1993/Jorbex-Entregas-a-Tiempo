<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\FranjaHoraria;
use Illuminate\Http\Request;

class FranjaHorariaController extends Controller
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
        return view('admin.franjahoraria.create');
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
     * @param  \App\Models\FranjaHoraria  $franjaHoraria
     * @return \Illuminate\Http\Response
     */
    public function show(FranjaHoraria $franjaHoraria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FranjaHoraria  $franjaHoraria
     * @return \Illuminate\Http\Response
     */
    public function edit(FranjaHoraria $franjaHoraria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FranjaHoraria  $franjaHoraria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FranjaHoraria $franjaHoraria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FranjaHoraria  $franjaHoraria
     * @return \Illuminate\Http\Response
     */
    public function destroy(FranjaHoraria $franjaHoraria)
    {
        //
    }
}
