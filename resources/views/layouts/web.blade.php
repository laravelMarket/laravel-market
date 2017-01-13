<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="/assets/lib/easyzoom/easyzoom.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/global.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <title>@stack('title')</title>
    @stack('style')
</head>
<body>
<!-- header -->
<header id="header">
    <!-- Top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <ul class="top-bar-link top-bar-link-left">
                    <li><i class="fa fa-phone"></i> Call us: 090 456 7823</li>
                    <li><i class="fa fa-exchange"></i> 30 Days Exchange Policy</li>
                </ul>
                <ul class="top-bar-link top-bar-link-right dot">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="compare.html">Compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top bar -->
    <div class="container">
        <!-- box header -->
        <div class="row">
            <div class="box-header">
                <div class="col-sm-12 col-md-12 col-lg-3"></div>
                <div class="block-wrap-search col-sm-6 col-md-6 col-lg-5">
                    <div class="advanced-search box-radius">
                        <form class="form-inline">
                            <div class="form-group search-category">
                                <select id="category-select" class="search-category-select">
                                    <option value="0">All Categories</option>
                                    @foreach(getCategories() as $cat)
                                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group search-input">
                                <input type="text" placeholder="What are you looking for?">
                            </div>
                            <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
                <div class="wrap-block-cl col-sm-3 col-md-3 col-lg-2">
                    <div class="inner-cl box-radius">
                        <div class="dropdown language">
                            <a data-toggle="dropdown" role="button"><img src="/data/en.jpg" alt="languae1"></a>
                            <ul class="dropdown-menu">
                                <li><a href=""><img src="/data/en.jpg" alt="languae2">English</a></li>
                                <li><a href=""><img src="/data/fr.jpg" alt="languae3">French</a></li>
                            </ul>
                        </div>
                        <div class="dropdown currency">
                            <a data-toggle="dropdown" role="button">USD</a>
                            <ul class="dropdown-menu">
                                <li><a href="">$ USD</a></li>
                                <li><a href="">€ EUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="block-wrap-cart col-sm-3 col-md-3 col-lg-2">
                    <div class="iner-block-cart box-radius">
                        <a href="cart.html">
                            <span class="total">${{Cart::subtotal()}}</span>
                        </a>
                    </div>
                    <div class="block-mini-cart">
                        <div class="mini-cart-content">
                            <h5 class="mini-cart-head">{{Cart::count()}} Items in my cart</h5>
                            <div class="mini-cart-list">
                                <ul>
                                    @foreach(Cart::content() as $row)
                                    <li class="product-info">
                                        <div class="p-left">
                                            <a href="" class="remove_link"></a>
                                            <a href="">
                                                <img class="img-responsive" src="/data/p1.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="p-right">
                                            <p class="p-name">{{$row->name}}</p>
                                            <p class="product-price">${{$row->price}}</p>
                                            <p>Qty: {{$row->qty}}</p>

                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="toal-cart">
                                <span>Total</span>
                                <span class="total-price pull-right">${{Cart::subtotal()}}</span>
                            </div>
                            <div class="cart-buttons">
                                <a href="checkout.html" class="button-radius btn-check-out">Checkout<span class="icon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./box header -->
        <!-- main header -->
        <div class="row">
            <div class="main-header">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="logo">
                            <a href="/"><img src="/data/option1/logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 main-header-banner">
                        <div class="herader-banner">
                            <ul class="list-banner">
                                <li><div class="banner1"><a href=""><img src="/data/option1/banner1.png" alt="Banner"></a></div></li>
                                <li><div class="banner1"><a href=""><img src="/data/option1/banner2.png" alt="Banner"></a></div></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./main header -->
    </div>
    <!-- main menu-->
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <nav class="navbar" id="main-menu">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="">MENU</a>
                        </div>
                        @include('partials.menu')<!--/.nav-collapse -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- ./main menu-->
