<div class="header-wrapper pt-3 pb-3 shadow-none pos-fixed position-absolute">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 navbar pt-0 pb-0">
                <a href="{{route('home')}}"><h1 class="fredoka-font ls-3 fw-700 text-current font-xxl">{{$settingsFind->title}} <span class="d-block font-xsssss ls-1 text-grey-500 open-font ">{{$settingsFind->description}}</span></h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav-menu float-none text-center">
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}" > الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('article.index')}}" > المقالات</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about-us.index')}}">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact-us.create')}}">إتصل بنا</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 text-right d-none d-lg-block">
                @if (auth()->check())
                    @if(auth()->user()->is_admin == 'admin')
                <a href="{{route('dashboard.home')}}" class="float-right d-none d-lg-block text-center mt-1 ml-4 text-grey-800"><i class="fas fa-tachometer-alt"></i><span class="font-cairo fw-500 d-block lh-1">لوحة التحكم</span></a>
                    @endif
                 <a href="{{ route('logout') }}" class="float-right d-none d-lg-block text-center mt-1 ml-4 text-grey-800"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt" ></i><span class="font-cairo fw-500 d-block lh-1">تسجيل الخروج</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                <a href="{{route('login')}}" class="header-btn bg-dark fw-500 text-white font-xssss p-2 lh-32 w100 text-center d-inline-block rounded-xl mt-1">تسجيل الدخول</a>
                <a href="{{route('register')}}" class="header-btn bg-current fw-500 text-white font-xssss p-2 lh-32 w100 text-center d-inline-block rounded-xl mt-1">التسجيل</a>
                @endif
            </div>
        </div>
    </div>
</div>
