<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Test;

Class UserController extends Controller {
public function store(request $request){

    $path=$request->file('image')->store('upload');
    
    echo $path;
    
    
}    
    
    
}




?>