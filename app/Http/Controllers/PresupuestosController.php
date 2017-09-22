<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Material;
use App\Presupuesto;
use App\Presupuestodetalle;

class PresupuestosController extends Controller
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
        $clientes = Clientes::all();
        $materiales = Material::all();
        return view('presupuestos.create',compact('clientes','materiales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            $detalle = $_POST['materiales'];
            Presupuesto::create([
                'id_cliente' => $_POST['id_cliente'],
                'mejora' => $_POST['mejora'],
                'trabajados' => $_POST['trabajados'],
                'total' => $_POST['total']
            ]);
            $presupuesto = Presupuesto::all();
            $idd= $presupuesto->last();
            $id = $idd->id;
            //dd($id);

            foreach ($detalle  as $materiales) {
                Presupuestodetalle::create([
                    'descripcion' => $materiales['descripcion'],
                    'id_material' => $materiales['material'],
                    'cantidad' => $materiales['cantidad'],
                    'preciou' => $materiales['precio'],
                    'id_presupuesto' => $id
                ]);
            }
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
