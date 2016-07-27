<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use App\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where("is_active", true)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $counts = Product::count();

        return view('welcome', compact('products', 'counts'));
    }

    public function gallery()
    {   
        $products = Product::where("is_active", true)
            ->orderBy('created_at', 'desc')
            ->paginate(6);
        $counts = Product::count();
        return view('home.product.index', compact('products'));
    }
    public function view($id)
    {
        $product = Product::find($id);
        if($product=="")
        {
            return view('errors.503');
        }else{
            return view('home.product.view', compact('product'));    
        }
        
    }

    public function contact()
    {
        return view('home.contact.index', compact('product'));
    }
}
