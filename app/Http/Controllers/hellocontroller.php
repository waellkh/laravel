<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
   
    public function show ()
    {
  $info = \App\Info::all();
  
        return view ('stuff.show',compact('info'));
    }
    public function dashboard ()
    {

        return view ('stuff.dashboard');
    }
}
