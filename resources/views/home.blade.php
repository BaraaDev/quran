@extends('layouts.app')


@section('contact')

<div class="banner-wrapper bg-lightblue-after">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center pt-lg--10 pt-7">
                <h1 class="fw-700 text-grey-900 display4-size display4-xs-size lh-1 mb-3 pt-5 aos-init" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">{{$settingsFind->title}}</h1>
                <p class="fw-300 font-xsss lh-28 text-grey-500 pl-lg--5 pr-lg--5 aos-init" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">{!! $settingsFind->description!!}</p>
                <a href="javascript:void(00)" class="btn border-0 bg-dark text-uppercase p-3 text-white fw-700 ls-3 rounded-lg d-inline-block font-xssss btn-light mt-3 w200 aos-init" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">إبدا الان معنا</a>
            </div>
            <div class="col-lg-12">
                <img loading="lazy" src="{{$settingsFind->getFirstMediaUrl('images')}}" alt="image" class="img-fluid pt-0 aos-init" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
            </div>
        </div>
    </div>
</div>

<div class="brand-wrapper pt-5 pb-7 pb-lg--7">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-slider owl-carousel owl-theme overflow-visible dot-none">
                    <div class="owl-items text-center"><img src="https://via.placeholder.com/120x40.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                    <div class="owl-items text-center"><img src="https://via.placeholder.com/120x40.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                    <div class="owl-items text-center"><img src="https://via.placeholder.com/120x40.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                    <div class="owl-items text-center"><img src="https://via.placeholder.com/120x40.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                    <div class="owl-items text-center"><img src="https://via.placeholder.com/120x40.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                    <div class="owl-items text-center"><img src="https://via.placeholder.com/120x40.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center mb-3">
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-xl ls-2 alert-success d-inline-block text-success mr-1">How to work</span>
                <h2 class="text-grey-900 fw-700 font-xxl pb-3 mb-0 mt-3 d-block lh-3">Choose the way that's right for your business</h2>
                <p class="fw-300 font-xsss lh-28 text-grey-500">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-3 p-4 text-center @if($loop->first)  @else arrow-right @endif">
                <span class="btn-round-xxxl alert-primary text-primary display1-size open-font fw-900">{{$service->icon}}</span>
                <h3 class="fw-700 font-xss text-grey-900 mt-4">{{$service->title}}</h3>
                <p class="fw-500 font-xssss lh-24 text-grey-500 mb-0">{!! $service->description !!}</p>
            </div>
            @endforeach
        </div>

    </div>
</div>
@foreach($appointments as $appointment)
<div class="feature-wrapper layer-after pt-lg--7 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 @if($loop->first)offset-lg-1 @else order-lg-2 @endif">
                <img loading="lazy" src="{{$appointment->getFirstMediaUrl('images')}}" alt="{{$appointment->title}}" class="@if($loop->first) img-fluid @else w-100 @endif aos-init" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
            </div>
            <div class="col-lg-4 @if($loop->first) @else order-lg-1 pt-lg--5 offset-lg-1 @endif">
                @if($time >= Carbon\Carbon::parse($appointment->start_at)->format('H') && $time <= Carbon\Carbon::parse($appointment->end_at)->format('H') )
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 mt-4 text-uppercase rounded-xl ls-2 alert-success d-inline-block text-success mr-1"> متاح الآن</span>
                @else
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 mt-4 text-uppercase rounded-xl ls-2 alert-warning d-inline-block text-warning mr-1"> مغلق الآن</span>
                @endif
                <h2 class="text-grey-900 fw-700 display1-size pb-3 mb-0 mt-3 d-block lh-3 aos-init" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">{{$appointment->title}}</h2>
                <p class="fw-400 font-xsss lh-28 text-grey-500 aos-init" data-aos="fade-up" data-aos-delay="300" data-aos-duration="500">{!! $appointment->content !!}</p>
                <a href="javascript:void(0);" class="btn border-0 bg-primary p-3 text-white fw-600 rounded-lg d-inline-block font-xssss btn-light mt-3 w150 aos-init" data-aos="fade-up" data-aos-delay="400" data-aos-duration="500">Subscribe</a>
            </div>
        </div>
    </div>
</div>
@endforeach


