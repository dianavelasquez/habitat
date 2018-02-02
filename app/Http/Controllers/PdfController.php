<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PdfController extends Controller
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

    public function invoice()
    {
        //return \PDF::loadFile('http://www.github.com')->stream('github.pdf'); 
 

        //$dompdf = new Dompdf();
        $data = $this->getData();
        //$fecha = date('d-m-Y');
        $invoice = "Primero";
        $view = \View::make('pdf.invoice', compact('data','invoice'))->render();
        return \PDF::loadView('pdf.invoice')->stream('github.pdf'); 
        /*$dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($view);
        $dompdf->setPaper('letter', 'landscape');

        /*$canvas = $dompdf->get_canvas();
        $canvas->page_text(30,755,'Generado: '.date('d-m-Y'),null,10,array(0,0,0));
        $canvas->page_text(500,755,("Página").": {PAGE_NUM} de {PAGE_COUNT}",null,10,array(0,0,0));*/
        //return $dompdf->stream('invoice');
    }

    public function getData()
    {
        $data = [
            'quantity' => '1',
            'description' => 'some ramdom text',
            'price' => '500',
            'total' => '500'
        ];
        return $data;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
