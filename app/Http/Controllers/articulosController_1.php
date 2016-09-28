<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\articles;
class articulosController extends Controller {

    public function index() 
{
    
 return view('art');

}


  public function show($id)
   {
    
       $articles = Articles::find($id);
       return view('articles')->with('articles', $articles);
   }


    public function __construct() {
        $this->middleware('web');
    }
     
     

    public function store(Request $request) {
//dd(Input::all());

        $articles= \App\articles::create([
                   
                    'title' => $request->title,
                    'description' => $request->description,
                    'state' => 'reg'
        ]);



    }
       

        
    public function response() {
       
    }

}
