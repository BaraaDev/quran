<!DOCTYPE html>
<html lang="en" dir="rtl">
@include('layouts.head')
<body class="color-theme-blue cairo-font" style="font-family: 'Cairo', sans-serif;">
<div class="main-wrap">
    <!-- header wrapper -->
    @include('layouts.header')

    @yield('contact')

    <!-- footer wrapper -->
    @include('layouts.footer')
    <!-- footer wrapper -->
</div>
@include('layouts.footer-script')
</body>
</html>
