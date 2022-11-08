<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sede;
use App\Models\Departamento;
use App\Models\Inventario;
use App\Models\Condicion;
use PDF;
use Illuminate\Support\Facades\DB;
class InventarioPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $inventarios=Inventario::all();
        // // dd($inventarios);
        // $data = [
        //     'title' => 'Reporte General',
        //     'date' => date('m/d/Y')
        // ];

      
        // $pdf =PDF::loadView('livewire.inventarios.reportes.inventario-pdf',compact('inventarios', 'data')); 
        // // $pdf = PDF::loadView('livewire.inventarios.reportes.inventario-pdf',  [$data,$inventarios]);
    
        // return $pdf->stream('istjapon.pdf');
        // // return redirect()->route("{{ route('/inventarios') }}");
        return redirect('/inventarios');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes=Sede::all();
        $departamentos=Departamento::all();
        $estados=Condicion::all();
        // dd($sedes);
        return view('livewire.inventarios.reportes.create-inventario-pdf',compact('sedes','departamentos','estados'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $buscarporsede=$request->get('buscarporsede');  
        $buscarpordepartamento=$request->get('buscarpordepartamento');
        $buscarporestado=$request->get('buscarporestado');
        $fecini=$request->get('fecini');
        $fecfin=$request->get('fecfin');
        $sedes=Sede::all()->where('id',$buscarporsede);
        
        if ($buscarporsede and $buscarporestado and $buscarpordepartamento ) 
        {

            // dd($buscarpor);
        $estados=Condicion::all()->where('id',$buscarporestado);
        $departamentos=Departamento::all()->where('id',$buscarpordepartamento);
        $inventarios=Inventario::all()->where('sede_id', $buscarporsede)
                                        ->Where('condicion_id',$buscarporestado)
                                        ->Where('departamento_id',$buscarpordepartamento)
                                        ->whereBetween('fecha_inventario',[$fecini,$fecfin]);
            //  dd($inventarios);
        $pdf =PDF::loadView('livewire.inventarios.reportes.repsedepdf',compact('inventarios','sedes','estados','departamentos')); 
    
        return $pdf->stream('inventario-pdf-x-sede-departamento-estado.pdf');

            // return redirect('/inventario-pdf/create');

        }
        elseif ($buscarporsede and $buscarporestado ) 
        {

            // dd($buscarpor);
        $estados=Condicion::all()->where('id',$buscarporestado);
        $inventarios=Inventario::all()->where('sede_id', $buscarporsede)
                                        ->Where('condicion_id',$buscarporestado)
                                        ->whereBetween('fecha_inventario',[$fecini,$fecfin]);
            //  dd($inventarios);
        $pdf =PDF::loadView('livewire.inventarios.reportes.repsedepdf',compact('inventarios','sedes','estados')); 
    
        return $pdf->stream('inventario-pdf-x-sede-estado.pdf');

            // return redirect('/inventario-pdf/create');

        }
        elseif ($buscarporsede and $buscarpordepartamento ) 
        {

            // dd($buscarpor);
        $departamentos=Departamento::all()->where('id',$buscarpordepartamento);
        $inventarios=Inventario::all()->where('sede_id', $buscarporsede)
                                        ->Where('departamento_id',$buscarpordepartamento)
                                        ->whereBetween('fecha_inventario',[$fecini,$fecfin]);
            //  dd($inventarios);
        $pdf =PDF::loadView('livewire.inventarios.reportes.repsedepdf',compact('inventarios','sedes','departamentos')); 
    
        return $pdf->stream('inventario-pdf-x-sede-departamento.pdf');

            // return redirect('/inventario-pdf/create');

        }elseif($buscarporsede ) {
        
            $buscarporsede=$request->get('buscarporsede');   
            $buscarpordepartamento=$request->get('buscarpordepartamento');  
            $fecini=$request->get('fecini');
            
            $fecfin=$request->get('fecfin');
        $inventarios=Inventario::all()->where('sede_id', $buscarporsede)
                                        ->whereBetween('fecha_inventario',[$fecini,$fecfin]);
            //  dd($inventarios);
        $pdf =PDF::loadView('livewire.inventarios.reportes.repsedepdf',compact('inventarios','sedes'));
        return $pdf->download('inventario-pdf-x-sede.pdf'); 
        }elseif($buscarporsede==null and $buscarporestado!=null and $buscarpordepartamento){
  
        // dd($sedes);
        $departamentos='todos';
        // $estados=Condicion::all()->where('id',$buscarporestado);
        $estados='todos';
        $inventarios=inventario::all()->Where('condicion_id',$buscarporestado)
                                      ->whereBetween('fecha_inventario',[$fecini,$fecfin]);
        $pdf =PDF::loadView('livewire.inventarios.reportes.repgenpdf',compact('sedes','departamentos','estados','inventarios'));
        return $pdf->stream('inventario-pdf-x-sede-departamento-estado.pdf');
        }elseif($buscarporsede==null and $buscarporestado!=null){
  
            // dd($sedes);
            $departamentos='todos';
            $estados=Condicion::all()->where('id',$buscarporestado);
            $inventarios=inventario::all()->Where('condicion_id',$buscarporestado)
                                          ->whereBetween('fecha_inventario',[$fecini,$fecfin]);
            $pdf =PDF::loadView('livewire.inventarios.reportes.repgenpdf',compact('sedes','departamentos','estados','inventarios'));
            return $pdf->stream('inventario-pdf-x-sede-departamento-estado.pdf');
            }
        elseif($buscarporsede==null){
            $sedes='Quito y Santo Domingo';
        // dd($sedes);
        $departamentos='todos';
        $estados='todos';
        $inventarios=inventario::all()->whereBetween('fecha_inventario',[$fecini,$fecfin]);
        $pdf =PDF::loadView('livewire.inventarios.reportes.repgenpdf',compact('sedes','departamentos','estados','inventarios'));
        return $pdf->stream('inventario-pdf-x-sede-departamento-estado.pdf');
        }



        
        // return redirect('/inventario-pdf/create');    

    }


    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
