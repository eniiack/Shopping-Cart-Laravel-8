@section('head', 'پنل مدیریت')

    @include('panel.layouts.header')
    @include('panel.layouts.menu')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <!-- Greetings Content Starts -->
                        <div class="col-xl-4 col-md-6 col-12 dashboard-greetings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="greeting-text mt-n25">تبریک می گوییم جان!</h3>
                                    <p class="mb-0">بهترین فروشنده ماه</p>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div class="dashboard-content-left">
                                                <h1
                                                    class="text-primary font-large-2 text-bold-500 line-height-1 mb-2 primary-font">
                                                    89,000 <small>تومان</small></h1>
                                                <p>شما امروز 57.6% بیشتر فروختید.</p>
                                                <button type="button" class="btn btn-primary glow">مشاهده فروش</button>
                                            </div>
                                            <div class="dashboard-content-right">
                                                <img src="/assets/images/icon/cup.png" height="220" width="220"
                                                    class="img-fluid" alt="Dashboard Ecommerce">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Multi Radial Chart Starts -->
                        <div class="col-xl-4 col-md-6 col-12 dashboard-visit">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">بازدید های 1398</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div id="multi-radial-chart" class="mt-2 mb-1"></div>
                                        <ul class="list-inline d-flex justify-content-around mb-0">
                                            <li> <span class="bullet bullet-xs bullet-primary mr-50"></span>هدف</li>
                                            <li> <span class="bullet bullet-xs bullet-danger mr-50"></span>بازار</li>
                                            <li> <span class="bullet bullet-xs bullet-warning mr-50"></span>Ebay</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12 dashboard-users">
                            <div class="row  ">
                                <!-- Statistics Cards Starts -->
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-6 col-12 dashboard-users-success">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div
                                                            class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-75">
                                                            <i class="bx bx-briefcase-alt font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis line-height-2 mb-50">
                                                            محصولات جدید</div>
                                                        <h3 class="line-height-1 mb-50 primary-font">1.2k</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-12 dashboard-users-danger">
                                            <div class="card text-center">
                                                <div class="card-content">
                                                    <div class="card-body py-1">
                                                        <div
                                                            class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-75">
                                                            <i class="bx bx-user font-medium-5"></i>
                                                        </div>
                                                        <div class="text-muted line-ellipsis line-height-2 mb-50">
                                                            کاربران جدید</div>
                                                        <h3 class="line-height-1 mb-50 primary-font">45.6k</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-6 col-12 dashboard-revenue-growth">
                                            <div class="card">
                                                <div
                                                    class="card-header d-flex justify-content-between align-items-center pb-0">
                                                    <h4 class="card-title">رشد درآمد</h4>
                                                    <div class="d-flex align-items-end justify-content-end">
                                                        <span class="mr-25">25,980 تومان</span>
                                                        <i
                                                            class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body pb-0">
                                                        <div id="revenue-growth-chart" class="mt-25"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Revenue Growth Chart Starts -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-12 dashboard-order-summary">
                            <div class="card">
                                <div class="row">
                                    <!-- Order Summary Starts -->
                                    <div class="col-md-8 col-12 order-summary border-right pr-md-0">
                                        <div class="card mb-0">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <h4 class="card-title">خلاصه سفارش</h4>
                                                <div class="d-flex">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light-primary mr-1">ماه</button>
                                                    <button type="button" class="btn btn-sm btn-primary glow">هفته</button>
                                                </div>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div id="order-summary-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sales History Starts -->
                                    <div class="col-md-4 col-12 pl-md-0">
                                        <div class="card mb-0">
                                            <div class="card-header pb-50">
                                                <h4 class="card-title">سابقه فروش</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body py-1">
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">ایرپاد ها</p>
                                                            <small class="text-muted">30 دقیقه پیش</small>
                                                        </div>
                                                        <div class="sales-item-amount">
                                                            <h6 class="mb-0 primary-font"><span
                                                                    class="text-success">+</span> 50,000 تومان</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">آیفون</p>
                                                            <small class="text-muted">2 ساعت پیش</small>
                                                        </div>
                                                        <div class="sales-item-amount">
                                                            <h6 class="mb-0 primary-font"><span class="text-danger">-</span>
                                                                59,000 تومان</h6>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div class="sales-item-name">
                                                            <p class="mb-0">مک بوک</p>
                                                            <small class="text-muted">1 روز پیش</small>
                                                        </div>
                                                        <div class="sales-item-amount">
                                                            <h6 class="mb-0 primary-font"><span
                                                                    class="text-success">+</span> 12,000 تومان</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-top pb-75">
                                                    <h5 class="mt-n25 mb-50 font-medium-2">مجموع فروش</h5>
                                                    <span class="text-primary text-bold-500 font-medium-1">82,950,000
                                                        تومان</span>
                                                    <div class="progress progress-bar-primary progress-sm my-50">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="78"
                                                            style="width:78%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Latest Update Starts -->
                        <div class="col-xl-4 col-md-6 col-12 dashboard-latest-update">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center pb-50">
                                    <h4 class="card-title">آخرین به روز رسانی</h4>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButtonSec" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            1399
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonSec">
                                            <a class="dropdown-item" href="#">1399</a>
                                            <a class="dropdown-item" href="#">1398</a>
                                            <a class="dropdown-item" href="#">1397</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body p-0 pb-1">
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex align-items-center">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-primary m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bxs-zap text-primary font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content mt-n25">
                                                        <span class="list-title">مجموع محصولات</span>
                                                        <small class="text-muted d-block">1.2k محصول جدید</small>
                                                    </div>
                                                </div>
                                                <span>10.6k</span>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex align-items-center">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-info m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-stats text-info font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content mt-n25">
                                                        <span class="list-title">مجموع فروش</span>
                                                        <small class="text-muted d-block">39.4k فروش جدید</small>
                                                    </div>
                                                </div>
                                                <span>26 میلیون تومان</span>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex align-items-center">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-danger m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-credit-card text-danger font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content mt-n25">
                                                        <span class="list-title">کل درآمد</span>
                                                        <small class="text-muted d-block">43.5k درآمد جدید</small>
                                                    </div>
                                                </div>
                                                <span>15.89,000 <small>تومان</small></span>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex align-items-center">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-success m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-dollar text-success font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content mt-n25">
                                                        <span class="list-title">هزینه کل</span>
                                                        <small class="text-muted d-block">مجموع هزینه ها</small>
                                                    </div>
                                                </div>
                                                <span>1.25 میلیارد تومان</span>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex align-items-center">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-primary m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-user text-primary font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content mt-n25">
                                                        <span class="list-title">مجموع کاربران</span>
                                                        <small class="text-muted d-block">کاربران جدید</small>
                                                    </div>
                                                </div>
                                                <span>1.2k</span>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                                <div class="list-left d-flex align-items-center">
                                                    <div class="list-icon mr-1">
                                                        <div class="avatar bg-rgba-danger m-0">
                                                            <div class="avatar-content">
                                                                <i class="bx bx-edit-alt text-danger font-size-base"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list-content mt-n25">
                                                        <span class="list-title">مجموع بازدید</span>
                                                        <small class="text-muted d-block">بازدید های جدید</small>
                                                    </div>
                                                </div>
                                                <span>4.6k</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earning Swiper Starts -->
                        <div class="col-xl-4 col-md-6 col-12 dashboard-earning-swiper" id="widget-earnings">
                            <div class="card">
                                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h5 class="card-title"><i class="bx bx-dollar font-medium-5 align-middle"></i> <span
                                            class="align-middle">درآمد</span></h5>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body py-1 px-0">
                                        <!-- earnings swiper starts -->
                                        <div class="widget-earnings-swiper swiper-container p-1">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide rounded swiper-shadow py-50 px-2 d-flex align-items-center"
                                                    id="repo-design">
                                                    <i class="bx bx-pyramid mr-1 font-weight-normal font-medium-4"></i>
                                                    <div class="swiper-text">
                                                        <div class="swiper-heading">طراحی رپو</div>
                                                        <small class="d-block">Gitlab</small>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rounded swiper-shadow py-50 px-2 d-flex align-items-center"
                                                    id="laravel-temp">
                                                    <i class="bx bx-sitemap mr-50 font-large-1"></i>
                                                    <div class="swiper-text">
                                                        <div class="swiper-heading">طراح</div>
                                                        <small class="d-block">پوشاک زنان</small>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rounded swiper-shadow py-50 px-2 d-flex align-items-center"
                                                    id="admin-theme">
                                                    <i class="bx bx-check-shield mr-50 font-large-1"></i>
                                                    <div class="swiper-text">
                                                        <div class="swiper-heading">پرفروش ها</div>
                                                        <small class="d-block">پوشاک</small>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rounded swiper-shadow py-50 px-2 d-flex align-items-center"
                                                    id="ux-devloper">
                                                    <i class="bx bx-devices mr-50 font-large-1"></i>
                                                    <div class="swiper-text">
                                                        <div class="swiper-heading">قالب مدیریت</div>
                                                        <small class="d-block">شبکه جهانی</small>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide rounded swiper-shadow py-50 px-2 d-flex align-items-center"
                                                    id="marketing-guide">
                                                    <i class="bx bx-book-bookmark mr-50 font-large-1"></i>
                                                    <div class="swiper-text">
                                                        <div class="swiper-heading">راهنمای بازاریابی</div>
                                                        <small class="d-block">کتاب ها</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- earnings swiper ends -->
                                    </div>
                                </div>
                                <div class="main-wrapper-content">
                                    <div class="wrapper-content" data-earnings="repo-design">
                                        <div class="widget-earnings-scroll table-responsive">
                                            <table class="table table-borderless widget-earnings-width mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-1">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-10.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        تونی استارک</h6>
                                                                    <span class="font-small-2">طراح</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-info progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="33" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:33%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-warning">-
                                                                280,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        پیتر پارکر</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-success progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="10" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:10%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-success">+
                                                                853,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        جسیکا آلبا</h6>
                                                                    <span class="font-small-2">بازاریابی</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-primary progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="15" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:15%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-primary">+
                                                                125,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-12.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        لیونل مسی</h6>
                                                                    <span class="font-small-2">طراح</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-danger progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="35" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:35%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-danger">-
                                                                310,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="wrapper-content" data-earnings="laravel-temp">
                                        <div class="widget-earnings-scroll table-responsive">
                                            <table class="table table-borderless widget-earnings-width mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-1">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-9.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        بیل گیتس</h6>
                                                                    <span class="font-small-2">طراح</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-info progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="28" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:28%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-info">-
                                                                280,000 تومان</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-10.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        استیو راجرز</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-success progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="90" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:90%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-success">+
                                                                83,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        جسیکا آلبا</h6>
                                                                    <span class="font-small-2">بازاریابی</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-primary progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="15" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:15%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-primary">+
                                                                125,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-12.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        لیونل مسی</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-danger progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="35" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:35%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-danger">-
                                                                310,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="wrapper-content" data-earnings="admin-theme">
                                        <div class="widget-earnings-scroll table-responsive">
                                            <table class="table table-borderless widget-earnings-width mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-1">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-25.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        بری الن</h6>
                                                                    <span class="font-small-2">طراح</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-info progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="52" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:52%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-info">-
                                                                180,000 تومان</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-15.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        استیو راجرز</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-success progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="90" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:90%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-success">+
                                                                553,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        اولیور کویین</h6>
                                                                    <span class="font-small-2">بازاریابی</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-primary progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="15" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:15%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-primary">+
                                                                125,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-12.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        لیونل مسی</h6>
                                                                    <span class="font-small-2">UX</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-danger progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="35" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:35%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-danger">-
                                                                150,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="wrapper-content" data-earnings="ux-devloper">
                                        <div class="widget-earnings-scroll table-responsive">
                                            <table class="table table-borderless widget-earnings-width mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-1">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-16.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        تامی مرلین</h6>
                                                                    <span class="font-small-2">طراح</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-info progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="38" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:38%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-danger">-
                                                                280,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-1.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        استیو راجرز</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-success progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="90" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:90%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-success">+
                                                                853,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        جسیکا آلبا</h6>
                                                                    <span class="font-small-2">بازاریابی</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-primary progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="15" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:15%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-primary">+
                                                                125,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-2.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        سارا لنس</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-danger progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="75" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:75%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-danger">-
                                                                360,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="wrapper-content" data-earnings="marketing-guide">
                                        <div class="widget-earnings-scroll table-responsive">
                                            <table class="table table-borderless widget-earnings-width mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="pr-1">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-19.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        نیک فیوری</h6>
                                                                    <span class="font-small-2">طراح</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-info progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="28" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:28%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-primary">-
                                                                270,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-11.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        استیو راجرز</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-success progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="90" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:90%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-success">+
                                                                853,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-12.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        جسیکا آلبا</h6>
                                                                    <span class="font-small-2">بازاریابی</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-primary progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="15" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:15%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-primary">+
                                                                225,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pr-75">
                                                            <div class="media align-items-center">
                                                                <a class="media-left mr-50" href="#">
                                                                    <img src="/assets/images/portrait/small/avatar-s-25.jpg"
                                                                        alt="avatar" class="rounded-circle" height="30"
                                                                        width="30">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading mb-0 mt-n25 primary-font">
                                                                        لیونل مسی</h6>
                                                                    <span class="font-small-2">توسعه دهنده</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-0 w-25">
                                                            <div class="progress progress-bar-danger progress-sm mb-0">
                                                                <div class="progress-bar" role="progressbar"
                                                                    aria-valuenow="35" aria-valuemin="80"
                                                                    aria-valuemax="100" style="width:35%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center"><span class="badge badge-light-danger">-
                                                                350,000 تومان</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Marketing Campaigns Starts -->
                        <div class="col-xl-8 col-12 dashboard-marketing-campaign">
                            <div class="card marketing-campaigns">
                                <div class="card-header d-flex justify-content-between align-items-center pb-1">
                                    <h4 class="card-title">کمپین های بازاریابی</h4>
                                    <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                </div>
                                <div class="card-content">
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-md-9 col-12">
                                                <div class="d-inline-block">
                                                    <!-- chart-1   -->
                                                    <div class="d-flex market-statistics-1">
                                                        <!-- chart-statistics-1 -->
                                                        <div id="donut-success-chart"></div>
                                                        <!-- data -->
                                                        <div class="statistics-data my-auto">
                                                            <div class="statistics">
                                                                <span
                                                                    class="font-medium-2 mr-50 text-bold-600">25,756</span><span
                                                                    class="text-success">(+16.2%)</span>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i
                                                                    class="bx bx-radio-circle font-small-1 text-success mr-25 align-middle"></i>
                                                                <small class="text-muted">12 اردیبهشت 1399</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-inline-block">
                                                    <!-- chart-2 -->
                                                    <div class="d-flex mb-75 market-statistics-2">
                                                        <!-- chart statistics-2 -->
                                                        <div id="donut-danger-chart"></div>
                                                        <!-- data-2 -->
                                                        <div class="statistics-data my-auto">
                                                            <div class="statistics">
                                                                <span
                                                                    class="font-medium-2 mr-50 text-bold-600">5,352</span><span
                                                                    class="text-danger">(-4.9%)</span>
                                                            </div>
                                                            <div class="statistics-date">
                                                                <i
                                                                    class="bx bx-radio-circle font-small-1 text-success mr-25 align-middle"></i>
                                                                <small class="text-muted">16 فروردین 1399</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12 text-md-right">
                                                <button class="btn btn-sm btn-primary glow mt-md-2 mb-1">مشاهده
                                                    گزارش</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <!-- table start -->
                                    <table id="table-marketing-campaigns"
                                        class="table table-borderless table-marketing-campaigns mb-0">
                                        <thead>
                                            <tr>
                                                <th>کمپین</th>
                                                <th>رشد</th>
                                                <th>عوارض</th>
                                                <th>وضعیت</th>
                                                <th class="text-center">عمل</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1 line-ellipsis">
                                                    <img class="rounded-circle mr-1" src="/assets/images/icon/fs.png"
                                                        alt="card" height="24" width="24">لورم ایپسوم متن ساختگی
                                                </td>
                                                <td class="py-1">
                                                    <i
                                                        class="bx bx-trending-up text-success align-middle mr-50"></i><span>30%</span>
                                                </td>
                                                <td class="py-1">5,536,000 تومان</td>
                                                <td class="text-success py-1">فعال</td>
                                                <td class="text-center py-1">
                                                    <div class="dropdown">
                                                        <span
                                                            class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" role="menu"></span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-edit-alt mr-1"></i> ویرایش</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-trash mr-1"></i> حذف</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1 line-ellipsis">
                                                    <img class="rounded-circle mr-1" src="/assets/images/icon/puma.png"
                                                        alt="card" height="24" width="24">لورم ایپسوم
                                                </td>
                                                <td class="py-1">
                                                    <i
                                                        class="bx bx-trending-down text-danger align-middle mr-50"></i><span>15.5%</span>
                                                </td>
                                                <td class="py-1">1,569,000 تومان</td>
                                                <td class="text-success py-1">فعال</td>
                                                <td class="text-center py-1">
                                                    <div class="dropdown">
                                                        <span
                                                            class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-edit-alt mr-1"></i> ویرایش</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-trash mr-1"></i> حذف</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1 line-ellipsis">
                                                    <img class="rounded-circle mr-1" src="/assets/images/icon/nike.png"
                                                        alt="card" height="24" width="24">لورم ایپسوم متن
                                                </td>
                                                <td class="py-1">
                                                    <i
                                                        class="bx bx-trending-up text-success align-middle mr-50"></i><span>70.30%</span>
                                                </td>
                                                <td class="py-1">23,859,000 تومان</td>
                                                <td class="text-danger py-1">تعطیل</td>
                                                <td class="text-center py-1">
                                                    <div class="dropdown">
                                                        <span
                                                            class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-edit-alt mr-1"></i> ویرایش</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-trash mr-1"></i> حذف</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1 line-ellipsis">
                                                    <img class="rounded-circle mr-1" src="/assets/images/icon/one-plus.png"
                                                        alt="card" height="24" width="24">لورم ایپسوم متن
                                                </td>
                                                <td class="py-1">
                                                    <i
                                                        class="bx bx-trending-up text-success align-middle mr-50"></i><span>10.4%</span>
                                                </td>
                                                <td class="py-1">9,523,000 تومان</td>
                                                <td class="text-success py-1">فعال</td>
                                                <td class="text-center py-1">
                                                    <div class="dropdown">
                                                        <span
                                                            class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-edit-alt mr-1"></i> ویرایش</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-trash mr-1"></i> حذف</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1 line-ellipsis">
                                                    <img class="rounded-circle mr-1" src="/assets/images/icon/google.png"
                                                        alt="card" height="24" width="24">لورم ایپسوم متن ساختگی
                                                </td>
                                                <td class="py-1"><i
                                                        class="bx bx-trending-down text-danger align-middle mr-50"></i><span>-62.38%</span>
                                                </td>
                                                <td class="py-1">12,897,000 تومان</td>
                                                <td class="text-danger py-1">تعطیل</td>
                                                <td class="text-center py-1">
                                                    <div class="dropup">
                                                        <span
                                                            class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false" role="menu">
                                                        </span>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-edit-alt mr-1"></i> ویرایش</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="bx bx-trash mr-1"></i> حذف</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- table ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="bx bx-x"></i></a><a
            class="customizer-toggle" href="#"><i class="bx bx-cog bx bx-spin white"></i></a>
        <div class="customizer-content p-2">
            <h4 class="text-uppercase mb-0 mt-n50">سفارشی سازی قالب</h4>
            <small>سفارشی سازی کنید و به صورت زنده مشاهده کنید.</small>
            <hr>
            <!-- Theme options starts -->
            <h5 class="mt-n25">طرح قالب</h5>
            <div class="theme-layouts">
                <div class="d-flex justify-content-start">
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name"
                                    data-layout="" checked>
                                <label for="radio-light">روشن</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
                                    data-layout="dark-layout">
                                <label for="radio-dark">تیره</label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mx-50">
                        <fieldset>
                            <div class="radio">
                                <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark"
                                    class="layout-name" data-layout="semi-dark-layout">
                                <label for="radio-semi-dark">نیمه تیره</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <!-- Theme options starts -->
            <hr>

            <!-- Menu Colors Starts -->
            <div id="customizer-theme-colors">
                <h5>رنگ های فهرست</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-primary selected" data-color="theme-primary"> </li>
                    <li class="color-box bg-success" data-color="theme-success"> </li>
                    <li class="color-box bg-danger" data-color="theme-danger"> </li>
                    <li class="color-box bg-info" data-color="theme-info"> </li>
                    <li class="color-box bg-warning" data-color="theme-warning"> </li>
                    <li class="color-box bg-dark" data-color="theme-dark"> </li>
                </ul>
                <hr>
            </div>
            <!-- Menu Colors Ends -->
            <!-- Menu Icon Animation Starts -->
            <div id="menu-icon-animation">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="icon-animation-title">
                        <h5 class="pt-25">انیمیشن آیکن ها</h5>
                    </div>
                    <div class="icon-animation-switch">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
                            <label class="custom-control-label" for="icon-animation-switch"></label>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Menu Icon Animation Ends -->
            <!-- Collapse sidebar switch starts -->
            <div class="collapse-sidebar d-flex justify-content-between align-items-center">
                <div class="collapse-option-title">
                    <h5 class="pt-25">جمع کردن فهرست</h5>
                </div>
                <div class="collapse-option-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Collapse sidebar switch Ends -->
            <hr>

            <!-- Navbar colors starts -->
            <div id="customizer-navbar-colors">
                <h5>رنگ های نوار بالایی</h5>
                <ul class="list-inline unstyled-list">
                    <li class="color-box bg-white border selected" data-navbar-default=""> </li>
                    <li class="color-box bg-primary" data-navbar-color="bg-primary"> </li>
                    <li class="color-box bg-success" data-navbar-color="bg-success"> </li>
                    <li class="color-box bg-danger" data-navbar-color="bg-danger"> </li>
                    <li class="color-box bg-info" data-navbar-color="bg-info"> </li>
                    <li class="color-box bg-warning" data-navbar-color="bg-warning"> </li>
                    <li class="color-box bg-dark" data-navbar-color="bg-dark"> </li>
                </ul>
                <small><strong>نکته :</strong> این گزینه تنها در حالت نوار ثابت و در هنگام اسکرول صفحه نمایش داده خواهد
                    شد.</small>
                <hr>
            </div>
            <!-- Navbar colors starts -->
            <!-- Navbar Type Starts -->
            <h5 class="mt-n25">نوع نوار بالایی</h5>
            <div class="navbar-type d-flex justify-content-start">
                <div class="hidden-ele mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                            <label for="navbar-hidden">مخفی</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-static">
                            <label for="navbar-static">ایستا</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                            <label for="navbar-sticky">ثابت</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <hr>
            <!-- Navbar Type Starts -->

            <!-- Footer Type Starts -->
            <h5 class="mt-n25">نوع فوتر</h5>
            <div class="footer-type d-flex justify-content-start">
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-hidden">
                            <label for="footer-hidden">مخفی</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-static" checked>
                            <label for="footer-static">ایستا</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="footerType" value="false" id="footer-sticky">
                            <label for="footer-sticky" class="">چسبان</label>
                        </div>
                    </fieldset>
                </div>
            </div>
            <!-- Footer Type Ends -->
            <hr>

            <!-- Card Shadow Starts-->
            <div class="card-shadow d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">سایه کارت</h5>
                </div>
                <div class="card-shadow-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                        <label class="custom-control-label" for="card-shadow-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Card Shadow Ends-->
            <hr>

            <!-- Hide Scroll To Top Starts-->
            <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
                <div class="hide-scroll-title">
                    <h5 class="pt-25">مخفی سازی دکمه اسکرول به بالا</h5>
                </div>
                <div class="hide-scroll-top-switch">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                    </div>
                </div>
            </div>
            <!-- Hide Scroll To Top Ends-->
        </div>
    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="#" target="_blank" class="btn btn-danger">ارتباط با ما</a>

    </div>
    <!-- demo chat-->
    <div class="widget-chat-demo">
        <!-- widget chat demo footer button start -->
        <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
                data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button>
        <!-- widget chat demo footer button ends -->
        <!-- widget chat demo start -->
        <div class="widget-chat widget-chat-demo d-none">
            <div class="card mb-0">
                <div class="card-header border-bottom p-0">
                    <div class="media m-75">
                        <a href="JavaScript:void(0);">
                            <div class="avatar mr-75">
                                <img src="/assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32"
                                    height="32">
                                <span class="avatar-status-online"></span>
                            </div>
                        </a>
                        <div class="media-body">
                            <h6 class="media-heading mb-0 mt-n25"><a href="javaScript:void(0);">جان اسنو</a></h6>
                            <span class="text-muted font-small-3">فعال</span>
                        </div>
                        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
                    </div>
                </div>
                <div class="card-body widget-chat-container widget-chat-demo-scroll">
                    <div class="chat-content">
                        <div class="badge badge-pill badge-light-secondary my-1">امروز</div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>لورم ایپسوم متن ساختگی</p>
                                    <span class="chat-time">7:45 ق.ظ</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                    <span class="chat-time">7:50 ق.ظ</span>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-body">
                                <div class="chat-message">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                                    <span class="chat-time">8:01 ق.ظ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top p-1">
                    <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
                        <input type="text" class="form-control chat-message-demo mr-75" placeholder="اینجا بنویسید ...">
                        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('panel.layouts.footer')
