<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;
use DB;

class Sellers extends Controller
{
    //
    public function index()
    {
        return view('seller');
    }
    public function profile()
    {
        return view('seller_share.profile');
    }
    public function save_profile_des(Request $request)
    {
        // return view('seller_share.profile');
         echo "<pre>";
        print_r($request->all());
    }
    public function all_product_detailes()
    {
        $data = DB::table('products')->get();

        // return view('seller_share.profile');
        //  echo "<pre>";
        // print_r($data->all());
        return view('seller_share.products')->with('data', $data);
    }
    public function add_product()
    {
         return view('seller_share.add_product');
        //  echo "<pre>";
        // print_r($request->all());

    }
    public function add_product_details(Request $request)
    {
        //  echo "<pre>";
        // print_r($request->all());
        $file =$request->file('image');
        $name = $request->file('image')->getClientOriginalName();
        // echo $filename = $name->getClientOriginalName();

        // $path = $request->file('image')->store('public/upload');
        $jpg = $file->extension();
        $path=$file->storeAs('/', $name.'.' . $jpg,['disk' => 'public_uploads']);


        // echo $path;

        
        $data['name'] = $request->name;
        $data['image'] = $path;
        $data['description'] = $request->detalis;
        $data['mrp'] = $request->mrp;
        $data['discout_price'] = $request->discount;
        
        $data['sell_price'] = $request->sell_price;
        // $data['gender'] = $request->gender;
        
        // die;
        DB::table('products')->insert($data);
        //  return view('seller_share.add_product');
        //  echo "<pre>";
        // print_r($request->all());
        return redirect('/products');

    }
    public function single_seller_list($id)
    {
        // echo $id;
        $data = DB::table('products')->where([
            'sellers_email' => $id
     ])->get();
    //  print_r($data);
     return view('seller_share.product_list')->with('data',$data);
    }
    public function single_product($id)
    {
        // echo $id;
        $data = DB::table('products')->where([
            'id' => $id
     ])->get();
 
    
     return view('seller_share.single_product')->with('data',$data);
    }
    public function edit_product($id)
    {
        // echo $id;
        
        $data = DB::table('products')->where([
            'id' => $id
     ])->first();
    //  print_r($data);
    //  die;
    
     return view('seller_share.edit_product')->with('data',$data);
    }
    public function update_product(Request $request)
    {
        // echo $id;
          //  echo "<pre>";
       //echo $request->id;
        // die;

        $file =$request->file('image');
        $name = $request->file('image')->getClientOriginalName();
        // echo $filename = $name->getClientOriginalName();

        // $path = $request->file('image')->store('public/upload');
        $jpg = $file->extension();
        $path=$file->storeAs('/', $name.'.' . $jpg,['disk' => 'public_uploads']);


        // echo $path;

        
        $data['name'] = $request->name;
        $data['image'] = $path;
        $data['description'] = $request->detalis;
        $data['mrp'] = $request->mrp;
        $data['discout_price'] = $request->discount;
        
        $data['sell_price'] = $request->sell_price;
        $data = DB::table('products')->where([
            'id' => $request->id
     ])->update($data);
 
     return redirect('/products');
    //  return view('seller_share.edit_product')->with('data',$data);
    }
}
