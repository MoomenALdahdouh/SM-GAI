@extends('layouts.auth')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content" style="  display:flex; flex-direction:column; justify-content:center;
">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <div class="p-1">
                                            <img src="{{asset('dashboard/images/logo/logo.png')}}" alt="branding logo">
                                        </div>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                        <span>Login with Modern</span>
                                    </h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal form-simple" action="index.html" novalidate>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" class="form-control form-control-lg input-lg" id="user-name" placeholder="Your Username"
                                                       required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <br>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control form-control-lg input-lg" id="user-password"
                                                       placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-md-6 col-12 text-center text-md-left">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me">تذكرني</label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> تسجيل الدخول</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
