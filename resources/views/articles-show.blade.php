@extends('layouts.app')

@section('contact')
    <div class="post-title page-nav pt-lg--7 pt-lg--7 pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h6 class="text-uppercase fw-600 ls-3 text-success font-xsss">{{optional($article->level)->title}}</h6>
                    <h2 class="mt-3 mb-2"><a href="#" class="lh-2 display2-size display2-md-size mont-font text-grey-900 fw-700">{{$article->title}}</a></h2>
                    <h6 class="font-xssss text-grey-500 fw-600 ml-3 mt-3 d-inline-block" title="{{$article->created_at}}"><i class="ti-time mr-2"></i>{{$article->created_at->format('j F ,Y')}}</h6>
                    <h6 class="font-xssss text-grey-500 fw-600 ml-3 mt-3 d-inline-block"><i class="ti-user mr-2"></i> {{$article->user}}</h6>
                    <h6 class="font-xssss text-grey-500 fw-600 ml-3 mt-3 d-inline-block"><i class="ti-comments mr-2"></i> {{$comments->count()}} تعليق </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="post-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{$article->getFirstMediaUrl('images')}}" alt="{{$article->title}}" class="img-fluid rounded-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="post-content pt-lg--7 pt-lg--7 pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-left">
                    {!! $article->content  !!}
                </div>

                <div class="col-lg-8 offset-lg-2 comments-section bottom-border">
                    <div class="comments-list">
                        <h4 class="text-grey-900 font-sm fw-700 mt-5 mb-5" id="comments">التعليقات</h4>
                        @foreach($comments as $comment)
                        <div class="section full mb-5">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                                    <figure class="avatar mr-0">
                                        <a href="#" class="profile-detail-bttn"><img src="https://via.placeholder.com/100x100.png" class="rounded-circle w75" alt="image"></a>
                                    </figure>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9 pl-1 pr-0">
                                    <h4 class="mt-1 font-xss text-grey-900 fw-700">{{optional($comment->user)->name}}</h4>
                                    <h6 class="text-grey-500 mb-1 mt-0 d-block fw-500 mb-0 ls-2">{{$comment->created_at->diffForHumans()}}</h6>
                                    <p class="font-xsss fw-400 lh-26 text-grey-500 mb-1 mt-2">{!! $comment->comment !!}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="post-comment pt-7 pb-7 bg-greyblue">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  text-center">
                    <h4 class="mb-4 pb-3 text-grey-900 fw-700 font-xl">أترك تعليقك هنا</h4>
                    <form action="{{route('comment.store' ,['id' =>$article->id])}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <textarea name="comment" class="w-100 border-0 h125 p-3"> </textarea>
                                </div>
                                <div class="form-group"><button class="form-control style2-input bg-current text-white font-xss fw-500 p-0 w175">ارسل تعليقك</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
