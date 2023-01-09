@extends('admin.layout.main')
@section('title','تفاصيل الطلب')
@section('description','تفاصيل الطلب')
@section('author','تفاصيل الطلب')
@section('keywords','تفاصيل الطلب')
@section('copyright','تفاصيل الطلب')
@section('css')
@endsection
<style>
    .image {
        width: 240px;
        height: 240px;
    }
</style>
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">تفاصيل الطلب</h1>
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
                        <li class="breadcrumb-item text-dark">تفاصيل الطلب</li>
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
                    <div class="form card-body mt-0 pt-0">
                        <div class="form-body">
                            <div class="text-center" style="margin-bottom:10px;">
                                <h4 style="margin:10px" class="no-print">
                                    <br>
                                    <h3 class="mb-3">رقم
                                        الطلب {{'#' . str_pad($latestOrder != null ? $order->id + 1 : 1, 8, "0", STR_PAD_LEFT)}}</h3>
                                    <a class="btn btn-default no-print" href="{{ URL::previous() }}">العودة</a>
                                    <button type="button" onclick="printDiv('printMe')" class="btn"><i
                                            class="fa fa-print"></i> طباعة
                                    </button>

                                </h4>
                            </div>
                            <div id='printMe' class="mt-3">
                                <table class="table text-center table-bordered" dir="rtl">
                                    <tbody>
                                    <tr>
                                        <td>
                                            اسم المستخدم
                                        </td>
                                        <td>

                                            <p>{{$order->customer->name}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            رقم هاتف المستخدم
                                        </td>
                                        <td dir="auto">
                                            <a dir="auto"
                                               href="tel: {{$order->customer->phone_number}}"> {{$order->customer->phone_number}}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            العنوان من
                                        </td>
                                        <td>


                                            <span>العنوان: {{$order->from_address->region}}.</span><br>
                                            <span>خط العرض: {{$order->from_address->latitude}}</span><br>
                                            <span>خط الطول: {{$order->from_address->longitude}}</span><br>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            العنوان إلى
                                        </td>
                                        <td>


                                            <span>العنوان: {{$order->from_address->region}}.</span><br>
                                            <span>خط العرض: {{$order->from_address->latitude}}</span><br>
                                            <span>خط الطول: {{$order->from_address->longitude}}</span><br>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            التكلفه
                                        </td>
                                        <td>
                                            <p>{{$order->estimated_price}}</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>اسم السائق</p>
                                        </td>
                                        <td>
                                            <p>
                                            <p>{{$order->driver !=null? $order->driver->name:'لم يتم استلام الطلب من اي سائق بعد'}}</p>

                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            رقم هاتف السائق
                                        </td>
                                        <td>
                                            <p>{{$order->driver !=null? $order->driver->phone_number:'لم يتم استلام الطلب من اي سائق بعد'}}</p>

                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            وقت الطلب
                                        </td>
                                        <td dir="auto">
                                            {{$order->date}}<br>
                                            {{$order->time}}
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a class="btn btn-default no-print" href="{{ URL::previous() }}"">العودة</a>
                    </div>
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
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>
@endsection
