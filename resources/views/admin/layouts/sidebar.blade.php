<!-- Sidebar content -->
<div class="sidebar-content">

    <!-- User menu -->
    <div class="sidebar-user">
        <div class="card-body">
            <div class="media">
                <div class="mr-3">
                    <a href="javascript:void(0);"><img src="{{asset('website/avatar.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
                </div>

                <div class="media-body">
                    <div class="media-title font-weight-semibold">{{auth()->user()->name}}</div>
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
                <a href="{{route('dashboard.home')}}" class="nav-link {{active()->route('dashboard.home')}}">
                    <i class="icon-home4"></i>
                    <span>
                        لوحة التحكم
                    </span>
                </a>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('tags.index')}}" class="nav-link {{active()->route('tags.*')}}"><i class="icon-thumbs-up2"></i> <span>العلامات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="العلامات">
                    <li class="nav-item"><a href="{{route('tags.index')}}" class="nav-link {{active()->route('tags.index')}}">جميع العلامات</a></li>
                    <li class="nav-item"><a href="{{route('tags.create')}}" class="nav-link {{active()->route('tags.create')}}">إضافة علامة جديدة</a></li>
                 </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('levels.index')}}" class="nav-link {{active()->route('levels.*')}}"><i class="icon-stats-bars4"></i> <span>المستويات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المستويات">
                    <li class="nav-item"><a href="{{route('levels.index')}}" class="nav-link {{active()->route('levels.index')}}">جميع المستويات</a></li>
                    <li class="nav-item"><a href="{{route('levels.create')}}" class="nav-link {{active()->route('levels.create')}}">إنشاء مستوي جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('articles.index')}}" class="nav-link {{active()->route('articles.*')}}"><i class="icon-file-text3"></i> <span>المقالات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المقالات">
                    <li class="nav-item"><a href="{{route('articles.index')}}" class="nav-link {{active()->route('articles.index')}}">جميع المقالات</a></li>
                    <li class="nav-item"><a href="{{route('articles.create')}}" class="nav-link {{active()->route('articles.create')}}">إنشاء مقال جديد</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('categories.index')}}" class="nav-link {{active()->route('categories.*')}}"><i class="icon-stack"></i> <span>الأقسام</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الأقسام">
                    <li class="nav-item"><a href="{{route('categories.index')}}" class="nav-link {{active()->route('categories.index')}}">جميع الأقسام</a></li>
                    <li class="nav-item"><a href="{{route('categories.create')}}" class="nav-link {{active()->route('categories.create')}}">إضافة قسم جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('appointments.index')}}" class="nav-link {{active()->route('appointments.*')}}"><i class="icon-alarm"></i> <span>المواعيد</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المواعيد">
                    <li class="nav-item"><a href="{{route('appointments.index')}}" class="nav-link {{active()->route('appointments.index')}}">جميع المواعيد</a></li>
                    <li class="nav-item"><a href="{{route('appointments.create')}}" class="nav-link {{active()->route('appointments.create')}}">إضافة موعد جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('events.index')}}" class="nav-link {{active()->route('events.*')}}"><i class="icon-calendar3"></i> <span>الأحداث</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الأحداث">
                    <li class="nav-item"><a href="{{route('events.index')}}" class="nav-link {{active()->route('events.index')}}">جميع الأحداث</a></li>
                    <li class="nav-item"><a href="{{route('events.create')}}" class="nav-link {{active()->route('events.create')}}">إضافة حدث جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('services.index')}}" class="nav-link {{active()->route('services.*')}}"><i class="icon-wrench3"></i> <span>الخدمات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الخدمات">
                    <li class="nav-item"><a href="{{route('services.index')}}" class="nav-link {{active()->route('services.index')}}">جميع الخدمات</a></li>
                    <li class="nav-item"><a href="{{route('services.create')}}" class="nav-link {{active()->route('services.create')}}">إنشاء خدمة جديد</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('testimonials.index')}}" class="nav-link {{active()->route('testimonials.*')}}"><i class="icon-quotes-left"></i> <span>الأراء</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الأراء">
                    <li class="nav-item"><a href="{{route('testimonials.index')}}" class="nav-link {{active()->route('testimonials.index')}}">جميع الأراء</a></li>
                    <li class="nav-item"><a href="{{route('testimonials.create')}}" class="nav-link {{active()->route('testimonials.create')}}">إنشاء أراء جديده</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('users.index')}}" class="nav-link {{active()->route('users.*')}}"><i class="icon-users"></i> <span>المستخدمين</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="المستخدمين">
                    <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link {{active()->route('users.index')}}">جميع المستخدمين</a></li>
                    <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link {{active()->route('users.create')}}">إنشاء مستخدم جديد</a></li>
                </ul>
            </li>
            <li class="nav-item nav-item-submenu">
                <a href="{{route('mail.index')}}" class="nav-link {{active()->route('mail.*')}}"><i class="icon-bubbles4"></i> <span>الرسائل</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الرسائل">
                    <li class="nav-item"><a href="{{route('mail.index')}}" class="nav-link {{active()->route('mail.index')}}">جميع الرسائل</a></li>
                    <li class="nav-item"><a href="{{route('mail.create')}}" class="nav-link {{active()->route('mail.create')}}">إنشاء رسالة جديدة</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('about_us.index')}}" class="nav-link {{active()->route('about_us.*')}}"><i class="icon-info3"></i> <span>حول الموقع</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="حول الموقع">
                     @if(count($aboutUs) == 0)
                    <li class="nav-item"><a href="{{route('about_us.create')}}" class="nav-link {{active()->route('about_us.index')}}">إنشاء حول الموقع</a></li>
                    @else
                    <li class="nav-item"><a href="{{route('about_us.edit',$aboutUsFind->id)}}" class="nav-link {{active()->route('about_us.edit',$aboutUsFind->id)}}">تعديل حول الموقع </a></li>
                    @endif
                </ul>
            </li>

            <li class="nav-item nav-item-submenu">
                <a href="{{route('settings.index')}}" class="nav-link {{active()->route('settings.*')}}"><i class="icon-gear"></i> <span>الإعدادات</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="الإعدادات">
                    @if(count($settings) == 0)
                        <li class="nav-item"><a href="{{route('settings.create')}}" class="nav-link {{active()->route('settings.create')}}">إنشاء الإعدادات </a></li>
                    @else
                        <li class="nav-item"><a href="{{route('settings.edit',$aboutUsFind->id)}}" class="nav-link {{active()->route('settings.edit',$aboutUsFind->id)}}">تعديل الإعدادات </a></li>
                    @endif
                </ul>
            </li>
        </ul>
    </div><!-- /main navigation -->

</div><!-- /sidebar content -->
