@extends('admin.layouts.app')

@section('title')المستويات -@endsection
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">لوحة التحكم</span> - المستويات</h4>
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
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>لوحة التحكم</a>
                     <span class="breadcrumb-item active">المستويات</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')
        <!-- Layout 1 -->
        @if (count($levels)  )
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">جميع المستويات</h6>
         </div>
        @else
            <div class="alert alert-warning alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء مستويات اولا من  <a href="{{route('levels.create')}}" class="alert-link">هنا</a>.
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
                                <th>المستوي</th>
                                <th>المذكرة</th>
                                <th>الأيقونة</th>
                                <th>الحالة</th>
                                <th>من خلال</th>
                                <th>تاريخ الإضافة</th>
                                <th>إجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($levels as $level)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$level->title}}</td>
                                    <td>{!!\Illuminate\Support\Str::limit($level->document , $limit = 50, $end = '...' )!!}</td>
                                    <td>
                                        @if ($level->icon)
                                            <span class="badge badge-dark">{{$level->icon}}</span>
                                        @else
                                            <span class="badge badge-secondary">لا يوجد أيقونات</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($level->status == 1)
                                            <span class="badge badge-success">نشط</span>
                                        @elseif ($level->status == 0)
                                            <span class="badge badge-secondary">معلق</span>
                                        @endif
                                    </td>
                                    <td>{{$level->user}}</td>
                                    <td>{{$level->created_at->format('F jS ,Y')}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a href="{{route('levels.edit',$level->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل {{$level->title}}</a>
                                                    {!! Form::open([
                                                       'action' => ['Admin\LevelController@destroy',$level->id],
                                                       'method' => 'delete'
                                                    ])!!}
                                                    <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف {{$level->title}} ؟');"><i class="icon-trash-alt" ></i> حذف {{$level->title}}</button>
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
        {!! $levels->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
