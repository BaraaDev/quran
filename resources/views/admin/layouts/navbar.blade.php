<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{asset('admin/global_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="Javascript:void(0)" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>


        </ul>

        <span class="badge bg-success ml-md-3 mr-md-auto">متصل</span>

        <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a href="Javascript:void(0)" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">الرسائل</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">{{$contactUsCount}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">الرسائل</span>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            @foreach($contactUs as $contact)
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="{{asset('admin/global_assets/images/placeholders/placeholder.jpg')}}" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body " >
                                    <div class="media-title">
                                        <a href="{{route('mail.show',$contact->id)}}">
                                            <span class="font-weight-semibold">{{$contact->name}}</span>
                                            <span class="text-muted float-right font-size-sm">{{$contact->created_at->format('F jS ,Y')}}</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">{!! Illuminate\Support\Str::limit($contact->message  , $limit = 50, $end = '...' )!!}</span>
                                </div>

                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="{{route('mail.index')}}" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="شاهد أكثر"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="Javascript:void(0)" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('admin/global_assets/images/placeholders/placeholder.jpg')}}" class="rounded-circle mr-2" height="34" alt="">
                    <span>{{auth()->user()->name}}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">

                    <a href="Javascript:void(0)" class="dropdown-item"><i class="icon-switch2"></i>تسجيل الخروج</a>
                </div>
            </li>
        </ul>
    </div>
</div><!-- /main navbar -->
