<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
   public function index($name){
    $data['name1']=$name;
    return view('services')->with($data);
   }
}
