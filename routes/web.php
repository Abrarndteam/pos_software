<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('orderdetail');
});

Route::get('/', function () {
    return view('orderlist');
});

Route::get('/', function () {
    return view('productcost');
});

Route::get('/', function () {
    return view('productlist');
});

Route::get('/', function () {
    return view('expense');
});

Route::get('/', function () {
    return view('expenselist');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('productcost',[controller::class,'addProdCost']);
Route::post('orderdetail',[controller::class,'addOrderDetail']);
Route::post('expense',[controller::class,'addExpDetail']);
Route::get('/orderlist',[controller::class,'listOrder']);
Route::get('/productlist',[controller::class,'listProd']);
Route::get('/expenselist',[controller::class,'listExp']);

Route::get('delete',[controller::class,'delete']);
Route::get('delete',[controller::class,'deleteOrder']);
Route::get('delete',[controller::class,'deleteProduct']);
