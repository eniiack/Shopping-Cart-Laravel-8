@section('head', 'دیجی اسمارت')

    @include('layouts.header')
    @include('layouts.topbar')

    <div class="container-main">

        <div class="col-12">
            <div class="breadcrumb-container">
                <ul class="js-breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="/" class="breadcrumb-link">خانه</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/shop" class="breadcrumb-link active-breadcrumb">فروشگاه</a>
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
                                    <button class="btn btn-block text-right" data-toggle="collapse" href="#category"
                                        role="button" aria-expanded="false" aria-controls="category">
                                        دسته بندی
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="category" class="collapse show">
                                <div class="card-main mb-3">

                                    @if (count(\Cart::allResultSearch()))
                                        @php
                                            $searchValue = \Cart::allResultSearch();
                                            $array = [];
                                        @endphp
                                        @foreach ($searchValue as $item)
                                            @php
                                                
                                                $items = $item->id;
                                                array_push($array, $items);
                                                // $array = array_merge($array, $items);
                                                // return $items;
                                            @endphp
                                        @endforeach
                                        
                                        @foreach ($allCategory as $key => $cat)
                                        @php
                                        $countProduct = 0
                                        @endphp
                                            @foreach ($array as $item)
                                                @if($item == $cat->id)
                                                @php
                                                $countProduct = 1;
                                                @endphp
                                                <div class="form-auth-row">
                                                    <label
                                                        onclick="category('product{{ $cat->id }}' , {{ $cat->id }})"
                                                        for="{{ $cat->name }}" class="ui-checkbox">
                                                        <input type="checkbox" id="{{ $cat->name }}" data-type="product{{ $cat->id }}" data-id="{{ $cat->id }}" checked>
                                                        <span class="ui-checkbox-check"></span>
                                                    </label>
                                                    <label for="{{ $cat->name }}"
                                                        class="remember-me">{{ $cat->name }}</label>
                                                </div>
                                               
                                                @endif
                                                {{-- @endforeach --}}
                                            @endforeach
                                            @if($countProduct == 0)
                                            <div class="form-auth-row">
                                                <label
                                                    onclick="category('product{{ $cat->id }}' , {{ $cat->id }})"
                                                    for="{{ $cat->name }}" class="ui-checkbox">
                                                    <input type="checkbox" id="{{ $cat->name }}" data-type="product{{ $cat->id }}" data-id="{{ $cat->id }}">
                                                    <span class="ui-checkbox-check"></span>
                                                </label>
                                                <label for="{{ $cat->name }}"
                                                    class="remember-me">{{ $cat->name }}</label>
                                            </div>
                                            @endif
                                            @php
                                            $countProduct = 0
                                            @endphp
                                        @endforeach

                                        @else
                                            @foreach ($allCategory as $cat)
                                                <div class="form-auth-row">
                                                    <label
                                                        onclick="category('product{{ $cat->id }}' , {{ $cat->id }})"
                                                        for="{{ $cat->name }}" class="ui-checkbox">
                                                        <input type="checkbox" id="{{ $cat->name }}" data-type="product{{ $cat->id }}" data-id="{{ $cat->id }}">
                                                        <span class="ui-checkbox-check"></span>
                                                    </label>
                                                    <label for="{{ $cat->name }}"
                                                        class="remember-me">{{ $cat->name }}</label>
                                                </div>
                                            @endforeach

                                        @endif




                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-header">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-right" data-toggle="collapse" href="#brand"
                                        role="button" aria-expanded="false" aria-controls="brand">
                                        برند
                                        <i class="mdi mdi-chevron-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="brand" class="collapse" aria-labelledby="headingTwo" data-parent="#brand" style="">
                                <div class="card-main mb-3">
                                    @foreach ($attributeValues as $item)
                                        <div class="form-auth-row">
                                            <label onclick="category('brand{{ $item->id }}' , {{ $item->id }})"
                                                for="{{ $item->value }}" class="ui-checkbox">
                                                <input type="checkbox" id="{{ $item->value }}">
                                                <span class="ui-checkbox-check"></span>
                                            </label>
                                            <label for="{{ $item->value }}"
                                                class="remember-me">{{ $item->value }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-9 col-md-8 col-xs-12 pull-left">
            <div class="page-contents">
                <article class="listing-wrapper-tab">
                    <div class="listing mb-4" id="cardShopping">
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
                        <div class="card " id="item">
                            <div class="load" id="loader"></div>
                            <div class="card-content " id="items">

                                <div class="card-body ">
                                    <ul class="listing-items ">

                                        @if (count(\Cart::allResultSearch()))
                                            @php
                                                $searchValue = \Cart::allResultSearch();
                                                $array = [];
                                            @endphp
                                            @foreach ($searchValue as $item)
                                                @php
                                                    $items = $item->products->pluck('id')->toArray();
                                                    // array_push($array, $items);
                                                    $array = array_merge($array, $items);
                                                    // return $items;
                                                @endphp
                                            @endforeach
                                            @php
                                                $products = Product::whereIn('id', $array)->paginate(10);
                                            @endphp
                                            @foreach ($products as $product)
                                                <li class="d-block col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
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
                                                </li>

                                            @endforeach
                                            {{ $products }}
                                        @else
                                            @foreach ($products as $product)
                                                <li class="d-block col-lg-3 col-md-4 col-xs-12 pull-right mb-3">
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
                                                </li>
                                            @endforeach
                                        @endif


                                    </ul>
                                </div>

                            </div>
                            <div class="card-footer" id="Links">
                                @if(count($products) >= 10)
                                {{ $products->links() }}
                                @endif
                            </div>

                        </div>


                    </div>

                </article>

            </div>

        </div>

    </div>

    @include('layouts.footer')
    <script>
         var array = new Array();
        var countVariable = null;
        var json;
        $('.form-auth-row').each(function(){
            // alert($(this).find('label').find('input'));
            if ($(this).find('label > input ').is(':checked')) {
                        var type =  $(this).find('label > input ').attr('data-type');
                        var id =  $(this).find('label > input ').attr('data-id');
                        array.push(type, id);

                    } else {
                        // alert("Check box is Unchecked");
                    }
        });
        function category(type, id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    // 'Content-Type': 'application/json'

                }
            });
                // alert(id);

            if (array.includes(type)) {
                // alert(type);
                // alert(id);

                // if (array.includes(id)) {
                    // alert("yesyes");
                    countVariable = array.indexOf(type);
                    // console.log(array.indexOf(id));
                    // console.log(array.indexOf(type));
                    array.splice(countVariable + 1, 1);
                    array.splice(countVariable, 1);

                    countVariable = null;
                // }
            } else {
                // alert("no");

                array.push(type, id);

            }
        // alert(array);

            // array.includes(type, id) ? countVariable = array.indexOf(id) : array.push(type, id);
            // countVariable != null ? array.splice(countVariable, 1) && array.splice(countVariable - 1, 1) && (countVariable =
            //     null) : ``;
            // json = array;
            // alert(JSON.parse(JSON.stringify(json)));
            // console.log(JSON.stringify(array));
            $.ajax({
                type: 'POST',
                url: '/search/products',
                data: {
                    category: array
                },
                success: function(response) {
                    console.log(response);
                    // $('#Links').load(document.URL + ' #Links');


                    $('#loader').css('display', 'block');

                    function Load() {
                        setTimeout(function() {
                            $('#item').load(document.URL + ' #item');
                        }, 500);
                    }

                    function Remove() {
                        setTimeout(function() {
                            $('#loader').css('display', 'none');
                        }, 1000);
                    }
                    Load();
                    Remove();
                    if (response) {

                    }
                },

            });
        }

    </script>
