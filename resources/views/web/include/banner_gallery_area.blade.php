<div class="banner_gallery_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title">
                    <h2>2022 Top Collections</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $category )
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="single_banner">
                    <div class="banner_thumb">
                        <a href="{{route('web.category.show',$category->id)}}">
                            <img style="height:300px" src="/{{$category->image}}" alt="">
                        </a>
                    </div>
                    <div class="banner_text">
                        <h3>{{$category->name}}</h3>
                        <p> {{$category->products->count()}} Sản Phẩm</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>