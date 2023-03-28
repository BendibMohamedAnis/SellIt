<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;


Route::get('/', function () {
    $products=product::all();
   
    return view('home',[
        'products'=>$products,
    ]);
});


Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'user','namespace'=>'App\Http\Controllers\user'],function(){
    Route::get('{profile_id}', 'ProfileController@show_profile')->name('profile.show');
    Route::post('updateProfile', 'ModifyProfileController@ModifyProfile')->name('updateProfile');
    

});


Route::get('/wishlist/{user_id}',[App\Http\Controllers\user\WishlistController::class, 'showWishlist'])->name('wishlist');

Route::post('/wishlist/add',[App\Http\Controllers\user\WishlistController::class, 'add_item'])->name('additem');

Route::get('/about',function(){return view('about');})->name('about');

