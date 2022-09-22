<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use Illuminate\Contracts\Session\Session;
use Session;
use NunoMaduro\Collision\Adapters\Phpunit\Printer;

class Registration extends Controller
{
    public function index()
    {

    }
    public function reg_form_submit(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        $request->validate(
         [
            'user_type'          =>       'required',
             'name'              =>      'required|string|max:20',
             'email'             =>      'required|email|unique:users,email',
            //  'phone'             =>      'required|numeric|min:10',
             'password'          =>      'required|alpha_num|min:6',
             'confirm_password'  =>      'required|same:password',
             'address'           =>      'required|string',
             'gender'            =>       'required'
         ]
     );

        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['user_type'] = $request->user_type;
        
        $data['address'] = $request->address;
        $data['gender'] = $request->gender;
        

        DB::table('users')->insert($data);

     if($data['user_type'] == 'seller')
     {
      return redirect('/sellers-dashboard');
     }
     else
     {
      // echo 'buyer';
      return redirect('/#fruts');
     }



    }
    public function login(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // $data = DB::table('users')->where('email',$request->email)->get();
        $request->validate(
         [
            
             'email'             =>      'required|email|',
            //  'phone'             =>      'required|numeric|min:10',
             'password'          =>      'required|alpha_num|',
             'confirm_password'  =>      'required|same:password'
         ]
     );
       
       
        $data = DB::table('users')->where([
            'email' => $request->email,
            'password' => $request->password
     ])->get();

   //   echo "<pre>";
   //   Print_r($data->all());

        

     if($data)
     {
        foreach($data as $d)
        {
      //   $_SESSION['name']= $d->name;
        // Session set('name',$d->name) ;
        Session(['name' => $d->name]);
        Session(['email' => $d->email]);
        Session(['password' => $d->password]);
        session(['user_type' => $d->user_type]);
      //   $_SESSION['email']= $d->email;
      //   $_SESSION['password']= $d->password;
      //   $_SESSION['user_type']= $d->user_type;
        } 
      //  echo $user['name'] = Session::get('name');
      //   echo $user['name'];
      //   print_r($_SESSION);
     }

     if(Session::get('user_type') == 'seller')
     {
      //   echo "sellers page";
      //   die;
       return redirect('/sellers-dashboard');
     }
     else
     {
      return redirect('/#fruts');
     }


    }
    // public function seller()
    // {
    //     // echo "asd";
    //      return view('seller');
    // }
    public function logout()
    {
      Session()->flush();
      return redirect('/login_form');
    }
}
