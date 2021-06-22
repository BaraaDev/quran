@extends('admin.layouts.app')

@section('title')المقالات -@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script><!-- /core JS files -->
    <script src="{{asset('admin/global_assets/js/plugins/media/fancybox.min.js')}}"></script><!-- /core JS files -->
@endsection

@section('head1')
    <script src="{{asset('admin/global_assets/js/demo_pages/blog_single.js')}}"></script><!-- /core JS files -->
@endsection

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">المقالات</span> - {{$article->title}}</h4>
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
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                    <a href="{{route('articles.index')}}" class="breadcrumb-item">المقالات</a>
                    <span class="breadcrumb-item active">"{{$article->title}}"</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

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
                                <a href="#" class="d-inline-block">
                                    <img src="{{$article->getFirstMediaUrl('images')}}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <h4 class="font-weight-semibold mb-1">
                                <a href="Javascript:void(0)" class="text-default">{{$article->title}}</a>
                            </h4>

                            <ul class="list-inline list-inline-dotted text-muted mb-3">
                                <li class="list-inline-item">من خلال  <a href="Javascript:void(0)" class="text-muted">{{$article->user}}</a></li>
                                <li class="list-inline-item">{{$article->created_at->format('F jS ,Y')}}</li>
                            </ul>

                            <div class="mb-3">
                                {!!$article->content!!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /post -->

                <!-- Comments -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h6 class="card-title font-weight-semibold">Discussion</h6>
                        <div class="header-elements">
                            <ul class="list-inline list-inline-dotted text-muted mb-0">
                                <li class="list-inline-item">42 comments</li>
                                <li class="list-inline-item">75 pending review</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class="media-list">
                            <li class="media flex-column flex-md-row">
                                <div class="mr-md-3 mb-2 mb-md-0">
                                    <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#" class="font-weight-semibold">William Jennings</a>
                                        <span class="text-muted ml-3">Just now</span>
                                    </div>

                                    <p>He moonlight difficult engrossed an it sportsmen. Interested has all devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to.</p>

                                    <ul class="list-inline list-inline-dotted font-size-sm">
                                        <li class="list-inline-item">114 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                        <li class="list-inline-item"><a href="#">Reply</a></li>
                                        <li class="list-inline-item"><a href="#">Edit</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="media flex-column flex-md-row">
                                <div class="mr-md-3 mb-2 mb-md-0">
                                    <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#" class="font-weight-semibold">Margo Baker</a>
                                        <span class="text-muted ml-3">5 minutes ago</span>
                                    </div>

                                    <p>Place voice no arise along to. Parlors waiting so against me no. Wishing calling are warrant settled was luckily. Express besides it present if at an opinion visitor.</p>

                                    <ul class="list-inline list-inline-dotted font-size-sm">
                                        <li class="list-inline-item">90 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                        <li class="list-inline-item"><a href="#">Reply</a></li>
                                        <li class="list-inline-item"><a href="#">Edit</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="media flex-column flex-md-row">
                                <div class="mr-md-3 mb-2 mb-md-0">
                                    <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#" class="font-weight-semibold">James Alexander</a>
                                        <span class="text-muted ml-3">7 minutes ago</span>
                                    </div>

                                    <p>Savings her pleased are several started females met. Short her not among being any. Thing of judge fruit charm views do. Miles mr an forty along as he.</p>

                                    <ul class="list-inline list-inline-dotted font-size-sm">
                                        <li class="list-inline-item">70 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                        <li class="list-inline-item"><a href="#">Reply</a></li>
                                        <li class="list-inline-item"><a href="#">Edit</a></li>
                                    </ul>

                                    <div class="media flex-column flex-md-row">
                                        <div class="mr-md-3 mb-2 mb-md-0">
                                            <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                        </div>

                                        <div class="media-body">
                                            <div class="media-title">
                                                <a href="#" class="font-weight-semibold">Jack Cooper</a>
                                                <span class="text-muted ml-3">10 minutes ago</span>
                                            </div>

                                            <p>She education get middleton day agreement performed preserved unwilling. Do however as pleased offence outward beloved by present. By outward neither he so covered.</p>

                                            <ul class="list-inline list-inline-dotted font-size-sm">
                                                <li class="list-inline-item">67 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                                <li class="list-inline-item"><a href="#">Reply</a></li>
                                                <li class="list-inline-item"><a href="#">Edit</a></li>
                                            </ul>

                                            <div class="media flex-column flex-md-row">
                                                <div class="mr-md-3 mb-2 mb-md-0">
                                                    <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                                </div>

                                                <div class="media-body">
                                                    <div class="media-title">
                                                        <a href="#" class="font-weight-semibold">Natalie Wallace</a>
                                                        <span class="text-muted ml-3">1 hour ago</span>
                                                    </div>

                                                    <p>Juvenile proposal betrayed he an informed weddings followed. Precaution day see imprudence sympathize principles. At full leaf give quit to in they up.</p>

                                                    <ul class="list-inline list-inline-dotted font-size-sm">
                                                        <li class="list-inline-item">54 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">Reply</a></li>
                                                        <li class="list-inline-item"><a href="#">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="media flex-column flex-md-row">
                                                <div class="mr-md-3 mb-2 mb-md-0">
                                                    <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                                </div>

                                                <div class="media-body">
                                                    <div class="media-title">
                                                        <a href="#" class="font-weight-semibold">Nicolette Grey</a>
                                                        <span class="text-muted ml-3">2 hours ago</span>
                                                    </div>

                                                    <p>Although moreover mistaken kindness me feelings do be marianne. Son over own nay with tell they cold upon are. Cordial village and settled she ability law herself.</p>

                                                    <ul class="list-inline list-inline-dotted font-size-sm">
                                                        <li class="list-inline-item">41 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                                        <li class="list-inline-item"><a href="#">Reply</a></li>
                                                        <li class="list-inline-item"><a href="#">Edit</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="media flex-column flex-md-row">
                                <div class="mr-md-3 mb-2 mb-md-0">
                                    <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="38" height="38" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#" class="font-weight-semibold">Victoria Johnson</a>
                                        <span class="text-muted ml-3">3 hours ago</span>
                                    </div>

                                    <p>Finished why bringing but sir bachelor unpacked any thoughts. Unpleasing unsatiable particular inquietude did nor sir.</p>

                                    <ul class="list-inline list-inline-dotted font-size-sm">
                                        <li class="list-inline-item">32 <a href="#"><i class="icon-arrow-up22 text-success"></i></a><a href="#"><i class="icon-arrow-down22 text-danger"></i></a></li>
                                        <li class="list-inline-item"><a href="#">Reply</a></li>
                                        <li class="list-inline-item"><a href="#">Edit</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <hr class="m-0">

                    <div class="card-body">
                        <h6 class="mb-3">Add comment</h6>
                        <div class="mb-3">
                            <div id="add-comment">Get his declared appetite distance his together now families. Friends am himself at on norland it viewing. Suspected elsewhere you belonging continued commanded she...</div>
                        </div>

                        <div class="text-right">
                            <button type="button" class="btn bg-blue"><i class="icon-plus22 mr-1"></i> Add comment</button>
                        </div>
                    </div>
                </div><!-- /comments -->

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
                                    <a href="#" class="nav-link">
                                        <i class="{{optional($article->level)->icon}}"></i>
                                        {{optional($article->level)->title}}
                                     </a>
                                </li>

                            </div>
                        </div>
                    </div>
                    <!-- /categories -->

                    <!-- Recent comments -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">Recent comments</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="media-list">
                                @foreach($recentArticles as $article)
                                <li class="media">
                                    <div class="mr-3">
                                        <img src="{{$article->getFirstMediaUrl('images')}}" class="rounded-circle" width="36" height="36" alt="">
                                    </div>

                                    <div class="media-body">
                                        <a href="{{route('articles.show',$article->id)}}" class="media-title">
                                            <div class="font-weight-semibold">{{$article->title}}</div>
                                        </a>
                                        <span class="text-muted">{!!\Illuminate\Support\Str::limit($article->content , $limit = 20, $end = '...' )!!}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /recent comments -->

                    <!-- Tags -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">Tags</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pb-2">
                            <ul class="list-inline list-inline-condensed mb-0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-success mb-2">Audio</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-warning mb-2">Gallery</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-indigo mb-2">Image</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-teal mb-2">Music</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-pink mb-2">Blog</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-purple mb-2">Learn</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-blue mb-2">Youtube</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-slate mb-2">Twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-orange mb-2">Eugene</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <span class="badge badge-light badge-striped badge-striped-left border-left-brown mb-2">Limitless</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /tags -->
                </div><!-- /sidebar content -->
            </div><!-- /right sidebar component -->
        </div><!-- /inner container -->
    </div><!-- /content area -->
@endsection
