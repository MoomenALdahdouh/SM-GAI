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
                <h3 class="content-header-title mb-0 d-inline-block">تفاصيل الطلب</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}} ">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('orders.index')}}">إدارة طلبات المستخدمين</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">تفاصيل الطلب</a>
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
                                    <h3 class="mb-3">رقم الطلب  {{'#' . str_pad($latestOrder != null ? $order->id + 1 : 1, 8, "0", STR_PAD_LEFT)}}</h3>
                                    <a class="btn btn-default no-print" href="{{ URL::previous() }}">العودة</a>
                                    <button type="button" onclick="printDiv('printMe')" class="btn"><i class="fa fa-print"></i> طباعة</button>

                                </h4>
                            </div>
                            <div  id='printMe' class="mt-3">
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
                                            <a dir="auto" href="tel: {{$order->customer->phone_number}}"> {{$order->customer->phone_number}}</a>
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
            </div>
        </div>
    </div>
@endsection
