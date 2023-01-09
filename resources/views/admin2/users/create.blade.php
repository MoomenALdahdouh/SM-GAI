@extends('admin.layout.main')
@section('title','اضافة مستخدم')
@section('description','اضافة مستخدم')
@section('author','اضافة مستخدم')
@section('keywords','اضافة مستخدم')
@section('copyright','اضافة مستخدم')
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">اضافة مستخدم</h1>
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
                        <li class="breadcrumb-item text-dark">اضافة مستخدم</li>
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
                    <form class="form card-body mt-0 pt-0" action="{{route('users.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mb-2">الأســـم بالكامل: </label>
                                    <input  class="form-control mt-1"  id="name" type="text" name="name">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mb-2">الإيميل : </label>
                                    <input  class="form-control mt-1"  id="email" type="text" name="email">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label class="mb-2">الرقــم الســرى : </label>
                                    <input  class="form-control mt-1"  id="password" type="password" name="password">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label>الصلاحيات</label>
                                    <br>
                                    <select class="form-control mt-1 form-control mt-1-lg form-control mt-1-solid" name="role">
                                        @foreach($permissions  as $permission )
                                            <option value="{{$permission->id}}">
                                                {{
                                                 $permission->name == "ADMIN"?"أدمن: يتحكم بكامل لوحة التحكم"
                                                :($permission->name == "SM_GAI_EMPLOYEE"?"موظف: يتحكم في القسم الرئيسي"
                                                :($permission->name == "CONTENT_MANAGEMENT"?"إدارة المحتوى: يقوم بإدارت الفسم الخاص ب إدارة المحتوى"
                                                :($permission->name == "SETTING_MANAGEMENT"?"إدارة الاعدادات: يقوم بإدارت القسم الخاص بالاعدادات":"")))
                                                }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="fv-plugins-message-container"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="btn-group float-md-left mt-4">
                                <button class="btn btn-info mb-1" type="submit">إضافة </button>
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
