<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;


Route::get('/admin', function () {
    return "You are admin";
});


Route::prefix('admin')->group(function(){
    Route::get('dashboard','AdminController@Dashboard');
    Route::get('products','AdminController@Products');
    Route::get('users','AdminController@Users');
});
