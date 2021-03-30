<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl" dir="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('head')</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/ico/favicon.ico">
    <meta name="theme-color" content="#5A8DEE">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/extensions/swiper.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/themes/semi-dark-layout.css">
    <!-- END: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/pages/page-users.css">
    <link rel="stylesheet" type="text/css" href="/assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Page CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">

                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span
                                        class="user-name">{{ Auth::user()->email }}</span><span
                                        class="user-status text-muted">
                                        <form method="POST" action="{{route('admin.logoutAdmin')}}">
                                            @csrf
                                            <button style="    width: 40px;
                                            height: 20px;
                                            text-align: center;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;" class="btn btn-danger">خروج</button>
                                        </form>
                                    </span></div><span><img class="round" src="/images/user.png" alt="avatar"
                                        height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu pb-0"><a class="dropdown-item" href="page-user-profile.html"><i
                                        class="bx bx-user mr-50"></i> ویرایش پروفایل</a><a class="dropdown-item"
                                    href="app-email.html"><i class="bx bx-envelope mr-50"></i> صندوق ورودی من</a><a
                                    class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i>
                                    وظیفه</a><a class="dropdown-item" href="app-chat.html"><i
                                        class="bx bx-message mr-50"></i> گفتگو ها</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item"
                                    href="auth-login.html"><i class="bx bx-power-off mr-50"></i> خروج</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
