@extends('admin.layouts.app')

@section('title'){{$article->title}} -@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script><!-- /core JS files -->
    <script src="{{asset('admin/global_assets/js/plugins/media/fancybox.min.js')}}"></script><!-- /core JS files -->
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/blog_single.js')}}"></script><!-- /core JS files -->
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - {{$article->title}}</h4>
                <a href="javascript:void(0);" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <a href="{{route('articles.index')}}" class="breadcrumb-item">المقالات</a>
                    <span class="breadcrumb-item active">{{$article->title}}</span>
                </div>

                <a href="javascript:void(0);" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Inner container -->
        <div class="d-flex align-items-start flex-column flex-md-row">

            <!-- Left content -->
            <div class="w-100 overflow-auto order-2 order-md-1">

                <!-- Post -->
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="mb-3 text-center">
                                <a href="javascript:void(0);" class="d-inline-block">
                                    <img src="{{$article->getFirstMediaUrl('images')}}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <h4 class="font-weight-semibold mb-1">
                                <a href="javascript:void(0);" class="text-default">{{$article->title}}</a>
                            </h4>
                            <ul class="list-inline list-inline-dotted text-muted mb-3">
                                <li class="list-inline-item">من خلال <a href="javascript:void(0);" class="text-muted">{{$article->user}}</a></li>
                                <li class="list-inline-item" title="{{$article->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$article->created_at->format('F jS ,Y')}}</li>
                                <li class="list-inline-item"><a href="#comments" class="text-muted">@if(count($comments)) {{$comments->count()}} تعليق @else  لا يوجد تعليقات @endif</a></li>
                             </ul>
                            <div class="mb-3">
                                {!! $article->content !!}
                            </div>
                        </div>
                    </div>
                </div><!-- /post -->

                <!-- articles -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold" id="comments">المناقشة</h6>

                        <div class="header-elements">
                            <ul class="list-inline list-inline-dotted text-muted mb-0">
                                <li class="list-inline-item">@if(count($comments)) {{$comments->count()}} تعليق @else  لا يوجد تعليقات @endif</li>
                            </ul>
                        </div>
                    </div>
                    @include('admin.layouts.messages.message')
                    <div class="card-body">
                        <ul class="media-list">
                            @foreach($comments as $comment)
                            <li class="media flex-column flex-md-row">
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="javascript:void(0);" class="font-weight-semibold">{{optional($comment->user)->name}}</a>
                                        <span class="text-muted ml-3" title="{{$comment->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a')}}">{{$comment->created_at->diffForHumans()}}</span>
                                    </div>

                                    <p>{!! $comment->comment !!}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <hr class="m-0">

                    <div class="card-body">
                        <h6 class="mb-3">أضف تعليق</h6>
                        <form action="{{route('commentArticleStore' ,['id' =>$article->id])}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <textarea name="comment" id="add-comment"></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn bg-blue"><i class="icon-plus22 mr-1"></i> أضف تعليق</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /articles -->
            </div><!-- /left content -->

            <!-- Right sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                <!-- Sidebar content -->
                <div class="sidebar-content">

                    <!-- Categories -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">المتسويات</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="nav nav-sidebar my-2">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="icon-stats-bars4"></i>
                                        {{$article->level->title}}
                                    </a>
                                </li>
                            </div>
                        </div>
                    </div><!-- /categories -->

                    <!-- Recent comments -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">آخر المقالات</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="media-list">
                                @foreach($recentArticles as $articles)
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{$article->getFirstMediaUrl('images')}}" class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="{{route('articles.show',$articles->id)}}" class="media-title">
                                            <div class="font-weight-semibold">{{$articles->title}}</div>
                                        </a>

                                        <span class="text-muted">{!!\Illuminate\Support\Str::limit($articles->content , $limit = 30, $end = '....' )!!}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- /recent comments -->

                    <!-- Tags -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">العلامات</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pb-2">
                            <ul class="list-inline list-inline-condensed mb-0">
                                @foreach($article->tags as $article)
                                <li class="list-inline-item">
                                    <a href="{{route('tags.edit',$article->id)}}">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-success mb-2">{{$article->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div><!-- /tags -->
                </div><!-- /sidebar content -->
            </div><!-- /right sidebar component -->
        </div><!-- /inner container -->
    </div><!-- /content area -->
@endsection
