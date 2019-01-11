<?php

namespace App\Http\Controllers;

use App\Imagem;
use Illuminate\Http\Request;
use Storage;
class ImagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $image = Imagem::where('produto_id', $id)->get();
          
        return view('imageProduto',compact('image','id'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('novaImageProd',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $path=$request->file('image')->store('/public'); 
    
          $novo = "public/".$path;
          Storage::move($path, $novo);
        
          $imagem = new Imagem();
          
        $imagem->image = "storage/".$path;
        $imagem->produto_id = $request->input('produto_id');
        $imagem->save();
        
        return redirect('inserirImagem/'.$request->input('produto_id'));
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Imagem  $imagem
     * @return \Illuminate\Http\Response
     */
    public function show(Imagem $imagem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Imagem  $imagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagem $imagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Imagem  $imagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imagem $imagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Imagem  $imagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagem $imagem)
    {
        //
    }
}
