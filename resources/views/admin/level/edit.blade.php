@extends('admin.layouts.app')

@section('title')تعديل{{$model->title}} -@endsection


@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
@endsection
@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/form_inputs.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_select2.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
@endsection
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - {{$model->title}}</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('levels.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إنشاء مستوي جديد</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>الرئيسية</a>
                    <a href="{{route('levels.index')}}" class="breadcrumb-item"> المستويات</a>
                    <span class="breadcrumb-item active">تعديل "{{$model->title}}"</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.partials.validation-errors')
        <!-- Form inputs -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">تحقق من البيانات</h5>

            </div>


            <div class="card-body">
                <p class="mb-4">تحقق جيداً من البيانات</p>

                <form action="{{route('levels.update',$model->id)}}" method="post" files="true" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <fieldset class="mb-3">
                        @include('admin.level.form')
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">تعديل <i class="icon-pencil ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- /form inputs -->
    </div><!-- /content area -->
@endsection
