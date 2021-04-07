@section('head', 'سبد خرید')

    @include('layouts.header')
    @include('layouts.topbar')
    <!--cart--------------------------------------->
    <div class="container-main">
        <div class="col-12">
            <div class="breadcrumb-container">
                <ul class="js-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/" class="breadcrumb-link">خانه</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link active-breadcrumb">سبد خرید</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="cart-title-top">سبد خرید</div>
            <div class="cart-main" id="CartPageSection">
            <div class="cart-main" id="CartPage">
                <div class="col-lg-9 col-md-9 col-xs-12 pull-right sectionWrapper" id="productSection">
                    <div class="title-content">
                        <ul class="title-ul">
                            <li class="title-item product-name">
                                نام کالا
                            </li>
                            <li class="title-item required-number">
                                تعداد مورد نیاز
                            </li>
                            <li class="title-item unit-price">
                                قیمت واحد
                            </li>
                            <li class="title-item total">
                                مجموع
                            </li>
                        </ul>
                    </div>
                    @foreach (\Cart::all() as $cart)
                        @if (isset($cart['product']))
                            @php
                                $product = $cart['product'];
                            @endphp
                            <div class="page-content-cart">
                                <div class="checkout-body" data="{{ $product->id }}">
                                    <div class="product-name before">
                                        <a href="#" class="remove-from-cart btn-delete"
                                        onclick="deleteProduct(`{{ $cart['id'] }}`)">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <a href="#" class="col-thumb">
                                            <img src="{{ $product->image }}">
                                        </a>
                                        <div class="checkout-col-desc">
                                            <a href="#">
                                                <h1>{{ $product->title }}</h1>
                                            </a>
                                            <div class="checkout-variant-color">
                                                <span class="checkout-variant-title">سفید</span>
                                                <div class="checkout-variant-shape"></div>
                                                <div class="checkout-guarantee"><i class="fa fa-check"></i>گارانتی ۱۸ ماهه
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="required-number before">
                                        <div class="quantity">
                                            <input type="number" data-id="{{ $product->id }}" class="number" min="1" max="99" step="1"
                                                value="{{ $cart['quantity'] }}">
                                        </div>
                                    </div>
                                    <div class="unit-price before">
                                        <div class="product-price">
                                            {{ number_format($product->price) }}
                                            <span>
                                                تومان
                                            </span>
                                        </div>
                                    </div>
                                    <div class="total before">
                                        <div class="TotalPrice{{$product->id}}">
                                            {{ number_format($product->price * $cart['quantity']) }}
                                            <span>
                                                تومان
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 pull-left" id="priceSection">
                    <div class="page-aside">
                        <div class="checkout-summary">
                            <div class="comment-summary mb-3">
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم ی دستاوردهای اصلی و
                                    جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                            <div class="discount-code mb-4">
                                <form action="#" class="discount-form">
                                    <label for="discount">کد تخفیف</label>
                                    <input type="text" id="discount" class="input-discount"
                                        placeholder="کد تخفیف خود را وارد کنید">
                                    <a href="#">
                                        <button class="btn-discount">اعمال</button>
                                    </a>
                                </form>
                            </div>
                            <div class="discount-code mb-2">
                                <form action="#" class="discount-form">
                                    <label for="discount">کد هدیه</label>
                                    <input type="text" id="discount" class="input-discount"
                                        placeholder="کد هدیه خود را وارد کنید">
                                    <a href="#">
                                        <button class="btn-discount">اعمال</button>
                                    </a>
                                </form>
                            </div>
                            <div class="amount-of-payable mt-4">
                                <span class="payable">مبلغ قابل پرداخت</span>

                                @php
                                    $totaalPrice = Cart::all()->sum(function ($cart) {
                                        return $cart['price'] * $cart['quantity'];
                                    });
                                @endphp
                                <span class="amount-of"><span id="totalAmount">{{ number_format($totaalPrice) }}<span> تومان</span></span>
                                    
                                </span>
                                <a>
                                    <form method="POST" action="{{route('cart.payment')}}">
                                        @csrf
                                    <button type="submit"  class="setlement-account">تسویه حساب</button>
                                </form>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--cart--------------------------------------->

    @include('layouts.footer')
 