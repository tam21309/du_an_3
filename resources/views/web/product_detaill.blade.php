@extends('layouts.web')
@section('content')
<!--product details start-->
<div class="product_details mb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="product-details-tab">
                    <div id="img-1" class="">
                        <img id="zoom1" src="/{{$product->image}}"
                                data-zoom-image="assets/img/product/productbig4.jpg" alt="big-1">
                    </div>

                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="product_d_right">
                    <form action="{{route('web.cart.add_to_cart')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="productd_title_nav">
                            <h1><a href="#">{{$product->name}}</a></h1>
                            
                        </div>

                        <div class="price_box">
                            <span class="current_price">{{number_format($product->price)}}</span>
                        </div>
                        <div class="product_desc">{{$product->description}}</div>
                
                        <div class="product_variant quantity">
                            <label>Quantity</label>
                            <input min="1" max="100" value="1" type="number" name="qty">
                            <button class="button" type="submit">add to cart</button>

                        </div>
                        <div class="product_meta">
                            <span>Category: <a href="{{route('web.category.show',$product->category->id)}}">{{$product->category->name}}</a></span>
                        </div>

                    </form>
              
                </div>
            </div>
        </div>
    </div>
</div>
<!--product details end-->

@endsection