 <!--header------------------------------------->
 <header>
     <aside class="adplacement-top-header">
         <a href="index.html" class="adplacement-item" title="شگفت سوپرمارکتی"></a>
     </aside>
     <div class="container-main">
         <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
             <div class="header-right">
                 <div class="logo">
                     <a href="/"><img src="/images/logo.png"></a>
                 </div>
                 <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
                     <div class="search-header">
                         <form action="#">
                             <input type="text" name="search" class="search-input"
                                 placeholder="نام کالا، برند و یا دسته مورد نظر خود را جستجو کنید…">
                             <button type="submit" class="button-search">
                                 <img src="/images/search.png">
                             </button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
             <div class="header-left">
                 <ul class="nav-lr">

                     @if (auth()->check())
                         <li class="nav-item-account">
                             <a href="#">
                                 حساب کاربری
                                 <img src="/images/user.png" alt="user">
                                 <div class="dropdown-menu">
                                     <ul>
                                         <li class="dropdown-menu-item">
                                             <a href="#" class="dropdown-item">
                                                 <i class="mdi mdi-account-card-details-outline"></i>
                                                 حساب کاربری من
                                             </a>
                                         </li>
                                         <li class="dropdown-menu-item">
                                             <a href="#" class="dropdown-item">
                                                 <i class="mdi mdi-comment-text-outline"></i>
                                                 پیام ها
                                                 <span class="count">1</span>
                                             </a>
                                         </li>
                                         <li class="dropdown-menu-item">
                                             <form action="{{ route('logout') }}" method="post">
                                                 @csrf
                                                 <!-- <a href="/" class="dropdown-item">
                                                 <i class="mdi mdi-logout-variant"></i> -->
                                                 <!-- خروج از حساب -->
                                                 <button class="btn btn-danger dropdown-item">خروج از حساب</button>
                                                 <!-- </a> -->
                                             </form>
                                         </li>
                                     </ul>
                                 </div>
                             </a>
                         </li>
                     @else
                         <li class="nav-item-account d-flex">
                             <a href="/register" class="ml-2">
                                 ثبت نام
                             </a> |
                             <a href="/login " class="mr-2">
                                 ورود
                             </a>
                             </a>
                     @endif
                     </li>
                 </ul>
             </div>
         </div>
     </div>
     <!--        menu------------------------------->
     <nav class="main-menu">
         <div class="container-main">
             <div>
                 <ul class="list-menu">
                     <li class="item-list-menu megamenu">
                         <a href="/shop" class="list-category"> فروشگاه </a>
                     </li>
                     <li class="item-list-menu megamenu">
                         <a href="#" class="list-category">محصولات<i class="fa fa-angle-down"></i></a>
                         <ul class="sub-menu">
                             @foreach (\App\Models\Category::all() as $item)
                                 <li class="list-item-children">
                                     <a href="#" class="list-item-children-category">
                                         <img src="{{ $item->image }}">
                                         {{ $item->name }}
                                     </a>
                                     <ul class="megamenu-level-3" >
                                         <a href="#" class="list-category-megamenu"> همه دسته بندی
                                             های {{ $item->name }}</a>
                                             <div class="level-three-menu">
                                         @foreach ($item->products as $value)

                                                 <li class="megamenu-list-item">
                                                     <a href="{{ route('show_product', ['product' => $value->title]) }}" style="white-space: nowrap;" class="megamenu-category">{{ $value->title }} </a>
                                                 </li>
                                         @endforeach

                                             </div>

                                     </ul>
                                 </li>
                             @endforeach

                         </ul>
                     </li>
                     <li class="item-list-menu megamenu">
                         <a href="#" class="list-category">ثبت فروشگاه</a>
                     </li>
                     <li class="item-list-menu megamenu">
                         <a href="#" class="list-category">مقالات</a>
                     </li>
                     <li class="item-list-menu megamenu">
                         <a href="#" class="list-category">درباره ما</a>
                     </li>
                     <li class="item-list-menu megamenu">
                         <a href="#" class="list-category">تماس با ما</a>
                     </li>
                     <li class="nav-item-account nav-item-cart lazy">
                         <a href="#">
                             <span class="mdi mdi-cart"></span>
                             سبد خرید
                             <div id="CartCount"><span id="CountsCart" class="count">{{ count(\Cart::all()) }}</span>
                             </div>
                         </a>
                         <div class="dropdown-menu-cart lazy">
                             @if (count(\Cart::all()))
                                 <div class="dropdown-header">
                                     <a href="/cart" class="view-cart">مشاهده سبد خرید</a>
                                     <span class="fa fa-shopping-basket"></span>
                                     سبد خرید
                                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                 </div>
                                 <div id="cart">
                                     <ul class="dropdown-list">

                                         @foreach (\Cart::all() as $cart)
                                             @if (isset($cart['product']))
                                                 @php
                                                     $product = $cart['product'];
                                                 @endphp
                                                 <li class="dropdown-item">
                                                     <div class="title-cart">
                                                         <div>
                                                             <a href="/cart">
                                                                 <img src="{{ $product->image }}">
                                                                 {{ $product->title }}
                                                                 <div class="price">
                                                                     {{ number_format($product->price) }}
                                                                     <span>تومان</span>
                                                                 </div>
                                                             </a>
                                                         </div>
                                                         <button class="btn-delete"
                                                             onclick="deleteProduct(`{{ $cart['id'] }}`)">
                                                             <span class="fa fa-trash"></span>
                                                         </button>
                                                     </div>
                                                 </li>
                                             @endif
                                         @endforeach


                                     </ul>
                                     <div class="footer-dropdown">
                                         <div class="amount-total-buy">
                                             <div class="price">
                                                 <span class="total">مبلغ کل خرید :</span>
                                                 @php
                                                     $totaalPrice = Cart::all()->sum(function ($cart) {
                                                         return $cart['price'] * $cart['quantity'];
                                                     });
                                                 @endphp
                                                 <span class="toman">{{ number_format($totaalPrice) }}
                                                     <span>تومان</span>
                                                 </span>
                                             </div>
                                         </div>
                                         <a href="#" class="checkout">تسویه حساب</a>
                                     </div>
                                 </div>
                             @else
                                 <ul class="dropdown-list">
                                     <li class="dropdown-item">
                                         <div class="title-cart text-center">
                                             <h5 class="text-center">سبد خرید شما خالی است</h5>
                                         </div>
                                     </li>
                                 </ul>
                             @endif
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="nav-btn nav-slider">
             <span class="linee1"></span>
             <span class="linee2"></span>
             <span class="linee3"></span>
         </div>
     </nav>
     <!--        menu------------------------------->

     <!--    menu-responsiver----------------------->
     <nav class="sidebar">
         <div class="nav-header">
             <!--              <img class="pic-header" src="images/header-pic.jpg" alt="">-->
             <div class="header-cover"></div>
             <div class="logo-wrap">
                 <a class="logo-icon" href="/"><img alt="logo-icon" src="/images/logo.png" width="40"></a>
             </div>
         </div>
         <ul class="nav-categories ul-base">
             <li><a href="/shop">فروشگاه</a></li>
             <li><a href="#" class="collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                     aria-expanded="false" aria-controls="collapseOne"><i class="mdi mdi-chevron-down"></i>محصولات</a>
                 <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample"
                     style="">
                     <ul>
                         <li class="has-sub"><a href="#" class="category-level-2">فرش و تابلو فرش</a>
                             <ul>
                                 <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                                 <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                                 <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                                 <li><a href="#" class="category-level-3">فرش و تابلو فرش</a></li>
                             </ul>
                         </li>
                         <li class="has-sub"><a href="#" class="category-level-2">طلا و جواهر</a>
                             <ul>
                                 <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                                 <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                                 <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                                 <li><a href="#" class="category-level-3">طلا و جواهر</a></li>
                             </ul>
                         </li>
                         <li class="has-sub"><a href="#" class="category-level-2">کالای دیجیتال</a>
                             <ul>
                                 <li><a href="#" class="category-level-3">کالای دیجیتال</a></li>
                                 <li><a href="#" class="category-level-3">کالای دیجیتال</a></li>
                                 <li><a href="#" class="category-level-3">کالای دیجیتال</a></li>
                             </ul>
                         </li>
                         <li class="has-sub"><a href="#" class="category-level-2">ظروف</a>
                             <ul>
                                 <li><a href="#" class="category-level-3">ظروف</a></li>
                                 <li><a href="#" class="category-level-3">ظروف</a></li>
                                 <li><a href="#" class="category-level-3">ظروف</a></li>
                                 <li><a href="#" class="category-level-3">ظروف</a></li>
                                 <li><a href="#" class="category-level-3">ظروف</a></li>
                             </ul>
                         </li>
                         <li class="has-sub"><a href="#" class="category-level-2">پوشاک</a>
                             <ul>
                                 <li><a href="#" class="category-level-3">پوشاک</a></li>
                                 <li><a href="#" class="category-level-3">پوشاک</a></li>
                                 <li><a href="#" class="category-level-3">پوشاک</a></li>
                                 <li><a href="#" class="category-level-3">پوشاک</a></li>
                             </ul>
                         </li>
                         <li class="has-sub"><a href="#" class="category-level-2">مبلمان</a>
                             <ul>
                                 <li><a href="#" class="category-level-3">مبلمان</a></li>
                                 <li><a href="#" class="category-level-3">مبلمان</a></li>
                                 <li><a href="#" class="category-level-3">مبلمان</a></li>
                                 <li><a href="#" class="category-level-3">مبلمان</a></li>
                                 <li><a href="#" class="category-level-3">مبلمان</a></li>
                                 <li><a href="#" class="category-level-3">مبلمان</a></li>
                             </ul>
                         </li>
                     </ul>
                 </div>
             </li>
             <li><a href="#">ثبت فروشگاه</a></li>
             <li><a href="#">مقالات</a></li>
             <li><a href="#">درباره ما</a></li>
             <li><a href="#">تماس با ما</a></li>
         </ul>
     </nav>
     <div class="overlay"></div>
     <!--    menu-responsiver----------------------->

 </header>
 <!--header------------------------------------->
