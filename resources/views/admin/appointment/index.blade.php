@extends('admin.layouts.app')

@section('title')المواعيد -@endsection
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - المواعيد</h4>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('appointments.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إضافة مواعيد جديده</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>لوحة التحكم</a>
                    <span class="breadcrumb-item active">المواعيد</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')
    <!-- Layout 1 -->
        @if (count($appointments)  )
            <div class="mb-3">
                <h6 class="mb-0 font-weight-semibold">جميع المواعيد</h6>
            </div>
        @else
            <div class="alert alert-warning alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء مواعيد اولا من  <a href="{{route('appointments.create')}}" class="alert-link">هنا</a>.
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
                                <th>المواعيد</th>
                                <th>الحالة</th>
                                <th>من خلال</th>
                                <th>تاريخ الإضافة</th>
                                <th>إجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$appointment->title}}</td>
                                    <td>
                                        @if ($appointment->status == 1)
                                            <span class="badge badge-success">نشط</span>
                                        @elseif ($appointment->status == 0)
                                            <span class="badge badge-secondary">معلق</span>
                                        @endif
                                    </td>
                                    <td>{{$appointment->user}}</td>
                                    <td>{{$appointment->created_at->format('F jS ,Y')}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a href="{{route('appointments.edit',$appointment->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل {{$appointment->title}}</a>
                                                    {!! Form::open([
                                                       'action' => ['Admin\AppointmentController@destroy',$appointment->id],
                                                       'method' => 'delete'
                                                   ])!!}
                                                    <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف {{$appointment->title}} ؟');"><i class="icon-trash-alt" ></i> حذف {{$appointment->title}}</button>
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
    {!! $appointments->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
