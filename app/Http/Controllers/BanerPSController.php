<?php

namespace App\Http\Controllers;

use App\BanerPS;
use Illuminate\Http\Request;
use Storage;
class BanerPSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = BanerPS::all();
        
        return view('BannerServicos',compact('banner'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('novoBannerServicos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $path=$request->file('url')->store('/public'); 
    
        $novo = "public/".$path;
        Storage::move($path, $novo);
        
        
        //echo $novo;
        $banner = new BanerPS();
        
        $banner->url = 'storage/'.$path;
         $banner->alt = $request->input('alt'); 
       // $benner->alt = 'storage'.$novo;
        
        $banner->save();
        
       return redirect('/bannerS');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BanerPS  $banerPS
     * @return \Illuminate\Http\Response
     */
    public function show(BanerPS $banerPS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BanerPS  $banerPS
     * @return \Illuminate\Http\Response
     */
    public function edit(BanerPS $banerPS)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BanerPS  $banerPS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BanerPS $banerPS)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BanerPS  $banerPS
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $banner = BanerPS::find($id);
        
          
        if (isset($banner)) {
            $d = "public/../".$banner->url;
        
      
            Storage::delete($d);
            
            $banner->delete();
            return redirect('/bannerS');
        }
        return response('Produto não encontrado', 404);
  
    }
}
