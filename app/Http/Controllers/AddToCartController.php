<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function index()
    {
        $dbn = session('addtocart',[]);
        return view('user.addtocart.addtocart',compact('dbn'));
    }

//    public function addToCart(Request $request)
//     {
//         $dbn = session('addtocart',[]);
//         $id = count($dbn) + 1;

//         $dbn[$id] = [
//             'id' => $request->item_id,
//             'name' => $request->item_name,
//             'price' => $request->item_price,
//             'image' => $request->item_image,
//             'quantity' => 1

//         ];

//         session(['addtocart' => $dbn]);

//         return redirect()->route('cart.show');
//     }


public function addToCart(Request $request)
{
    // Retrieve the current cart from the session, or initialize an empty array if the cart doesn't exist
    $dbn = session('addtocart', []);

    // Loop through the cart to check if the product already exists
    $exists = false;
    foreach ($dbn as $key => $item) {
        if ($item['id'] == $request->item_id) {
            // If the product exists, increase the quantity
            $dbn[$key]['quantity'] += 1;
            $exists = true;
            break;
        }
    }

    // If the product doesn't exist in the cart, add it as a new item
    if (!$exists) {
        $id = count($dbn) + 1; // Create a unique index for the new item

        $dbn[$id] = [
            'id' => $request->item_id,
            'name' => $request->item_name,
            'price' => $request->item_price,
            'image' => $request->item_image,
            'quantity' => 1
        ];
    }

    // Update the session with the modified cart
    session(['addtocart' => $dbn]);

    // Redirect to the cart view
    return redirect()->route('cart.show');
}


    public function showCart(){
        $dbn = session('addtocart',[]);
        return view('user.addtocart.addtocart',compact('dbn'));
    }

    public function removeItem($index){
        $dbn = session('addtocart',[]);
        if(isset($dbn[$index])){
        unset($dbn[$index]);
        session(['addtocart' => $dbn]);
        return redirect()->back();
        }
        return redirect()->route('addtocart.index');

    }

}
