<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;
use Storage;
Class UserController extends Controller {
public function store(request $request){

    $path=$request->file('image')->store('/public'); 
    
     $novo = "public/".$path;
        Storage::move($path, $novo);
    
   // echo $path;
    
    $prod = new Produto();
        $prod->nome = $request->input('nome');
            $prod->preco = $request->input('preco');
            $prod->estoque = $request->input('estoque');
            $prod->classificacao = $request->input('classificacao');
            $prod->fabricacao = $request->input('fabricacao');
            $prod->validade = $request->input('validade');
            $prod->url = "storage/".$path;
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
    
    return redirect('/produtos');
    
}    
    public function edit($id)
    {
        $prod = Produto::find($id);
        if(isset($prod)) {
            return view('editarProduto', compact('prod'));
        }
        return redirect('/produtos');
    } 
    
    
     public function update(Request $request, $id)
    {
        $path=$request->file('image')->store('/public'); 
    
        $novo = "public/".$path;
        Storage::move($path, $novo);
         
        $prod = Produto::find($id);
        if (isset($prod)) {
            $prod->nome = $request->input('nome');
            $prod->preco = $request->input('preco');
            $prod->estoque = $request->input('estoque');
            $prod->classificacao = $request->input('classificacao');
            $prod->fabricacao = $request->input('fabricacao');
            $prod->validade = $request->input('validade');
            $prod->url = "storage/".$path;
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
            $prods = Produto::where('id',$id)->with(['categoria'])->get();
            
            return redirect('/produtos');
        }
        return response('Produto não encontrado', 404);
    }
    
}




?>