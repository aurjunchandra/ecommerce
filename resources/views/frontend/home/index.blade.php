@extends('frontend.master')

@section('content')

<main class="main">
            <div class="intro-slider-container">
                <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                    <div class="intro-slide" style="background-image: url({{asset('/frontend/')}}/assets/images/demos/demo-2/slider/slide-1.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Bedroom Furniture</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Find Comfort <br>That Suits You.</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url({{asset('/frontend/')}}/assets/images/demos/demo-2/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Ypperlig <br>Coffee Table <br><span class="text-primary"><sup>$</sup>49,99</span></h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url({{asset('/frontend/')}}/assets/images/demos/demo-2/slider/slide-3.jpg);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle">Living Room</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">
                                Make Your Living Room <br>Work For You.<br>
                                <span class="text-primary">
                                    <sup class="text-white font-weight-light">from</sup><sup>$</sup>9,99
                                </span>
                            </h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="brands-border owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": false,
                    "margin": 0,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":2
                        },
                        "420": {
                            "items":3
                        },
                        "600": {
                            "items":4
                        },
                        "900": {
                            "items":5
                        },
                        "1024": {
                            "items":6
                        },
                        "1360": {
                            "items":7
                        }
                    }
                }'>
                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/1.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/2.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/3.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/4.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/5.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/6.png" alt="Brand Name">
                </a>

                <a href="#" class="brand">
                    <img src="{{asset('/frontend/')}}/assets/images/brands/7.png" alt="Brand Name">
                </a>
            </div><!-- End .owl-carousel -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <div class="banner-group">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-5">
                            <div class="banner banner-large banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/banners/banner-1.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">Clearence</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Coffee Tables</h3><!-- End .banner-title -->
                                    <div class="banner-text">from $19.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-5 -->

                        <div class="col-md-6 col-lg-3">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/banners/banner-2.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-bottom">
                                    <h4 class="banner-subtitle text-grey">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Amazing <br>Armchairs</h3><!-- End .banner-title -->
                                    <div class="banner-text text-white">from $39.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-md-6 col-lg-4">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/banners/banner-3.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle text-grey">New Arrivals</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white">Storage <br>Boxes & Baskets</h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link">Discover Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner banner-overlay banner-overlay-light">
                                <a href="#">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/banners/banner-4.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top">
                                    <h4 class="banner-subtitle">On Sale</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">Lamps Offer</h3><!-- End .banner-title -->
                                    <div class="banner-text">up to 30% off</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .banner-group -->

            <div class="mb-3"></div><!-- End .mb-6 -->

            <div class="container">
                <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">New Arrival</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-sale-link" data-toggle="tab" href="#products-sale-tab" role="tab" aria-controls="products-sale-tab" aria-selected="false">Top Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="products-top-link" data-toggle="tab" href="#products-top-tab" role="tab" aria-controls="products-top-tab" aria-selected="false">Discount Product</a>
                    </li>
                </ul>
            </div><!-- End .container -->

            <div class="container-fluid">
                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($data['newArrivalProducts'] as $newArrivalProduct)
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{asset('/product/' .$newArrivalProduct->image)}}" alt="Product image" class="product-image">
                                        <img src="{{asset('/product/' .$newArrivalProduct->image)}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"> {{$newArrivalProduct->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    ${{$newArrivalProduct->price}}
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                    <form action="{{url('/add/to/cart/'.$newArrivalProduct->id)}}" method="post">
                                        @csrf 
                                        <input type="hidden" name="price" value= "{{$newArrivalProduct->price}}" />
                                        <button type="submit" class="btn-product btn-cart"> <span> add to cart </span> </button>
                                    </form>
                                    <!-- <a href="{{url('/add/to/cart/'.$newArrivalProduct->id)}}" class="btn-product btn-cart"><span>add to cart</span></a> -->
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->
                            @endforeach 

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-sale-tab" role="tabpanel" aria-labelledby="products-sale-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($data['topProducts'] as $topProduct)
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src= "{{asset('/product/' .$topProduct->image)}}" alt="Product image" class="product-image">
                                        <img src="{{asset('/product/' .$topProduct->image)}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html"> {{$topProduct->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    {{$topProduct->price}}
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #74543e;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                <form action="{{url('/add/to/cart/'.$topProduct->id)}}" method="post">
                                        @csrf 
                                        <input type="hidden" name="price" value= "{{$topProduct->price}}" />
                                        <button type="submit" class="btn-product btn-cart"> <span> add to cart </span> </button>
                                    </form>

                                    <!--<a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            @endforeach

                            

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="products-top-tab" role="tabpanel" aria-labelledby="products-top-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                            data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

                            @foreach($data['discountProducts'] as $discountProduct)
                            <div class="product product-11 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{asset('/product/' .$discountProduct->image)}}" alt="Product image" class="product-image">
                                        <img src="{{asset('/product/' .$discountProduct->image)}}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{$discountProduct->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                    ${{$discountProduct->price}}
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" class="active" style="background: #1f1e18;"><span class="sr-only">Color name</span></a>
                                        <a href="#" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                                <div class="product-action">
                                <form action="{{url('/add/to/cart/'.$discountProduct->id)}}" method="post">
                                        @csrf 
                                        <input type="hidden" name="price" value= "{{$discountProduct->price}}" />
                                        <button type="submit" class="btn-product btn-cart"> <span> add to cart </span> </button>
                                    </form>
                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product -->

                            @endforeach

                           
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container-fluid -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="bg-light deal-container pt-5 pb-3 mb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="deal">
                                <div class="deal-content">
                                    <h4>Limited Quantities</h4>
                                    <h2>Deal of the Day</h2>

                                    <h3 class="product-title"><a href="product.html">POÄNG</a></h3><!-- End .product-title -->

                                    <div class="product-price">
                                        <span class="new-price">$149.00</span>
                                        <span class="old-price">Was $240.00</span>
                                    </div><!-- End .product-price -->

                                    <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->

                                    <a href="product.html" class="btn btn-primary">
                                        <span>Shop Now</span><i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .deal-content -->
                                <div class="deal-image">
                                    <a href="product.html">
                                        <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/deal/product-1.jpg" alt="image">
                                    </a>
                                </div><!-- End .deal-image -->
                            </div><!-- End .deal -->
                        </div><!-- End .col-lg-9 -->

                        <div class="col-lg-3">
                            <div class="banner banner-overlay banner-overlay-light text-center d-none d-lg-block">
                                <a href="#">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/banners/banner-5.jpg" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-top banner-content-center">
                                    <h4 class="banner-subtitle">The Best Choice</h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title">AGEN</h3><!-- End .banner-title -->
                                    <div class="banner-text text-primary">$49.99</div><!-- End .banner-text -->
                                    <a href="#" class="btn btn-outline-gray banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light -->

            <div class="mb-6"></div><!-- End .mb-6 -->

            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Top Selling Products</h2><!-- End .title -->

                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        
                        @foreach($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" id="top-fur-link" data-toggle="tab" href="#top-fur-tab {{$category->id}}" role="tab" aria-controls="top-fur-tab" aria-selected="false">{{Str::ucfirst($category->name)}}</a>
                        </li>
                        @endforeach
                        
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content">
                    <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                        <div class="products">
                            <div class="row justify-content-center">

                            @foreach($data['allProducts'] as $product)
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/product/'.$product->image)}}" alt="Product image" class="product-image">
                                                <img src="{{asset('/product/'.$product->image)}}" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Lighting</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">{{$product->name}}</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                ${{$product->price}}
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">

                                        <form action="{{url('/add/to/cart/'.$product->id)}}" method="post">
                                        @csrf 
                                        <input type="hidden" name="price" value= "{{$product->price}}" />
                                        <button type="submit" class="btn-product btn-cart"> <span> add to cart </span> </button>
                                    </form>
                                           <!-- <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>-->
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                @endforeach
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="top-fur-tab" role="tabpanel" aria-labelledby="top-fur-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-sale">Sale</span>
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-9-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-9-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Garden Armchair</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$94,00</span>
                                                <span class="old-price">Was $94,00</span>
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-new">New</span>
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-12-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-12-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">2-Seater</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $3.107,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                                
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-13-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-13-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Furniture</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Wingback Chair</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $2.486,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-decor-tab" role="tabpanel" aria-labelledby="top-decor-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-8-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-8-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Decor</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Madra Log Holder</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $401,00
                                            </div><!-- End .product-price -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #927764;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-11-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-11-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Decor</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Original Outdoor Beanbag</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $259,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-14-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-14-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Decor</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Cushion Set 3 Pieces</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $199,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-15-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-15-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Decor</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Cushion Set 3 Pieces</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $199,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="top-light-tab" role="tabpanel" aria-labelledby="top-light-link">
                        <div class="products">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-7-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-7-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Lighting</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Petite Table Lamp</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $401,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-10-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-10-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Lighting</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $401,00
                                            </div><!-- End .product-price -->

                                            <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #e8e8e8;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            </div><!-- End .product-nav -->

                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                                <div class="col-6 col-md-4 col-lg-3 col-xl-5col">
                                    <div class="product product-11 text-center">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-16-1.jpg" alt="Product image" class="product-image">
                                                <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/products/product-16-2.jpg" alt="Product image" class="product-image-hover">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist "><span>add to wishlist</span></a>
                                            </div><!-- End .product-action-vertical -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Lighting</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="product.html">Carronade Table Lamp</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                $499,00
                                            </div><!-- End .product-price -->
                                        </div><!-- End .product-body -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="container">
                <hr class="mt-1 mb-6">
            </div><!-- End .container -->
            
            <div class="blog-posts">
                <div class="container">
                    <h2 class="title text-center">From Our Blog</h2><!-- End .title-lg text-center -->

                    <div class="owl-carousel owl-simple carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                }
                            }
                        }'>
                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/blog/post-1.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Sed adipiscing ornare.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Continue Reading</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    
                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/blog/post-2.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 12, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Fusce lacinia arcuet nulla.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Continue Reading</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry entry-display">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="{{asset('/frontend/')}}/assets/images/demos/demo-2/blog/post-3.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body text-center">
                                <div class="entry-meta">
                                    <a href="#">Dec 19, 2018</a>, 2 Comments
                                </div><!-- End .entry-meta -->

                                <h3 class="entry-title">
                                    <a href="single.html">Quisque volutpat mattis eros.</a>
                                </h3><!-- End .entry-title -->

                                <div class="entry-content">
                                    <a href="single.html" class="read-more">Continue Reading</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->

                    <div class="more-container text-center mt-2">
                        <a href="blog.html" class="btn btn-outline-darker btn-more"><span>View more articles</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .more-container -->
                </div><!-- End .container -->
            </div><!-- End .blog-posts -->
        </main><!-- End .main -->
@endsection