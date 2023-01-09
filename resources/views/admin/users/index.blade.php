@extends('layouts.dashboard')
@section('page_title')
    {{trans('Role.Management')}}
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة الادمن</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة الادمن</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="row float-md-right">
                    <div class="btn-group  col-md-6">
                        <a href="{{ route('users.create') }}" class="btn btn-info font-weight-bolder  mb-1">
                            إضافة أدمن
                        </a></div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content collapse show mt-2">
                <br>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الاسم</th>
                            <th scope="col">الإيميل</th>
{{--                            <th scope="col">رقم الهاتف</th>--}}
                            <th scope="col">الدور الوظيفى</th>
{{--                            <th scope="col">الحالـه</th>--}}
                            <th scope="col">التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            @if($user->email !=	'admin@gmail.com')
                            <tr>
                                <th>{{$loop->iteration-1}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
{{--                                <td></td>--}}
                                <td style="width: 400px">
                                    {{
                                                 $user->roles()->pluck('name')->implode(' ') == "ADMIN"?"أدمن: يتحكم بكامل لوحة التحكم"
                                                 :($user->roles()->pluck('name')->implode(' ')== "SM_GAI_EMPLOYEE"?"موظف: يتحكم في القسم الرئيسي"
                                                 :($user->roles()->pluck('name')->implode(' ') == "CONTENT_MANAGEMENT"?"إدارة المحتوى: يقوم بإدارت الفسم الخاص ب إدارة المحتوى"
                                                 :($user->roles()->pluck('name')->implode(' ') == "SETTING_MANAGEMENT"?"إدارة الاعدادات: يقوم بإدارت القسم الخاص بالاعدادات":"")))
                                                 }}
                                   </td>
{{--                                <td></td>--}}




                                <td>


                                    <a class="btn btn-warning" href="{{ route('users.edit',$user->id) }}">
                                        تعديل الدور الوظيفى
                                    </a>
                                    <span>|</span>

                                    <a data-toggle="modal" class="btn btn-warning"
                                       data-target="#deleteUser{{$user->id}}" style="color: white">
                                        حذف
                                    </a>
                                </td>

                                                                <div class="modal fade" id="deleteUser{{$user->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">حذف المستخدم</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                                                    @csrf
                                                                                    @method('delete')
                                                                                    <div class="row">
                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <textarea class="form-control form-control-solid form-control-lg" readonly  rows="3" style="line-height: 24px">هل انت متأكد من حذف المستخدم</textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">إغلاق</button>
                                                                                        <button type="submit"  class="btn btn-warning">تأكيد الحذف</button>
                                                                                    </div>
                                                                                </form>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--begin::end deleteProduct Modal-->
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
