<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipomejora;

class TipomejoraController extends Controller
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
        $tipomejoras = Tipomejora::all();
        return view('tipomejoras.index',compact('tipomejoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipomejoras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tipomejora::create($request->All());
        return redirect('tipomejoras')->with('mensaje', 'Tipo registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipomejora = Tipomejora::findorFail($id);
        return view('tipomejoras.show',compact('tipomejora'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipomejora = Tipomejora::findorFail($id);
        return view('tipomejoras.edit',compact('tipomejoras'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipomejora = Tipomejora::findorFail($id);
        $tipomejora->fill($request->All());
        $tipomejora->save();
        return redirect('/tipomejoras')->with('mensaje', 'Información actualizada');
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
