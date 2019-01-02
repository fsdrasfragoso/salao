<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu_Superior;


class Controlador_Menu_Superior extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu_Superior::all();
        return view('MenuSuperior', compact('menu'));
        
        //return $menu->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NovoItem');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu_Superior();
        $menu->item_nome = $request->input('item_nome');
        $menu->save();
        return redirect('/CadastroMenu');
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
         $menu = Menu_Superior::find($id);
        if(isset($menu)) {
            return view('editarItem', compact('menu'));
        }
        return redirect('/CadastroMenu');
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
         $menu = Menu_Superior::find($id);
        if(isset($menu)) {
            $menu->item_nome = $request->input('item_nome');
            $menu->save();
        }
        return redirect('/CadastroMenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $menu = Menu_Superior::find($id);
        if(isset($menu)){
            $menu->Delete();
            
        }
        return redirect('/CadastroMenu');
    }
}
