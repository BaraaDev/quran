<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
        <div class="card-body">
            <div class="media">
                <div class="mr-3">
                    <a href="#"><img src="{{asset('admin/global_assets/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                    <div class="media-title font-weight-semibold">{{auth()->user()->name}}</div>
                    <div class="font-size-xs opacity-50">
                        <i class="icon-phone-hang-up font-size-sm"></i> &nbsp;{{auth()->user()->phone}}
                    </div>
                </div>

                <div class="ml-3 align-self-center">
                    <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                </div>
            </div>
        </div>
    </div><!-- /user menu -->


    <!-- Main navigation -->
    <div class="card card-sidebar-mobile">
        <ul class="nav nav-sidebar" data-nav-type="accordion">

            <!-- Main -->
            <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">قائمة التنقل والأعدادات</div> <i class="icon-menu" title="Main"></i></li>
            <li class="nav-item">
                <a href="{{route('dashboard.home')}}" class="nav-link active">
                    <i class="icon-home4"></i>
                    <span>
                        لوحة التحكم
                    </span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('tags.index')}}" class="nav-link"><i class="icon-thumbs-up2"></i> <span>العلامات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="العلامات">
                    <li class="nav-item"><a href="{{route('tags.index')}}" class="nav-link">جميع العلامات</a></li>
                    <li class="nav-item"><a href="{{route('tags.create')}}" class="nav-link">إضافة علامة جديدة</a></li>
                 </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('levels.index')}}" class="nav-link"><i class="icon-stats-bars4"></i> <span>المستويات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المستويات">
                    <li class="nav-item"><a href="{{route('levels.index')}}" class="nav-link">جميع المستويات</a></li>
                    <li class="nav-item"><a href="{{route('levels.create')}}" class="nav-link">إنشاء مستوي جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('articles.index')}}" class="nav-link"><i class="icon-file-text3"></i> <span>المقالات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المقالات">
                    <li class="nav-item"><a href="{{route('articles.index')}}" class="nav-link">جميع المقالات</a></li>
                    <li class="nav-item"><a href="{{route('articles.create')}}" class="nav-link">إنشاء مقال جديد</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('categories.index')}}" class="nav-link"><i class="icon-stack"></i> <span>الأقسام</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الأقسام">
                    <li class="nav-item"><a href="{{route('categories.index')}}" class="nav-link">جميع الأقسام</a></li>
                    <li class="nav-item"><a href="{{route('categories.create')}}" class="nav-link">إضافة قسم جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('appointments.index')}}" class="nav-link"><i class="icon-alarm"></i> <span>المواعيد</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المواعيد">
                    <li class="nav-item"><a href="{{route('appointments.index')}}" class="nav-link">جميع المواعيد</a></li>
                    <li class="nav-item"><a href="{{route('appointments.create')}}" class="nav-link">إضافة موعد جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('events.index')}}" class="nav-link"><i class="icon-calendar3"></i> <span>الأحداث</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الأحداث">
                    <li class="nav-item"><a href="{{route('events.index')}}" class="nav-link">جميع الأحداث</a></li>
                    <li class="nav-item"><a href="{{route('events.create')}}" class="nav-link">إضافة حدث جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('services.index')}}" class="nav-link"><i class="icon-wrench3"></i> <span>الخدمات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الخدمات">
                    <li class="nav-item"><a href="{{route('services.index')}}" class="nav-link">جميع الخدمات</a></li>
                    <li class="nav-item"><a href="{{route('services.create')}}" class="nav-link">إنشاء خدمة جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('testimonials.index')}}" class="nav-link"><i class="icon-quotes-left"></i> <span>الأراء</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الأراء">
                    <li class="nav-item"><a href="{{route('testimonials.index')}}" class="nav-link">جميع الأراء</a></li>
                    <li class="nav-item"><a href="{{route('testimonials.create')}}" class="nav-link">إنشاء أراء جديده</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('users.index')}}" class="nav-link"><i class="icon-users"></i> <span>المستخدمين</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المستخدمين">
                    <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link">جميع المستخدمين</a></li>
                    <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link">إنشاء مستخدم جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('about_us.index')}}" class="nav-link"><i class="icon-info3"></i> <span>حول الموقع</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="حول الموقع">
                     @if(count($aboutUs) == 0)
                    <li class="nav-item"><a href="{{route('about_us.create')}}" class="nav-link">إنشاء حول الموقع</a></li>
                    @else
                    <li class="nav-item"><a href="{{route('about_us.edit',$aboutUsFind->id)}}" class="nav-link">تعديل حول الموقع </a></li>
                    @endif
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('settings.index')}}" class="nav-link"><i class="icon-gear"></i> <span>الإعدادات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الإعدادات">
                    @if(count($settings) == 0)
                        <li class="nav-item"><a href="{{route('settings.create')}}" class="nav-link">إنشاء الإعدادات </a></li>
                    @else
                        <li class="nav-item"><a href="{{route('settings.edit',$aboutUsFind->id)}}" class="nav-link">تعديل الإعدادات </a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </div><!-- /main navigation -->

</div><!-- /sidebar content -->
