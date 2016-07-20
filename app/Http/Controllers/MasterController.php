<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Yajra\Datatables\Datatables;
class MasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      return view('master.index');
    }

    public function get_data_user(){
      return Datatables::of(User::query())->make(true);
    }
}
