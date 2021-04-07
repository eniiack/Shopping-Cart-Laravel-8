@section('head' , 'دیجی اسمارت')

@include('layouts.header')
@include('layouts.topbar')

<!--    slider--------------------------------->
<article class="container-main">
    <div class="page-row-main-top">
        <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
            <div class="main-slider-container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators " dir="ltr">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" dir="rtl">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/main-slider/1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/main-slider/2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/main-slider/3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/main-slider/4.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!--    slider--------------------------------->
        <!--adplacement-------------------------------->
        <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
            <aside class="adplacement-container-column">
                <a href="#" class="adplacement-item adplacement-item-column">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/1.gif">
                    </div>
                </a>
                <a href="#" class="adplacement-item adplacement-item-column">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/2.jpg">
                    </div>
                </a>
            </aside>
        </div>
    </div>
    <!--adplacement-------------------------------->

    <!--    product-slider------------------------->
    <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
        <div class="section-slider-product mb-4 mt-3">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">محبوب ترین ها</span>
                    <h3 class="card-title">مشاهده همه</h3>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                        @foreach($popular as $key => $item)
                        @if(! $key >= 5)
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                           {{$item->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>{{number_format($item->price)}}<span>تومان</span></span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                             @else
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                           {{$item->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>{{number_format($item->price)}}<span>تومان</span></span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                          
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-right"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-left"></i></button></div>
                    <div class="owl-dots disabled">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product-slider------------------------->
    <!--slider-sidebar----------------------------->
    <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
        <div class="promo-single mb-4 mt-3">
            <div class="widget-suggestion widget card">
                <header class="card-header cart-sidebar">
                    <h3 class="card-title ts-3">پیشنهادهای لحظه‌ای</h3>
                </header>
                <div id="progressBar">
                    <div class="slide-progress" style="width: 100%; transition: width 5000ms ease 0s;"></div>
                </div>
                <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(1369px, 0px, 0px); transition: all 0.25s ease 0s; width: 2190px;">
                            <div class="owl-item cloned" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/sidebar/1.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> کارت گرافیک ای ام دی مدل Radeon HD 6450 </a>
                                    </h3>
                                    <div class="price">
                                        <span class="new-price-discount">%10</span>
                                        <span class="amount">2,515,00<span>تومان</span></span>
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/sidebar/2.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> هندزفری بلوتوث مدل SP01 </a>
                                    </h3>
                                    <div class="price">
                                        <span class="new-price-discount">%10</span>
                                        <span class="amount">2,515,00<span>تومان</span></span>
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star"></span>
                                            <span class="mdi mdi-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/sidebar/3.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> هدفون بی سیم نیا مدل Q8-851S</a>
                                    </h3>
                                    <div class="price">
                                        <span class="new-price-discount">%10</span>
                                        <span class="amount">2,515,00<span>تومان</span></span>
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 273.75px;">
                                <div class="item">
                                    <a href="#">
                                        <img src="/images/sidebar/4.jpg" class="w-100" alt="">
                                    </a>
                                    <h3 class="product-title">
                                        <a href="#"> هدفون آیوان مدل E47
                                        </a>
                                    </h3>
                                    <div class="price">
                                        <span class="new-price-discount">%10</span>
                                        <span class="amount">2,515,00<span>تومان</span></span>
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
    <!--slider-sidebar----------------------------->

    <!--        category--------------------------->
    <div class="col-12">
        <div class="promotion-categories-container mb-4">
            <span class="promotion-categories-title">بیش از ۱،۵۰۰،۰۰۰ کالا در دسته‌بندی‌های مختلف</span>
            <div class="category-container">
                <div class="promotion-categories">
                    @foreach($categories as $item)
                    <a href="{{ route('shop', ['category' => $item->name]) }}" class="promotion-category">
                        <img src="{{$item->image}}">
                        <div class="promotion-category-name">{{$item->name}}</div>
                        <div class="promotion-category-quantity">۲۰۳۰۰۰ کالا</div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--        category--------------------------->



    <!--    adplacemen-container----------------------------->
    <div class="col-12">
        <div class="adplacement-container-row mb-4">
            <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item mb-4">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/3.jpg" alt="خرید خانه - نوشیدنی" title="خرید خانه - نوشیدنی">
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item mb-4">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/4.jpg" alt="خرید خانه - پروتئینی" title="خرید خانه - پروتئینی">
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item mb-4">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/5.jpg" alt="داده پرداز" title="داده پرداز">
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item mb-4">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/6.jpg" alt="خرید خانه - شوینده و سلولزی" title="خرید خانه - شوینده و سلولزی">
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/7.jpg" alt="باراد" title="باراد">
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/8.jpg" alt="پارس حیان" title="پارس حیان">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--    adplacemen-container----------------------------->

    <!--    product-slider----------------------------------->
    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="section-slider-product mb-4">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">محبوب ترین ها</span>
                    <h3 class="card-title">مشاهده همه</h3>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                            @foreach($popular as $key => $item)
                        @if(! $key >= 5)
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                           {{$item->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>{{number_format($item->price)}}<span>تومان</span></span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                             @else
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                           {{$item->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>{{number_format($item->price)}}<span>تومان</span></span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-right"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-left"></i></button></div>
                    <div class="owl-dots disabled">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product-slider------------------------->

    <!--   arrivals-product------------------------>
    <div class="col-12">
        <div class="arrivals-product">
            <div class="main-product-tab-area">
                <div class="tab-menu mb-5">
                    <ul class="nav tabs-area">
                        <li class="nav-item nav-active">
                            <a href="#" class="nav-link" data-toggle="tab">همه</a>
                        </li>
                      
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab">جدید ترین ها</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="tab">پیشنهاد شده</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <section class="main-content">
                        <ul class="content-area">
                            <li class="item-content" style="display:block;">
                                <a href="#" class="link-content">
                                    @foreach($products as $product)
                                    <div class="col-lg-2 col-md-4 col-xs-12 pull-right mb-3">
                                        <div class="product-vertical">
                                            <div class="vertical-product-thumb">
                                                <a href="{{ route('show_product', ['product' => $product->title]) }}">
                                                    <div class="stars-plp">
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star"></span>
                                                    </div>
                                                    <img src="{{$product->image}}">
                                                </a>
                                            </div>
                                            <div class="card-vertical-product-content">
                                                <div class="card-vertical-product-title">
                                                    <a href="#">
                                                       {{$product->title}}
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-price">
                                                    {{number_format($product->price)}}
                                                    <span class="price-currency">تومان</span>
                                                </div>
                                                <div class="product-actions-secondary">
                                                    <div class="heart" title="افزودن به لیست علاقه مندی">
                                                        <span class="mdi mdi-heart"></span>
                                                    </div>
                                                    {{-- <form action="{{ route('cart.add' , $product->id) }}" method="POST" id="add-to-cart">
                                                        @csrf
                                                    </form> --}}
                                                    <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                        <span onclick="Cart({{$product->id}})" class="c-introduction">
                                                            +
                                                        </span>

                                                    </div>
                                                
                                                    <div class="comparison" title="افزودن برای مقایسه">
                                                        <i class="fa fa-random" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </a>
                            </li>
                         
                            <li class="item-content">
                                <a href="#" class="link-content">
                                    @foreach(\App\Models\Product::orderBy('id' , 'DESC')->limit(12)->get() as $product)
                                    <div class="col-lg-2 col-md-4 col-xs-12 pull-right mb-3">
                                        <div class="product-vertical">
                                            <div class="vertical-product-thumb">
                                                <a href="{{ route('show_product', ['product' => $product->title]) }}">
                                                    <div class="stars-plp">
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star"></span>
                                                    </div>
                                                    <img src="{{$product->image}}">
                                                </a>
                                            </div>
                                            <div class="card-vertical-product-content">
                                                <div class="card-vertical-product-title">
                                                    <a href="#">
                                                       {{$product->title}}
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-price">
                                                    {{number_format($product->price)}}
                                                    <span class="price-currency">تومان</span>
                                                </div>
                                                <div class="product-actions-secondary">
                                                    <div class="heart" title="افزودن به لیست علاقه مندی">
                                                        <span class="mdi mdi-heart"></span>
                                                    </div>
                                                    <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                        <span class="c-introduction">
                                                            +
                                                        </span>

                                                    </div>
                                                    <div class="comparison" title="افزودن برای مقایسه">
                                                        <i class="fa fa-random" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </a>
                            </li>
                            <li class="item-content">
                                <a href="#" class="link-content">
                                    @foreach($popular as $product)
                                    <div class="col-lg-2 col-md-4 col-xs-12 pull-right mb-3">
                                        <div class="product-vertical">
                                            <div class="vertical-product-thumb">
                                                <a href="{{ route('show_product', ['product' => $product->title]) }}">
                                                    <div class="stars-plp">
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star active"></span>
                                                        <span class="mdi mdi-star"></span>
                                                    </div>
                                                    <img src="{{$product->image}}">
                                                </a>
                                            </div>
                                            <div class="card-vertical-product-content">
                                                <div class="card-vertical-product-title">
                                                    <a href="#">
                                                       {{$product->title}}
                                                    </a>
                                                </div>
                                                <div class="card-vertical-product-price">
                                                    {{number_format($product->price)}}
                                                    <span class="price-currency">تومان</span>
                                                </div>
                                                <div class="product-actions-secondary">
                                                    <div class="heart" title="افزودن به لیست علاقه مندی">
                                                        <span class="mdi mdi-heart"></span>
                                                    </div>
                                                    <div class="product-introduction-cart" title="افزودن به سبد خرید">
                                                        <span class="c-introduction">
                                                            +
                                                        </span>

                                                    </div>
                                                    <div class="comparison" title="افزودن برای مقایسه">
                                                        <i class="fa fa-random" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                   
                                </a>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!--   arrivals-product------------------------>

    <!--    adplacemen-container----------------------------->
    <div class="col-12">
        <div class="adplacement-container-row mb-4">

            <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/9.jpg" alt="پوشاک ورزشی مردانه" title="پوشاک ورزشی مردانه">
                    </div>
                </a>
            </div>

            <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                <a href="#" class="adplacement-item">
                    <div class="adplacement-sponsored-box">
                        <img src="/images/adplacement/10.jpg" alt="نوشت افزار" title="نوشت افزار">
                    </div>
                </a>
            </div>

        </div>
    </div>
    <!--    adplacemen-container----------------------------->

    <!--    product-slider------------------------->
    <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
        <div class="section-slider-product mb-4">
            <div class="widget widget-product card">
                <header class="card-header">
                    <span class="title-one">محبوب ترین ها</span>
                    <h3 class="card-title">مشاهده همه</h3>
                </header>
                <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                        @foreach($popular as $key => $item)
                        @if(! $key >= 5)
                            <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                           {{$item->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>{{number_format($item->price)}}<span>تومان</span></span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                             @else
                            <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                <div class="item">
                                    <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                        <div class="stars-plp">
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                            <span class="mdi mdi-star active"></span>
                                        </div>
                                        <img src="{{ $item->image }}" class="img-fluid" alt="">
                                    </a>
                                    <h2 class="post-title">
                                        <a href="{{ route('show_product', ['product' => $item->title]) }}">
                                           {{$item->title}}
                                        </a>
                                    </h2>
                                    <div class="price">
                                        <ins>
                                            <span>{{number_format($item->price)}}<span>تومان</span></span>
                                        </ins>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                          
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-right"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-left"></i></button></div>
                    <div class="owl-dots disabled">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    product-slider------------------------->
</article>

<!--footer------------------------------------->
@include('layouts.footer')
<script>
// function setItem(value ){
//   $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
//             // 'Content-Type': 'application/json'
//         }
//     })

//  $.ajax({
//         type : 'POST',
//         url : '/ProductItem',
//          data:{
//           name:value,
//           name2:value,
         
//         },
      
//         success:function(response){
//           console.log(response);
//           if(response) {
//             // $('.success').text(response.success);
//             // $("#ajaxform")[0].reset();
//           }
//         },
      
//     });
// }

</script>
