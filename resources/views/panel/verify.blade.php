@section('head', 'تایید کد')
    @include('layouts.header')
{{-- @section('script')
<script src="https://www.google.com/recaptcha/api.js?hl=fa" async defer></script>
@endsection --}}
    <!--page-login-------------------------->
    <div class="container-main">
        <div class="col-12">
            <div class="semi-modal-layout">
                <section class="page-account-box">
                    <div class="col-lg-7 col-md-7 col-xs-12 mx-auto">
                        <div class="account-box">
                            <a href="#" class="account-box-logo">digistore</a>
                            <div class="account-box-headline">
                            </div>
                            <div class="account-box-content">
                                <form method="POST" action="{{ route('admin.verify_code_post') }}" class="form-account">
                                    @csrf
                                    {{-- <div class="form-account-title">
                                        <label for="email-phone">ایمیل</label>
                                        <input name="email" type="email"
                                            class="number-email-input  @error('email') is-invalid @enderror"
                                            id="email-phone" placeholder="ایمیل خود را وارد نمایید">
                                        <span class="mdi mdi-account-outline"></span>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div> --}}
                                    <div class="form-account-title">
                                        <label for="phone-phone">کد ارسالی</label>
                                        <input name="code" type="tel"
                                            class="number-email-input  @error('code') is-invalid @enderror"
                                            id="code-code" placeholder="کد ارسالی خود را وارد نمایید">
                                        <span class="mdi mdi-account-outline"></span>
                                        @error('code')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                   
                                   
                                    <div class="parent-btn lr-ds">
                                        <button class="dk-btn dk-btn-info">
                                            ورود به دیجی اسمارت
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
