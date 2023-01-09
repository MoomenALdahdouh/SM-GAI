<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title> @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('dashboard/images/logo.phg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/images/logo.phg')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
          rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css-rtl/vendors.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/pickers/daterange/daterangepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/pickers/pickadate/pickadate.css')}}">
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/cryptocoins/cryptocoins.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/assets/css/style-rtl.css')}}">
    <!-- END Custom CSS-->

</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@extends('layouts.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@extends('layouts.aside')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row"></div>
        @yield('content')
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                                                                                     target="_blank">PIXINVENT </a>, All rights reserved. </span>
        <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
</footer>

<!-- BEGIN VENDOR JS-->
<script src="{{asset('dashboard/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('dashboard/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('dashboard/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('dashboard/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('dashboard/vendors/js/pickers/pickadate/picker.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/vendors/js/pickers/pickadate/picker.date.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/vendors/js/pickers/pickadate/picker.time.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
<script src="{{asset('dashboard/vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('dashboard/vendors/js/pickers/daterange/daterangepicker.js')}}"
        type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->

<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('dashboard/js/scripts/pickers/dateTime/pick-a-datetime.js')}}"
        type="text/javascript"></script>

<!-- END PAGE LEVEL JS-->


<div class="modal fade" id="newUser" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('profile.update',\Illuminate\Support\Facades\Auth::user()->id)}}" method="post">
                    @csrf
                    @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1">الاسم</label>
                                <input class="form-control" id="name"
                                       type="text" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                <div class="invalid-feedback" id="name_en_validate"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1">الإيميل : </label>
                                <input class="form-control"  placeholder="{{\Illuminate\Support\Facades\Auth::user()->email}}" id="email" type="text" name="email">
                                <div class="invalid-feedback" id="name_en_validate"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-1">كلمة السر جديدة</label>
                                <input class="form-control" id="password"
                                       type="password" name="password">
                                <div class="invalid-feedback" id="name_en_validate"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label class="mb-1">تأكيد كلمة السر الجديدة</label>
                                <input class="form-control" id="password"
                                       type="password" name="password">
                                <div class="invalid-feedback" id="name_en_validate"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold"
                                data-dismiss="modal">إغلاف</button>
                        <button type="submit" onclick="CreateProduct()"
                                class="btn btn-primary font-weight-bold">تعديل</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>
