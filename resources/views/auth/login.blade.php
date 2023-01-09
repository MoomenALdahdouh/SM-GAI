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
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="row  mb-2">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">البريد الاكتروني :</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email" class="form-control form-control-lg input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-md-12">
                                                    <label for="email" class="col-md-4 col-form-label text-md-end">كلمة السر :</label>

                                                    <input id="password" type="password" class="form-control form-control-lg input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="row mb-0">
                                                <div class="col-md-12 ">
                                                    <button type="submit" class="btn btn-info btn-lg btn-block">
                                                        تسجيل الدخول
                                                    </button>

                                                </div>
                                            </div>
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
@endsection--}}
