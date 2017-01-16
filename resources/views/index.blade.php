@extends('layouts/web')
@push('title','Index Laravel Market')
@section('content')
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-9">
                    <!-- Home slide -->
                    <div class="block block-slider">
                        <ul class="home-slider kt-bxslider">
                            <li><img src="/data/option1/slide03.png" alt="Slider"></li>
                            <li><img src="/data/option1/slide02.png" alt="Slider"></li>
                            <li><img src="/data/option1/slide01.png" alt="Slider"></li>
                            <li><img src="/data/option1/slide04.png" alt="Slider"></li>
                        </ul>
                    </div>
                    <!-- ./Home slide -->
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <!-- block-shop-features -->
                            <div class="block block-shop-features">
                                <div class="block-head">
                                    <div class="block-title">
                                        <div class="block-icon">
                                            <img src="/data/shop-features-icon.png" alt="store icon">
                                        </div>
                                        <div class="block-title-text text-sm">shop</div>
                                        <div class="block-title-text text-lg">features</div>
                                    </div>
                                </div>
                                <div class="block-inner">
                                    <ul class="list-banner">
                                        <li class="banner-hover"><a href="index.html#"><img src="/data/option1/banner1.jpg" alt="Banner"></a></li>
                                        <li class="banner-hover"><a href="index.html#"><img src="/data/option1/banner2.jpg" alt="Banner"></a></li>
                                        <li class="banner-hover"><a href="index.html#"><img src="/data/option1/banner3.jpg" alt="Banner"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- ./block-shop-features-->
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <!-- block-offers -->
                            <div class="block block-offers">
                                <div class="block-head">
                                    <div class="block-title">
                                        <div class="block-icon">
                                            <img src="/data/offers-icon.png" alt="store icon">
                                        </div>
                                        <div class="block-title-text text-sm">today's</div>
                                        <div class="block-title-text text-lg">offers</div>
                                    </div>
                                </div>
                                <div class="block-inner">
                                    <ul class="products kt-owl-carousel" data-margin="0" data-loop="true"  data-nav="true" data-responsive='{"0":{"items":2},"600":{"items":2},"1000":{"items":2}}'>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="index.html#"><img src="/data/option1/p3.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                    <div class="product-status">
                                                        <span class="new">New</span>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="index.html#"><img src="/data/option1/p4.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="index.html#"><img src="/data/option1/p5.jpg" alt="Product"></a>
                                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                                    </div>
                                                    <div class="price-box">
                                                        <span class="product-price">$139.98</span>
                                                        <span class="product-price-old">$169.00</span>
                                                    </div>
                                                    <div class="product-star">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product-button">
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- block-offers -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <!-- block category -->
                    <div class="block block-category">
                        <div class="block-head">
                            <ul class="nav-tab">
                                <li class="active"><a data-toggle="tab" href="index.html#tab-categories">categories</a></li>
                                <li><a data-toggle="tab" href="index.html#tab-guarantee">GUARANTEE</a></li>
                            </ul>
                        </div>
                        <div class="block-inner">
                            <div class="tab-container">
                                <div id="tab-categories" class="tab-panel active">
                                    <ul class="categories">
                                        @foreach(getCategories() as $category)
                                        <li>
                                            <a href="{{$category->category_name}}" title="{{$category->category_name}}">
                                                <span class="text">{{$category->category_name}}</span>

                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div id="tab-guarantee" class="tab-panel">
                                    <div class="block-guarantee">
                                        <h5>
                                            <span>THE OFFICIAL FAMISHOP® SHOP GUARANTEE</span>
                                        </h5>
                                        <ul>
                                            <li><a href="index.html#">Free Shipping Every Day</a></li>
                                            <li><a href="index.html#">Earn VIP Rewards</a></li>
                                            <li><a href="index.html#">Dedicated FamiShop Experts</a></li>
                                            <li><a href="index.html#">Order Missing Pieces</a></li>
                                        </ul>
                                        <a href="index.html#" class="button-radius">Learn more<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./block category -->
                    <!-- block  top sellers -->
                    <div class="block block-top-sellers">
                        <div class="block-head">
                            <div class="block-title">
                                <div class="block-icon">
                                    <img src="/data/top-seller-icon.png" alt="store icon">
                                </div>
                                <div class="block-title-text text-sm">top</div>
                                <div class="block-title-text text-lg">SELLERS</div>
                            </div>
                        </div>
                        <div class="block-inner">
                            <ul class="products kt-owl-carousel" data-items="1" data-autoplay="true" data-loop="true" data-nav="true">
                                <li class="product">
                                    <div class="product-container">
                                        <div class="product-left">
                                            <div class="product-thumb">
                                                <a class="product-img" href="index.html#"><img src="/data/option1/p1.jpg" alt="Product"></a>
                                                <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-right">
                                            <div class="product-name">
                                                <a href="index.html#">Cotton Lycra Leggings</a>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price">$139.98</span>
                                                <span class="product-price-old">$169.00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="product-button">
                                                <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                                <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                                <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product">
                                    <div class="product-container">
                                        <div class="product-left">
                                            <div class="product-thumb">
                                                <a class="product-img" href="index.html#"><img src="/data/option1/p2.jpg" alt="Product"></a>
                                                <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-right">
                                            <div class="product-name">
                                                <a href="index.html#">Cotton Lycra Leggings</a>
                                            </div>
                                            <div class="price-box">
                                                <span class="product-price">$139.98</span>
                                                <span class="product-price-old">$169.00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="product-button">
                                                <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                                <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                                <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- block  top sellers -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- block  host deals -->
            <div class="block block-hot-deals">
                <div class="block-head">
                    <div class="block-title">
                        <div class="block-icon">
                            <img src="/data/offers-icon.png" alt="store icon">
                        </div>
                        <div class="block-title-text text-sm">hot</div>
                        <div class="block-title-text text-lg">deals</div>
                    </div>
                    <div class="block-countdownt">
                        <span class="countdown-lastest" data-y="2016" data-m="10" data-d="1" data-h="00" data-i="00" data-s="00"></span>
                    </div>
                </div>
                <div class="block-inner">
                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="index.html#"><img src="/data/option1/p6.jpg" alt="Product"></a>
                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                    </div>
                                    <div class="product-status">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price">$139.98</span>
                                        <span class="product-price-old">$169.00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-button">
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="index.html#"><img src="/data/option1/p7.jpg" alt="Product"></a>
                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price">$139.98</span>
                                        <span class="product-price-old">$169.00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-button">
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="index.html#"><img src="/data/option1/p8.jpg" alt="Product"></a>
                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price">$139.98</span>
                                        <span class="product-price-old">$169.00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-button">
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="index.html#"><img src="/data/option1/p9.jpg" alt="Product"></a>
                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price">$139.98</span>
                                        <span class="product-price-old">$169.00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-button">
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="index.html#"><img src="/data/option1/p10.jpg" alt="Product"></a>
                                        <a title="Quick View" href="index.html#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="index.html#">Cotton Lycra Leggings</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price">$139.98</span>
                                        <span class="product-price-old">$169.00</span>
                                    </div>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="product-button">
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="index.html#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="index.html#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="index.html#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./block hot deals -->
        </div>
        <!--Block banner -->
        <div class="row">
            <div class="row">
                <div class="col-sm-6">
                    <div class="block block-banner banner-hover">
                        <a href="index.html#"><img src="/data/option1/banner3.png" alt="Banner"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="block block-banner banner-hover">
                        <a href="index.html#"><img src="/data/option1/banner4.png" alt="Banner"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Block banner -->
        <!-- block-popular-cat-->
        <div class="row">
            <div class="block-popular-cat">
                <h3 class="title">
                    <span class="text">Popular Categories</span>
                </h3>
                <div class="popular-inner">
                    <div class="list-popular-cat kt-owl-carousel" data-margin="0" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":3}}'>
                        <div class="item">
                            <div class="image">
                                <img src="/data/option1/popular1.png" alt="popular1.png">
                            </div>
                            <div class="inner">
                                <h5 class="parent-categories">Personal Electronics</h5>
                                <ul class="sub-categories">
                                    <li><a href="index.html#">Xperia Z3 Phones and Tablet</a></li>
                                    <li><a href="index.html#">XB950 Extra Bass Bluetooth Headset</a></li>
                                    <li><a href="index.html#">Bluetooth Wireless Speakers</a></li>
                                    <li><a href="index.html#">Hi-Res Walkman Digital Music Player</a></li>
                                    <li><a href="index.html#">Personal Audio Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image">
                                <img src="/data/option1/popular2.png" alt="popular2.png">
                            </div>
                            <div class="inner">
                                <h5 class="parent-categories">Personal Electronics</h5>
                                <ul class="sub-categories">
                                    <li><a href="index.html#">Xperia Z3 Phones and Tablet</a></li>
                                    <li><a href="index.html#">XB950 Extra Bass Bluetooth Headset</a></li>
                                    <li><a href="index.html#">Bluetooth Wireless Speakers</a></li>
                                    <li><a href="index.html#">Hi-Res Walkman Digital Music Player</a></li>
                                    <li><a href="index.html#">Personal Audio Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="item last">
                            <div class="image">
                                <img src="/data/option1/popular3.png" alt="popular3.png">
                            </div>
                            <div class="inner">
                                <h5 class="parent-categories">Personal Electronics</h5>
                                <ul class="sub-categories">
                                    <li><a href="index.html#">Xperia Z3 Phones and Tablet</a></li>
                                    <li><a href="index.html#">XB950 Extra Bass Bluetooth Headset</a></li>
                                    <li><a href="index.html#">Bluetooth Wireless Speakers</a></li>
                                    <li><a href="index.html#">Hi-Res Walkman Digital Music Player</a></li>
                                    <li><a href="index.html#">Personal Audio Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ./block-popular-cat-->
    </div>
@endsection