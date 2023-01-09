@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة طلبات المستخدمين </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}} ">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة طلبات المستخدمين</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-content collapse show">
            <div class="mt-4 ml-4">
                <a href="{{route('orders.index') }}" class="btn btn-blue-grey  mb-1"> الكل</a>
                <span>|</span>
                <a  href="{{route('orders.index',['status'=>'PENDING']) }}" class="btn btn-blue mb-1">المعلق</a>
                <span>|</span>
                <a  href="{{route('orders.index',['status'=>'IN_PROGRESS']) }}" class="btn btn-pink mb-1">في الطريق</a>
                <span>|</span>
                <a  href="{{route('orders.index',['status'=>'FINISHED']) }}" class="btn btn-danger mb-1">تم الاستلام</a>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المستخدم</th>
                        <th scope="col">رقم الهاتف</th>
                        <th scope="col">الايميل</th>
                        <th scope="col">النوع</th>
                        <th scope="col">المبلغ التقريبي</th>
                        <th scope="col">الحالة</th>
                        <th scope="col">الضريبة</th>
                        <th scope="col">التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)

                        <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$order->customer->name}}</td>
                        <td><span >{{$order->customer->phone_number}}</span></td>
                        <td><span >{{$order->customer->email}}</span></td>

                            <td><span >{{$order->type->getTranslation('title','ar')}}</span></td>
                            <td><span >{{$order->estimated_price.'%'}}</span></td>
                            <td><span >{{$order->status =='PENDING'?'معلق':($order->status =='IN_PROGRESS'?'في الطريق':'تم الاستلام')}}</span></td>
                        <td><span >10%</span></td>
                            <td style="width: 60px">
                            <a href="{{route('orders.show',$order->id) }}" class="btn btn-blue-grey  mb-1"> تفاصيل</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
