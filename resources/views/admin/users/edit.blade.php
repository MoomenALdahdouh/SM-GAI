@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">تعديل المستخدم</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('users.index')}}">إدارة المستخدم</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">نعديل مستخدم</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="from-actions-top-bottom-left">تعديل المستخدم</h4>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">

                            <form action="{{route('users.update',$user->id)}}" autocomplete="off"  method="post">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="mb-2">الأســـم بالكامل: </label>
                                            <input class="form-control form-control-solid form-control-lg" value="{{$user->name}}" id="name" type="text" name="name">
                                            <div class="invalid-feedback" id="name_en_validate"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="mb-2">الإيميل : </label>
                                            <input class="form-control form-control-solid form-control-lg"  placeholder="{{$user->email}}" id="email" type="text" name="email">
                                            <div class="invalid-feedback" id="name_en_validate"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="mb-2">الرقــم الســرى : </label>
                                            <input class="form-control form-control-solid form-control-lg"  placeholder="*************" value="" id="password" type="password" name="password">
                                            <div class="invalid-feedback" id="name_en_validate"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>الصلاحيات</label>
                                            <br>
                                            <select class="form-control form-control-lg form-control-solid" name="role">
                                                @foreach($permissions  as $permission )
                                                    <option value="{{$permission->id}}" @if( $user->roles()->pluck('name')->implode(' ') ==  $permission->name) selected @endif>
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

                                <div class="btn-group float-md-left m-2">
                                    <button class="btn btn-info mb-1" type="submit">إضافة</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    {{--    <div class="panel-body">--}}




    {{--        <form action="/Moderator/Create" enctype="multipart/form-data" method="post"><div class="row" style="margin:10px;">--}}
    {{--                <div class="col-lg-6 mb-10">--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="FullName" class="col-sm-5 control-label required">الأســـم بالكامل: </label>--}}
    {{--                        <input name="FullName" type="text" id="FullName" required="" class="form-control valid">--}}
    {{--                        <span class="field-validation-valid text-danger" data-valmsg-for="FullName" data-valmsg-replace="true"></span>--}}


    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-6 mb-10">--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="Email" class="col-sm-5 control-label required">الإيميل : </label>--}}
    {{--                        <input name="Email" type="text" id="Email" class="form-control valid">--}}
    {{--                        <span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"></span>--}}

    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-12 mb-10 center-block">--}}
    {{--                    <div class="form-group col-lg-6 ">--}}
    {{--                        <label for="Password" class="col-sm-5 control-label required">الرقــم الســرى : </label>--}}
    {{--                        <input name="Password" type="password" id="Password" required="" class="form-control valid">--}}
    {{--                        <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>--}}


    {{--                    </div>--}}
    {{--                </div>--}}


    {{--                <input type="checkbox" name="UserId" hidden="">--}}

    {{--                <div>--}}
    {{--                    <p class="text-danger">  برجاء الانتباه فى حالة عدم إختيار إظهار لصفحه معينه لا يستطيع الادمن عمل إضافة او تعديل او حذف</p>--}}
    {{--                </div>--}}

    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input class="checkbox-inline" type="checkbox" value="True" name="viewcity">--}}
    {{--                    <label class="form-check-label" style="width:20%">إظهار المدن</label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" value="True" style="margin-right:40px">--}}
    {{--                    <label class="form-check-label" style="width:20%">إضافة المدن</label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" value="True" style="margin-right:40px">--}}
    {{--                    <label class="form-check-label" style="width:20.5%">تعديل المدن</label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" value="True" style="margin-right:40px">--}}
    {{--                    <label class="form-check-label">حذف المدن</label>--}}
    {{--                </div>--}}

    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="viewintro" value="True">--}}
    {{--                    <label style="width:21%">--}}
    {{--                        إظهار المقدمه--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="createintro" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        إضافة المقدمه--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="Editintro" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        تعديل المقدمه--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="Deleteintro" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label">--}}
    {{--                        حذف المقدمه--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input type="checkbox" name="viewheavy" value="True">--}}
    {{--                    <label style="width:21%">--}}
    {{--                        إظهار النقل الثقيل--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="createheavy" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        إضافة النقل الثقيل--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="Editheavy" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        تعديل النقل الثقيل--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="Deleteheavy" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label">--}}
    {{--                        حذف النقل الثقيل--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input type="checkbox" name="viewlight" value="True">--}}
    {{--                    <label style="width:21%">--}}
    {{--                        إظهار النقل الخفيف--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="createlight" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        إضافة النقل الخفيف--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="Editlight" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        تعديل النقل الخفيف--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="Deletelight" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label">--}}
    {{--                        حذف النقل الخفيف--}}
    {{--                    </label>--}}

    {{--                </div>--}}

    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input type="checkbox" name="viewDrivers" value="True">--}}
    {{--                    <label style="width:23.5%">--}}
    {{--                        إظهار السائقين--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="CreateDrivers" value="True">--}}
    {{--                    <label style="width:24%">--}}
    {{--                        إضافة السائقين--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="DetailsDrivers" value="True">--}}
    {{--                    <label style="width:24%">--}}
    {{--                        تفاصيل السائقين--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="AcceptDrivers" value="True">--}}
    {{--                    <label>--}}
    {{--                        تنشيط السائقين--}}
    {{--                    </label>--}}

    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}

    {{--                    <input type="checkbox" name="DeleteDrivers" value="True">--}}
    {{--                    <label style="width:23.5%">--}}
    {{--                        حذف السائقين--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input type="checkbox" name="viewModerator" value="True">--}}
    {{--                    <label style="width:23.5%">--}}
    {{--                        إظهار الأدمن--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="CreateModerator" value="True">--}}
    {{--                    <label style="width:23.5%">--}}
    {{--                        إضافة أدمن--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="EditeModerator" value="True">--}}
    {{--                    <label style="width:24%">--}}
    {{--                        تعديل أدمن--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="DeleteModerator" value="True">--}}
    {{--                    <label>--}}
    {{--                        حذف الأدمن--}}
    {{--                    </label>--}}

    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input type="checkbox" name="AcceptModerator" value="True">--}}
    {{--                    <label style="width:23.5%">--}}
    {{--                        تنشيط الأدمن--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="EditRole" value="True">--}}
    {{--                    <label style="width: 21%">--}}
    {{--                        تعديل الدور الوظيفى لأدمن--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;">--}}
    {{--                    <input type="checkbox" name="viewUser" value="True">--}}
    {{--                    <label style="width:20%">--}}
    {{--                        إظهار المستخدمين--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="AcceptUser" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label" style="width:21%">--}}
    {{--                        تنشيط المستخدمين--}}
    {{--                    </label>--}}
    {{--                    <input class="checkbox-inline" type="checkbox" name="DeletetUser" value="True" style="margin-right:30px">--}}
    {{--                    <label class="form-check-label">--}}
    {{--                        حذف المستخدمين--}}
    {{--                    </label>--}}

    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;margin-left:200px">--}}
    {{--                    <input type="checkbox" name="viewservice" value="True">--}}
    {{--                    <label style="width:28.5%">--}}
    {{--                        إظهار الخدمات--}}
    {{--                    </label>--}}
    {{--                    <input type="checkbox" name="detailsservice" value="True">--}}
    {{--                    <label style="width:23.5%">--}}
    {{--                        تفاصيل الخدمات--}}
    {{--                    </label>--}}

    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;margin-left:200px">--}}
    {{--                    <input type="checkbox" name="viewtirms" value="True">--}}
    {{--                    <label>--}}
    {{--                        إظهار الشروط والاحكام--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;margin-left:200px">--}}
    {{--                    <input type="checkbox" name="viewprice" value="True">--}}
    {{--                    <label>--}}
    {{--                        إظهار وتعديل الضرائب--}}
    {{--                    </label>--}}
    {{--                </div>--}}
    {{--                <div class="form-check form-check-inline" style="padding-right:15px;margin-left:200px">--}}
    {{--                    <input type="checkbox" name="viewcomplain" value="True">--}}
    {{--                    <label>--}}
    {{--                        إظهار الشكاوى--}}
    {{--                    </label>--}}
    {{--                </div>--}}


    {{--            </div>--}}
    {{--            <button type="submit" class="btn btn-success">إضافة</button><input name="__RequestVerificationToken" type="hidden" value="CfDJ8AU7FqNvZnpPq1IhjntskM6MJEob5NrM25g-bd6uQy6EiUod909I3eGrXF5Lp85enhW0aFHC_arfNSkW8iUipWyvV5dHJn8YLYl6qv6ms3axp07QrQp6wROxvyyyn-25dgHfXA9LvwUwANu0wCWu8VY6LWP3vyUlc_TsXfN9PNGImQ4jqOZ6PHRcDSmDf6lAsA"></form>--}}

    {{--    </div>--}}
@endsection
