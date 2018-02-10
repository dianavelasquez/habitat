<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipovivienda;
use App\Materialvivienda;
use App\Presupuestovivienda;

class PresupuestoviviendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presupuestoviviendas = Presupuestovivienda::all();
        return view('presupuestoviviendas.index',compact('presupuestoviviendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoviviendas = Tipovivienda::all();
        $materialviviendas = Materialvivienda::all();
        $presupuestoviviendas = Presupuestovivienda::all();
        return view('presupuestoviviendas.create',compact('tipoviviendas','materialviviendas','presupuestoviviendas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        \DB::beginTransaction();
        try{
            $count = $request->contador;

            $presupuestovivienda = Presupuestovivienda::create([
                'tipovivienda_id' => $request->tipovivienda_id,
                'fecha' => $request->fecha,
                'materialvivienda_id' => $request->materialvivienda_id,
                'total' => $request->total,
            ]);

            for($i = 0; $i<$count;$i++)
            {
                Presupuestovivienda::create([
                'nombre' => $request->materiales[$i],
                'codigo' => $request->codigos[$i],
                'unidad_medida' => $request->unidades[$i],
                'precio_unitario' => $request->precios[$i],
                'cantidad' => $request->cantidades[$i],
                ]);
            }
            \DB::commit();
            return redirect('/presupuestoviviendas')->with('exito', 'Presupuesto registrado con éxito');
        }catch (\Exception $e){
            \DB::rollback();
            return redirect('/presupuestoviviendas/create')->with('error', 'Presupuesto con error'.$e->getMessage());
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
        $presupuestovivienda = Presupuestovivienda::findorFail($id);
        return view('presupuestoviviendas.show',compact('presupuestovivienda'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presupuestovivienda = Presupuestovivienda::all();
        return view('presupuestoviviendas.edit',compact('presupuestovivienda'));
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
        $presupuestovivienda = Presupuestovivienda::findorFail($id);
        $presupuestovivienda->fill($request->All());
        $presupuestovivienda->save();
        return redirect('/presupuestoviviendas')->with('mensaje', 'Información actualizada');
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

    public function baja($cadena)
    {
        $datos = explode("+", $cadena);
        $id = $datos[0];
        $motivo = $datos[1];

        $presupuestovivienda = Presupuestovivienda::find($id);
        $presupuestovivienda->estado = 2;
        $presupuestovivienda->motivo = $motivo;
        $presupuestovivienda->save();

        return redirect('/presupuestoviviendas')->with('mensaje','Presupuesto dado de baja');
    }

    public function alta($id)
    {
        $presupuestovivienda = Presupuesto::find($id);
        $presupuestovivienda->estado = 1;
        $presupuestovivienda->motivo = "";
        $presupuestovivienda->save();

        return redirect('/presupuestoviviendas')->with('mensaje','Presupuesto dado de alta');
    }
}
