@extends('admin.layouts.app')

@section('title')الأحداث -@endsection
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - {{$event->title}}</h4>
            </div>
            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('events.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إنشاء حدث جديد</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> لوحة التحكم</a>
                    <a href="{{route('events.index')}}" class="breadcrumb-item">الأحداث</a>
                    <span class="breadcrumb-item active">"{{$event->title}}"</span>
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
                                <a href="Javascript:void(0)" class="d-inline-block">
                                    <img src="{{$event->getFirstMediaUrl('images')}}" class="img-fluid" alt="">
                                </a>
                            </div>

                            <h4 class="font-weight-semibold mb-1">
                                <a href="Javascript:void(0)" class="text-default">{{$event->title}}</a>
                            </h4>

                            <ul class="list-inline list-inline-dotted text-muted mb-3">
                                <li class="list-inline-item">من خلال  <a href="Javascript:void(0)" class="text-muted">{{$event->user}}</a></li>
                                <li class="list-inline-item">{{$event->created_at->format('F jS ,Y')}}</li>
                            </ul>

                            <div class="mb-3">
                                {!!$event->description!!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /post -->
            </div><!-- /left content -->


            <!-- Right sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">
                <!-- Sidebar content -->
                <div class="sidebar-content">
                    <!-- Categories -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="card-title font-weight-semibold">المختارات</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="nav nav-sidebar my-2">

                                <li class="nav-item">
                                    <a href="Javascript:void(0)" class="nav-link"><i class="icon-stack"></i>{{optional($event->category)->name}}</a>
                                    <a href="Javascript:void(0)" class="nav-link"><i class="icon-alarm"></i>{{optional($event->appointment)->title}}</a>
                                </li>

                            </div>
                        </div>
                    </div>
                    <!-- /categories -->
                </div><!-- /sidebar content -->
            </div><!-- /right sidebar component -->
        </div><!-- /inner container -->
    </div><!-- /content area -->
@endsection
