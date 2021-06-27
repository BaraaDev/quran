<!DOCTYPE html>
<html lang="en" dir="rtl">

@include('admin.layouts.head')
<body style="font-family: 'Changa', sans-serif;">


@include('admin.layouts.navbar')

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="javascript: void(0);" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-right8"></i>
            </a>
            Navigation
            <a href="javascript: void(0);" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div><!-- /sidebar mobile toggler -->

        @include('admin.layouts.sidebar')

    </div><!-- /main sidebar -->
    @yield('sidebar')



    <!-- Main content -->
    <div class="content-wrapper">
        @yield('content')
        @include('admin.layouts.footer')
    </div><!-- /main content -->

</div><!-- /page content -->

</body>
</html>
