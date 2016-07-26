<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

use App\Http\Requests\CreateCategoryRequest;

use Yajra\Datatables\Datatables;

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
        return view('category.index');
    }


    public function getDataCategory()
    {
      return Datatables::of(Category::query())->make(true);
    }
}