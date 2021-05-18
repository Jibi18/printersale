<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\printercontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\admincontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[printercontroller::class,'create']);
Route::get('/prabout',[printercontroller::class,'about']);
Route::post('/auth/save',[printercontroller::class,'save'])->name('auth.save');
Route::post('/auth/check',[printercontroller::class,'check'])->name('auth.check');
Route::get('/auth/logout',[printercontroller::class,'logout'])->name('auth.logout');

Route::group(['middleware'=>['AuthCheck']],function(){
    Route::get('/product',[productcontroller::class,'index']);
    Route::get('/admin',[admincontroller::class,'create']);
    Route::get('/admin/dashboard',[printercontroller::class,'dashboard']);
    Route::get('/auth/login',[printercontroller::class,'login'])->name('auth.login');
    Route::get('/auth/register',[printercontroller::class,'register'])->name('auth.register'); 
    Route::get('/admin/adashboard',[printercontroller::class,'adashboard']);
});

Route::get('detail/{id}',[productcontroller::class,'detail']);
Route::get('search',[productcontroller::class,'search']);
Route::post('add_to_cart',[productcontroller::class,'addtocart']);
Route::get('cartlist',[productcontroller::class,'cartList']);
Route::get('removecart/{id}',[productcontroller::class,'removeCart']);
Route::get('ordernow',[productcontroller::class,'orderNow']);
Route::post('orderplace',[productcontroller::class,'orderPlace']);
Route::get('myorders',[productcontroller::class,'myOrders']);

Route::get('adproduct',[admincontroller::class,'product']);
Route::post('productread',[admincontroller::class,'store']);
Route::get('/viewallproducts',[admincontroller::class,'index']);
Route::get('/item/{id}/edit',[admincontroller::class,'edit']);
Route::post('/producteditprocess/{id}',[admincontroller::class,'update']);
Route::get('/viewallcust',[admincontroller::class,'cust']);
Route::get('/item/{id}/delete',[admincontroller::class,'destroy']);
Route::get('/newmodel/{id}/delete',[admincontroller::class,'deletecust']);
Route::get('/viewbookings',[admincontroller::class,'booking']);
Route::get('/bills/{id}/{uid}/pay',[admincontroller::class,'Pay']);
Route::get('/paymentstatus/{id}/{uid}',[admincontroller::class,'paymentStatus']);
Route::get('/bills/{id}/{uid}/cancel',[admincontroller::class,'deletepay']);
Route::get('/payhis',[admincontroller::class,'payHis']);
