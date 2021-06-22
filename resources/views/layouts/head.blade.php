<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEO::generate(true) !!}
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('website/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/feather.css')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('website/images/favicon.jpg')}}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/aos.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/style-rtl.css')}}">
</head>
