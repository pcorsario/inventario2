<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCondicionRequest;
use App\Http\Requests\UpdateCondicionRequest;
use App\Models\Condicion;

class CondicionController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCondicionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCondicionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function show(Condicion $condicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function edit(Condicion $condicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCondicionRequest  $request
     * @param  \App\Models\Condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCondicionRequest $request, Condicion $condicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condicion  $condicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condicion $condicion)
    {
        //
    }
}
