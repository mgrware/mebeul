<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Http\Requests\CreateCategoryRequest;

use Yajra\Datatables\Datatables;

use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
      return view('category.index');
    }

    public function create()
    {
      return view('category.create');
    }

      public function store(CreateCategoryRequest $request)
    {   
        
        $input = $request->all();
        $category = Category::create($input);        
        return response()->json(['data'=>$category, 'initstatus'=> 'Berhasil menambahkan Category '.$category->name]);
    }

    public function update(CreateCategoryRequest $request)
    {
        $input = $request->all();
        $category = Category::find($input['id']);
        $category->update($input);
        return response()->json(['data'=>$category, 'initstatus'=> 'Berhasil memperbaharui '.$category->name]);
    }

    public function disable($id)
    {
        $category = Category::find($id);
        $category->is_active = false;
        $category->save();
        return response()->json(['data'=>$category, 'initstatus'=> 'Berhasil me non-aktifkan category '.$category->name]);
    }

    public function enable($id)
    {
        $category = Category::find($id);
        $category->is_active = true;
        $category->save();
        return response()->json(['data'=>$category, 'initstatus'=> 'Berhasil meng-aktifkan category '.$category->name]);
    }

    public function edit($id)
    {   
     $category = Category::find($id);
     return response()->json(['data'=>$category]);   
    }

    public function getDataCategory()
    {
      return Datatables::of(Category::query())->make(true);
    }
}