@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <style>
        .image {
            width: 240px;
            height: 240px;
        }
    </style>
    <script>
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        }
    </script>
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">تفاصيل السائق</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}} ">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('drivers.index')}}">إدارة السائقين</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">تفاصيل السائق</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">

            <div class="card-content" >
                <div class="">
                    <div class="box box-info">
                        <div class="box-body">
                            <div class="text-center" style="margin-bottom:10px;">
                                <h4 style="margin:10px" class="no-print">
                                    <br>
                                    <a class="btn btn-default no-print" href="{{ URL::previous() }}">العودة</a>
                                    <button type="button" onclick="printDiv('printMe')" class="btn"><i class="fa fa-print"></i> طباعة</button>

                                </h4>
                            </div>
                            <div style="margin-left:90px" id='printMe'>
                                <table class="table text-center table-bordered" dir="rtl">
                                    <tbody>
                                    <tr>
                                        <td>
                                            اسم السائق
                                        </td>
                                        <td>

                                            <p>{{$customer->name}}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            رقم هاتف السائق
                                        </td>
                                        <td dir="auto">
                                            <a dir="auto" href="tel: {{$customer->phone_number}}"> {{$customer->phone_number}}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            عنوان السائق
                                        </td>
                                        <td>


                                            <span>المدينة: {{$customer->city->getTranslation('name','ar')}}</span><br>

                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            بريد العميل
                                        </td>
                                        <td>
                                            <a href="mailto:{{$customer->email}}">{{$customer->email}}</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            رقم البطاقه
                                        </td>
                                        <td>
                                            {{$customer->information_driver->card_number}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            نوع رخصه السواقه
                                        </td>
                                        <td>
                                            {{$customer->information_driver->license_type}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            رقم رخصه البطاقه
                                        </td>
                                        <td>
                                            {{$customer->information_driver->license_number}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            صورة السـائق
                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->image)}}">
                                        </td>
                                    </tr>
                                    <tr>

                                    </tr><tr>
                                        <td>
                                            رخصة القيادة
                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->information_driver->driving_license_image)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            شهادة خلو السائق من السوابق

                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->information_driver->certificate_precedents_Image)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            بطاقة سائق

                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->information_driver->driver_id_image)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            رخصة سير المركبة

                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->vehicle->vehicles_driving_license_image)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            في حال كنت المستخدم الفعلي او المفوض الرجاء ارفاق التفويض (اختياري)


                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->information_driver->commissioner_image)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            وثيقة التأمين على المركبة


                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->information_driver->insurance_image)}}">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            الفحص الفني الدوري

                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->vehicle->technical_inspection_image)}}">
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr><tr>
                                        <td>
                                            بطاقة تشغيل
                                        </td>
                                        <td>
                                            <img class="image" src="{{\Illuminate\Support\Facades\Storage::url($customer->information_driver->card_employment_image)}}">
                                        </td>
                                    </tr>
{{--                                    <tr>--}}
{{--                                        <td>--}}
{{--                                            وقت الطلب--}}
{{--                                        </td>--}}
{{--                                        <td dir="auto">--}}
{{--                                            Tuesday, June 28, 2022<br>--}}
{{--                                            4:51 AM--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <a class="btn btn-default no-print" href="{{ URL::previous() }}">العودة</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
