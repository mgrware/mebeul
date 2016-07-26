<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      return view('user.index');
    }

    public function new()
    {
      return view('user.new');
    }

    public function getDataUser(){
      return Datatables::of(User::query())->make(true);
    }
}
