@extends('admin.layouts.app')

@section('title')
    @if($request->keyword) {{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} -  @else صندوق المحذوفات -  @endif
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/extensions/rowlink.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/mail_list.js')}}"></script>
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
                            <a href="{{route('mail.index')}}" class="nav-link">
                                <i class="icon-drawer-in"></i>
                                البريد الوارد
                                <span class="badge bg-success badge-pill ml-auto">{{$contactUsCount}}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('mail.sender')}}" class="nav-link"><i class="icon-drawer-out"></i>البريد المرسل</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mail.delete')}}" class="nav-link active"><i class="icon-bin"></i>المحذوفات</a>
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">صندوق المحذوفات</span> - الصفحة الرئيسية</h4>
                <a href="javascript: void(0);" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <form action="" method="get">
                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="search" class="form-control wmin-200" name="keyword" value="{{Request::old('keyword') ? Request::old('keyword') : $request->keyword}}" placeholder="إبحث في الرسائل">
                        <div class="form-control-feedback">
                            <i class="icon-search4 font-size-base text-muted"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{url('dashboard')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                    <a href="{{route('mail.index')}}" class="breadcrumb-item">البريد الوارد</a>
                    @if($request->keyword)
                        <a href="{{route('mail.delete')}}" class="breadcrumb-item"> صندوق المحذوفات</a>
                    @endif
                    <span class="breadcrumb-item active">@if($request->keyword){{Request::old('keyword') ? Request::old('keyword') : $request->keyword}} @else صندوق المحذوفات @endif</span>
                </div>
             </div>
        </div>
    </div> <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Multiple lines -->
        <div class="card">
            <div class="card-header bg-transparent header-elements-inline">
                <h6 class="card-title">صندوق المحذوفات الخاص بي</h6>
            </div>

            <!-- Action toolbar -->
            <div class="navbar navbar-light bg-light navbar-expand-lg border-bottom-0 py-lg-2">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler w-100" data-toggle="collapse" data-target="#inbox-toolbar-toggle-multiple">
                        <i class="icon-circle-down2"></i>
                    </button>
                </div>

                <div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-multiple">
                    <div class="mt-3 mt-lg-0">
                        <div class="btn-group ml-3 mr-lg-3">
                            <a href="{{route('mail.create')}}" class="btn btn-light"><i class="icon-pencil7"></i> <span class="d-none d-lg-inline-block ml-2">إنشاء</span></a>
                          </div>
                    </div>
                    {!! $contacts->render('pagination::mail') !!}

                </div>
            </div><!-- /action toolbar -->


            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-inbox">
                    <tbody data-link="row" class="rowlink">
                    @foreach($contacts as $contact)
                    <tr @if($contact->is_read == 1)  @else class="unread" @endif>
                        <td class="table-inbox-checkbox rowlink-skip">

                        </td>
                        <td class="table-inbox-image">
                            <span class="btn @if($loop->even) bg-indigo-400 @else bg-pink-400 @endif rounded-circle btn-icon btn-sm">
                                <span class="letter-icon"></span>
                            </span>
                        </td>
                        <td class="table-inbox-name">
                            <a href="javascript: void(0);" disabled>
                                <div class="letter-icon-title text-default">{{$contact->name}}</div>
                            </a>
                        </td>
                        <td class="table-inbox-message">
                            {!! $contact->message !!}
                        </td>

                        <td class="table-inbox-time" title="{{$contact->created_at}}">
                            {{$contact->created_at->format('F jS')}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /table -->
        </div><!-- /multiple lines -->
    </div> <!-- /content area -->
@endsection
