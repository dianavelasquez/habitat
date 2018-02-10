<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materialvivienda;

class MaterialviviendaController extends Controller
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
        $materialviviendas = Materialvivienda::all();
        return view('materialviviendas.index',compact('materialviviendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materialviviendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Materialvivienda::create($request->All());
        return redirect('materialviviendas')->with('mensaje', 'Material registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materialvivienda = Materialvivienda::findorFail($id);
        return view('materialviviendas.show', compact('materialvivienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materialvivienda = Materialvivienda::findorFail($id);
        return view('materialviviendas.edit',compact('materialvivienda'));
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
        $materialvivienda = Materialvivienda::findorFail($id);
        $materialvivienda->fill($request->All());
        $materialvivienda->save();
        return redirect('/materialviviendas')->with('mensaje', 'Información actualizada');
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
