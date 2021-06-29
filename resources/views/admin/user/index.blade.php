@extends('admin.layouts.app')

@section('name')المستخدمين -@endsection
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
            <div class="page-name d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">المستخدمين</span> - الرئيسية</h4>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('users.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إنشاء مستخدم جديد</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>الرئيسية</a>
                     <span class="breadcrumb-item active">المستخدمين</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')

        <div class="mb-3 pt-2">
            <h6 class="mb-0 font-weight-semibold">
                جميع المستخدمين
            </h6>
            <span class="text-muted d-block">جميع المستخدمين بالموقع</span>
        </div>


        <div class="row">
            @foreach($users as $user)
            <div class="col-xl-3 col-md-6">
                <div class="card card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="javascript:void(0);">
                                <img src="{{asset('admin/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded" width="38" height="38" alt="">
                            </a>
                        </div>

                        <div class="media-body">
                            <div class="font-weight-semibold">{{$user->name}}</div>
                            <span class="text-muted">@if($user->is_admin == 'user') مستخدم @else مدير @endif  </span>
                        </div>
                        <div class="ml-3 align-self-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                    <div class="dropdown-menu">
                                        <a href="{{route('users.edit',$user->id)}}" class="dropdown-item"><i class="icon-pencil7"></i>تعديل "{{$user->name}}"</a>
                                        {!! Form::open([
                                             'action' => ['Admin\UserController@destroy',$user->id],
                                             'method' => 'delete'
                                         ])!!}
                                        <button class="dropdown-item"  onclick="return confirm('هل أنت متأكد من حذف المستخدم {{$user->name}} ؟');"><i class="icon-reset"></i> حذف "{{$user->name}}"</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3 align-self-center">
                            <span class="badge badge-mark @if($user->status == 1) bg-success border-success @else bg-warning border-warning  @endif"></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Pagination -->
        {!! $users->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
