<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
 
	function index(){
		return view('login.index');
	}

	function verify(Request $request){
		
	

		$user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->first();

		if(count($user) > 0){
			$request->session()->put('uname', $request->input('username'));
			$request->session()->put('name', $user->name);

			$request->session()->put('role', $user->role);

			return redirect()->route('admin.index');
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect()->route('login.index');
		}
	}
}


