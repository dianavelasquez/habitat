<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Albanil;
use App\Clientes;
use App\Http\Requests\AlbalisRequest;
class AlbanilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index()
    {
        $albaniles = Albanil::all();
        return view('albaniles.index')->with('albaniles', $albaniles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('albaniles.create',compact('albaniles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbalisRequest $request)
    {
        Albanil::create($request->All());
        return redirect('albaniles')->with('mensaje', 'Albañil registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $albanil = Albanil::findorFail($id);
        return view('albaniles.show', compact('albanil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $albanil = Albanil::findorFail($id);
        return view('albaniles.edit'), compact('albanil');
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
        $albanil = Albanil::findorfail($id);
        $albanil->fill($request->All());
        $albanil->save();
        return redirect('/albaniles')->with('mensaje', 'Información actualizada')
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
