@section('head', 'دیجی اسمارت')

    @include('layouts.header')
    @include('layouts.topbar')


    <div class="container-main">
        <div class="col-12">
            <div class="breadcrumb-container">
                <ul class="js-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link">خانه</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link">پوشاک</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#" class="breadcrumb-link active-breadcrumb">لباس مردانه</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-12 pull-right">
            <section class="page-aside">
                <div class="sidebar-wrapper">
                    <div class="listing-sidebar mb-4">
                        <div class="box-header-product-feature mb-3">
                            <span class="title-product">فیلتر محصولات</span>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <span class="title-header">جستجو</span>
                            </div>
                            <div class="box-content">
                                <div class="ui-input-quick-search">
                                    <input type="text" name="searchInput" class="input-field-cleanable"
                                        placeholder="نام محصول یا برند مورد نظر را بنویسید…">
                                    <button class="btn-search-cleanable">
                                        <img src="/images/search.png">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-right" data-toggle="collapse" href="#collapseExample"
                                        role="button" aria-expanded="false" aria-controls="collapseExample">
                                        دسته بندی
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseExample" class="collapse show">
                                <div class="card-main mb-3">
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">همه</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">لباس مردانه</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">شلوار مردانه</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">لباس زنانه</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-right collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        برند
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample" style="">
                                <div class="card-main mb-3">
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">همه</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">آدیداس</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">پوما</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">نایک</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-right collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        فروشنده
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample" style="">
                                <div class="card-main mb-3">
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">دیجی استور</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">فروشنده رسمی برند</label>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">فروشنده برگزیده</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-right collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        رنگ
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample" style="">
                                <div class="card-main mb-3">
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">مشکی</label>
                                        <span class="filter-color" style="background-color: rgb(43,43,43)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">سفید</label>
                                        <span class="filter-color" style="background-color: rgb(255,255,255)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">آبی</label>
                                        <span class="filter-color" style="background-color: rgb(0,0,255)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">سبز</label>
                                        <span class="filter-color" style="background-color: rgb(0,128,0)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">قرمز
                                        </label>
                                        <span class="filter-color" style="background-color: rgb(255,0,0)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">بنفش</label>
                                        <span class="filter-color" style="background-color: rgb(128,0,128)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">صورتی</label>
                                        <span class="filter-color" style="background-color: rgb(255,192,203)"></span>
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="login" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me">طلایی</label>
                                        <span class="filter-color" style="background-color: rgb(201,146,18)"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-right collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        محدوده قیمت
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse show" aria-labelledby="headingFive"
                                data-parent="#accordionExample" style="">
                                <div class="card-main mb-3">
                                    <div class="box-data">
                                        <form action="">
                                            <div class="mt-5 mb-4">
                                                <div id="slider-non-linear-step"></div>
                                            </div>
                                            <div class="filter-range mt-2 mb-2">
                                                <span>قیمت: </span>
                                                <span class="example-val" id="slider-non-linear-step-value"></span> تومان
                                            </div>
                                            <div class="mt-5">
                                                <button class="btn btn-range btn-block">
                                                    اعمال محدوده قیمت
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="statusswitcher">
                                <a href="#">
                                    <label for="switch1">
                                        <input type="checkbox" id="switch1"><span class="switch">
                                            <h1 class="switch-title">فقط کالای موجود</h1>
                                        </span>
                                        <span class="toggle"></span>
                                    </label>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12 pull-left">
            <div class="page-contents">
                <article class="listing-wrapper-tab">
                    <div class="listing mb-4">
                        <div class="listing-header">
                            <div class="listing-sort-option-header">

                                <ul class="sort-options">
                                    <li class="listing-active">
                                        <a href="#" class="listing-tab-item">پرفروش‌ترین‌</a>
                                    </li>
                                    <li>
                                        <a href="#" class="listing-tab-item">مرتبط‌ترین</a>
                                    </li>
                                    <li>
                                        <a href="#" class="listing-tab-item">پربازدیدترین</a>
                                    </li>
                                    <li>
                                        <a href="#" class="listing-tab-item">جدیدترین</a>
                                    </li>
                                    <li>
                                        <a href="#" class="listing-tab-item">ارزان‌ترین</a>
                                    </li>
                                    <li>
                                        <a href="#" class="listing-tab-item">گران‌ترین</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="listing-items">
                                        <li style="display:block;">
                                            @foreach ($products as $product)
                                                <div class="col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
                                                    <div class="product-vertical">

                                                        <div class="vertical-product-thumb">
                                                            <a
                                                                href="{{ route('show_product', ['product' => $product->title]) }}">
                                                                <div class="stars-plp">
                                                                    <span class="mdi mdi-star active"></span>
                                                                    <span class="mdi mdi-star active"></span>
                                                                    <span class="mdi mdi-star active"></span>
                                                                    <span class="mdi mdi-star active"></span>
                                                                    <span class="mdi mdi-star"></span>
                                                                </div>
                                                                <img src="{{ $product->image }}">
                                                            </a>
                                                        </div>
                                                        <div class="card-vertical-product-content">
                                                            <div class="card-vertical-product-title">
                                                                <a href="#">
                                                                    {{ $product->title }}
                                                                </a>
                                                            </div>
                                                            <div class="card-vertical-product-price">
                                                                {{ number_format($product->price) }}
                                                                <span class="price-currency">تومان</span>
                                                            </div>
                                                            <div class="product-actions-secondary">
                                                                <div class="heart" title="افزودن به لیست علاقه مندی">
                                                                    <span class="mdi mdi-heart"></span>
                                                                </div>
                                                                <div class="product-introduction-cart"
                                                                    title="افزودن به سبد خرید">
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
                                        </li>
                                    </ul>
                                </div>
                               
                            </div>
                            <div class="card-footer">
                                {{ $products->links() }}
                            </div>
                        </div>

                        
                    </div>

                </article>

            </div>

        </div>

    </div>

    @include('layouts.footer')
