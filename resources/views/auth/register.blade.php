@section('head', 'Register')
    @include('layouts.header')
    <!--page-login-------------------------->
    <div class="container-main">
        <div class="col-12">
            <div class="semi-modal-layout">
                <section class="page-account-box">
                    <div class="col-lg-7 col-md-7 col-xs-12 mx-auto">
                        <div class="account-box" style="padding-bottom:40px;">
                            <a href="#" class="account-box-logo">digistore</a>
                            <div class="account-box-headline">
                                <a href="login" class="login-ds">ورود</a>
                                <a href="register" class="register-ds active-account">ثبت نام</a>
                            </div>
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger ">
                                    <ul>
                                        @foreach ($errors->all() as $key => $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
                            <!-- <div class="massege-light">ثبت نام تنها با شماره تلفن همراه امکان پذیر است.</div> -->
                            <div class="account-box-content">
                                <form method="POST" action="{{ route('register') }}" class="form-account">
                                    @csrf
                                    <div class="form-account-title">
                                        <label for="name">نام</label>
                                        <input type="text" name="name"
                                            class="text-right number-email-input @error('name') is-invalid @enderror"
                                            id="name" value="{{ old('name') }}" placeholder=" لطفا نام خود را وارد کنید">
                                        <span class="mdi mdi-account-outline"></span>
                                        @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-account-title">
                                        <label for="email">ایمیل</label>
                                        <input type="email" class="number-email-input @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" id="email"
                                            placeholder=" لطفا ایمیل خود را وارد کنید">
                                        <span class="mdi mdi-email-outline"></span>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-account-title">
                                        <label for="password">کلمه عبور</label>
                                        <input name="password" type="password"
                                            class="password-input @error('password') is-invalid @enderror"
                                            placeholder="کلمه عبور خود را وارد نمایید">
                                        <span class="mdi mdi-lock"></span>
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-account-title">
                                        <label for="password-co">تکرار کلمه عبور</label>
                                        <input type="password" name="password_confirmation"
                                            class="password-input @error('password_confirmation') is-invalid @enderror"
                                            placeholder="تکرار کلمه عبور">
                                        <span class="mdi mdi-lock"></span>
                                        @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-auth-row ">
                                        {{-- <div class="g-recaptcha @error('g-recaptcha-response') is-invalid @enderror" data-sitekey="{{ env ('GOOGLE_RECAPTCHA_SITE_KEY') }}"></div> --}}
                                        @recaptcha
                                        @error('g-recaptcha-response')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="form-auth-row">
                                        <label for="#" class="ui-checkbox">
                                            <input type="checkbox" value="1" name="privacy" checked="" id="remember">
                                            <span class="ui-checkbox-check"></span>
                                        </label>
                                        <label for="remember" class="remember-me  @error('privacy') is-invalid @enderror"><a href="#">حریم خصوصی</a> و <a
                                                href="#">شرایط قوانین</a>استفاده از سرویس های سایت دیجی‌اسمارت را مطالعه
                                            نموده و با کلیه موارد آن موافقم.</label>
                                            @error('privacy')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="parent-btn lr-ds">
                                        <button class="dk-btn dk-btn-info">
                                            ثبت نام به دیجی اسمارت
                                            <i class="fa fa-sign-in sign-in"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="footer-light">
                    <div class="container">
                        <ul class="footer-light-link">
                            <li><a href="#">درباره دیجی اسمارت</a></li>
                            <li><a href="#">فرصت‌های شغلی</a></li>
                            <li><a href="#">تماس با ما</a></li>
                            <li><a href="#">همکاری با سازمان‌ها</a></li>
                        </ul>

                        <p class="title-footer">استفاده از مطالب فروشگاه اینترنتی دیجی‌اسمارت فقط برای مقاصد غیرتجاری و با
                            ذکر منبع بلامانع است. کلیه حقوق این سایت متعلق به شرکت نوآوران فن آوازه (فروشگاه آنلاین
                            دیجی‌اسمارت) می‌باشد.</p>

                        <p class="copy-right-footer-light">Copyright © 2006 - 2019 DigiSmart.com</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!--page-login-------------------------->
    @include('layouts.footer')
