<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

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

    public function __construct(){
       parent::__construct();
    }

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
        $products = Product::where("is_active", true)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        $product = Product::where('slug', $id)->first();
        if($product=="")
        {
            return view('errors.503');
        }else{  
            return view('home.product.view', compact('product', 'products'));    
        }
        
    }

    public function contact()
    {
        return view('home.contact.index', compact('product'));
    }

    public function products($category)
    {         
        $products = Category::where('name', $category)->first()->products()->get();
        return view('home.product.index', compact('products','category'));
    }

    public function view_products()
    {
        $category = "All Products";
        $products = Product::where("is_active", true)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('home.product.index', compact('products','category'));
 
    }

    function seoUrl($string) {
    //Lower case everything
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;
    }
    
}
