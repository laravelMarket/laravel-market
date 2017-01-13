@extends('layouts/web')
@push('title') {{$category_name}} Laravel Market  @endpush
@section('content')
    <div class="container">
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
            <div class="block block-filter-top">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="filter-label first">Category</div>
                    </div>
                    <div class="col-sm-9 col-md-10 first">
                        <div class="filter-value">
                            <ul class="list-category">
                                @foreach(getCategories($category_id) as $m)
                                    <li><a href="{{url($m->category_slug.'/c/'.$m->id)}}">{{$m->category_name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="filter-label">Price</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="filter-value">
                            <div class="block-filter-inner box-filter-price">
                                <div data-label-reasult="Filter By Price: " data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                                <div class="amount-range-price">Filter By Price: $50 - $350</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="filter-label">Color</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="filter-value">
                            <ul class="list-color">
                                <li><a href="#"><span style=" background:#4d6dbd;">blule</span></a></li>
                                <li><a href="#"><span style=" background:#2fbcda;">blule</span></a></li>
                                <li class="selected"><a href="#"><span style=" background:#ffe00c;">blule</span></a></li>
                                <li><a href="#"><span style=" background:#72b226;">blule</span></a></li>
                                <li><a href="#"><span style=" background:#fb5d5d;">blule</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="filter-label">Size</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="filter-value">
                            <ul class="list-size">
                                <li><a href="#"><span>X</span></a></li>
                                <li><a href="#"><span>XL</span></a></li>
                                <li class="selected"><a href="#"><span>S</span></a></li>
                                <li><a href="#"><span>XS</span></a></li>
                                <li><a href="#"><span>M</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="filter-label last">Bands</div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="filter-value">
                            <ul class="list-category last">
                                <li><a href="#">Band 01</a></li>
                                <li><a href="#">Band 02</a></li>
                                <li><a href="#">Band 03</a></li>
                                <li><a href="#">Band 04</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="page-title">
                <span>{{$category_name}}</span>
                <a href="#" class="button-radius compare-link">Compare (1)<span class="icon"></span></a>
            </h3>
            <div class="sortPagiBar">
                <ul class="display-product-option">
                    <li class="view-as-grid selected">
                        <span>grid</span>
                    </li>
                    <li class="view-as-list">
                        <span>list</span>
                    </li>
                </ul>
                <div class="sortPagiBar-inner">
                    <nav>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">Next »</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="show-product-item">
                        <select class="">
                            <option value="1">Show 6</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>

                    <div class="sort-product">
                        <select>
                            <option value="1">Postion</option>
                            <option value="1">Product name</option>
                        </select>
                        <div class="icon"><i class="fa fa-sort-alpha-asc"></i></div>
                    </div>
                </div>
            </div>
            <div class="category-products">
                <ul class="products row">

                    @foreach($products as $product)
                        <li class="product col-xs-12 col-sm-4 col-md-3">
                        <div class="product-container">
                            <div class="inner">
                                <div class="product-left">
                                    <div class="product-thumb">
                                        <a class="product-img" href="{{url(str_slug($product->product_name)).'/p/'.$product->id}}"><img src="/data/option1/{{$product->image_name}}" alt="Product"></a>
                                        <a title="Quick View" href="#" class="btn-quick-view">Quick View</a>
                                    </div>
                                </div>
                                <div class="product-right">
                                    <div class="product-name">
                                        <a href="{{url(str_slug($product->product_name)).'/p/'.$product->id}}">{{$product->product_name}}</a>
                                    </div>
                                    <div class="price-box">
                                        <span class="product-price">${{$product->cost}}</span>

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
                        </div>
                    </li>
                    @endforeach


                </ul>
            </div>
            <div class="sortPagiBar">
                <ul class="display-product-option">
                    <li class="view-as-grid selected">
                        <span>grid</span>
                    </li>
                    <li class="view-as-list">
                        <span>list</span>
                    </li>
                </ul>
                <div class="sortPagiBar-inner">
                    <nav>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">Next »</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="show-product-item">
                        <select class="">
                            <option value="1">Show 6</option>
                            <option value="1">Show 12</option>
                        </select>
                    </div>

                    <div class="sort-product">
                        <select>
                            <option value="1">Postion</option>
                            <option value="1">Product name</option>
                        </select>
                        <div class="icon"><i class="fa fa-sort-alpha-asc"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection