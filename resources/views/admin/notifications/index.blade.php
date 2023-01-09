@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة الاشعارات </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة الاشعارات</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="row float-md-right">
                    <div class="btn-group  col-md-6">
                        <a href="{{ route('notifications.create') }}" class="btn btn-info font-weight-bolder  mb-1">
                            ارسال اشعار جديدة
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="card">

        <div class="card-content collapse show">
            <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المستخدم</th>
                        <th scope="col">الايميل</th>
                        <th scope="col">عنوان الاشعار</th>
                        <th scope="col">تفاصيل الاشعار</th>
                        <th scope="col">النوع</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($notifications as $notification)
                    <tr>
                        <th>    {{$loop->iteration}}</th>
                        <td>{{$notification->customer->name ?? 'تم اسال هذا الشعار لجميع المستخدمين'}}</td>
                        <td><span >{{$notification->customer->email ?? '--'}}</span></td>
                        <td><span >{{$notification->title}}</span></td>
                        <td><span >{{$notification->details}}</span></td>
                        <td><span >{{$notification->type == 'ACCOUNT_STATUS'?'حالة الحساب':($notification->type == 'ORDER_STATUS'?'حالة الطلب':'عام')}}</span></td>
{{--                        <td>--}}
{{--                            <a href="" class="btn btn-danger mb-1">حذف</a>--}}
{{--                        </td>--}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
