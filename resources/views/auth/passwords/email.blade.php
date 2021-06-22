<html dir="rtl">
@include('layouts.head')

<body class="color-theme-blue" style="font-family: 'Cairo', sans-serif;">

<div class="main-wrap">

    <div class="row">
        @include('layouts.header')
         <div class="col-xl-7 vh-100 align-items-center d-flex bg-white rounded-lg overflow-hidden">

            <div class="card shadow-none mr-auto login-card">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-body rounded-0 text-left">
                    <h2 class="fw-700 display1-size display2-md-size mb-4">إعادة تعيين كلمة المرور</h2>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group icon-input mb-3">
                            <i class="font-sm ti-email text-grey-500 pr-0"></i>
                            <input name="email" type="text" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600 @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="عنوان البريد الإلكتروني">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-sm-12 p-0 text-left">
                            <div class="form-group mb-1"><button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">إرسال رابط إعادة تعيين كلمة السر</button></div>
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


