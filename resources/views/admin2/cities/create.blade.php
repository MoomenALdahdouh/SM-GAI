@extends('admin.layout.main')
@section('title','إضافة المدن')
@section('description','إضافة المدن')
@section('author','إضافة المدن')
@section('keywords','إضافة المدن')
@section('copyright','إضافة المدن')
@section('css')
@endsection
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">إضافة المدن</h1>
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
                        <li class="breadcrumb-item text-dark">إضافة المدن</li>
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
                    <form class="form card-body mt-0 pt-0" action="{{route('cities.store')}}" method="POST">
                        @csrf
                        <div class="form-body">
                            <div class="row mt-5">
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput1">اسم المدينة بالعربي</label>
                                    <input type="text" id="issueinput1" class="form-control mt-4"
                                           placeholder="المدينة بالعربى:"
                                           name="name_ar" data-toggle="tooltip" data-trigger="hover"
                                           data-placement="top" data-title="Issue Title" >
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput2">اسم المدينة بالانجليزي: </label>
                                    <input type="text" id="issueinput2" class="form-control mt-4"
                                           placeholder="المدينة بالانجليزي: "
                                           name="name_en" data-toggle="tooltip" data-trigger="hover"
                                           data-placement="top" data-title="Opened By">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions mt-4">
                            <div class="btn-group float-md-left">
                                <button class="btn btn-info mb-1" type="submit">إضافة ميدينة جديدة</button>
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
