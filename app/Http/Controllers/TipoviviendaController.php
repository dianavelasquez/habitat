<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipovivienda;

class TipoviviendaController extends Controller
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
        $tipoviviendas = Tipovivienda::all();
        return view('tipoviviendas.index',compact('tipoviviendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoviviendas = Tipovivienda::all();
        return view('tipoviviendas.create',compact('tipoviviendas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tipovivienda::create($request->All());
        return redirect('tipoviviendas')->with('mensaje','Tipo registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipovivienda = Tipovivienda::findorFail($id);
        return view('tipoviviendas.show',compact('tipovivienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipovivienda = Tipovivienda::findorFail($id);
        return view('tipoviviendas.edit',compact('tipovivienda'));
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
        $tipovivienda = Tipovivienda::findorFail($id);
        $tipovivienda->fill($request->All());
        $tipovivienda->save();
        return redirect('/tipoviviendas')->with('mensaje', 'Registro actualizado');
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
