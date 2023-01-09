@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إضافة المدن</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('cities.index')}}">إدارة المدن</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إضافة المدن</a>
                            </li>
                        </ol>
                    </div>
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
                <form class="form"  action="{{route('cities.store')}}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="row mt-5">
                            <div class="form-group col-6 mb-2">
                                <label for="issueinput1">اسم المدينة بالعربي</label>
                                <input type="text" id="issueinput1" class="form-control" placeholder="المدينة بالعربى:"
                                       name="name_ar" data-toggle="tooltip" data-trigger="hover"
                                       data-placement="top" data-title="Issue Title" n>
                            </div>
                            <div class="form-group col-6 mb-2">
                                <label for="issueinput2">اسم المدينة بالانجليزي: </label>
                                <input type="text" id="issueinput2" class="form-control" placeholder="المدينة بالانجليزي: "
                                       name="name_en" data-toggle="tooltip" data-trigger="hover"
                                       data-placement="top" data-title="Opened By">
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
