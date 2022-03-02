<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blogcontroller extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function create(){
        
        return view('backend.blog.create');
    }


    function store(Request $request){
        $request->validate(
            [
                'title'=>'required|30',
                'details' => 'required|100',
            ],
            [
                'title.required'=>'বদ্দা আর হতো?',
                'details.required'=>'ওমারেএএএএএএ ',
            ]
            
            );
    } 
}
