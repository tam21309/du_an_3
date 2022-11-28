<div class="product_area  mb-95">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product_header">
                    <div class="section_title">
                        <h2>New Arrivals</h2>
                        <p>Add our new arrivals to your weekly lineup</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="product_container">
            <div class="row">
                @foreach ($products as $product )
                <div class="col-lg-3">
                    @include('web.elements.single_product')
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>