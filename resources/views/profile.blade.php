@extends('layouts.app')


@section('contact')
    <div class="course-details pb-lg--7 pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="middle-sidebar-left">
                        <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-3" style="background-image: url(https://via.placeholder.com/1200x600.png);">
                            <div class="card-body p-lg-5 p-4 bg-black-08">
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-lg-12 pl-lg-5 pt-lg-5">
                                        <figure class="avatar ml-0 mb-4 position-relative w100 z-index-1"><img src="https://via.placeholder.com/100x100.png" alt="image" class="float-right p-1 bg-white rounded-circle w-100"></figure>
                                    </div>
                                    <div class="col-lg-4 pl-lg-5 pb-lg-5 pb-3">
                                        <h4 class="fw-700 font-md text-white mt-3 mb-1">{{$user->name}} <i class="ti-check font-xssss btn-round-xs bg-success text-white ml-1"></i></h4>
                                        <span class="font-xssss fw-600 text-grey-500 d-inline-block ml-0">{{$user->email}}</span>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden mb-4">
                            <ul class="nav nav-tabs xs-p-4 d-flex align-items-center justify-content-between product-info-tab border-bottom-0" id="pills-tab" role="tablist">
                                <li class="active list-inline-item"><a class="fw-700 pb-sm-5 pt-sm-5 xs-mb-2 mr-sm-5 font-xssss text-grey-500 ls-3 d-inline-block text-uppercase active" href="#navtabs0" data-toggle="tab">About</a></li>

                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="navtabs0">
                                <div class="card d-block w-100 border-0 shadow-xss rounded-lg overflow-hidden p-4">
                                    <div class="card-body mb-3 pb-0"><h2 class="fw-400 font-lg d-block">  <b>About Me</b> <a href="#" class="float-right"><i class="feather-edit text-grey-500 font-xs"></i></a></h2></div>
                                    <div class="card-body pb-0">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                                                <p class="font-xssss fw-600 lh-28 text-grey-500 pl-0">I have a Business Management degree from Bangalore University and a long time Excel expert. I create professional Excel reports/dashboards for clients and conduct Excel workshops for business professionals. Currently am a freelance motion graphics artist and a Music producer. I like to be productive and creative at work. I like to continuously increase my skills and stay in tuned with the technology industry.</p>
                                                <ul class="d-flex align-items-center mt-2 mb-3 float-left">
                                                    <li class="mr-2"><a href="#" class="btn-round-md bg-facebook"><i class="font-xs ti-facebook text-white"></i></a></li>
                                                    <li class="mr-2"><a href="#" class="btn-round-md bg-twiiter"><i class="font-xs ti-twitter-alt text-white"></i></a></li>
                                                    <li class="mr-2"><a href="#" class="btn-round-md bg-linkedin"><i class="font-xs ti-linkedin text-white"></i></a></li>
                                                    <li class="mr-2"><a href="#" class="btn-round-md bg-instagram"><i class="font-xs ti-instagram text-white"></i></a></li>
                                                    <li class="mr-2"><a href="#" class="btn-round-md bg-pinterest"><i class="font-xs ti-pinterest text-white"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
