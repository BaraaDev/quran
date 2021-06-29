@extends('admin.layouts.app')

@section('title')الخدمات -@endsection
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - الخدمات</h4>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('services.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إنشاء خدمة جديد</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>لوحة التحكم</a>
                     <span class="breadcrumb-item active">الخدمات</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')
        <!-- Layout 1 -->
        @if (count($services)  )
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">جميع الخدمات</h6>
         </div>
        @else
            <div class="alert alert-warning alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء خدمات اولا من  <a href="{{route('services.create')}}" class="alert-link">هنا</a>.
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الخدمة</th>
                                <th>الوصف</th>
                                <th>الصورة</th>
                                <th>الأيقونة</th>
                                <th>الحالة</th>
                                <th>من خلال</th>
                                <th>تاريخ الإضافة</th>
                                <th>إجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$service->title}}</td>
                                    <td>{!!\Illuminate\Support\Str::limit($service->description , $limit = 50, $end = '...' )!!}</td>
                                    <td><img src="{{$service->getFirstMediaUrl('images')}}" width="36" height="36" class="rounded-circle"  alt=""></td>
                                    <td>
                                        @if ($service->icon)
                                            <span class="badge badge-dark">{{$service->icon}}</span>
                                        @else
                                            <span class="badge badge-secondary">لا يوجد أيقونات</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($service->status == 1)
                                            <span class="badge badge-success">نشط</span>
                                        @elseif ($service->status == 0)
                                            <span class="badge badge-secondary">معلق</span>
                                        @endif
                                    </td>
                                    <td>{{$service->user}}</td>
                                    <td>{{$service->created_at->format('F jS ,Y')}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a href="{{route('services.edit',$service->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل {{$service->title}}</a>
                                                    {!! Form::open([
                                                       'action' => ['Admin\ServiceController@destroy',$service->id],
                                                       'method' => 'delete'
                                                   ])!!}
                                                    <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف {{$service->title}} ؟');"><i class="icon-trash-alt" ></i> حذف {{$service->title}}</button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- Pagination -->
        {!! $services->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
