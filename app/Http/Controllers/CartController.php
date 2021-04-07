<?php

namespace App\Http\Controllers;

use App\Helpers\Cart\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request )
    {
        foreach ($request->all() as $key => $value) {
                    $id = $value;
                }
        $product = Product::where('id' , $id )->first();
        if( Cart::has($product) ) {

            if(Cart::count($product) < $product->inventory)
                Cart::update($product , 1);
        }else {
            Cart::put(
                [
                    'quantity' => 1,
                    'price' => $product->price
                ],
                $product
            );
        }


    }
    public function minus(Request $request )
    {
        foreach ($request->all() as $key => $value) {
                    $id = $value;
                }
        $product = Product::where('id' , $id )->first();
        if( Cart::has($product) ) {
            if(Cart::count($product) < $product->inventory)
                Cart::minus($product , 1);
        }else {
            Cart::put(
                [
                    'quantity' => 1,
                    'price' => $product->price
                ],
                $product
            );
        }

        // return $id ;

    }


    public function deleteFromCart(Request $request)
    {
        Cart::delete($request->id);

    }
}
