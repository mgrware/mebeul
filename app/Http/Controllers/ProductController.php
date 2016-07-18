<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class ProductController extends Controller
{
  public function index()
    {
        return view('product.index');
    }

     public function store(Request $request)
    {
        // Validate the request...
      $product = new Product();
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'catagories' => 'required'
        ]);
        $product->title = $request->title;
        $product->image = $request->image;
        $product->catagories = $request->catagories;
        $product->description = $request->description;
        printf($request->image);
    if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            $name = $timestamp. '-' .$file->getClientOriginalName();
            
            $product->filepath = $name;

            $file->move(public_path().'/images/', $name);
        }
        $product->save();
        return view('product.index');
    }    //
}
