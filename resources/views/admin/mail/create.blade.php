@extends('admin.layouts.app')

@section('title')
    كتابة رسالة \
@endsection
@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
@endsection

@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/mail_list.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
@endsection
@section('sidebar')
    <!-- Secondary sidebar -->
    <div class="sidebar sidebar-light sidebar-secondary sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="javascript: void(0);" class="sidebar-mobile-secondary-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            <a href="javascript: void(0);" class="sidebar-mobile-expand">
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
                    <a href="javascript: void(0);" class="btn bg-indigo-400 btn-block">كتابة رسالة</a>
                </div>
            </div><!-- /actions -->


            <!-- Sub navigation -->
            <div class="card">
                <div class="card-header bg-transparent header-elements-inline">
                    <span class="text-uppercase font-size-sm font-weight-semibold">التنقل</span>
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
                            <a href="{{route('mail.index')}}" class="nav-link ">
                                <i class="icon-drawer-in"></i>
                                صندوق الوارد
                                <span class="badge bg-success badge-pill ml-auto">{{$contactUsCount}}</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('mail.sender')}}" class="nav-link"><i class="icon-drawer-out"></i>البريد المرسل</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript: void(0);" class="nav-link"><i class="icon-bin"></i>المحذوفات</a>
                        </li>

                    </ul>
                </div>
            </div><!-- /sub navigation -->
        </div><!-- /sidebar content -->
    </div><!-- /secondary sidebar -->
@endsection
@section('content')

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - كتابة رسالة</h4>
             </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> الرئيسية</a>
                    <a href="{{route('mail.index')}}" class="breadcrumb-item">صندوق البريد</a>
                    <span class="breadcrumb-item active">كتابة رسالة</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!-- Inner container -->
        <div class="d-md-flex align-items-md-start">
            <!-- Right content -->
            <div class="flex-fill overflow-auto">
            @include('admin.layouts.partials.validation-errors')
                <!-- Single mail -->
                <div class="card">
                    <form action="{{route('mail.store')}}" method="post" >
                    @csrf
                    <!-- Action toolbar -->
                    <div class="navbar navbar-light bg-light navbar-expand-lg border-bottom-0 py-lg-2 rounded-top">
                        <div class="navbar-collapse text-center text-lg-left flex-wrap collapse" id="inbox-toolbar-toggle-write">
                            <div class="mt-3 mt-lg-0 mr-lg-3">
                                <button type="submit" class="btn bg-blue"><i class="icon-paperplane mr-2"></i>إرسال</button>
                            </div>
                        </div>
                    </div><!-- /action toolbar -->


                    <!-- Mail details -->
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="align-top py-0" style="width: 1%">
                                    <div class="py-2 mr-sm-3">الأسم:</div>
                                </td>
                                <td class="align-top py-0">
                                    <div class="d-sm-flex flex-sm-wrap">
                                        <input name="name" type="text" value="{{old('name')}}" class="form-control flex-fill w-auto py-2 px-0 border-0 rounded-0" required placeholder="الأسم">
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-top py-0" style="width: 1%">
                                    <div class="py-2 mr-sm-3">الهاتف:</div>
                                </td>
                                <td class="align-top py-0">
                                    <div class="d-sm-flex flex-sm-wrap">
                                        <input name="phone" type="text" value="{{old('phone')}}" class="form-control flex-fill w-auto py-2 px-0 border-0 rounded-0" required placeholder="اكتب رقم الهاتف">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-top py-0" style="width: 1%">
                                    <div class="py-2 mr-sm-3">إلي:</div>
                                </td>
                                <td class="align-top py-0">
                                    <div class="d-sm-flex flex-sm-wrap">
                                        <input name="email" type="email" value="{{old('email')}}" class="form-control flex-fill w-auto py-2 px-0 border-0 rounded-0" required placeholder="أضف المستلمين">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-top py-0">
                                    <div class="py-2 mr-sm-3">الموضوع:</div>
                                </td>
                                <td class="align-top py-0">
                                    <input name="subject" type="text" value="{{old('subject')}}" class="form-control py-2 px-0 border-0 rounded-0" required placeholder="أضف موضوعك">
                                </td>
                            </tr>
                            <tr>
                                <div class="d-sm-flex flex-sm-wrap">
                                    <input name="is_sender" type="hidden" value="1">
                                </div>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- /mail details -->


                    <!-- Mail container -->
                    <div class="card-body p-0">
                        <div class="overflow-auto mw-100">
                            <textarea name="message" rows="3" cols="3" class="form-control summernote" required> {{old('message')}}"</textarea>

                        </div>
                    </div><!-- /mail container -->
                    </form>
                </div><!-- /single mail -->
            </div><!-- /right content -->
        </div><!-- /inner container -->
    </div><!-- /content area -->
@endsection
