<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
       $title='welcome to laravel';
    //    return view('index',compact('title'));
    return view('index')->with('title',$title);
   }
   public function about(){
    $title='About Us';
    //    return view('index',compact('title'));
    return view('about')->with('title',$title);
    // return view('app');
}

public function servicesL(){
    $data=array(
'title'=>'services',
'services'=>['Web design','programming',' Economy']
     );
 //    return view('index',compact('title'));
 return view('services1')->with($data);
}
}
