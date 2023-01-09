@extends('admin.layout.main')
@section('title','ارسال اشعار جديد')
@section('description','ارسال اشعار جديد')
@section('author','ارسال اشعار جديد')
@section('keywords','ارسال اشعار جديد')
@section('copyright','ارسال اشعار جديد')
@section('css')
@endsection
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
            <!--begin::Container-->
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                     data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                     class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">ارسال اشعار جديد</h1>
                    <!--end::Title-->
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-300 border-start mx-4"></span>
                    <!--end::Separator-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="{{url("/")}}"
                               class="text-muted text-hover-primary">لوحة التحكم</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-300 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-dark">ارسال اشعار جديد</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Post-->

        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Category-->
                <div class="card card-flush mt-10 pt-2">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>التفاصيل</h2>
                        </div>
                    </div>
                    <form class="form card-body mt-0 pt-0" action="{{route('notifications.store')}}" method="post">
                        @csrf
                        <div class="form-body">
                            <label class="card-title mt-5" for="issueinput1">اختيار المرسل اليهم:</label>
                            <br/>
                            <dav>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                                <select name="users[]" class="form-select selectpicker form-control mt-2" required id="users" multiple
                                        data-control="select2" data-placeholder="حدد اختيار"
                                        data-hide-search="false" data-live-search="true" data-live-al>
                                    <option value="all">All</option>
                                    @foreach($customers as $customer)
                                        <option style="direction: ltr;"
                                                value="{{$customer->id}}">{{$customer->name}} </option>
                                    @endforeach
                                </select>

                            </dav>
                            <div class="row mt-2">
                                <div class="form-group col-12 mb-2">
                                    <label for="issueinput1">عنوان الاشعار: </label>
                                    <input type="text" id="issueinput1" required class="form-control mt-2"
                                           placeholder="المدينة بالعربى:"
                                           name="title" data-toggle="tooltip" data-trigger="hover"
                                           data-placement="top" data-title="المدينة بالعربى:">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mt-2 col-12 mb-2">
                                    <label for="issueinput8">محتوى الاشعار: </label>
                                    <textarea id="issueinput8" required rows="5" class="form-control mt-2" name="details"
                                              placeholder="التفاصيل بالعربي: "
                                              data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                              data-title="التفاصيل بالعربي"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions mt-4">
                            <div class="btn-group float-md-left ">
                                <button class="btn btn-info mb-1" type="submit">ارسال اشعار جديد</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!--end::Category-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection
@section('js')
@endsection
