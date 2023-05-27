<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;


class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $addNewProduct = new Cart(); 
        if($request->user_id)
        {
            $addNewProduct->user_id = $request->user_id; 
        }
        $addNewProduct->ip_address = $request->ip();

        $addNewProduct-> product_id = $id;
        $addNewProduct-> price = $request->price;
        $addNewProduct-> qty = $request->qty ?  $request->qty:1;
        $addNewProduct-> save();
        session()->flash('success', 'Product added to cart');
        return redirect()->back();
    }


    public function removeCartProduct($id)
    {
        $cartProduct = Cart::find($id);
        $cartProduct->delete();
        session()->flash('success', 'Product Removed from cart');
        return redirect()->back();
    }
}
