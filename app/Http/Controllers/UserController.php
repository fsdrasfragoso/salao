<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Produto;

Class UserController extends Controller {
public function store(request $request){

    $path=$request->file('image')->store('/public'); 
    
   // echo $path;
    
    $prod = new Produto();
        $prod->nome = $request->input('nome');
            $prod->preco = $request->input('preco');
            $prod->estoque = $request->input('estoque');
            $prod->classificacao = $request->input('classificacao');
            $prod->fabricacao = $request->input('fabricacao');
            $prod->validade = $request->input('validade');
            $prod->url = $path;
            $prod->categoria_id = $request->input('categoria_id');
            $prod->save();
    
    return redirect('/produtos');
    
}    
    
    
}




?>