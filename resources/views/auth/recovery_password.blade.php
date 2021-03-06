@section('head', 'Register')
    @include('layouts.header')

    <!--page-login-------------------------->
    <div class="container-main">
        <div class="col-12">
            <div class="semi-modal-layout">
                <section class="page-account-box">
                    <div class="col-lg-7 col-md-7 col-xs-12 mx-auto">
                        <div class="account-box">
                            <a href="" class="account-box-logo">digistore</a>
                            <div class="account-box-headline">
                                <a href="recovery_password" class="login-ds active-account">بازیابی رمز عبور</a>
                                <a href="register" class="register-ds">ثبت نام</a>
                            </div>
                            <div class="account-box-content">
                                <form action="{{ route('recovery') }}" class="form-account" method="post">
                                    @csrf
                                    <div class="form-account-title">
                                        <label for="email-phone">ایمیل</label>
                                        <input name="email" type="email"
                                            class="number-email-input  @error('email') is-invalid @enderror"
                                            id="email-phone" placeholder="ایمیل خود را وارد نمایید">
                                        <span class="mdi mdi-email-outline"></span>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="parent-btn lr-ds">
                                        <button name="request" value="recovery" type="submit" class="dk-btn dk-btn-info">
                                            بازیابی رمز ورود
                                            <i class="fa fa-sign-in sign-in"></i>
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--page-login-------------------------->
    @include('layouts.footer')
