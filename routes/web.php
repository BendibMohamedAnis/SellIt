<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;


Route::get('/', function () {
    $products=product::all();
   
    return view('home',[
        'products'=>$products,
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{profile_id}', [App\Http\Controllers\ProfileController::class, 'show_profile'])->name('profile_id.show');
Route::post('/profileUpdate', [App\Http\Controllers\ModifyProfileController::class, 'ModifyProfile']);