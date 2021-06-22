<html dir="rtl">
@include('layouts.head')

<body class="color-theme-blue" style="font-family: 'Cairo', sans-serif;">

<div class="main-wrap">
    @include('layouts.header')
    <div class="row">
        <div class="col-xl-5 d-none d-xl-block p-0 vh-100 bg-image-cover bg-no-repeat" style="background-image: url(https://via.placeholder.com/800x950.png);"></div>
        <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-lg overflow-hidden">
            <div class="card shadow-none border-0 ml-auto mr-auto login-card">
                <div class="card-body rounded-0 text-left">
                    <h2 class="fw-700 display1-size display2-md-size mb-4">أنشئ حساب جديد </h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-user text-grey-500 pr-0"></i>
                            <input name="name" type="text" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="أكتب اسمك">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-email text-grey-500 pr-0"></i>
                            <input name="email" type="text" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="عنوان البريد الإلكتروني">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-3">
                            <input name="password" type="password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3 @error('password') is-invalid @enderror" autocomplete="current-password" placeholder="كلمة السر">
                            <i class="font-sm ti-lock text-grey-500 pr-0"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group icon-input mb-1">
                            <input name="password_confirmation" type="password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3" placeholder="إعادة كتابة كلمة السر">
                            <i class="font-sm ti-lock text-grey-500 pr-0"></i>
                        </div>

                        <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1"><button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">التسجيل</button></div>
                            <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">لديك حساب بالفعل <a href="{{route('login')}}" class="fw-700 ml-1">تسجيل الدخول</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer-script')

</body>
</html>
