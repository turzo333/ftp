<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    function index(){
    	 return view('admin.index');

    }

    function list(){

    	$users = DB::table('users')->get();
    	return view('user.index')->with('users', $users);


    }

    function add(){

    	return view('user.add');

    }
}
