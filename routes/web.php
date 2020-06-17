<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/discount', function () {
    return view('discount');
});

Route::post('/discount', function (Illuminate\Http\Request $request) {
   $description = $request->description;
   $price = $request->price;
   $discount = $request->discount;
   $discountAmount = $price * $discount * 0.01;
   $discountPrice = $price - $discountAmount;


   return view('list', compact(['description', 'price', 'discount', 'discountAmount', 'discountPrice']));
});
