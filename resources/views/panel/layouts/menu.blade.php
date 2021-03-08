 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
     <div class="navbar-header">
         <ul class="nav navbar-nav flex-row">
             <li class="nav-item mr-auto"><a class="navbar-brand" href="/html/vertical-menu-template/index.html">
                     <div class="brand-logo"><img class="logo" src="/assets/images/logo/logo.png"></div>
                     <h2 class="brand-text mb-0">Frest</h2>
                 </a></li>
             <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                         class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i
                         class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary"
                         data-ticon="bx-disc"></i></a></li>
         </ul>
     </div>
     <div class="shadow-bottom"></div>
     <div class="main-menu-content">
         <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
             data-icon-style="lines">
             <li class="nav-item {{ isActive('admin.users.index') }}"><a href="{{ route('admin.users.index') }}"><i
                         class="menu-livicon" data-icon="user"></i><span class="menu-title"
                         data-i18n="Email">کاربران</span></a>
             </li>
             <li class=" nav-item  {{ isActive(['admin.permissions.index'], 'has-sub open') }} "><a href="#"><i
                         class="menu-livicon" data-icon="notebook"></i><span class="menu-title"
                         data-i18n="Invoice">دسترسی ها</span></a>
                 <ul class="menu-content">
                     <li><a href="app-invoice-list.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Invoice List">همه مقام ها</span></a>
                     </li>
                     <li class="{{ isActive('admin.permissions.index') }}"><a
                             href="{{ route('admin.permissions.index') }}"><i class="bx bx-left-arrow-alt "></i><span
                                 class="menu-item" data-i18n="Invoice">همه دسترسی ها</span></a>
                     </li>
                     <li class="{{ isActive('admin.permissions.create') }}"><a
                             href="{{ route('admin.permissions.create') }}"><i class="bx bx-left-arrow-alt "></i><span
                                 class="menu-item" data-i18n="Invoice">ایجاد دسترسی</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item {{ isActive('admin.') }}"><a href="{{ route('admin.') }}"><i class="menu-livicon"
                         data-icon="comments"></i><span class="menu-title" data-i18n="Chat">گفتگو</span></a>
             </li>
             <li class=" nav-item"><a href="app-todo.html"><i class="menu-livicon" data-icon="check-alt"></i><span
                         class="menu-title" data-i18n="Todo">وظایف</span></a>
             </li>
             <li class=" nav-item"><a href="app-calendar.html"><i class="menu-livicon" data-icon="calendar"></i><span
                         class="menu-title" data-i18n="Calendar">تقویم</span></a>
             </li>
             <li class=" nav-item"><a href="app-kanban.html"><i class="menu-livicon" data-icon="grid"></i><span
                         class="menu-title" data-i18n="Kanban">یادداشت ها</span></a>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="notebook"></i><span class="menu-title"
                         data-i18n="Invoice">صورتحساب</span></a>
                 <ul class="menu-content">
                     <li><a href="app-invoice-list.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Invoice List">لیست صورتحساب ها</span></a>
                     </li>
                     <li><a href="app-invoice.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Invoice">صورتحساب</span></a>
                     </li>
                     <li><a href="app-invoice-edit.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Invoice Edit">ویرایش صورتحساب</span></a>
                     </li>
                     <li><a href="app-invoice-add.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Invoice Add">افزودن صورتحساب</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="app-file-manager.html"><i class="menu-livicon" data-icon="save"></i><span
                         class="menu-title" data-i18n="File Manager">مدیریت فایل</span></a>
             </li>
             <li class=" navigation-header"><span>رابط کاربری</span>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="retweet"></i><span class="menu-title"
                         data-i18n="Content">محتوا</span></a>
                 <ul class="menu-content">
                     <li><a href="content-grid.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Grid">توری</span></a>
                     </li>
                     <li><a href="content-typography.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Typography">تایپوگرافی</span></a>
                     </li>
                     <li><a href="content-text-utilities.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Text Utilities">ابزار متن</span></a>
                     </li>
                     <li><a href="content-syntax-highlighter.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Syntax Highlighter">هایلایت Syntax</span></a>
                     </li>
                     <li><a href="content-helper-classes.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Helper Classes">کلاس های کمکی</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="colors.html"><i class="menu-livicon" data-icon="drop"></i><span
                         class="menu-title" data-i18n="Colors">رنگ ها</span></a>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="bulb"></i><span class="menu-title"
                         data-i18n="Icons">آیکن‌ها</span></a>
                 <ul class="menu-content">
                     <li><a href="icons-livicons.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="LivIcons">LivIcons</span></a>
                     </li>
                     <li><a href="icons-boxicons.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="BoxIcons">Boxicons</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="square"></i><span class="menu-title"
                         data-i18n="Card">کارت</span></a>
                 <ul class="menu-content">
                     <li><a href="card-basic.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Basic">پایه</span></a>
                     </li>
                     <li><a href="card-actions.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Card Actions">عملیات های کارت</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="widgets.html"><i class="menu-livicon" data-icon="thumbnails-small"></i><span
                         class="menu-title" data-i18n="Widgets">ویجت‌ها</span><span
                         class="badge badge-light-primary badge-pill badge-round float-right">جدید</span></a>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="box-add"></i><span class="menu-title"
                         data-i18n="Components">اجزاء</span></a>
                 <ul class="menu-content">
                     <li><a href="component-alerts.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Alerts">اعلان‌ها</span></a>
                     </li>
                     <li><a href="component-buttons-basic.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Buttons">دکمه ها</span></a>
                     </li>
                     <li><a href="component-breadcrumbs.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Breadcrumbs">مسیر ناوبری</span></a>
                     </li>
                     <li><a href="component-carousel.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Carousel">گردونه</span></a>
                     </li>
                     <li><a href="component-collapse.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Collapse">باز و بسته شونده</span></a>
                     </li>
                     <li><a href="component-dropdowns.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Dropdowns">منوی کشویی</span></a>
                     </li>
                     <li><a href="component-list-group.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="List Group">گروه لیست</span></a>
                     </li>
                     <li><a href="component-modals.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Modals">مودال ها</span></a>
                     </li>
                     <li><a href="component-pagination.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Pagination">صفحه‌بندی</span></a>
                     </li>
                     <li><a href="component-navbar.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Navbar">نوار ناوبری</span></a>
                     </li>
                     <li><a href="component-tabs-component.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Tabs Component">سربرگ ها</span></a>
                     </li>
                     <li><a href="component-pills-component.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Pills Component">سربرگ های دکمه ای</span></a>
                     </li>
                     <li><a href="component-tooltips.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Tooltips">تولتیپ ها</span></a>
                     </li>
                     <li><a href="component-popovers.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Popovers">پاپ اور</span></a>
                     </li>
                     <li><a href="component-badges.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Badges">نشان ها</span></a>
                     </li>
                     <li><a href="component-pill-badges.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Pill Badges">نشان های قرصی</span></a>
                     </li>
                     <li><a href="component-progress.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Progress">پیشرفت</span></a>
                     </li>
                     <li><a href="component-media-objects.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Media Objects">رسانه ها</span></a>
                     </li>
                     <li><a href="component-spinner.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Spinner">چرخنده</span></a>
                     </li>
                     <li><a href="component-bs-toast.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Toasts">اعلان توست</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="briefcase"></i><span
                         class="menu-title" data-i18n="Extra Components">اجزای بیشتر</span></a>
                 <ul class="menu-content">
                     <li><a href="ex-component-avatar.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Avatar">آواتار</span></a>
                     </li>
                     <li><a href="ex-component-chips.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Chips">ژتون ها</span></a>
                     </li>
                     <li><a href="ex-component-divider.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Divider">جدا کننده</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" navigation-header"><span>فرم ها و جدول ها</span>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="check"></i><span class="menu-title"
                         data-i18n="Form Elements">عناصر فرم</span></a>
                 <ul class="menu-content">
                     <li><a href="form-inputs.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Input">ورودی</span></a>
                     </li>
                     <li><a href="form-input-groups.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Input Groups">گروه های ورودی</span></a>
                     </li>
                     <li><a href="form-number-input.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Number Input">ورودی عدد</span></a>
                     </li>
                     <li><a href="form-select.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Select">انتخاب</span></a>
                     </li>
                     <li><a href="form-radio.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Radio">دکمه های رادیویی</span></a>
                     </li>
                     <li><a href="form-checkbox.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Checkbox">چک باکس</span></a>
                     </li>
                     <li><a href="form-switch.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Switch">سوییچ</span></a>
                     </li>
                     <li><a href="form-textarea.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Textarea">ناحیه متنی</span></a>
                     </li>
                     <li><a href="form-quill-editor.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Quill Editor">ویرایشگر Quill</span></a>
                     </li>
                     <li><a href="form-file-uploader.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="File Uploader">ارسال کننده فایل</span></a>
                     </li>
                     <li><a href="form-date-time-picker.html"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Date & Time Picker">انتخاب گر تاریخ و زمان</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="form-layout.html"><i class="menu-livicon" data-icon="settings"></i><span
                         class="menu-title" data-i18n="Form Layout">طرح های فرم</span></a>
             </li>
             <li class=" nav-item"><a href="form-wizard.html"><i class="menu-livicon" data-icon="priority-low"></i><span
                         class="menu-title" data-i18n="Form Wizard">فرم مرحله
                         ای</span></a>
             </li>
             <li class=" nav-item"><a href="form-validation.html"><i class="menu-livicon"
                         data-icon="check-alt"></i><span class="menu-title" data-i18n="Form Validation">اعتبارسنجی
                         فرم</span></a>
             </li>
             <li class=" nav-item"><a href="form-repeater.html"><i class="menu-livicon"
                         data-icon="priority-low"></i><span class="menu-title" data-i18n="Form Repeater">فرم تکرار
                         شونده</span></a>
             </li>
             <li class=" nav-item"><a href="table.html"><i class="menu-livicon" data-icon="thumbnails-big"></i><span
                         class="menu-title" data-i18n="Table">جدول</span></a>
             </li>
             <li class=" nav-item"><a href="table-extended.html"><i class="menu-livicon"
                         data-icon="thumbnails-small"></i><span class="menu-title" data-i18n="Table extended">جدول
                         پیشرفته</span></a>
             </li>
             <li class=" nav-item"><a href="table-datatable.html"><i class="menu-livicon"
                         data-icon="morph-map"></i><span class="menu-title" data-i18n="Datatable">جدول
                         اطلاعات</span></a>
             </li>
             <li class=" navigation-header"><span>صفحات</span>
             </li>
             <li class=" nav-item"><a href="page-user-profile.html"><i class="menu-livicon" data-icon="user"></i><span
                         class="menu-title" data-i18n="User Profile">پروفایل
                         کاربر</span></a>
             </li>
             <li class=" nav-item"><a href="page-faq.html"><i class="menu-livicon" data-icon="question-alt"></i><span
                         class="menu-title" data-i18n="FAQ">سوالات متداول</span></a>
             </li>
             <li class=" nav-item"><a href="page-knowledge-base.html"><i class="menu-livicon"
                         data-icon="info-alt"></i><span class="menu-title" data-i18n="Knowledge Base">پایگاه
                         دانش</span></a>
             </li>
             <li class=" nav-item"><a href="page-search.html"><i class="menu-livicon" data-icon="search"></i><span
                         class="menu-title" data-i18n="Search">جستجو</span></a>
             </li>
             <li class=" nav-item"><a href="page-account-settings.html"><i class="menu-livicon"
                         data-icon="wrench"></i><span class="menu-title" data-i18n="Account Settings">تنظیمات حساب
                         کاربری</span></a>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="users"></i><span class="menu-title"
                         data-i18n="User">کاربران</span></a>
                 <ul class="menu-content">
                     <li><a href="page-users-list.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="List">لیست</span></a>
                     </li>
                     <li><a href="page-users-view.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="View">مشاهده</span></a>
                     </li>
                     <li><a href="page-users-edit.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Edit">ویرایش</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlink"></i><span class="menu-title"
                         data-i18n="Starter kit">طرح های شروع</span></a>
                 <ul class="menu-content">
                     <li><a href="/starter-kit/vertical-menu-template/sk-layout-1-column.html"><i
                                 class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="1 column">1
                                 ستون</span></a>
                     </li>
                     <li><a href="/starter-kit/vertical-menu-template/sk-layout-2-columns.html"><i
                                 class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="2 columns">2
                                 ستون</span></a>
                     </li>
                     <li><a href="/starter-kit/vertical-menu-template/sk-layout-fixed-navbar.html"><i
                                 class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Fixed navbar">نوار
                                 بالایی ثابت</span></a>
                     </li>
                     <li><a href="/starter-kit/vertical-menu-template/sk-layout-fixed.html"><i
                                 class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Fixed layout">طرح
                                 ثابت</span></a>
                     </li>
                     <li><a href="/starter-kit/vertical-menu-template/sk-layout-static.html"><i
                                 class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Static layout">طرح
                                 ایستا</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="unlock"></i><span class="menu-title"
                         data-i18n="Authentication">احراز هویت</span></a>
                 <ul class="menu-content">
                     <li><a href="auth-login.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Login">ورود</span></a>
                     </li>
                     <li><a href="auth-register.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Register">ثبت نام</span></a>
                     </li>
                     <li><a href="auth-forgot-password.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Forgot Password">فراموشی رمز عبور</span></a>
                     </li>
                     <li><a href="auth-reset-password.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Reset Password">بازنشانی رمز عبور</span></a>
                     </li>
                     <li><a href="auth-lock-screen.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Lock Screen">قفل صفحه</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="share"></i><span class="menu-title"
                         data-i18n="Miscellaneous">متفرقه</span></a>
                 <ul class="menu-content">
                     <li><a href="page-coming-soon.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Coming Soon">به زودی</span></a>
                     </li>
                     <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Error">خطا</span></a>
                         <ul class="menu-content">
                             <li><a href="error-404.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                         class="menu-item" data-i18n="404">404</span></a>
                             </li>
                             <li><a href="error-500.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                         class="menu-item" data-i18n="500">500</span></a>
                             </li>
                         </ul>
                     </li>
                     <li><a href="page-not-authorized.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Not Authorized">دسترسی غیرمجاز</span></a>
                     </li>
                     <li><a href="page-maintenance.html" target="_blank"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Maintenance">تعمیرات</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" navigation-header"><span>نمودار ها و نقشه ها</span>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="pie-chart"></i><span
                         class="menu-title" data-i18n="Charts">نمودار ها</span><span
                         class="badge badge-pill badge-round badge-light-info float-right mr-2">3</span></a>
                 <ul class="menu-content">
                     <li><a href="chart-apex.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Apex">Apex</span></a>
                     </li>
                     <li><a href="chart-chartjs.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Chartjs">Chartjs</span></a>
                     </li>
                     <li><a href="chart-chartist.html"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Chartist">Chartist</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item"><a href="maps-google.html"><i class="menu-livicon" data-icon="globe"></i><span
                         class="menu-title" data-i18n="Google Maps">نقشه های گوگل</span></a>
             </li>
             <li class=" navigation-header"><span>افزونه ها</span>
             </li>
             <li class=" nav-item"><a href="ext-component-sweet-alerts.html"><i class="menu-livicon"
                         data-icon="warning-alt"></i><span class="menu-title" data-i18n="Sweet Alert">هشدار
                         Sweet</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-toastr.html"><i class="menu-livicon"
                         data-icon="morph-map"></i><span class="menu-title" data-i18n="Toastr">اعلان
                         Toastr</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-noui-slider.html"><i class="menu-livicon"
                         data-icon="settings"></i><span class="menu-title" data-i18n="NoUi Slider">اسلایدر
                         NoUi</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-drag-drop.html"><i class="menu-livicon"
                         data-icon="priority-high"></i><span class="menu-title" data-i18n="Drag & Drop">کشیدن و رها
                         کردن</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-tour.html"><i class="menu-livicon"
                         data-icon="paper-plane"></i><span class="menu-title" data-i18n="Tour">تور</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-swiper.html"><i class="menu-livicon"
                         data-icon="morph-orientation-tablet"></i><span class="menu-title" data-i18n="Swiper">گردونه
                         Swiper</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-treeview.html"><i class="menu-livicon"
                         data-icon="morph-sort-alt"></i><span class="menu-title" data-i18n="Treeview">نمایش
                         درختی</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-block-ui.html"><i class="menu-livicon"
                         data-icon="expand"></i><span class="menu-title" data-i18n="Block-UI">رابط کاربری
                         بلوک</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-media-player.html"><i class="menu-livicon"
                         data-icon="music"></i><span class="menu-title" data-i18n="Media Player">پخش کننده
                         رسانه</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-miscellaneous.html"><i class="menu-livicon"
                         data-icon="loader-10"></i><span class="menu-title" data-i18n="Miscellaneous">متفرقه</span></a>
             </li>
             <li class=" nav-item"><a href="ext-component-i18n.html"><i class="menu-livicon" data-icon="globe"></i><span
                         class="menu-title" data-i18n="i18n">چند زبانی</span></a>
             </li>
             <li class=" navigation-header"><span>سایر</span>
             </li>
             <li class=" nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-menu-arrow-bottom"></i><span
                         class="menu-title" data-i18n="Menu Levels">سطح های فهرست</span></a>
                 <ul class="menu-content">
                     <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Second Level">سطح دوم</span></a>
                     </li>
                     <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                 data-i18n="Second Level">سطح دوم</span></a>
                         <ul class="menu-content">
                             <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                         data-i18n="Third Level">سطح سوم</span></a>
                             </li>
                             <li><a href="#"><i class="bx bx-left-arrow-alt"></i><span class="menu-item"
                                         data-i18n="Third Level">سطح سوم</span></a>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </li>
             <li class="disabled nav-item"><a href="#"><i class="menu-livicon" data-icon="morph-preview"></i><span
                         class="menu-title" data-i18n="Disabled Menu">گزینه غیرفعال</span></a>
             </li>
         </ul>
     </div>
 </div>
 <!-- END: Main Menu-->
