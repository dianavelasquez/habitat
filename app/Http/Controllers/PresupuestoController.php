<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Tipomejora;
use App\Material;
use App\Albanil;
use App\Presupuesto;
use App\Presupuestodetalle;

class PresupuestoController extends Controller
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
        $presupuestos = Presupuesto::where('estado',1)->get();
        return view('presupuestos.index',compact('presupuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        $tipomejoras = Tipomejora::all();
        $presupuestos = Presupuesto::all();
        $materiales = Material::all();
        $albaniles = Albanil::all();
        return view('presupuestos.create',compact('clientes','tipomejoras','presupuestos','materiales','albaniles'));

        //return view('presupuestos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->All());
        \DB::beginTransaction();
        try{
            $count = $request->contador;

            $presupuesto = Presupuesto::create([
                'cliente_id' => $request->cliente_id,
                'tipomejora_id' => $request->tipomejora_id,
                'fecha_inicio' => $request->fecha_inicio,
                'fecha_fin' => $request->fecha_fin,
                'albanil_id' => $request->albanil_id,
                'total' => $request->total,
            ]);

            for($i = 0; $i<$count;$i++)
            {
                Presupuestodetalle::create([
                    'presupuesto_id' => $presupuesto->id,
                    'material_id' => $request->materiales[$i],
                    'cantidad' => $request->cantidades[$i],
                    'precio_unitario' => $request->precios[$i],
                ]);
            }
            \DB::commit();
            return redirect('/presupuestos')->with('exito', 'Presupuesto registrado con éxito');
        }catch (\Exception $e){
            \DB::rollback();
            return redirect('/presupuestos/create')->with('error', 'Presupuesto con error'.$e->getMessage());
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
        $presupuesto = Presupuesto::findorFail($id);
        $detalles = Presupuestodetalle::where('presupuesto_id',$presupuesto->id)->orderBy('id','ASC')->get();
        return view('presupuestos.show', compact('presupuesto','detalles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Presupuesto $presupuesto)
    {
        //$presupuesto = Presupuesto::findorFail($id);
        $clientes = Cliente::all();
        $tipomejoras = Tipomejora::all();
        return view('presupuestos.edit',compact('presupuesto','clientes','tipomejoras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presupuesto $presupuesto)
    {
        $presupuesto->fill($request->All());
        $presupuesto->save();
        return redirect('/presupuestos')->with('mensaje', 'Información actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presupuesto $presu)
    {
        //
    }

    public function baja($cadena)
    {
        $datos = explode("+", $cadena);
        $id = $datos[0];
        $motivo = $datos[1];

        $presupuesto = Presupuesto::find($id);
        $presupuesto->estado = 2;
        $presupuesto->motivo = $motivo;
        //$presupuesto->fecha
        $presupuesto->save();

        return redirect('/presupuestos')->with('mensaje','Presupuesto dado de baja');
    }

    public function alta($id)
    {
        $presupuesto = Presupuesto::find($id);
        $presupuesto->estado = 1;
        $presupuesto->motivo = "";
        //$presupuesto->fecha
        $presupuesto->save();

        return redirect('/presupuestos')->with('mensaje','Presupuesto dado de alta');
    }
}
