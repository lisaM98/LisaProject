<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registration;
use App\Http\Controllers\Sellers;
use App\Http\Controllers\Home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[Home::class,'index']);

Route::get('/form', function () {
    return view('form');
});

Route::get('/login_form', function () {
    return view('login_form');
});

Route::post('/registration',[Registration::class,'reg_form_submit']);

Route::post('/login',[Registration::class,'login']);
Route::get('/logout',[Registration::class,'logout']);
// Route::get('/seller',[Registration::class,'seller']);

Route::get('/sellers-dashboard',[Sellers::class,'index']);

Route::get('/profile',[Sellers::class,'profile']);
Route::post('/save_profile_des',[Sellers::class,'save_profile_des']);

Route::get('/products',[Sellers::class,'all_product_detailes']);
Route::get('/add_product',[Sellers::class,'add_product']);

Route::get('/single_seller_list/{id}',[Sellers::class,'single_seller_list']);
Route::get('/single_product/{id}',[Sellers::class,'single_product']);

Route::post('/add_product_details',[Sellers::class,'add_product_details']);


Route::get('/edit_product/{id}',[Sellers::class,'edit_product']);
Route::post('/update_product',[Sellers::class,'update_product']);