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
             @can('show-users')
                 <li class="nav-item {{ isActive('admin.users.index') }}"><a href="{{ route('admin.users.index') }}"><i
                             class="menu-livicon" data-icon="user"></i><span class="menu-title"
                             data-i18n="Email">کاربران</span></a>
                 </li>
             @endcan
             @can('create-permission')
                 <li class=" nav-item  {{ isActive(['admin.permissions.index'], 'has-sub open') }} "><a href="#"><i
                             class="menu-livicon" data-icon="notebook"></i><span class="menu-title"
                             data-i18n="Invoice">دسترسی ها</span></a>
                     <ul class="menu-content">
                         <li class="{{ isActive('admin.roles.index') }}"><a href="{{ route('admin.roles.index') }}"><i
                                     class="bx bx-left-arrow-alt"></i><span class="menu-item" data-i18n="Invoice List">همه
                                     مقام ها</span></a>
                         </li>
                         <li class="{{ isActive('admin.roles.create') }}"><a href="{{ route('admin.roles.create') }}"><i
                                     class="bx bx-left-arrow-alt "></i><span class="menu-item" data-i18n="Invoice">ایجاد
                                     مقام</span></a>
                         </li>
                         <li class="{{ isActive('admin.permissions.index') }}"><a
                                 href="{{ route('admin.permissions.index') }}"><i class="bx bx-left-arrow-alt "></i><span
                                     class="menu-item" data-i18n="Invoice">همه دسترسی ها</span></a>
                         </li>
                         <li class="{{ isActive('admin.permissions.create') }}"><a
                                 href="{{ route('admin.permissions.create') }}"><i
                                     class="bx bx-left-arrow-alt "></i><span class="menu-item" data-i18n="Invoice">ایجاد
                                     دسترسی</span></a>
                         </li>
                     </ul>
                 </li>
             @endcan
             <li class=" nav-item  {{ isActive(['admin.permissions.index'], 'has-sub open') }} "><a href="#"><i
                         class="menu-livicon" data-icon="briefcase"></i><span class="menu-title"
                         data-i18n="Invoice">محصولات</span></a>
                 <ul class="menu-content">
                     <li class="{{ isActive('admin.products.index') }}"><a
                             href="{{ route('admin.products.index') }}"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Invoice List">همه
                                 محصول ها</span></a>
                     </li>
                     @can('create-product')
                         <li class="{{ isActive('admin.products.create') }}"><a
                                 href="{{ route('admin.products.create') }}"><i class="bx bx-left-arrow-alt "></i><span
                                     class="menu-item" data-i18n="Invoice">ایجاد
                                     محصول</span></a>
                         </li>
                     @endcan
                     <li class="{{ isActive('admin.comments.index') }}"><a
                             href="{{ route('admin.comments.index') }}"><i class="bx bx-left-arrow-alt "></i><span
                                 class="menu-item" data-i18n="Invoice">نظرات</span></a>
                     </li>
                 </ul>
             </li>
             <li class=" nav-item  {{ isActive(['admin.permissions.index'], 'has-sub open') }} "><a href="#"><i
                         class="menu-livicon" data-icon="grid"></i><span class="menu-title"
                         data-i18n="Invoice">دسته بندی</span></a>
                 <ul class="menu-content">
                     <li class="{{ isActive('admin.categories.index') }}"><a
                             href="{{ route('admin.categories.index') }}"><i class="bx bx-left-arrow-alt"></i><span
                                 class="menu-item" data-i18n="Invoice List">همه
                                 دسته ها</span></a>
                     </li>
                     @can('create-product')
                         <li class="{{ isActive('admin.categories.create') }}"><a
                                 href="{{ route('admin.categories.create') }}"><i class="bx bx-left-arrow-alt "></i><span
                                     class="menu-item" data-i18n="Invoice">ایجاد
                                     دسته</span></a>
                         </li>
                     @endcan
                 </ul>
             </li>
         </ul>

     </div>
 </div>
 <!-- END: Main Menu-->
