@section('head', 'نمایش محصول')

    @include('layouts.header')
    @include('layouts.topbar')

    <!--product-comment---------------------------->
    <div class="container-main">
        <div class="col-12">
            <!--single-product----------------------------->
            <div class="container-main">
                <div class="col-12">
                    <div class="breadcrumb-container">
                        <ul class="js-breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/" class="breadcrumb-link">خانه</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="breadcrumb-link">کالای دیجیتال</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('show_product', ['product' => $product->title]) }}" class="breadcrumb-link active-breadcrumb">{{$product->title}}</a>
                            </li>
                        </ul>
                    </div>
                    <article class="product">
                        <div class="col-lg-4 col-xs-12 pb-5 pull-right">
                            <!-- Product Options-->
                            <ul class="gallery-options">
                                <li>
                                    <button class="add-favorites"><i class="fa fa-heart"></i></button>
                                    <span class="tooltip-option">افزودن به علاقمندی</span>
                                </li>
                            </ul>
                            <div class="product-timeout position-relative pt-5 mb-3">
                                <div class="promotion-badge">
                                    فروش ویژه
                                </div>
                                <div class="countdown countdown-style-3 h4" data-date-time="10/10/2020 24:00"
                                    data-labels='{"label-second": "", "label-minute": "", "label-hour": ""}'>
                                </div>
                            </div>
                            <div class="product-gallery">
                                <span class="badge">پر فروش</span>
                                <div class="product-gallery-carousel owl-carousel">
                                    <div class="item">
                                        <a class="gallery-item" href="{{ $product->image }}" data-fancybox="gallery1"
                                            data-hash="one">
                                            <img src="{{ $product->image }}" alt="Product">
                                        </a>
                                    </div>
                                    @foreach($product->galleries as $key => $img)
                                    <div class="item">
                                        <a class="gallery-item" href="{{$img->image}}"
                                            data-fancybox="gallery1" data-hash="{{$key}}">
                                            <img src="{{$img->image}}" alt="Product">
                                        </a>
                                    </div>
                                   @endforeach
                                </div>
                                <ul class="product-thumbnails">
                                    <li class="active">
                                        <a href="#one">
                                            <img src="{{ $product->image }}" alt="Product">
                                        </a>
                                    </li>
                                    @foreach($product->galleries as $key => $img)
                                    <li>
                                        <a href="#{{$key}}">
                                            <img src="{{$img->image}}" alt="Product">
                                        </a>
                                    </li>
                                   @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-8 col-xs-12 pull-right">
                            <section class="product-info">
                                <div class="product-headline">
                                    <h1 class="product-title">
                                        {{ $product->title }}
                                        {{-- <span class="product-title-en">Samsung Galaxy A50 SM-A505F/DS Dual SIM 128GB Mobile
                                            Phone</span> --}}
                                    </h1>
                                </div>
                                <div class="product-attributes">
                                    <div class="col-lg-6 col-xs-12 pull-right">
                                        <div class="product-config">
                                            <div class="product-config-wrapper">
                                                <div class="product-directory">
                                                    <ul>
                                                        <li>
                                                            <span>برند</span>
                                                            :
                                                            @foreach ($product->categories()->get() as $item)
                                                                <a href="#"
                                                                    class="product-brand-title wrap_tag">{{ $item->name }}</a>
                                                            @endforeach
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="product-variants">
                                                    <span>انتخاب رنگ: </span>
                                                    <ul class="js-product-variants">

                                                        @foreach ($product->attributes as $key => $item)
                                                            @if ($item->name == 'رنگ')
                                                                <li class="ui-variant">
                                                                    <label for="#" class="ui-variant-color">
                                                                        <span class="ui-variant-shape"
                                                                            style="background-color: var(--{{ $item->pivot->value->value }})"></span>
                                                                        <input type="radio" value="4" name="color"
                                                                            id="variant" class="js-variant-selector"
                                                                            checked="">
                                                                        <span
                                                                            class="ui-variant-check">{{ $item->pivot->value->value }}</span>
                                                                    </label>
                                                                </li>
                                                            @endif
                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="product-params">
                                                    <ul>ویژگی‌های محصول
                                                        @foreach ($product->attributes as $key => $item)
                                                            @if ($item->name != 'رنگ')
                                                                <li>
                                                                    <span>{{ $item->name }}: </span>
                                                                    <span>{{ $item->pivot->value->value }}</span>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-xs-12 pull-left">
                                        <div class="product-summary">
                                            <div class="product-seller-info">
                                                <div class="seller-info-changable">
                                                    <div class="product-seller-row vendor">
                                                        <span class="title"> فروشنده:</span>
                                                        <a href="#" class="product-name">دیجی اسمارت</a>
                                                    </div>
                                                    <div class="product-seller-row guarantee">
                                                        <span class="title"> گارانتی:</span>
                                                        <a href="#" class="product-name">۱۸ ماهه دیجی اسمارت</a>
                                                    </div>
                                                    <div class="product-seller-row guarantee">
                                                        <span class="title"> تعداد:</span>
                                                        <a href="#" class="product-name">{{ $product->inventory }}</a>
                                                    </div>
                                                    <div class="product-seller-row price">
                                                        <div class="product-seller-price-info price-value mb-3">
                                                            <span class="title"> قیمت:</span>
                                                            <span class="amount text-danger">
                                                                {{ number_format($product->price) }}
                                                                <span>تومان</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="parent-btn">
                                                        <button class="dk-btn dk-btn-info at-c as-c">
                                                            افزودن به سبد خرید
                                                            <i class="mdi mdi-cart"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </article>
                </div>
                <!--    product-slider----------------------------------->
                <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
                    <div class="section-slider-product mb-4">
                        <div class="widget widget-product card">
                            <header class="card-header">
                                <span class="title-one">محصولات مرتبط</span>
                            </header>
                            <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                        @foreach ($products as $key => $item)
                                            @foreach ($item->products as $keys => $value)
                                                @if ($value->id != $product->id)
                                                    @if (!$keys >= 5)
                                                        <div class="owl-item active"
                                                            style="width: 309.083px; margin-left: 10px;">
                                                            <div class="item">
                                                                <a href="#">
                                                                    <img src="{{ $value->image }}" class="img-fluid"
                                                                        alt="">
                                                                </a>
                                                                <h2 class="post-title">
                                                                    <a href="#">
                                                                        {{ $value->title }}
                                                                    </a>
                                                                </h2>
                                                                <div class="price">
                                                                    <ins>
                                                                        <span>{{ $value->price }}<span>تومان</span></span>
                                                                        <div class="stars-plp">
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star"></span>
                                                                        </div>
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="owl-item " style="width: 309.083px; margin-left: 10px;">
                                                            <div class="item">
                                                                <a href="#">
                                                                    <img src="{{ $value->image }}" class="img-fluid"
                                                                        alt="">
                                                                </a>
                                                                <h2 class="post-title">
                                                                    <a href="#">
                                                                        {{ $value->title }}
                                                                    </a>
                                                                </h2>
                                                                <div class="price">
                                                                    <ins>
                                                                        <span>{{ $value->price }}<span>تومان</span></span>
                                                                        <div class="stars-plp">
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star active"></span>
                                                                            <span class="mdi mdi-star"></span>
                                                                        </div>
                                                                    </ins>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i
                                            class="fa fa-angle-right"></i></button><button type="button" role="presentation"
                                        class="owl-next"><i class="fa fa-angle-left"></i></button></div>
                                <div class="owl-dots disabled">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--    product-slider------------------------->
                <div class="col-12">
                    <div class="tabs mt-4 pt-3 mb-5">
                        <div class="tabs-product">
                            <div class="tab-wrapper">
                                <ul class="box-tabs">
                                    {{-- <li class="box-tabs-tab tabs-active">
                                        <a class="box-tab-item">
                                            <i class="mdi mdi-glasses"></i>
                                            نقد و بررسی</a>
                                    </li> --}}
                                    {{-- <li class="box-tabs-tab">
                                        <a class="box-tab-item">
                                            <i class="mdi mdi-format-list-checks"></i>
                                            مشخصات</a>
                                    </li> --}}
                                    <li class="box-tabs-tab">
                                        <a class="box-tab-item">
                                            <i class="mdi mdi-comment-text-multiple-outline"></i>
                                            نظرات کاربران</a>
                                    </li>
                                    <li class="box-tabs-tab">
                                        <a class="box-tab-item">
                                            <i class="mdi mdi-comment-question-outline"></i>
                                            پرسش و پاسخ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs-content">
                                <div class="content-expert">
                                    {{-- <section class="tab-content-wrapper" style="display:block;">
                                        <article>
                                            <h2 class="params-headline">نقد و بررسی
                                                <span>Samsung Galaxy A50s SM-A507FN/DS Dual SIM 128GB Mobile Phone</span>
                                            </h2>
                                            <section class="content-expert-summary">
                                                <div class="mask pm-3">
                                                    <div class="mask-text">
                                                        <p>گوشی موبایل Galaxy A50s با رم 6 گیگابایتی روانه بازار شده است.
                                                            این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد.
                                                            این محصول نسخه ارتقاع یافته A50 است که در دوربین و طراحی بدنه
                                                            تغییراتی پیدا کرده است. سامسونگ تلاش کرده است حاشیه را در این
                                                            تولید جدید خود تا حد امکان کم کند. این گوشی قاب پشتی از جنس
                                                            پلاستیک دارد و قاب جلویی آن را شیشه پوشانده که البته جلوه‌ی
                                                            زیبایی به گوشی داده است. این محصول سامسونگ با جدیدترین نسخه از
                                                            سیستم‌عامل اندروید (Pie) روانه بازار شده است تا از هر نظر گوشی
                                                            مدرن به‌حساب بیاید. صفحه‌نمایش استفاده‌شده در این گوشی
                                                            6.4&nbsp;اینچ با رزولوشن FullHD+ &nbsp;است که با استفاده از
                                                            فناوری Super AMOLED و پنل OLED تصاویر شفاف و بی‌نظیری را به
                                                            نمایش می‌گذارد. این صفحه‌نمایش در هر اینچ 403 پیکسل را نشان
                                                            می‌دهد که این یعنی جزئیات و وضوح تصویر عالی است. تراشه‌ی این
                                                            محصول، Exynos 9611&nbsp; از تراشه‌های 10 نانومتری سامسونگ است که
                                                            به همراه&nbsp; 6 گیگابایت رم سخت‌افزار این محصول را تشکیل داده
                                                            است. این تراشه یکی از قوی‌ترین تراشه‌های موجود در حال حاضر است و
                                                            برای انجام بازی‌های سنگین و بازکردن چندین برنامه به صورت هم‌زمان
                                                            و تماشای ویدئو کاملا مناسب است و کم نمی‌آورد. تراشه‌ی گرافیکی
                                                            Mali-G72 MP3 هم برای پخش ویدئو و بازی مناسب است. این گوشی در دو
                                                            ظرفیت 64 و 128 گیگابایتی عرضه شده است و با استفاده از یک کارت
                                                            حافظه‌ی جانبی قادر خواهید بود حافظه داخلی را تا یک ترابایت دیگر
                                                            هم افزایش دهید. دوربین اصلی &nbsp;A50s سنسور 48مگاپیکسلی دارد و
                                                            از نوع عریض (Wide) است. دو سنسور 8 &nbsp;و 5 مگاپیکسلی دیگر هم
                                                            در کنار این دوربین اصلی مجموعه دوربین‌های قاب پشتی A50s را تشکیل
                                                            داده‌اند. دوربین سلفی 32مگاپیکسلی هم در قاب جلویی این گوشی به
                                                            کار گرفته شده است. باتری 4000 میلی‌آمپرساعتی، پشتیبانی از فناوری
                                                            شارژ سریع 15 واتی، درگاه USB Type-C و حسگر اثرانگشت در زیر قاب
                                                            اصلی هم از دیگر ویژگی‌های این تازه‌وارد است. سامسونگ در ساخت این
                                                            گوشی از جدیدترین فناوری‌های ساخت گوشی استفاده کرده است تا
                                                            میان‌رده‌ای با قابلیت‌های نزدیک به یک بالارده خوش‌ساخت را روانه
                                                            بازار کند.</p>
                                                    </div>
                                                    <a class="mask-handler">
                                                        <span class="show-more">+ ادامه مطلب</span>
                                                        <span class="show-less">- بستن</span>
                                                    </a>
                                                    <div class="shadow-box"></div>
                                                </div>
                                            </section>
                                            <div class="content-short-review">
                                                <h2 class="params-headline">
                                                    نقد و بررسی تخصصی
                                                </h2>
                                                <p>گوشی A50s جدیدترین گوشی میان رده شرکت سامسونگ است که در ماه آگوست سال
                                                    2019 معرفی شدو این گوشی در واقع جانشینی برای گوشی A50 است که تنها چند
                                                    ماه از معرفی آن گذشته است؛ شاید این چند ماه زمان کمی به نظر برسد اما در
                                                    دنیای گوشی های هوشمند که هر روز از فناوری های جدیدتری بهره می برند، این
                                                    زمان زیادی به حساب می آید.</p>
                                            </div>
                                            <div class="content-expert-articles">
                                                <section class="content-expert-article">
                                                    <button class="content-expert-button">
                                                        <span class="show-more"><i class="fa fa-plus"></i></span>
                                                        <span class="show-less"><i class="fa fa-minus"></i></span>
                                                    </button>
                                                    <h3 class="content-expert-title">معرفی</h3>
                                                    <div class="content-expert-text">
                                                        <p style="text-align:right">گوشی‎های سری A شرکت سامسونگ از گوشی‎های
                                                            میان‎رده این شرکت هستند. اولین گوشی تولید شده این سری گوشی‎های
                                                            موبایل سامسونگ، Galaxy Alpha &nbsp;بود که در سال 2014 روانه
                                                            بازار شد. پس از آن اولین نسل گوشی‎های موبایل A3 و A5 در دسامبر
                                                            سال 2014 معرفی شدند. گوشی‌های موبایل سری A سامسونگ، ویژگی‌های
                                                            خاص و تجملاتی گوشی‌های سری S را ندارند. این سری از گوشی‌های
                                                            سامسونگ را می‌توان رقبای اصلی برای محصولات مقرون‌به‌صرفه
                                                            شرکت‌هایی مانند هوآوی و شیائومی دانست. شرکت سامسونگ با ساخت گوشی
                                                            موبایل مدل A50s بار دیگر سعی کرده است تا سهم بازار خود را در
                                                            گوشی‎های میان رده حفظ کند. گوشی A50s شباهت زیادی به گوشی A50
                                                            دارد اما با بهبودهایی هم همراه شده است؛ شرکت سامسونگ در
                                                            &nbsp;این محصول خود، دوربین های اصلی قاب پشتی و سلفی خود را
                                                            تغییر داده و از لنزها با رزولوشن بالاتری استفاده کرده است.
                                                            پردازنده Exynos هم در این گوشی کمی جدیدتر شده و در حالی که طراحی
                                                            آن تغییر زیادی نداشته سامسونگ سعی کرده است تا &nbsp;رنگ و لعاب
                                                            بیشتری به آن بدهد. به طور کلی A50s با گذشت 6 ماه از معرفی A50،
                                                            با آپدیت های کوچکی هم همراه شده است.</p>
                                                        <div class="content-expert-img">
                                                            <img src="/images/single/tabs-product/1.jpg">
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="content-expert-article">
                                                    <button class="content-expert-button">
                                                        <span class="show-more"><i class="fa fa-plus"></i></span>
                                                        <span class="show-less"><i class="fa fa-minus"></i></span>
                                                    </button>
                                                    <h3 class="content-expert-title">طراحی</h3>
                                                    <div class="content-expert-text">
                                                        <p style="text-align:right">گلکسی A50s از بدنه مشابه با گوشی
                                                            &nbsp;A50 بهره می برد. در قاب جلو، یک صفحه نمایش تمام صفحه با یک
                                                            بریدگی U شکل برای دوربین سلفی قرار گرفته است. برای پایین صفحه
                                                            نمایش کمی حاشیه در نظر گرفته شده است که البته این طراحی نسبت به
                                                            6 ماه گذشته، قدیمی نشده است و همچنان در بسیاری از گوشی های میان
                                                            رده دیگر هم دیده می شود. در قسمت پایین گوشی وروددی هدفون 3.5
                                                            میلی‎متری و درگاه پورت USB-C قرار گرفته است. قاب پشتی A50s جایی
                                                            است که سامسونگ تصمیم گرفته تا آن را تغییر دهد؛ بافت زیبای پشت
                                                            گوشی با بازتابی رنگین‌کمان شکل همچنان حفظ شده استاما حالا شکل
                                                            های هندسی هم روی آن ها قرار گرفته است که هر کدام نور را با شدت
                                                            مختلفی منعکس می کنند. همانطور که از قیمت این گوشی می توان انتظار
                                                            داشت، Galaxy A50s هم در برابر آب و گرد و خاک مقاوم نیست. اگر این
                                                            ویژگی برای شما مهم است می توانید با صرف هزینه بیشتر&nbsp; گوشی
                                                            OnePlus 7 را مد نظر خود قرار دهید.</p>
                                                        <div class="content-expert-img">
                                                            <img src="/images/single/tabs-product/2.jpg">
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="content-expert-article">
                                                    <button class="content-expert-button">
                                                        <span class="show-more"><i class="fa fa-plus"></i></span>
                                                        <span class="show-less"><i class="fa fa-minus"></i></span>
                                                    </button>
                                                    <h3 class="content-expert-title">صفحه نمایش</h3>
                                                    <div class="content-expert-text">
                                                        <p style="text-align:right">اولین چیزی که در گوشی A50s توجه شما را
                                                            به خود جلب می کند، نمایشگر Super AMOLED روشن و خیره کننده آن
                                                            است. صفحه نمایش 6.4 اینچی سوپر آمولد در گلکسی A50s بسیار زیبا و
                                                            بلند به نظر می‎رسد. این پنل در کمتر گوشی در این گستره قیمتی دیده
                                                            می‎شود. فاصله صفحه نمایش تا لبه‎های گوشی بسیار کم است به طوری که
                                                            نسبت صفحه نمایش به بدنه برای گلکسی A50 چیزی در حدود 85.1 درصد
                                                            است. صفحه نمایش A50s هم مانند A50 دارای تراکم 403 پیکسل در هر
                                                            اینچ است تا از کیفیت بالایی برخوردار باشد. به صورت پیش فرض، برای
                                                            گوشی حالت Natural انتخاب شده است که از دقت رنگ خوبی برخوردار است
                                                            و برای فضای رنگی sRGB مورد هدف قرار داده شده است. با این حال شما
                                                            می تواند پروفایل Vivid&nbsp; را انتخاب کنید تا رنگ های اشباع شده
                                                            را شاهد باشید و یا دمای رنگ ها را به دلخواه خود تغییر دهید.</p>
                                                        <div class="content-expert-img">
                                                            <img src="/images/single/tabs-product/3.jpg">
                                                        </div>
                                                    </div>
                                                </section>
                                                <section class="content-expert-article">
                                                    <button class="content-expert-button">
                                                        <span class="show-more"><i class="fa fa-plus"></i></span>
                                                        <span class="show-less"><i class="fa fa-minus"></i></span>
                                                    </button>
                                                    <h3 class="content-expert-title">دوربین</h3>
                                                    <div class="content-expert-text">
                                                        <p style="text-align:right">در قاب پشتی این گوشی سه لنز دوربین قرار
                                                            گرفته است &nbsp;که شامل یک لنز اصلی 48 مگاپیکسلی از نوع عریض، یک
                                                            لنز فوق عریض 8 مگاپیکسلی و سنسور عمق 5 مگاپیکسلی است. در قاب
                                                            جلوی گوشی هم یک دوربین 32 مگاپیکسلی قرار گرفته است. هر دو لنز
                                                            اصلی قابلیت ضبط تصاویر با کیفیت 4K را دارند اما لتز فوق عریض
                                                            تنها امکان ضبط ویدیوها با کیفیت 1080p را دارد. دوربین Galaxy
                                                            A50s در نور کافی عملکرد بسیار مطلوبی دارند و رنگ های طبیعی با
                                                            جزئیات فراوان را برای کاربر به همراه دارند اما در نور کم عملکرد
                                                            آن پایین‎تر از حد انتظار است. سامسونگ تمرکز در طراحی دوربین این
                                                            مدل بر روی کاهش نویز تمرکز داشته است که در بعضی موارد با کاهش
                                                            جزئیات عکس ها همراه می شود؛ البته این تغییرات در حالتی مشخص می
                                                            شود که عکس ها را با دقت خیلی زیادی مشاهده کنید. از جزئیات که
                                                            بگذریم، عکس ها از رنگ، کنتراست و گستره داینامیک (Dynamic
                                                            Range)خوبی برخوردار است. استفاده از سنسور عمق برای عکاسی‎های
                                                            پرتره کاربرد دارد که باعث می‎شود تصویر پشت سوژه محو&nbsp;
                                                            (Bukeh)به نظر برسد؛ چیزی که سامسونگ آن را Live Focus می‎نامد.
                                                            عکس های ثبت شده در نور کم هم همچنان از کیفیت مطلوبی برخوردارند و
                                                            برای به اشتراک گذاشتن در فضای مجازی کاملا مناسب هستند.</p>
                                                        <div class="content-expert-img">
                                                            <img src="/images/single/tabs-product/4.jpg">
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </article>
                                    </section>
                                    <section class="tab-content-wrapper">
                                        <article>
                                            <h2 class="params-headline">مشخصات فنی
                                                <span>Samsung Galaxy A50s SM-A507FN/DS Dual SIM 128GB Mobile Phone</span>
                                            </h2>
                                            <section>
                                                <h3 class="params-title">مشخصات کلی</h3>
                                                <ul class="params-list">
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">ابعاد</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                7.7 × 74.7 × 158.5 میلی‌متر
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">توضیحات سیم کارت</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                سایز نانو (8.8 × 12.3 میلی‌متر)
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">وزن</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                166 گرم
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">ساختار بدنه</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                قاب جلو شیشه
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h3 class="params-title">پردازنده</h3>
                                                <ul class="params-list">
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">تراشه</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                Exynos 9610 (10nm) CPU
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">نوع پردازنده</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                64 بیت
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">فرکانس پردازنده‌ی مرکزی</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                2.3 و 1.7 گیگاهرتز
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h3 class="params-title">حافظه</h3>
                                                <ul class="params-list">
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">حافظه داخلی</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                128 گیگابایت
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">مقدار RAM</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                4 گیگابایت
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">پشتیبانی از کارت حافظه جانبی</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                microSD
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">حداکثر ظرفیت کارت حافظه</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">
                                                                1 ترابایت
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                            <section>
                                                <h3 class="params-title">صفحه نمایش</h3>
                                                <ul class="params-list">
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">صفحه نمایش رنگی</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block"> بله </span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">صفحه نمایش لمسی</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">بله</span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">فناوری</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">Super AMOLED</span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">بازه‌ی اندازه صفحه نمایش</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">6.0 اینچ و بزرگتر</span>
                                                        </div>
                                                    </li>
                                                    <li class="params-list-item">
                                                        <div class="params-list-key">
                                                            <span class="block">اندازه</span>
                                                        </div>
                                                        <div class="params-list-value">
                                                            <span class="block">6.4 اینچ</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </section>
                                        </article>
                                    </section> --}}
                                    <section class="tab-content-wrapper" style="display:block;">
                                        @include('comments' , ['comments' => $product->comments()->where('parent_id',
                                        0)->get()])
                                    </section>
                                    <section class="tab-content-wrapper">
                                        @guest
                                            <div class="col-lg-6 col-md-6 col-xs-12 pull-right">
                                                <div class="alert alert-warning">برای ثبت نظر لطفا وارد سایت شوید.</div>
                                            </div>
                                        @endguest
                                        @auth
                                            <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
                                                <div class="comments-add-col-form">
                                                    <div class="form-comment">
                                                        <div class="col-md-12 col-sm-12">
                                                            <div class="form-ui">
                                                                <form action="{{ route('send_comment') }}" method="POST">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <input type="hidden" name="commentable_id"
                                                                            value="{{ $product->id }}">
                                                                        <input type="hidden" name="commentable_type"
                                                                            value="{{ get_class($product) }}">
                                                                        <input type="hidden" name="parent_id" value="0">

                                                                        <div class="col-12 mt-5">
                                                                            <div class="form-row-title mb-2">متن نظر شما
                                                                                (اجباری)</div>
                                                                            <div class="form-row">
                                                                                <textarea name="comment"
                                                                                    class="input-ui pr-2 pt-2" rows="5"
                                                                                    placeholder="متن خود را بنویسید"
                                                                                    style="height:120px;"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 mt-5">
                                                                            @recaptcha
                                                                        </div>
                                                                        <div class="col-12 mt-2 mb-2 px-0">
                                                                            <div class="product-offer-question">
                                                                                <div class="product-offer-question-option">
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        @if ($errors->any())
                                                                            <div class="alert alert-danger">
                                                                                <ul>
                                                                                    @foreach ($errors->all() as $error)
                                                                                        <li>{{ $error }}</li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        @endif
                                                                        <br>
                                                                        <br>
                                                                        <br>
                                                                        <div class="col-12 px-0">
                                                                           
                                                                            <button class="btn comment-submit-button">
                                                                                ثبت نظر
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endauth
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--single-product----------------------------->
        </div>
    </div>
    <!--product-comment---------------------------->

    <!--footer------------------------------------->
    @include('layouts.footer')
    <!--footer------------------------------------->
