{{--TODO:: MOOMEN S. ALDAHDOUH 1/20/2022--}}
<!-- FavIcon Links for all devices -->
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<!--Font Cairo-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;800&family=Lalezar&family=Poppins:wght@300&display=swap" rel="stylesheet">
<!-- FavIcon Links for all devices -->
<link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/admin/images/icon_1.png")}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/admin/images/icon_1.png")}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/admin/images/icon_1.png")}}">
<link rel="manifest" href="{{asset("assets/admin/images/icon_1.png")}}">
<link rel="shortcut icon" href="{{asset("assets/admin/images/icon_1.png")}}" type="image/x-icon">
<link href="{{asset("assets/admin/plugins/global/plugins.bundle.css")}}" rel="stylesheet" type="text/css"/>

@if(app()->getLocale()=='ar')
    <link href="{{asset("assets/admin/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
@else
    <link href="{{asset("assets/admin/css/style.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endif
<!--end::Global Stylesheets Bundle-->

@yield('css')
