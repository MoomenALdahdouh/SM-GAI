@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">تعديل المدن</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('cities.index')}}">إدارة المدن</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">تعديل المدن</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header mt-1">
                <form class="form"  action="{{route('cities.update',$city->id)}}" method="POST">
                    @csrf
                    @method("PATCH")
                    <div class="form-body">
                        <div class="row mt-5">
                            <div class="form-group col-6 mb-2">
                                <label for="issueinput1">اسم المدينة بالعربي</label>
                                <input type="text" id="issueinput1" class="form-control" placeholder="المدينة بالعربى:"
                                       name="name_ar" data-toggle="tooltip" data-trigger="hover"
                                       data-placement="top" data-title="Issue Title" value="{{$city->getTranslation('name','ar')}}">
                            </div>
                            <div class="form-group col-6 mb-2">
                                <label for="issueinput2">اسم المدينة بالانجليزي: </label>
                                <input type="text" id="issueinput2" class="form-control" placeholder="المدينة بالانجليزي: "
                                       name="name_en" data-toggle="tooltip" data-trigger="hover"
                                       data-placement="top" data-title="Opened By" value="{{$city->getTranslation('name','en')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="btn-group float-md-left">
                            <button class="btn btn-info mb-1" type="submit">إضافة ميدينة جديدة</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
