<?php

namespace App\Http\Controllers;

use App\FichaTecnica;
use Illuminate\Http\Request;

class FichaTecnicaController extends Controller
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
        $ficha = new FichaTecnica();
        
        $ficha->caracteristicas = $request->input('caracteristicas');
        $ficha->marca = $request->input('marca');
        $ficha->modelo = $request->input('modelo');
        $ficha->produto_id = $request->input('produto_id');
        $ficha->save();
        return redirect('/produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function show(FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $ficha = FichaTecnica::find($id);
         if (isset($ficha)) {
             //return json_encode($ficha);
             
             return view('alterarFicha',compact('ficha'));  
        }
        return response('Problemas para encontrar a Ficha', 404);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FichaTecnica $fichaTecnica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FichaTecnica  $fichaTecnica
     * @return \Illuminate\Http\Response
     */
    public function destroy(FichaTecnica $fichaTecnica)
    {
        //
    }
}
