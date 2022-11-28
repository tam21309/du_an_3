<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
        $cart = $request->session()->get('cart') ?? [];
        $products = [];
        if(count($cart) > 0){
            $cart_ids = array_keys($cart); 
            $products = Product::whereIn('id',$cart_ids)->get();
        }
        return view('web.gio-hang',compact('products','cart'));
    }

    public function add_to_cart(Request $request){
        $product_id = $request->product_id;
        $qty = $request->qty;
        $cart = $request->session()->get('cart') ?? [];
        if( isset( $cart[$product_id] ) ){
            $cart[$product_id] = $qty + $cart[$product_id];
        }else{
            $cart[$product_id] = $qty;
        }
        $request->session()->put('cart', $cart);

        // $cart = $request->session()->get('cart') ?? [];
        // dd ($cart);

        return redirect()->back();
    }

    public function update_cart(Request $request){
        $cart = $request->qty;
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
}
