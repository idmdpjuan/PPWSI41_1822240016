<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function create(){
        return view('prodi.create');
    }
    
    public function store(Request $request){
        
        //dump($request);
        echo $request->nama;
    }
}
