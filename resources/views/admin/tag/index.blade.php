@extends('admin.layouts.app')

@section('name')العلامات -@endsection
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
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">العلامات</span> - الرئيسية</h4>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="{{route('tags.create')}}" class="btn btn-link btn-float text-default"><i class="icon-plus22 text-green"></i><span>إنشاء علامات جديد</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('dashboard.home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i>الرئيسية</a>
                     <span class="breadcrumb-item active">العلامات</span>
                </div>
            </div>
        </div>
    </div><!-- /page header -->

    <!-- Content area -->
    <div class="content">
    @include('admin.layouts.messages.message')
        <!-- Layout 1 -->
        @if (count($tags)  )
        <div class="mb-3">
            <h6 class="mb-0 font-weight-semibold">جميع العلامات</h6>
         </div>
        @else
            <div class="alert alert-warning alert-styled-left alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">لا توجد بيانات!</span>  عليك بإنشاء علامات اولا من  <a href="{{route('tags.create')}}" class="alert-link">هنا</a>.
            </div>
        @endif
        <div class="card">
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>العلامات</th>
                                <th>اللون</th>
                                <th>الحالة</th>
                                <th>من خلال</th>
                                <th>تاريخ الإضافة</th>
                                <th>إجراءات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->color}}</td>
                                    <td>
                                        @if ($tag->status == 1)
                                            <span class="badge badge-success">نشط</span>
                                        @elseif ($tag->status == 0)
                                            <span class="badge badge-secondary">معلق</span>
                                        @endif
                                    </td>
                                    <td>{{$tag->user}}</td>
                                    <td>{{$tag->created_at->format('F jS ,Y')}}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="javascript: void(0);" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu">
                                                    <a href="{{route('tags.edit',$tag->id)}}" class="dropdown-item"><i class="icon-pencil7"></i> تعديل {{$tag->name}}</a>
                                                    {!! Form::open([
                                                       'action' => ['Admin\TagController@destroy',$tag->id],
                                                       'method' => 'delete'
                                                   ])!!}
                                                    <button class="dropdown-item" onclick="return confirm('هل أنت متأكد من حذف {{$tag->name}} ؟');"><i class="icon-trash-alt" ></i> حذف {{$tag->name}}</button>
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
        {!! $tags->render('pagination::articles') !!}<!-- /pagination -->
    </div><!-- /content area -->
@endsection
