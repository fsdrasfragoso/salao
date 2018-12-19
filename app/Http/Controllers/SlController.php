<?php

namespace App\Http\Controllers;

use App\Sl;
use Illuminate\Http\Request;

class SlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sl = Sl::all();
        return view('sl', compact('sl')); 
        //return "entrou";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('novosl');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sl = new Sl();
        $sl->nome = $request->input('nome');
        $sl->save();
        return redirect('/sl');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sl  $sl
     * @return \Illuminate\Http\Response
     */
    public function show(Sl $sl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sl  $sl
     * @return \Illuminate\Http\Response
     */
    public function edit(Sl $sl)
    {
         $sl = Sl::find($id);
        if(isset($sl)) {
            return view('editarsl', compact('sl'));
        }
        return redirect('/sl');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sl  $sl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sl $sl)
    {
        $sl = Sl::find($id);
        if(isset($sl)) {
            $sl->nome = $request->input('nome');
            $sl->save();
        }
        return redirect('/sl');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sl  $sl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sl $sl)
    {
        $sl = Sl::find($id);
        if (isset($sl)) {
            $sl->delete();
        }
        return redirect('/sl');
    }
}
