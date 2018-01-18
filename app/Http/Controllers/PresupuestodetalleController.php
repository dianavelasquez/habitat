<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Presupuestodetalle;

class PresupuestodetalleController extends Controller
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
        return view('presupuestos.detalles.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PresupuestodetalleRequest $request)
    {
        try{
            Presupuestodetalle::create($request->All());
            return redirect('presupuestos/'.$request->presupuesto_id);
        }catch (\Exception $e){
            return redirect('presupuestos')->with('error',$e->getMessage());
        }
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
        $presupuesto = Presupuestodetalle::findorFail($id);
        return view('presupuestos.detalles.edit',compact('presupuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PresupuestodetalleRequest $request, Presupuestodetalle $presupuestodetalle)
    {
        $presupuestodetalle->fill($request->All());
        $presupuestodetalle->save();
        return redirect('presupuestos')->with('mensaje', 'Información actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presupuestodetalle $presupuestodetalle)
    {
        $presupuestodetalle->delete();
        return redirect('presupuestos')->with('mensaje', 'Se eliminó con éxito');
    }
}
