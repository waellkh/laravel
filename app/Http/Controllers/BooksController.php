<?php

namespace App\Http\Controllers;
use \App\Mail\welecomeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class BooksController extends Controller
{
    public function index()
    {
$data = \App\books::where('active',1)->get();
//$data = \App\books::all();
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
    $d= \App\books::create($data);
 
    Mail::to($d->email)->send(new welecomeMail());

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
    public function de (Request $re)
    {
 $data=\App\books::where('active',$re->query('active',0))->get();

 return view ('books.deactived',compact('data'));}
}
