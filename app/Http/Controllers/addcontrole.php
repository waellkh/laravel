<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addcontrole extends Controller
{
    public function  add ()
    
    {    
        
return view('stuff.addtodb.addnew',);
    }
    public function store ()

    { 
        $dat = request()->validate([
            'name'=>'required|min:5']);
     \App\Info::create($dat);
        /* $info =new \App\info();
$info->name=request('name');
$info->save();
      //  dd(request('name')); */
        return redirect()->back();
    }
}
