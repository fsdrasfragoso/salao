<?php

namespace App\Http\Controllers;

use App\CategoriaServico;
use Illuminate\Http\Request;

class CategoriaServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = CategoriaServico::all();
        return view('categoria_servico', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('novacategoria_servico');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $cats = new CategoriaServico();
        
        $cats->nome = $request->input('nome');
        $cats->save();
        return redirect('/categorias_servicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaServico  $categoriaServico
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaServico $categoriaServico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaServico  $categoriaServico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = CategoriaServico::find($id);
        
          if(isset($cat)){
              return view('editarcategoria_servico',compact('cat'));
          }
          
        return redirec('/categorias_servicos');
             }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaServico  $categoriaServico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat = CategoriaServico::find($id);
                  if(isset($cat)){
                      $cat->nome =  $request->input('nome');
                       $cat->save();
                      return redirect('/categorias_servicos');
                  }
     return response('Categoria de Serviço não encontrada', 404);
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaServico  $categoriaServico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $cat = CategoriaServico::find($id);
        
        if(isset($cat)){
                      $cat->delete();
                      return redirect('/categorias_servicos');
                  }
     return response('Categoria de Serviço não encontrada', 404);
        
        
    }
}
             