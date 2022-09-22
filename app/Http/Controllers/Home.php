<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Home extends Controller
{
    //
    public function index()
    {
        $data = DB::table('users')->where([
            'user_type' => 'seller'
     ])->get();

    //  print_r($data);
     return view('home')->with('data',$data);
    }

    
}
