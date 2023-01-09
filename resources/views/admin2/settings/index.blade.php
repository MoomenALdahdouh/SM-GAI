@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة المقدمة</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة المقدمة</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right">
                    <button class="btn btn-info mb-1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">إضافة مقدمة جديدة</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <br>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الصورة</th>
                            <th scope="col">الإسم</th>
                            <th scope="col">الحالة</th>
                            <th scope="col">التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>1</th>
                            <td><img src="{{asset('dashboard/images/portrait/small/avatar-s-18.png')}}" width="120"  height="69"></td>
                            <td>مقدمة 1</td>
                            <td><span >نشط</span></td>
                            <td>
                                <button class="btn btn-warning" type="button" data-bs-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">تعديل</button>
                                <span>|</span>
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td><img src="{{asset('dashboard/images/portrait/small/avatar-s-18.png')}}" width="120"  height="69"></td>
                            <td>مقدمة 2</td>
                            <td><span >نشط</span></td>
                            <td>
                                <button class="btn btn-warning" type="button" data-bs-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">تعديل</button>
                                <span>|</span>
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td><img src="{{asset('dashboard/images/portrait/small/avatar-s-18.png')}}" width="120"  height="69"></td>
                            <td>مقدمة 3</td>
                            <td><span >نشط</span></td>
                            <td>
                                <button class="btn btn-warning" type="button" data-bs-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">تعديل</button>
                                <span>|</span>
                                <button class="btn btn-danger" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">حذف</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
