<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateProductRequest;

use App\Product;

use App\Category;

use App\Image;

use Validator;

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
        $input['slug'] = str_slug($input['title']);
        $product = Product::create($input); 
        $product_id = $product->id;
        $files = $request->images; 
            // Making counting of uploaded images
        $file_count = count($files);
        $uploadcount = 0;
        foreach($files as $file) {
            $rules = array('image' => 'required');
            $validator = Validator::make(array('image'=> $file), $rules);
            if($validator->passes()){
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $name = $timestamp. '-' .$file->getClientOriginalName();
                $file->move(public_path().'/images/', $name);
                $image_params= ['name' => $name, 'filepath' => url('/images/'. $name), 'product_id' => $product_id];
                $image = Image::create($image_params);
                $uploadcount ++;
            }
        } 
            //getting timestamp
        return view('product.index', compact('product', 'categories'));
    }

    public function update(Request $request)
    {
        $categories = [''=>'Please select'] + Category::where('is_active', true)->orderBy('name')->pluck('name', 'id')->all();
        $input = $request->all();
        
        $input['slug'] = str_slug($input['title']);
        $product = Product::find($input['id']);
        $product->update($input);
        $product_id = $input['id'];
        $files = $request->images; 
        $file_count = count($files);
        $uploadcount = 0;
        if(isset($files)){
            foreach($files as $file) {
                $rules = array('image' => 'required');
                $validator = Validator::make(array('image'=> $file), $rules);
                if($validator->passes()){
                    $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                    $name = $timestamp. '-' .$file->getClientOriginalName();
                    $file->move(public_path().'/images/', $name);
                    $image_params= ['name' => $name, 'filepath' => url('/images/'. $name), 'product_id' => $product_id];
                    $image = Image::create($image_params);
                    $uploadcount ++;
                }
            }
        }
        return view('product.index', compact('product', 'categories'));
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

    public function edit($id)
    {   
     $product = Product::find($id);
     return response()->json(['data'=>$product, 'images'=> $product->images]);   
    }
}
