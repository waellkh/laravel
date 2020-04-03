<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    public function  add ()
    
    {    
        
return view('stuff.addnew',);
    }
    public function show ()
    {$data=[];

        return view ('stuff.show',compact('data'));
    }
    public function dashboard ()
    {

        return view ('stuff.dashboard');
    }
}
