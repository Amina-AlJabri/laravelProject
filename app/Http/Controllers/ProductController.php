<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    function show(){
        return "It works";
    }

    function showProducts($id){
        return "your id is:".$id;
    }

    function ShowProduct(){
    //   $products=Product::all();
    //   return $products;
    $data['products']=Product::all();
    // $data['products'][1];
      return view('showProduct')->with($data);
    }
    

    function create(Request $request){
        $request->validate([
            'p_name'=>'required',
            'p_price'=>'required',
            'myimage'=>'required|mimes:png'
            // 'myimage'=>'required|mimes:pdf'
        ]);
        
        $image=$request->myimage;
        $imageFileName=time().'.'.$image->extension();
        $image->move(public_path('images'),$imageFileName);

        // return $request;
        // return $request->p_name;

        // $data['pName']=$request->p_name;
        // $data['pPrice']=$request->p_price; 

//sign user entring data to partcular var
$productName=$request->p_name;
$productPrice=$request->p_price; 
$productImage=$imageFileName;

//to save data to db table
$myProduct=new Product;
$myProduct->name=$productName;
$myProduct->price=$productPrice;
$myProduct->img=$productImage;
$myProduct->save();
// return"Record created successfully";
        // return view('showproduct')->with($data); 

        //after adding back me to addProduct page
        return back();
    }

    
}
