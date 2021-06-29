@extends('admin.layouts.app')

@section('title')المقالات -@endsection
@section('head1')
{{----}}
@endsection

@section('head1')
{{----}}
@endsection
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">المقالات</span> - الرئيسية</h4>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('articles.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إنشاء مقال جديد</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>الرئيسية</a>
                     <span class="breadcrumb-item active">المقالات</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')

        <!-- Layout 1 -->
        @if (count($articles)  )
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">جميع المقالات</h6>
         </div>
        @else
            <div class="alert alert-warning alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء مقالات اولا من  <a href="{{route('articles.create')}}" class="alert-link">هنا</a>.
            </div>
        @endif
        <div class="row">
            @foreach($articles as $article)
            <div class="col-lg-6">
                <!-- Blog layout #1 with image -->
                <div class="card blog-horizontal">
                    <div class="card-header">
                        <h5 class="card-title font-weight-semibold">
                            <a href="Javascript:void(0)" class="text-default">{{$article->title}}</a>
                        </h5>
                    </div>

                    <div class="card-body">
                        <div class="card-img-actions mr-3">
                            <img class="card-img img-fluid" src="{{$article->getFirstMediaUrl('images')}}" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="{{route('articles.edit',$article->id)}}" title="تعديل المقال {{$article->title}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-pencil"></i>
                                </a>
                                {!! Form::open([
                                     'action' => ['Admin\ArticleController@destroy',$article->id],
                                     'method' => 'delete'
                                 ])!!}
                                <button title="حذف المقال {{$article->title}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" onclick="return confirm('هل أنت متأكد من حذف المقال {{$article->title}} ؟');">
                                    <i class="icon-cancel-circle2"></i>
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        {!!  \Illuminate\Support\Str::limit($article->content , $limit = 550, $end = '....' )!!}
                     </div>

                    <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                        <ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
                            <li class="list-inline-item">من خلال  <a href="Javascript:void(0)" class="text-muted">{{$article->user}}</a></li>
                            <li class="list-inline-item" title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$article->created_at->format('F jS ,Y')}}</li>
                            @if(optional($article->level)->id)
                            <li class="list-inline-item"><a href="Javascript:void(0)"><span class="badge bg-blue-300">{{optional($article->level)->title}}</span></a></li>
                            @else
                            <li class="list-inline-item"><a href="Javascript:void(0)"><s class="badge" style="background: #1c212d">لا توجد مستويات</s></a></li>
                            @endif
                        </ul>
                     </div>
                </div><!-- /blog layout #1 with image -->

            </div>
            @endforeach
        </div>
        <!-- Pagination -->
        {!! $articles->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