<div class="blog-page pt-lg--5 pt-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center mb-5">
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-xl ls-2 alert-warning d-inline-block text-warning mr-1">Blog</span>
                <h2 class="text-grey-900 fw-700 font-xxl pb-3 mb-0 mt-3 d-block lh-3">Dont Miss Out Our Story</h2>
                <p class="fw-300 font-xsss lh-28 text-grey-500">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <article class="post-article p-0 border-0 shadow-xss rounded-lg overflow-hidden">
                        <a href="{{route('article.show',$article->id)}}"><img loading="lazy" src="{{$article->getFirstMediaUrl('images')}}" alt="{{$article->title}}" class="w-100"></a>
                        <div class="post-content p-4">
                            <a href="{{route('level.index',optional($article->level)->id)}}" class="font-xsss text-success fw-600 float-left">{{optional($article->level)->title}}</a>
                            <h6 class="font-xssss text-grey-500 fw-600 mr-3 float-left" title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}"><i class="ti-time mr-2"></i>{{$article->created_at->format('j F ,Y')}}</h6>
                            <h6 class="font-xssss text-grey-500 fw-600 mr-3 float-left"><i class="ti-user mr-2"></i>{{$article->user}}</h6>
                            <div class="clearfix"></div>
                            <h2 class="post-title mt-2 mb-2 pl-3"><a href="javascript:void(0)" class="lh-30 font-sm cairo-font text-grey-800 fw-700">{{$article->title}}</a></h2>
                            <p class="font-xssss fw-400 text-grey-500 lh-28 mt-0 mb-2 pl-3"> {!!Illuminate\Support\Str::limit($article->content , $limit = 130, $end = '....' )!!}</p>
                            <a href="{{route('article.show',$article->id)}}" class="rounded-xl text-white bg-current w125 p-2 lh-32 font-xsss text-center fw-500 d-inline-block mb-0 mt-2">مشاهدة المزيد</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="service-wrapper layer-after">
    <div class="container">
        <div class="row justify-content-center">
            <div class="page-title style1 col-xl-6 col-lg-8 col-md-10 text-center mb-5">
                <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-xl ls-2 alert-warning d-inline-block text-warning mr-1">Feedback</span>
                <h2 class="text-grey-900 fw-700 font-xxl pb-3 mb-0 mt-3 d-block lh-3">We help not one, <br>But many Companies</h2>
                <p class="fw-300 font-xssss lh-28 text-grey-500">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dol ad minim veniam, quis nostrud exercitation</p>
            </div>
        </div>
        <div class="row">
            @foreach($events as $event)
            <div class="col-lg-6">
                <div class="card w-100 border-0 p-4 text-center d-block shadow-xss rounded-xxl">
                    <div class="card-image p-4 bg-lightblue rounded-xxl"><img src="{{$event->getFirstMediaUrl('images')}}" alt="{{$event->title}}" class="img-fluid p-4"></div>
                    <h2 class="font-md fw-700 text-grey-900 mt-4 mb-0">{{$event->title}}</h2>
                    <p class="fw-300 font-xssss lh-28 text-grey-500 p-3">{!! $event->description !!}</p>
                    <a href="{{$event->link}}" rel="nofollow" target="_blank" class="btn border-0  bg-primary  text-white fw-600 rounded-lg d-inline-block font-xssss btn-light mt-1 os-init" type="text" style="border: 0; padding: 5px 10px;" value="https://www.google.com/?gws_rd=ssl" id="myInput">  اضغط للذهاب للجلسة</a>
                    @if($event->status == 1)
                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-xl ls-2 alert-warning d-inline-block text-warning mr-1">متاحة</span>
                    @else
                    <span class="font-xsssss fw-700 pl-3 pr-3 lh-32 text-uppercase rounded-xl ls-2 alert-warning d-inline-block text-warning mr-1">مغلق</span>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="feedback-wrapper pt-lg--7 pb-lg--7 pb-5 pt-5">
    <div class="container">
        @if(count($testimonials))
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

        @else
            <div class="col-lg-6 text-center mb-5 pb-0">

                <h2 class="text-grey-800 fw-700 font-xl lh-2">لا يوجد أراء</h2>
            </div>
        @endif
    </div>
</div>

@endsection

@section('footer')
    <script>
        AOS.init();
        function myFunction() {
            var copyText = document.getElementById("myInput");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
    </script>
    @endsection
