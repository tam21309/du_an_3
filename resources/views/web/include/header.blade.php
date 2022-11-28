<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Beauty & Cosmetic </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css')}}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{ asset('assets/css/font.awesome.css')}}">
    <!--ionicons css-->
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}">
    <!--simple line icons css-->
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css')}}">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css')}}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{ asset('assets/css/slinky.menu.css')}}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

    <!--header area start-->
    <!--offcanvas menu area start-->
 
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="icon-menu"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="language_currency top">
                            <ul>
                                <li class="language"><a href="#"><img src="assets/img/icon/language.png" alt=""> English
                                        <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Russian</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#"> $ <i class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">€ Euro</a></li>
                                        {{-- <li><a href="#">£ Pound Sterling</a></li> --}}
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li><a href="tel:0901170243">0901170243</a></li>

                            </ul>
                        </div>
                        <div class="language_currency bottom">
                            <ul>
                                <li><span>Mon - Fri: 8:00 - 18:00</span></li>
                                <li class="account"><a href="#"> Setting <i
                                            class="icon-right ion-ios-arrow-down"></i></a>
                                    <ul class="dropdown_currency bottom_drop_c">
                                        <li><a href="#">€ Euro</a></li>
                                        <li><a href="#">$ US Dollar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header_account_area">
                            <div class="header_account_list search_list">
                                <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                <div class="dropdown_search">
                                    <form action="#">
                                        <input placeholder="Search entire store here ..." type="text">
                                        <button type="submit"><i class="icon-magnifier icons"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header_account_list  mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="icon-bag icons"></i>
                                    <span class="item_count">{{ count($cart) }}</span>
                                </a>
        
                            </div>
                        </div>

                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                    {{-- <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                    </ul> --}}
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> demo@example.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <header>
        <div class="main_header">
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="language_currency top_left">
                                <ul>
                                    <li class="language"><a href="#"><img src="assets/img/icon/language.png" alt="">
                                            English <i class="icon-right ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Russian</a></li>
                                        </ul>
                                    </li>
                                    <li class="currency"><a href="#"> $ <i
                                                class="icon-right ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">€ Euro</a></li>
                                            <li><a href="#">$ US Dollar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="tel:0901170243">0901170243</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="language_currency text-right">
                                <ul>
                                    <li><span>Mon - Fri: 8:00 - 18:00</span></li>
                                    <li class="account"><a href="#"> Setting <i
                                                class="icon-right ion-ios-arrow-down"></i></a>
                                        <ul class="dropdown_currency">
                                            <li><a href="#">€ Euro</a></li>
                                            <li><a href="#">$ US Dollar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_middle sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>

                        </div>
                        <div class="col-lg-10">
                            <div class="header_right_info menu_position">
                                <!--main menu start-->
                                <div class="main_menu">
                                    <nav>
                                        <ul>
                                            <li><a class="active" href="index.html">Home<i
                                                        class="fa fa-angle-down"></i></a>
                                                {{-- <ul class="sub_menu">
                                                    <li><a href="index.html">Home shop 1</a></li>
                                                </ul> --}}
                                            </li>
                                            <li class="mega_items"><a href="shop.html">shop<i
                                                        class="fa fa-angle-down"></i></a>
                                                <div class="mega_menu">
                                                    <ul class="mega_menu_inner">
                                                        <li><a href="#">Shop Layouts</a>
                                                            <ul>
                                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                                <li><a href="shop-list.html">List View</a></li>
                                                            </ul>
                                                        </li>
                                                        {{-- <li><a href="#">other Pages</a>
                                                            <ul>
                                                                <li><a href="cart.html">cart</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="my-account.html">my account</a></li>
                                                            </ul>
                                                        </li> --}}
                                                        <li><a href="#">Product Types</a>
                                                            <ul>
                                                                <li><a href="product-details.html">product details</a>
                                                                </li>

                                                            </ul>
                                                        </li>
                                                        <li><a href="#"><img src="assets/img/bg/banner_menu.jpg"
                                                                    alt=""></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--main menu end-->
                                <div class="header_account_area">
                                    <div class="header_account_list search_list">
                                        <a href="javascript:void(0)"><i class="icon-magnifier icons"></i></a>
                                        <div class="dropdown_search">
                                            <form action="#">
                                                <input placeholder="Search entire store here ..." type="text">
                                                <button type="submit"><i class="icon-magnifier icons"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header_account_list  mini_cart_wrapper">
                                        <a href="{{route('web.cart.index')}}"><i class="icon-bag icons"></i>
                                            {{-- <span class="cart_itemtext">Cart:</span>
                                            <span class="cart_itemtotal">$59.00</span> --}}
                                            <span class="item_count">{{ count($cart) }}</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>