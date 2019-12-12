<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Req;

class WebsiteController extends Controller
{
    //
      function index(){
    	 return view('website.index');

    }

    function add(){

    	return view('website.add');

    }

    function adddata(Request $request){
    	$req = new Req();

    	 $req->name =$request->name;
    	 $req->email =$request->email;
    	 $req->content =$request->content;
    	 

    	 if($req->save()){
            return redirect()->route('website.index');
        }else{
            return redirect()->route('website.add');
        }
    }
}
