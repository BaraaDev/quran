<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') لوحة التحكم</title>
    <link href="{{asset('admin/img/icon.png')}}" rel="icon">
    <link href="{{asset('admin/img/icon.png')}}" rel="apple-touch-icon">

    <!-- Global stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">
    <link href="{{asset('admin/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css"><!-- /global stylesheets -->
    @yield('link')
    <!-- Core JS files -->
    <script src="{{asset('admin/global_assets/js/main/jquery.min.js')}}"></script>

    <script src="{{asset('admin/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}"></script><!-- /core JS files -->
    @yield('head1')
    <script src="{{asset('admin/assets/js/app.js')}}"></script>
    @yield('head2')
</head>
