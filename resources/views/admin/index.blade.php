@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <!-- eCommerce statistic -->
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">{{$countCustomers}}</h3>
                                    <h6>عدد المستخدمين</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning">{{$countDrivers}}</h3>
                                    <h6>عدد السائقين</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">{{$countOrders}}</h3>
                                    <h6>عدد الطلبات</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--/ Products sell and New Orders -->
        <!-- Recent Transactions -->
        @can('SM_GAI_EMPLOYEE')
            <div class="row">
                <div id="recent-transactions" class="col-12">
                    <div class="card">
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
                                        <td><span>{{$order->customer->phone_number}}</span></td>
                                        <td><span>{{$order->customer->email}}</span></td>

                                        <td><span>{{$order->type->getTranslation('title','ar')}}</span></td>
                                        <td><span>{{$order->estimated_price.'%'}}</span></td>
                                        <td>
                                            <span>{{$order->status =='PENDING'?'معلق':($order->status =='IN_PROGRESS'?'في الطريق':'تم الاستلام')}}</span>
                                        </td>
                                        <td><span>10%</span></td>
                                        <td>
                                            <a href="{{route('orders.show',$order->id) }}"
                                               class="btn btn-blue-grey  mb-1"> تفاصيل</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endcan


        <!--/ Recent Transactions -->

    </div>
@endsection
