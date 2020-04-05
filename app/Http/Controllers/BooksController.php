<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
 
$data = \App\books::all();

 return view ('books.index',compact('data'));
    }
    public function index2()
    {
 $infos= new \App\books ();
 return view ('books.create',compact('infos'));
    }
    public function create()
    { 
 $data=request()->validate([ 'name'=>'required','email'=>'email'  ]);
    \App\books::create($data);


 return redirect('/books');
    }
    public function info (\App\books $infos)
    { 
        
return view ('books.info',compact('infos'));

    }

    public function shown2note  ($infos)
    {  $da = \App\books::findOrFail($infos);
      return view ('books.info',compact('da')); }


    public function edit (\App\books $infos)
    {

     return   view ('books.edit',compact('infos'));
    }
    public function update(\App\books $infos)
    {
 $data=request()->validate([ 'name'=>'required','email'=>'email'  ]);

 $infos->update($data);


 return redirect('/books');
    }
    public function Delete (\App\books $infos )
    {
   $infos->delete();
   return redirect('/books');
    }
    public function active (\App\books $infos)
    {  
       
   $infos->update(array('active'=>'0'));

        return redirect('/books');
    }
    public function desactive (\App\books $infos)
    {
  $infos->update(array('active'=>'1'));
        return redirect('/books');
    }
}
