<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['hello']) ;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function languageDemo(){
        return view('languageDemo');
    }
    public function hello()
    {
        $firstword="Oman";
        $secondtword="KSA";
        // $user=User::where('id','>',2)->get();
        $user=User::where('id',1)->first();
       
        if ($user){
            //  return $user[0]->name;
             return $user->name."|".$user->email;
        }
        else{
            return "User not found";
        }
        // return "hello";
        if(Auth::check()){
            echo Auth::user()->$name;
        //   echo  $firstword;
          // return "you are logined";
        }
        else{
            // echo  $secondtword;
            // return "you are not logined";
        }
    }
}



