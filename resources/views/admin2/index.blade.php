@extends('admin.layout.main')
@section('title','الصفحة الرئيسية')
@section('description','الصفحة الرئيسية')
@section('author','الصفحة الرئيسية')
@section('keywords','الصفحة الرئيسية')
@section('copyright','الصفحة الرئيسية')
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الصفحة الرئيسية</h1>
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
                        <li class="breadcrumb-item text-dark">الصفحة الرئيسية</li>
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
                <div class="card card-flush mt-10">
                    <!--begin::Card header-->
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-10">
                        <!--begin::Table-->
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

                                    <td><span>{{$order->type->getTranslation('title','ar')}}</span>
                                    </td>
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
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
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
