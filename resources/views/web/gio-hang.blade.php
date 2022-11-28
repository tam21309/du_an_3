@extends('layouts.web')
@section('content')
<div class="shopping_cart_area">
    <div class="container">
        <form action="{{route('web.cart.update_cart')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="table_desc">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        {{-- <th class="product_remove">Delete</th> --}}
                                        <th class="product_thumb">Image</th>
                                        <th class="product_name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product_quantity">Quantity</th>
                                        <th class="product_total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $total = 0;
                                    ?>
                                    @foreach ($products as $product )
                                    <?php
                                        $qty = $cart[$product->id];
                                        $total += $product->price * $qty;
                                    ?>
                                    <tr>
                                        <td class="product_remove">
                                            <a href="{{route('web.product.show',$product->id)}}"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <td class="product_thumb">
                                            <a href="{{route('web.product.show',$product->id)}}">
                                                <img src="/{{$product->image}}" alt="">
                                            </a>
                                        </td>
                                        <td class="product_name">
                                            <a href="{{route('web.product.show',$product->id)}}">
                                                {{$product->name}}
                                            </a>
                                        </td>
                                        <td class="product-price">{{ number_format($product->price) }}</td>
                                        <td class="product_quantity">
                                            <label>Quantity</label> 
                                            <input min="1" value="{{$qty}}" type="number" name="qty[{{$product->id}}]">
                                        </td>
                                        <td class="product_total">{{ number_format($product->price * $qty) }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                            <button type="submit">update cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area start-->
            <div class="coupon_area">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="coupon_code right">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Total Money</p>
                                    <p class="cart_amount">{{ number_format ($total) }}</p>
                                </div>

                                <div class="checkout_btn">
                                    <a href="{{route('web.thanh_toan')}}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--coupon code area end-->
        </form>
    </div>
</div>
@endsection