<!DOCTYPE html>
{{--<html lang="ar" dir="rtl">--}}
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}}"
      style="direction:{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}};"
      direction="{{app()->getLocale()=='ar' ? 'rtl' : 'ltr'}}">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>{{__("str.Dashboard Sign In")}}</title>
    <meta name="description" content="{{__("str.Dashboard Sign In")}}"/>
    <meta name="author" content="{{__("str.Dashboard Sign In")}}"/>
    <meta name="keywords" content="{{__("str.Dashboard Sign In")}}"/>
    <meta name="copyright" content="{{__("str.Dashboard Sign In")}}"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;800&family=Lalezar&family=Poppins:wght@300&display=swap"
        rel="stylesheet">
    @include('admin.layout.links')
</head>
<body>
<div class="d-flex flex-column flex-root">
    <input id="app_url" type="hidden" value="{{env("APP_URL")}}">
    <input type="hidden" id="language" value="{{config('app.locale')}}">
    <input id="previous_url" value="{{URL::previous()}}" type="hidden">
    <!--begin::Authentication - Sign-in -->
    {{csrf_field()}}
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url({{asset("images/development-hd.png")}})">
        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <!--begin::Logo-->
            <a href="{{url("/")}}" class="mb-7 text-center">
                {{--<img alt="Logo" src="{{asset('/media/logos/logo-1-dark.svg')}}" class="h-25px logo"/>--}}
                <img alt="Logo" width="60%" src="{{asset('dashboard/images/logo/logo.png')}}" class="logo mb-10"/>
            </a>
            <!--end::Logo-->
            <!--begin::Wrapper-->
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <!--begin::Form-->
                <div class="form w-100" id="kt_sign_in_form">
                    <!--begin::Heading-->
                    <div class="text-center mb-10">
                        <!--begin::Title-->
                        <h1 class="text-dark mb-6">Login with Modern</h1>
                        <!--end::Title-->
                    </div>
                    <!--begin::Heading-->
                    <form method="POST" class="" action="{{ route('login') }}">
                        @csrf

                        <div class="row  mb-2">
                            <label for="email" class="col-md-4 col-form-label  ">البريد
                                الاكتروني :</label>

                            <div class="col-md-12">
                                <input id="email" type="email"
                                       class="form-control text-start form-control-lg input-lg @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required
                                       autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <label for="email" class="col-md-4 col-form-label ">كلمة
                                    السر :</label>

                                <input id="password" type="password"
                                       class="form-control form-control-lg input-lg @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-12 text-center mt-10 ">
                                <button type="submit" class="btn btn-info btn-lg btn-block">
                                    تسجيل الدخول
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
                <!--end::Form-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Authentication - Sign-in-->
</div>
@include('admin.layout.scripts')
<script src="{{asset("assets/admin/js/auth/login.js")}}" defer></script>
</body>
<!--end::Body-->
</html>
