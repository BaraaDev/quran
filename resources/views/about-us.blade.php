@extends('layouts.app')


@section('contact')
    <div class="about-wrapper pb-lg--7 pt-lg--7 pt-5 pb-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="text-grey-900 fw-700 font-xxl pb-2 mb-0 mt-3 d-block lh-3">{{$about->title}}</h2>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h4 class=" fw-500 mb-4 lh-30 font-xsss text-grey-500 mt-0">{!! $about->content!!}</h4>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <ul class="d-block list-inline float-left-md mb-3">
                        <li class="list-inline-item mr-1"><a href="https://www.facebook.com/{{$settingsFind->facebook}}" target="_blank" rel="nofollow" ><i class="fab fa-facebook fa-3x"></i></a></li>
                        <li class="list-inline-item mr-1"><a href="https://wa.me/{{$settingsFind->whatsApp}}" target="_blank" rel="nofollow"><i class="fab fa-whatsapp fa-3x"></i></a></li>
                        <li class="list-inline-item mr-1"><a href="mailto:{{$settingsFind->email}}" target="_blank" rel="nofollow" ><i class="fas fa-envelope fa-3x"></i></a></li>
                      </ul>
                </div>
                <div class="col-lg-12 mt-3">
                     <img src="{{$settingsFind->getFirstMediaUrl('images')}}" alt="about" class="img-fluid rounded-lg">
                </div>
                <div class="col-lg-12 mt-5 text-center pt-3">
                    <a href="{{route('contact-us.create')}}" class="ml-1 mr-1 rounded-lg text-primary font-xss border-size-md border-primary fw-600 open-font p-3 w200 btn md-mb-2 mt-3">تواصل معنا</a>
                    <h3 class="font-xss fw-600 text-grey-500 p-3 d-inline-block d-none-xs">أو</h3>
                    <a href="{{route('article.index')}}" class="ml-1 mr-1 rounded-lg text-primary font-xss border-size-md border-primary fw-600 open-font p-3 w200 btn md-mb-2 mt-3">تعلم معنا</a>
                </div>
            </div>
        </div>
    </div>

    <div class="how-to-work">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4"><img src="https://via.placeholder.com/600x800.png" alt="image" class="rounded-lg img-fluid shadow-xs"></div>
                <div class="col-lg-6 offset-lg-1 page-title style1">
                    <h2 class="fw-700 text-grey-800 display1-size lh-3 pt-lg--5">ما نوفره من خدمات</h2>
                    <p class="font-xsss fw-400 text-grey-500 lh-28 mt-0 mb-0  mt-3 w-75 w-xs-90">نسعد بخدمتهم دائما</p>
                    @foreach($services as $service)
                    <h4 class="fw-600 font-sm mt-4 mb-2"><i class="ti-check btn-round-xs text-white bg-success mr-2 border"></i>{{$service->title}}</h4>
                    <p class="fw-300 font-xsss lh-28 text-grey-500 mt-0 ml-4 pl-3 w-75 w-xs-90">{!! $service->description !!}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="popular-wrapper pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-left mb-5 pb-0">

                    <h2 class="text-grey-800 fw-700 font-xl lh-2">ما يقولوه المستخدمين</h2>
                </div>

                <div class="col-lg-12">
                    <div class="feedback-slider2 owl-carousel owl-theme overflow-visible dot-none right-nav pb-4 nav-xs-none">
                        @foreach($testimonials as $testimonial)
                            <div class="owl-items bg-transparent">
                                <div class="card w-100 p-0 bg-transparent text-left border-0">
                                    <div class="card-body p-5 bg-white shadow-xss rounded-lg triangle-after">
                                        <p class="font-xsss fw-500 text-grey-700 lh-30 mt-0 mb-0 ">{!! $testimonial->content !!}</p>
                                    </div>
                                    <div class="card-body p-0 mt-5 bg-transparent">
                                        <img loading="lazy" src="{{$testimonial->getFirstMediaUrl('images')}}" alt="{!! $testimonial->content !!}" class="w45 float-left ml-3">
                                        <h4 class="text-grey-900 fw-700 font-xsss mt-0 pt-1">{{$testimonial->name}}</h4>
                                        <h5 class="font-xssss fw-500 mb-1 text-grey-500">{{$testimonial->job}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
