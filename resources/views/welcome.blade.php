@extends('layouts.app')

@section('content')

   <!-- Utilize Cart Menu Start -->
   <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/1.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Red Hot Tomato</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/2.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Vegetables Juices</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/3.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Orange Sliced Mix</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="img/product/4.png" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Orange Fresh Juice</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div>
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
       //
        <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                      حسابي
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="far fa-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        @foreach($sliders as $slider)

        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h1 class="slide-title animated ">  {{ $slider->title }}  </h1>
                                    <div class="slide-brief animated d-none">
                                        <p>
                                       {{ $slider->descrip }}
                                        </p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="/" class="theme-btn-1 btn btn-effect-1 text-uppercase"> تفاصيل</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-item-img">
                                <img src="{{ Voyager::image( $slider->slider_image ) }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
   @endforeach
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area mt-120 mt--90 d-none">
    <div class="container">
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ Voyager::image( $banners[0]->ads_image ) }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ Voyager::image( $banners[1]->ads_image ) }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ Voyager::image( $banners[2]->ads_image ) }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area mt-120">
    <div class="container">
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="#"><img src="{{ Voyager::image( $banners[0]->ads_image ) }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ Voyager::image( $banners[1]->ads_image ) }}" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ Voyager::image( $banners[2]->ads_image ) }}" alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- PRODUCT TAB AREA START (product-item-3) -->
<div class="ltn__product-tab-area ltn__product-gutter pt-85 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">أنواع الاطباق</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                    <div class="nav">

                        @foreach ($menus as $item)
                        <a data-toggle="tab" href="{{ 'catg'.$item->id }}" class="">{{ $item->name }}</a>
                        @endforeach
                   
                    </div>
                </div>
                <div class="tab-content">
              

              
                    <div class="tab-pane fade active show" id="liton_tab_3_1">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                <!-- ltn__product-item -->
                                @foreach($plats as $plat)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <a href="product-details.html"><img src="{{ Voyager::image( $plat->image ) }}" alt="#"></a>
                                       
                                            <div class="product-hover-action">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> (24)</a></li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a href="product-details.html">{{ $plat->title }}</a></h2>
                                            <div class="product-price">
                                                <span> {{ $plat->price.',00' }} ريال </span>
                                 
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                                @endforeach
                           
                                <!-- ltn__product-item -->
                              
                                <!--  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT TAB AREA END -->

<!-- COUNTDOWN AREA START -->
<div class="ltn__call-to-action-area ltn__call-to-action-4 section-bg-1 pt-110 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <img src="{{ Voyager::image( $ads->image_ads ) }}" alt="#">
            </div>
            <div class="col-lg-7">
                <div class="call-to-action-inner call-to-action-inner-4 text-color-white--- text-center---">
                    <div class="section-title-area ltn__section-title-2 text-center---">
                        <h6 class="ltn__secondary-color"> {{ $ads->title }} </h6>
                        <h1 class="section-title">  {{ $ads->body }} </h1>
                    </div>
                    <div class="ltn__countdown ltn__countdown-3 bg-white--" data-countdown="{{ $ads->date_end }}"></div>
                    <div class="btn-wrapper animated">
                        <a href="/" class="theme-btn-1 btn btn-effect-1 text-uppercase">اطلب الآن</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTDOWN AREA END -->

<!-- PRODUCT AREA START (product-item-3) -->
<div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">أطباق مميزة</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach($featured as $feature)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-left">
                    <div class="product-img">
                        <a href="product-details.html"><img src="{{ Voyager::image( $feature->image ) }}" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">مميز</li>
                            </ul>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-toggle="modal" data-target="#quick_view_modal">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Add to Cart" data-toggle="modal" data-target="#add_to_cart_modal">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                          
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a href="product-details.html">{{ $feature->title }}</a></h2>
                        <div class="product-price">
                            <span> {{ $feature->price.',00' }} ريال </span>
             
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
          @endforeach
            <!--  -->
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->

<!-- VIDEO AREA START -->
<div class="ltn__video-popup-area ltn__video-popup-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-10-- bg-image" data-bg="img/bg/15.jpg">
                    <a class="ltn__video-icon-2 ltn__video-icon-2-border" href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&showinfo=0" data-rel="lightcase:myCollection">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VIDEO AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-4) -->
<div class="ltn__testimonial-area section-bg-1 pt-290 pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h6 class="section-subtitle ltn__secondary-color">//  جديد</h6>
                    <h4 class="section-title"> من آراء زبائننا الكرام <span>.</span></h4>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-3-active slick-arrow-1 slick-arrow-1-inner">
            @foreach($feedbacks as $feedback)
            <div class="col-lg-12">
                <div class="ltn__testimonial-item ltn__testimonial-item-4">
                    <div class="ltn__testimoni-img">
                        <img src="{{ Voyager::image( $feedback->img_client ) }}" class="rounded-circle" style="height: 100px;width:100px;" alt="#">
                    </div>
                    <div class="ltn__testimoni-info">
                        <p>{{  $feedback->message  }}. </p>
                        <h4>{{  $feedback->name  }}</h4>
                        <h6>{{  $feedback->heading  }}</h6>
                    </div>
                    <div class="ltn__testimoni-bg-icon">
                        <i class="far fa-comments"></i>
                    </div>
                </div>
            </div>
            @endforeach
       
         
       
            <!--  -->
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

          
              
          
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area before-bg-bottom-2 mb--30--- plr--5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__border-between-column white-bg">
                    <div class="row">
                        @foreach($values as $value)
                        <div class="col-xl-3 col-md-6 col-12">
                            <div class="ltn__feature-item ltn__feature-item-8">
                                <div class="ltn__feature-icon">
                                    <img src="{{ Voyager::image( $value->image ) }}" alt="#">
                                </div>
                                <div class="ltn__feature-info">
                                    <h4>{{ $value->title }}</h4>
                                    <p>{{ $value->body }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
