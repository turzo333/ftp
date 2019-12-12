<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Validator;

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

     function reqlist(){

        $users = DB::table('reqs')->get();
        return view('user.req')->with('users', $users);


    }

    function add(){

    	return view('user.add');

    }

    function adddata(Request $request){
    	$user = new User();

    	 $user->name =$request->name;
    	 $user->username =$request->username;
    	 $user->password =$request->password;
    	 $user->role ='2';

         $validation = Validator::make($request->all(), [
            'name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('user.add');

           
        }

    	 if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('user.add');
        }

    }

    function edit($id){

    	$user = DB::table('users')
    	->where('id', $id)
    	->first();

    	return view('user.edit')->with('user', $user);

    }
     function editdata($id,Request $request){

     	$user = User::find($id);
        $user->name =$request->name;
    	$user->username =$request->username;
    	$user->password =$request->password;
    	$user->role =$request->role;
        $user->save();
        return redirect()->route('user.list');
    	
    }

    function delete($id){

    	$user = DB::table('users')
    	->where('id', $id)
    	->delete();

    	return redirect()->route('user.list');
    	
    }
}
