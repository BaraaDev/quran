@extends('admin.layouts.app')

@section('title')الأحداث -@endsection
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - الأحداث</h4>
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
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>لوحة التحكم</a>
                     <span class="breadcrumb-item active">الأحداث</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->
    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')
    <!-- Layout 1 -->
        @if (count($events)  )
            <div class="mb-3">
                <h6 class="mb-0 font-weight-semibold">جميع الأحداث</h6>
            </div>
        @else
            <div class="alert alert-warning alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء أحداث اولا من  <a href="{{route('events.create')}}" class="alert-link">هنا</a>.
            </div>
        @endif
        <!-- Post grid -->
        <div class="row">
            @foreach($events as $event)
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body">
                        <div class="card-img-actions mb-3">
                            <img class="card-img img-fluid" src="{{$event->getFirstMediaUrl('images')}}" alt="">
                            <div class="card-img-actions-overlay card-img">
                                <a href="{{route('events.edit',$event->id)}}" title="تعديل الحدث {{$event->title}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                    <i class="icon-pencil"></i>
                                </a>
                                {!! Form::open([
                                     'action' => ['Admin\EventController@destroy',$event->id],
                                     'method' => 'delete'
                                 ])!!}
                                <button title="حذف الحدث {{$event->title}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" onclick="return confirm('هل أنت متأكد من حذف الحدث {{$event->title}} ؟');">
                                    <i class="icon-cancel-circle2"></i>
                                </button>
                                {!! Form::close() !!}
                            </div>
                        </div>

                        <h5 class="font-weight-semibold mb-1">
                            <a href="{{route('events.show',$event->id)}}" class="text-default">{{$event->title}}</a>
                        </h5>

                        <ul class="list-inline list-inline-dotted text-muted mb-3">
                            <li class="list-inline-item">By <a href="Javascript:void(0)" class="text-muted">{{$event->user}}</a></li>
                            <li class="list-inline-item">{{$event->created_at->format('F jS ,Y')}}</li>
                        </ul>
                        {!!\Illuminate\Support\Str::limit( $event->description , $limit = 199, $end = '...' ) !!}
                    </div>

                    <div class="card-footer d-flex">
                        <a href="{{route('events.show',$event->id)}}" class="text-default">اقرأ أكثر<i class="icon-arrow-left13 ml-2"></i></a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
        <!-- /post grid -->

    <!-- Pagination -->
    {!! $events->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
