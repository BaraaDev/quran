@extends('layouts.app')

@section('contact')
    <div class="page-nav bg-lightblue pt-lg--7 pb-lg--7 pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center"><h1 class="text-grey-800 fw-700 display3-size">{{$levels->title}} <span class="font-xsss text-grey-600 fw-600 d-block mt-2"><a href="{{route('home')}}" class="font-xsss text-success fw-600">الرئيسية</a> / <a href="{{route('article.index')}}" class="font-xsss text-success fw-600 ">المقالات</a> / {{$levels->title}}</span></h1></div>
            </div>
        </div>
    </div>

    <div class="blog-page pt-lg--7 pb-lg--7 pt-5 pb-5 bg-white">
        <div class="container">
            <div class="row">
            @foreach($articles as $article)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <article class="post-article p-0 border-0 shadow-xss rounded-lg overflow-hidden">
                        <a href="blog-single.html"><img src="{{$article->getFirstMediaUrl('images')}}" alt="{{$article->title}}" class="w-100"></a>
                        <div class="post-content p-4">
                            <a href="{{route('level.index',optional($article->level)->id)}}" class="font-xsss text-success fw-600 float-left">{{optional($article->level)->title}}</a>
                            <h6 class="font-xssss text-grey-500 fw-600 mr-3 float-left" title="{{$article->created_at}}"><i class="ti-time mr-2"></i>{{$article->created_at->format('j F ,Y')}}</h6>
                            <h6 class="font-xssss text-grey-500 fw-600 mr-3 float-left"><i class="ti-user mr-2"></i>{{$article->user}}</h6>
                            <div class="clearfix"></div>
                            <h2 class="post-title mt-2 mb-2 pl-3"><a href="#" class="lh-30 font-sm cairo-font text-grey-800 fw-700">{{$article->title}}</a></h2>
                            <p class="font-xssss fw-400 text-grey-500 lh-28 mt-0 mb-2 pl-3"> {!!Illuminate\Support\Str::limit($article->content , $limit = 130, $end = '....' )!!}</p>
                            <a href="{{route('article.show',$article->id)}}" class="rounded-xl text-white bg-current w125 p-2 lh-32 font-xsss text-center fw-500 d-inline-block mb-0 mt-2">مشاهدة المزيد</a>
                        </div>
                    </article>
                </div>
            @endforeach
                {!! $articles->render('pagination::articlesInWeb') !!}
            </div>
        </div>
    </div>
@endsection
