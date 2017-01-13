@extends('layouts.web')
@push('title') {{$product->product_name}} @endpush
@section('content')
    <div class="container product-page">
        <div class="row">
            <div class="block block-breadcrumbs">
                <ul>
                    <li class="home">
                        <a href="#"><i class="fa fa-home"></i></a>
                        <span></span>
                    </li>
                    <li><a href="#">Beauty & Perfumes</a><span></span></li>
                    <li>Men</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-sm-5">
                    <div class="block block-product-image">
                        <div class="product-image easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                            <a href="/data/option1/{{$product->image_name}}">
                                <img src="/data/option1/{{$product->image_name}}" alt="Product" width="450" height="450" />
                            </a>
                        </div>
                        <div class="text">Hover on the image to zoom</div>
                        <div class="product-list-thumb">
                            <ul class="thumbnails kt-owl-carousel" data-margin="10" data-nav="true" data-responsive='{"0":{"items":2},"600":{"items":2},"1000":{"items":3}}'>
                                <li>
                                    <a class="selected" href="/data/option1/{{$product->image_name}}" data-standard="/data/option1/{{$product->image_name}}">
                                        <img src="/data/option1/{{$product->image_name}}" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="/data/zoom/full2.jpg" data-standard="/data/zoom/standard2.jpg">
                                        <img src="/data/zoom/thumb2.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="/data/zoom/full3.jpg" data-standard="/data/zoom/standard3.jpg">
                                        <img src="/data/zoom/thumb3.jpg" alt="" />
                                    </a>
                                </li>
                                <li>
                                    <a href="/data/zoom/full4.jpg" data-standard="/data/zoom/standard4.jpg">
                                        <img src="/data/zoom/thumb4.jpg" alt="" />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <div class="block-product-info">
                                <h2 class="product-name">{{$product->product_name}}</h2>
                                <div class="price-box">
                                    <span class="product-price">${{$product->cost}}</span>
                                   <!-- <span class="product-price-old">$169.00</span>-->
                                </div>
                                <div class="product-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="desc">{{$product->short_description}}</div>
                                <div class="variations-box">
                                    <table class="variations-table">
                                        <tr>
                                            <td class="table-label">Color</td>
                                            <td class="table-value">
                                                <ul class="list-check-box color">
                                                    <li><a class="selected" href="#"><span style="background:#4d6dbd;">Blue</span></a></li>
                                                    <li><a href="#"><span style="background:#fb5d5d;">Blue</span></a></li>
                                                    <li><a href="#"><span style="background:#2fbcda;">Blue</span></a></li>
                                                    <li><a href="#"><span style="background:#ffe00c;">Blue</span></a></li>
                                                    <li><a href="#"><span style="background:#72b226;">Blue</span></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-label">Size</td>
                                            <td class="table-value">
                                                <ul class="list-check-box">
                                                    <li><a href="#">XL</a></li>
                                                    <li><a href="#">X</a></li>
                                                    <li><a href="#">S</a></li>
                                                    <li><a href="#">XS</a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="table-label">Qty</td>
                                            <td class="table-value">
                                                <div class="box-qty">
                                                    <a href="#" class="quantity-minus">-</a>
                                                    <input type="text" class="quantity" value="1">
                                                    <a href="#" class="quantity-plus">+</a>
                                                </div>
                                                <a href="#" class="button-radius btn-add-cart">Buy<span class="icon"></span></a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="box-control-button">
                                    <a class="link-wishlist" href="#">wishlist</a>
                                    <a class="link-compare" href="#">Compare</a>
                                    <a class="link-sendmail" href="#">Email to a Friend</a>
                                    <a class="link-print" href="#">Print</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5">
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
                                    <ul class="products kt-owl-carousel" data-margin="10" data-items="1" data-autoplay="true" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":2},"1000":{"items":1}}'>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="/data/option1/p1.jpg" alt=""></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
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
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product">
                                            <div class="product-container">
                                                <div class="product-left">
                                                    <div class="product-thumb">
                                                        <a class="product-img" href="#"><img src="/data/option1/p2.jpg" alt=""></a>
                                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                                    </div>
                                                </div>
                                                <div class="product-right">
                                                    <div class="product-name">
                                                        <a href="#">Cotton Lycra Leggings</a>
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
                                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- block  top sellers -->
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="block block-category-list">
                                <div class="block-inner">
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/1.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/1-1.png" alt="Icon">
                                        <span>Women</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/2.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/2-1.png" alt="Icon">
                                        <span>Men</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/3.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/3-1.png" alt="Icon">
                                        <span>Kids & Baby</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/4.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/4-1.png" alt="Icon">
                                        <span>Bags & Shoes</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/5.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/5-1.png" alt="Icon">
                                        <span>Business</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/6.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/6-1.png" alt="Icon">
                                        <span>Electronics</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/7.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/7-1.png" alt="Icon">
                                        <span>Sports</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/8.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/8-1.png" alt="Icon">
                                        <span>Jewelry & Watches</span>
                                    </a>
                                    <a href="#">
                                        <img class="icon1" src="/data/icons/9.png" alt="Icon">
                                        <img class="icon2" src="/data/icons/9-1.png" alt="Icon">
                                        <span>Home & Garden</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Product tab -->
            <div class="block block-tabs tab-left">
                <div class="block-head">
                    <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">description</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Additional</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>
                    </ul>
                </div>
                <div class="block-inner">
                    <div class="tab-container">
                        <div id="tab-1" class="tab-panel active">
                            <p>
                                {{$product->description}}
                            </p>
                        </div>
                        <div id="tab-2" class="tab-panel">
                            <table>
                                <tbody>
                                <tr>
                                    <td>Compositions</td>
                                    <td>Cotton</td>
                                </tr>
                                <tr>
                                    <td>Styles</td>
                                    <td>Girly</td>
                                </tr>
                                <tr>
                                    <td>Properties</td>
                                    <td>Colorful Dress</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab-3" class="tab-panel">
                            <div id="reviews">
                                <h4 class="comments-title">1 review for "Cotton Lycra Leggings"</h4>
                                <ol class="comment-list">
                                    <li class="comment">
                                        <div class="comment-avatar">
                                            <img src="/data/avatar.jpg" alt="Avatar">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <a href="#" class="comment-author">jon Conner</a>
                                                <span class="comment-date">March 14, 2013 at 8:03 am</span>
                                                <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                            <div class="comment-entry">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-reply-link" href="#"><i class="fa fa-share"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment">
                                        <div class="comment-avatar">
                                            <img src="/data/avatar.jpg" alt="Avatar">
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <a href="#" class="comment-author">jon Conner</a>
                                                <span class="comment-date">March 14, 2013 at 8:03 am</span>
                                                <div class="review-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>
                                            </div>
                                            <div class="comment-entry">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                            </div>
                                            <div class="comment-actions">
                                                <a class="comment-reply-link" href="#"><i class="fa fa-share"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                                <div class="comment-form">
                                    <h3 class="comment-reply-title">Leave a Review</h3>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="rating">
                                        <label class="required">Your rating</label>
                                        <div class="form-rating">
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4"> 4
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                    <p>
                                        <label class="required">Name</label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label class="required">Email</label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label>Website</label>
                                        <input type="text">
                                    </p>
                                    <p>
                                        <label class="required">Comment</label>
                                        <textarea rows="5"></textarea>
                                    </p>
                                    <p>
                                        <button class="button">Post review</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product tab -->
            <!-- Related Products -->
            <div class="block block-products-owl">
                <div class="block-head">
                    <div class="block-title">
                        <div class="block-title-text text-lg">Related Products</div>
                    </div>
                </div>
                <div class="block-inner">
                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p35.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p36.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p37.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p38.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p39.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./Related Products -->
            <!-- upsell Products -->
            <div class="block block-products-owl">
                <div class="block-head">
                    <div class="block-title">
                        <div class="block-title-text text-lg">Upsell Products</div>
                    </div>
                </div>
                <div class="block-inner">
                    <ul class="products kt-owl-carousel" data-margin="20" data-loop="true" data-nav="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p40.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p41.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p42.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p43.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product">
                            <div class="product-container">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="#"><img src="/data/option1/p44.jpg" alt=""></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="#">Cotton Lycra Leggings</a>
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
                                        <a class="btn-add-wishlist" title="Add to Wishlist" href="#">Add Wishlist</a>
                                        <a class="btn-add-comparre" title="Add to Compare" href="#">Add Compare</a>
                                        <a class="button-radius btn-add-cart" title="Add to Cart" href="#">Buy<span class="icon"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./upsell Products -->
        </div>
    </div>
@endsection