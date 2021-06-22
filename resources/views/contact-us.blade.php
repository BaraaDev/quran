@extends('layouts.app')


@section('contact')
    <div class="section">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d218359.68532100908!2d29.814798223691433!3d31.224328548072403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c49126710fd3%3A0xb4e0cda629ee6bb9!2sAlexandria%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1624356219596!5m2!1sen!2seg" width="1650" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


    <div class="map-wrapper pb-lg--7 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="contact-wrap bg-white shadow-lg rounded-lg position-relative">
                       {{-- @include('admin.layouts.partials.validation-errors')--}}
                        <h1 class="text-grey-900 fw-700 display3-size mb-5 lh-1">إتصل بنا</h1>
                        <form action="{{route('contact-us.store')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mb-3">
                                        <input name="name" type="text" class="form-control style2-input bg-color-none text-grey-700 @error('name') is-invalid @enderror" required placeholder="الأسم" value="{{ old('name') }}">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mb-3">
                                        <input name="phone" type="text" class="form-control style2-input bg-color-none text-grey-700 @error('phone') is-invalid @enderror" required placeholder="الهاتف" value="{{ old('phone') }}">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mb-3">
                                        <input name="subject" type="text" class="form-control style2-input bg-color-none text-grey-700 @error('subject') is-invalid @enderror" required placeholder="الموضوغ" value="{{ old('subject') }}">
                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group mb-3">
                                        <input name="email" type="email" class="form-control style2-input bg-color-none text-grey-700 @error('email') is-invalid @enderror" required placeholder="البريد الإلكتروني" value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-3 md-mb25">
                                        <textarea name="message" class="w-100 h125 style2-textarea p-3 form-control @error('message') is-invalid @enderror" required placeholder="الرسالة">{{ old('message') }}</textarea>
                                        @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group"><button class="rounded-lg style1-input float-right bg-current text-white text-center font-xss fw-500 border-2 border-0 p-0 w175">إرسال</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12 pb-lg--7 pb-5 pt-0">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 xs-mb-2">
                            <div class="card shadow-xss border-0 p-5 rounded-lg">
                                <span class="btn-round-xxxl alert-success"><i class="feather-mail text-success font-xl"></i></span>
                                <h2 class="fw-700 font-sm mt-4 mb-3 text-grey-900">ارسل لنا عبر البريد الإلكتروني</h2>
                                <p class="font-xsss text-grey-500 fw-500 mb-3">اطرح علينا سؤالاً عبر البريد الإلكتروني وسنرد عليك في غضون أيام قليلة.</p>
                                <a href="mailto:{{$settingsFind->phone}}" class="fw-700 font-xsss text-primary">ابقى على تواصل</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 xs-mb-2">
                            <div class="card shadow-xss border-0 p-5 rounded-lg">
                                <span class="btn-round-xxxl alert-primary"><i class="feather-map-pin text-primary font-xl"></i></span>
                                <h2 class="fw-700 font-sm mt-4 mb-3 text-grey-900">موقعنا</h2>
                                <p class="font-xsss text-grey-500 fw-500 mb-3">{{$settingsFind->location}}</p>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 xs-mb-2">
                            <div class="card shadow-xss border-0 p-5 rounded-lg">
                                <span class="btn-round-xxxl alert-danger"><i class="feather-phone text-danger font-xl"></i></span>
                                <h2 class="fw-700 font-sm mt-4 mb-3 text-grey-900">إتصل بنا</h2>
                                <p class="font-xsss text-grey-500 fw-500 mb-3">تواصل معنا علي الهاتف الجوال </p>
                                <a href="tel:{{$settingsFind->phone}}" class="fw-700 font-xsss text-primary">ابقى على تواصل</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
