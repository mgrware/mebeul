<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateProductRequest;

use App\Product;

use App\Category;

use App\Image;

use Carbon\Carbon;

use Yajra\Datatables\Datatables;

use Illuminate\Http\Response;

class ProductController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $categories = [''=>'Please select'] + Category::where('is_active', true)->orderBy('name')->pluck('name', 'id')->all();
        $products = Product::paginate(5);;
        return view('product.index', compact('categories', 'products'));
    }

    // public function create()
    // {
    //     $categories = [''=>'Please select'] + Category::where('is_active', true)->orderBy('name')->pluck('name', 'id')->all();
    //     return view('product.create', compact('categories'));
    // }

    public function store(CreateProductRequest $request)
    {
        $categories = [''=>'Please select'] + Category::where('is_active', true)->orderBy('name')->pluck('name', 'id')->all();
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $product = Product::create($input);
        $product_id = $product->id;
        $files = $request->images; 
            // Making counting of uploaded images
        $file_count = count($files);
            // start count how many uploaded
        $uploadcount = 0;
        foreach($files as $file) {
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $name = $timestamp. '-' .$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
            $image_params= ['name' => $name, 'filepath' => url('/images/'. $name), 'product_id' => $product_id];
            $image = Image::create($image_params);
            $uploadcount ++;
            } 
            //getting timestamp
        return view('product.index', compact('product', 'categories'));
    }

    public function update(CreateProductRequest $request)
    {
        $input = $request->all();
        $product = Product::update($input);
    }

    public function anyData()
    {
        return Datatables::of(Product::with('category'))->make(true);
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('product.view', compact('product'));
    }

    public function disable_product($id)
    {
        $product = Product::find($id);
        $product->is_active = false;
        $product->save();
        return response()->json([
            'data'=>$product,
            'initstatus'=> 'Berhasil meng-aktifkan product '.$product->title
            ]);
    }

    public function enable_product($id)
    {
        $product = Product::find($id);
        $product->is_active = true;
        $product->save();
        return response()->json([
            'data'=>$product,
            'initstatus'=> 'Berhasil meng-nonaktifkan product '.$product->title
            ]);
    }
}
