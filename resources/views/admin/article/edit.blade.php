@extends('admin.layouts.app')

@section('title')تعديل المقال {{$model->title}} -@endsection


@section('head1')
    <script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
@endsection
@section('head2')
    <script src="{{asset('admin/global_assets/js/demo_pages/form_inputs.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/form_select2.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/forms/inputs/passy.js')}}"></script>
@endsection
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">{{$model->title}}</span> - الرئيسية</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
                    <a href="{{route('articles.index')}}" class="breadcrumb-item"> المقالات</a>
                    <span class="breadcrumb-item active">تعديل المقال "{{$model->title}}"</span>
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
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <p class="mb-4">تحقق جيداً من البيانات</p>

                <form action="{{route('articles.update',$model->id)}}" method="post" files="true" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <fieldset class="mb-3">
                        @include('admin.article.form')
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">تعديل المقال<i class="icon-pencil ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div><!-- /form inputs -->
    </div><!-- /content area -->
@endsection