</header>
<!-- ./header -->
@yield('content')
<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="block footer-block-box">
                            <div class="block-head">
                                <div class="block-title">
                                    <div class="block-icon">
                                        <img src="/data/location-icon.png" alt="store icon">
                                    </div>
                                    <div class="block-title-text text-sm">FIND A</div>
                                    <div class="block-title-text text-lg">edo store</div>
                                </div>
                            </div>
                            <div class="block-inner">
                                <div class="block-info clearfix">
                                    Enter your zip code, city or country to find the closest EDO Store near you!
                                </div>
                                <div class="block-input-box box-radius clearfix">
                                    <input type="text" class="input-box-text" placeholder="Zip code, City, Country">
                                    <button class="block-button">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="block footer-block-box">
                            <div class="block-head">
                                <div class="block-title">
                                    <div class="block-icon">
                                        <img src="/data/email-icon.png" alt="store icon">
                                    </div>
                                    <div class="block-title-text text-sm">SUBSCRIBE TO</div>
                                    <div class="block-title-text text-lg">edo shop EMAILS</div>
                                </div>
                            </div>
                            <div class="block-inner">
                                <div class="block-info clearfix">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                </div>
                                <div class="block-input-box box-radius clearfix">
                                    <input type="text" class="input-box-text" placeholder="Email address">
                                    <button class="block-button">Go</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="block footer-block-box">
                            <div class="block-head">
                                <div class="block-title">
                                    <div class="block-icon">
                                        <img src="/data/partners-icon.png" alt="store icon">
                                    </div>
                                    <div class="block-title-text text-sm">our</div>
                                    <div class="block-title-text text-lg">partners</div>
                                </div>
                            </div>
                            <div class="block-inner">
                                <div class="block-owl">
                                    <ul class="kt-owl-carousel list-partners" data-nav="true" data-autoplay="true" data-loop="true" data-items="1">
                                        <li class="partner"><a href=""><img src="/data/partner1.jpg" alt="partner"></a></li>
                                        <li class="partner"><a href=""><img src="/data/partner2.jpg" alt="partner"></a></li>
                                        <li class="partner"><a href=""><img src="/data/partner3.jpg" alt="partner"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="">Buyer Central</a></li>
                                <li><a href="">Sign in</a></li>
                                <li><a href="">News</a></li>
                                <li><a href="">Buyer Protection</a></li>
                                <li><a href="">Payment Options</a></li>
                                <li><a href="">EMI Payment</a></li>
                                <li><a href="">Shipping Policy</a></li>
                                <li><a href="">Return Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="">Merchant Central</a></li>
                                <li><a href="">Merchant Sign In</a></li>
                                <li><a href="">Merchant Registration</a></li>
                                <li><a href="">How Does It Work</a></li>
                                <li><a href="">Pricing</a></li>
                                <li><a href="">Fulfillment by ShopClues</a></li>
                                <li><a href="">Merchant Tools</a></li>
                                <li><a href="">Best Practice</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="">Information</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Band of Trust</a></li>
                                <li><a href="">ShopClues History</a></li>
                                <li><a href="">News</a></li>
                                <li><a href="">In the Press</a></li>
                                <li><a href="">Awards New</a></li>
                                <li><a href="">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul>
                                <li class="head"><a href="">Contact Us</a></li>
                                <li><a href="">Customer Support</a></li>
                                <li><a href="">Merchant Support</a></li>
                                <li><a href="">Merchant Inquiries</a></li>
                                <li><a href="">Product Reviews</a></li>
                                <li><a href="">Brand Inquiries</a></li>
                                <li><a href="">Bulk Orders</a></li>
                                <li><a href="">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link">
                                <li class="head"><a href="">help</a></li>
                                <li><a href="">See all Help</a></li>
                                <li><a href="">My Account</a></li>
                                <li><a href="">FAQs</a></li>
                            </ul>
                            <ul>
                                <li class="head"><a href="">OTHER SERVICES</a></li>
                                <li><a href="">Market America Gear</a></li>
                                <li><a href="">Apply for Market</a></li>
                                <li><a href="">America Credit Card</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-4 block-link-wapper">
                        <div class="block-link">
                            <ul class="list-link flag">
                                <li class="head"><a href="">INTERNATIONAL SHOPPING</a></li>
                                <li><a href=""><img src="/data/flag1.png" alt="flang">Customer Support</a></li>
                                <li><a href=""><img src="/data/flag2.png" alt="flang">Canada</a></li>
                                <li><a href=""><img src="/data/flag3.png" alt="flang">Mexico</a></li>
                                <li><a href=""><img src="/data/flag4.png" alt="flang">United Kingdom</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-social">
        <div class="container">
            <div class="row">
                <div class="block-social">
                    <ul class="list-social">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href=""><i class="fa fa-pied-piper"></i></a></li>
                        <li><a href=""><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
                <div class="block-payment">
                    <ul class="list-logo">
                        <li><a href=""><img src="/data/payment1.png" alt="Payment Logo"></a></li>
                        <li><a href=""><img src="/data/payment2.png" alt="Payment Logo"></a></li>
                        <li><a href=""><img src="/data/payment3.png" alt="Payment Logo"></a></li>
                        <li><a href=""><img src="/data/payment4.png" alt="Payment Logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="block-coppyright">
                    © 2015 Edo Demo Store. All Rights Reserved.
                </div>
                <div class="block-shop-phone">
                    Shop by phone <strong>1-899-353-2268</strong>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ./footer -->
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<script type="text/javascript" src="/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/lib/easyzoom/easyzoom.js"></script>
<!-- COUNTDOWN -->
<script type="text/javascript" src="/assets/lib/countdown/jquery.plugin.js"></script>
<script type="text/javascript" src="/assets/lib/countdown/jquery.countdown.js"></script>
<!-- ./COUNTDOWN -->
<script type="text/javascript" src="/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>
@stack('scripts')
</body>
</html>