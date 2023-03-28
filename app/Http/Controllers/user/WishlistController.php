<?php

namespace App\Http\Controllers\user;
use App\Models\User;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
  //add authentification requirement to view wishlist page
   public function __construct(){
     $this->middleware('auth');
   }


   //display wishlist 
   public function showWishlist($user_id){
        //find user to get his saved wishlist
        $user=User::find($user_id);

        //get wishlist JSON from DB relative to user
        $wishlistItems=json_decode($user->items, true) ?? [];
        

        // Loop through the wishlist items (json) and extract product_id and quantity for each item
        foreach ($wishlistItems as $item) {
           
            
          //extract all the product ids and quantity wished
            $product_ids[] = $item['id'] ?? null;
            $quantities[] = $item['quantity'] ?? null;

          //extracts name of product and image with previous id in wishlist for display purpose
            $product=product::find($item['id']);
            $product_names[] = $product->name ?? null;
            $images[] = base64_encode($product->image) ?? null ;
        }

        //return all wishlist 
        return view('wishlist',[
          'product_names'=>$product_names,
          'product_quantities'=>$quantities,
          'product_images' => $images,
          'product'=>$product,
        ]);
   }

   //add products to user's wishlist
   public function add_item(Request $request){

    //get product , quantity , id of user from the product page
    $profile_id = $request->input('user_id');
    $product_id = $request->input('product_id');
    $quantity = $request->input('quantity');

    //find the user (id) that sent the request to add it to his wishlist
    $user = User::find($profile_id);

    //make json file and add ID of product and quantity and send it to DB 
    $wishlistItems = json_decode($user->items, true) ?? [];
    $wishlistItems[] = ['id' => $product_id, 'quantity' => $quantity];
    $user->items = json_encode($wishlistItems);
    $user->save();

    //get all available product and re-render product page
    $products=product::all();
    return view('home',[
        'products'=>$products,
    ]);
    
}
}
