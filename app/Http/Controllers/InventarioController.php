<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreinventarioRequest;
use App\Http\Requests\UpdateinventarioRequest;
use App\Models\inventario;
use App\Exports\InventariosExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes='Quito y Santo Domingo';
        //dd($sedes);
        $departamentos='todos';
        $estados='todos';
        $inventarios=inventario::all();
        $pdf =PDF::loadView('livewire.inventarios.reportes.repgenpdf',compact('sedes','departamentos','estados','inventarios'));
        return $pdf->stream('inventario-pdf-x-sede-departamento-estado.pdf');
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
     * @param  \App\Http\Requests\StoreinventarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinventarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(inventario $inventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinventarioRequest  $request
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinventarioRequest $request, inventario $inventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventario $inventario)
    {
        //
    }
    public function export() 
    {
        return Excel::download(new InventariosExport, 'inventarios.xlsx');
    }
}
