@extends('admin.layouts.app')

@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">الرئيسية</span> - لوحة التحكم</h4>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{route('home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> زيارة الموقع</a>
                    <span class="breadcrumb-item active">لوحة التحكم</span>
                </div>
            </div>
        </div>
    </div> <!-- /page header -->

    <!--Contact area-->
    <div class="content">

        <!-- Dashboard content -->
        <div class="row">
            <!-- Dashboard statistics -->
            <div class="col-xl-12">
                <!-- Quick stats boxes -->
                <div class="row">
                    <!-- Members -->
                    <div class="col-lg-4">
                        <div class="card bg-teal-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">@if($users){{$users}} @else لا يوجد أعضاء @endif</h3>
                                    <div class="list-icons ml-auto">
                                        <li class="icon-users"></li>
                                    </div>
                                 </div>
                                <div> الأعضاء</div>
                            </div>
                        </div>
                    </div><!-- /Members -->

                    <!-- Articles -->
                    <div class="col-lg-4">
                        <div class="card bg-pink-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">@if($articles){{$articles}} @else لا يوجد مقالات @endif</h3>
                                    <div class="list-icons ml-auto">
                                        <li class="icon-file-text3"></li>
                                    </div>
                                </div>
                                <div> المقالات</div>
                            </div>
                        </div>
                    </div><!-- /Articles -->

                    <!-- Events -->
                    <div class="col-lg-4">
                        <div class="card bg-blue-400">
                            <div class="card-body">
                                <div class="d-flex">
                                    <h3 class="font-weight-semibold mb-0">@if($events){{$events}} @else لا يوجد أحداث @endif</h3>
                                    <div class="list-icons ml-auto">
                                        <li class="icon-calendar3"></li>
                                    </div>
                                </div>
                                <div> الأحداث</div>
                            </div>
                        </div>
                    </div><!-- /Events -->

                </div><!-- /quick stats boxes -->
            </div><!-- /dashboard statistics -->
        </div><!-- /dashboard content -->
    </div><!-- /content area -->
@endsection
