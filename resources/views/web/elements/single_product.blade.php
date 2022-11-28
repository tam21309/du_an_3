<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img_show"
                href="{{route('web.product.show',$product->id)}}"><img
                    src="/{{$product->image}}"
                    alt=""></a>
        </div>
        <figcaption class="product_content">
            <h4 class="product_name"><a
                    href="product-details.html">{{$product->name}}</a></h4>
            <div class="price_box">
                <span class="current_price">{{ number_format($product->price) }}</span>
            </div>
            <div class="add_to_cart">
                <a href="cart.html">+ Add to cart</a>
            </div>
        </figcaption>
    </figure>
</article>