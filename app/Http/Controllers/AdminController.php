<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function __construct()
    {
        // Primeiro usar esse
        // $this->middleware('auth');
        // Depois esse:
        $this->middleware('auth:admin');
    }
    
    public function index(){
        return view('admin');
    }
}
