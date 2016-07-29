<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Http\Requests\CreateUserRequest;

use Yajra\Datatables\Datatables;

use Illuminate\Http\Response;

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

    public function store(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => $request['role'],
            'password' => bcrypt($request['password'])
            ]);
        return response()->json(['data'=>$user, 'initstatus'=>'Berhasil Menambahkan user '.$user->name]);
    }

    public function getDataUser(){
      return Datatables::of(User::query())->make(true);
    }
}
