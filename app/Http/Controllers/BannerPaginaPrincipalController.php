<?php

namespace App\Http\Controllers;

use App\BannerPaginaPrincipal;
use Illuminate\Http\Request;
use Storage;
class BannerPaginaPrincipalController extends Controller
{
    function transparent_background($filename, $color)
{
    
}
    public function index()
    {
        $banner = BannerPaginaPrincipal::all();
        
         return view('bannerPP', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novobannerPP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $p = $request->file('url');
        if(isset($p)){
            $path=$request->file('url')->store('/public'); 
    
        $novo = "public/".$path;
        Storage::move($path, $novo);
            
            //transparent_background($novo, '255,255,255');
            
            $banner = new BannerPaginaPrincipal();
            
            $banner->titulo=$request->input('titulo');
            $banner->slogan=$request->input('slogan');
            $banner->descricao=$request->input('descricao');
            $banner->url = 'storage/'.$path;
            $banner->link=$request->input('link');
            $banner->butaao=$request->input('butaao');
            $banner->save();
            
            return redirect('/bannerPP');
             
            
        }else{
            $banner = new BannerPaginaPrincipal();
            
            $banner->titulo=$request->input('titulo');
            $banner->slogan=$request->input('slogan');
            $banner->descricao=$request->input('descricao');
            $banner->url = '';
            $banner->link=$request->input('link');
            $banner->butaao=$request->input('butaao');
            $banner->save();
            
            return redirect('/bannerPP');
        }
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BannerPaginaPrincipal  $bannerPaginaPrincipal
     * @return \Illuminate\Http\Response
     */
    public function show(BannerPaginaPrincipal $bannerPaginaPrincipal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BannerPaginaPrincipal  $bannerPaginaPrincipal
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerPaginaPrincipal $bannerPaginaPrincipal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BannerPaginaPrincipal  $bannerPaginaPrincipal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BannerPaginaPrincipal $bannerPaginaPrincipal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BannerPaginaPrincipal  $bannerPaginaPrincipal
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerPaginaPrincipal $bannerPaginaPrincipal)
    {
        //
    }
}
