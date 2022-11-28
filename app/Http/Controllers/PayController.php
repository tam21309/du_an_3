<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function thanh_toan(Request $request){
        $cart = $request->session()->get('cart') ?? [];
        $products = [];
        if(count($cart) > 0){
            $cart_ids = array_keys($cart); 
            $products = Product::whereIn('id',$cart_ids)->get();
        }
        return view('web.pay',compact('products','cart'));
        // return view('web.pay');
    }
    public function xu_li_thanh_toan(Request $request){
        $checkCustomer = Customer::where('phone','=',$request->phone)->first();
        if($checkCustomer){
            $customer_id = $checkCustomer->id;
        }else{
            $objCustomer = new Customer();
            $objCustomer->name = $request->name;
            $objCustomer->phone = $request->phone;
            $objCustomer->address = $request->address;
            if($objCustomer->save()){
                $customer_id = $objCustomer->id;
            }
        }

        if($customer_id){
            $cart = $request->session()->get('cart') ?? [];
            
            $total = 0;
            foreach($cart as $product_id => $quantity){
                $price = Product::find($product_id)->price;
                $total += $price * $quantity;
            }
            $objOrder = new Order();
            $objOrder->note = $request->note;
            $objOrder->total = $total;
            $objOrder->customer_id = $customer_id;
            $objOrder->save();
    
            $order_id = $objOrder->id;
    
            if($order_id){
                foreach($cart as $product_id => $quantity){
                    $price = Product::find($product_id)->price;
                    $objOrderDetail = new OrderDetail();
                    $objOrderDetail->product_id = $product_id;
                    $objOrderDetail->order_id = $order_id;
                    $objOrderDetail->quantity = $quantity;
                    $objOrderDetail->price = $price;
                    $objOrderDetail->save();
                }
            }
        }

        return redirect()->route('web.thanh_toan_thanh_cong',$order_id);
    }
    public function thanh_toan_thanh_cong($order_id, Request $request){
        $request->session()->put('cart', []);

        $order = Order::find($order_id);
        $customer = $order->customer;
        $products = $order->products;
        // dd($customer);

        return view('web.pay-thanh-cong',compact('order','customer','products'));
    }
}
