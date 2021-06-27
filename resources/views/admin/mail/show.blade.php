@extends('admin.layouts.app')

@section('title')
    {{$contact_us->name}} -
@endsection


@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/mail_list_read.js')}}"></script>
@endsection
@section('content')

@section('sidebar')
    <!-- Secondary sidebar -->
    <div class="sidebar sidebar-light sidebar-secondary sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="javascript: void(0);" class="sidebar-mobile-secondary-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            <a href="javascript: void(0);" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div><!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- Actions -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">أجراءات</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <a href="{{route('mail.create')}}" class="btn bg-indigo-400 btn-block">كتابة رسالة</a>
                </div>
            </div><!-- /actions -->


            <!-- Sub navigation -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">التنقل بين البريد</span>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body p-0">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <li class="nav-item-header">المجلدات</li>
                        <li class="nav-item">
                            <a href="{{route('mail.index')}}" class="nav-link active">
                                <i class="icon-drawer-in"></i>
                                صندوق الوارد
                                <span class="badge bg-success badge-pill ml-auto">{{$contactUsCount}}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('mail.sender')}}" class="nav-link"><i class="icon-drawer-out"></i>البريد المرسل</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mail.delete')}}" class="nav-link"><i class="icon-bin"></i>المحذوفات</a>
                        </li>

                    </ul>
                </div>
            </div><!-- /sub navigation -->
        </div><!-- /sidebar content -->
    </div><!-- /secondary sidebar -->
@endsection



<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">صندوق البريد</span> - قراءة رسالة {{$contact_us->name}}</h4>
            <a href="javascript: void(0);" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{url('dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                <a href="{{route('mail.index')}}" class="breadcrumb-item">صندوق البريد</a>
                <span class="breadcrumb-item active">{{$contact_us->name}}</span>
            </div>
        </div>
    </div>
</div><!-- /page header -->


<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-md-flex align-items-md-start">
        <!-- Right content -->
        <div class="flex-fill overflow-auto">

            <!-- Single mail -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <h6 class="card-title">{{$contact_us->subject}}</h6>
                </div>
                <!-- Action toolbar -->
                <div class="navbar navbar-light bg-light navbar-expand-lg py-lg-2 rounded-top">
                    <div class="text-center d-lg-none w-100">
                        <button type="button" class="navbar-toggler w-100 h-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-read">
                            <i class="icon-circle-down2"></i>
                        </button>
                    </div>

                    <div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-read">
                        <div class="mt-3 mt-lg-0 mr-lg-3">
                            <div class="btn-group">
                                {!! Form::open([
                                    'action' => ['Admin\MailController@destroy',$contact_us->id],
                                    'method' => 'delete'
                                ])!!}
                                <button class="btn btn-light" onclick="return confirm('هل أنت متأكد من حذف بريد {{$contact_us->name}} ؟');"><i class="icon-bin"></i><span class="d-none d-lg-inline-block ml-2" >حذف</span></button>
                                {!! Form::close() !!}
                            </div>
                        </div>

                        <div class="navbar-text ml-lg-auto" title="{{$contact_us->created_at}}">{{$contact_us->created_at->format('F jS')}}</div>
                    </div>
                </div><!-- /action toolbar -->


                <!-- Mail details -->
                <div class="card-body">
                    <div class="media flex-column flex-md-row">
                        <a href="javascript: void(0);" class="d-none d-md-block mr-md-3 mb-3 mb-md-0">
                            <span class="btn bg-teal-400 btn-icon btn-lg rounded-round">
                                <span class="letter-icon"></span>
                            </span>
                        </a>

                        <div class="media-body">
                            <h6 class="mb-0">{{$contact_us->subject}}</h6>
                            <div class="letter-icon-title font-weight-semibold">{{$contact_us->name}} - <a href="tel:{{$contact_us->phone}}">{{$contact_us->phone}}</a><a href="mailto:{{$contact_us->email}}"> - {{$contact_us->email}}</a></div>
                        </div>
                    </div>
                </div><!-- /mail details -->


                <!-- Mail container -->
                <div class="card-body">
                    <div class="overflow-auto mw-100">
                       {!! $contact_us->message !!}
                    </div>
                </div><!-- /mail container -->
            </div><!-- /single mail -->
        </div><!-- /right content -->
    </div><!-- /inner container -->
</div><!-- /content area -->

@endsection
