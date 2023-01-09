@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">تعديل ضريبة</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('taxes.index')}}">إدارة الضريبة</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">تعديل الضريبة</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="from-actions-top-bottom-left">تعديل ضريبة</h4>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form class="form" action="{{route("taxes.update",$tax->id)}}"  method="POST">
                                @csrf
                                @method("PATCH")
                                <div class="form-body">
                                    <div class="row mt-2">
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput1">اسم الضريبة بالعربي:</label>
                                            <input type="text" id="issueinput1" required class="form-control" placeholder="اسم الضريبة بالعربي:"
                                                   name="title_ar" data-toggle="tooltip" data-trigger="hover"
                                                   data-placement="top" data-title="Issue Title" value="{{$tax->getTranslation('title','ar')}}">
                                        </div>
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput2">اسم الضريبة بالانجليزي: </label>
                                            <input type="text" id="issueinput2" required class="form-control" placeholder="اسم الضريبة بالانجليزي:"
                                                   name="title_en" data-toggle="tooltip" data-trigger="hover"
                                                   data-placement="top" data-title="Opened By" value="{{$tax->getTranslation('title','en')}}">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput8">التفاصيل الضريبة بالعربي: </label>
                                            <textarea id="issueinput8" required rows="5" class="form-control" name="details_ar" placeholder="لتفاصيل الضريبة بالعربي:"
                                                      data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                      data-title="Comments">{{$tax->getTranslation('details','en')}}</textarea>
                                        </div>
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput8">التفاصيل الضريبة بالانجليزي: </label>
                                            <textarea id="issueinput8" rows="5" required class="form-control" name="details_en" placeholder="التفاصيل الضريبة بالانجليزي: "
                                                      data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                      data-title="Comments">{{$tax->getTranslation('details','en')}}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="issueinput1">قيمة الضريبة:</label>
                                    <input type="number" id="issueinput1" required class="form-control" placeholder="قيمة الضريبة:"
                                           name="value" value="{{$tax->value}}"  maxlength="4"
                                           oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    >
                                </div>
                                <div class="form-group">
                                    <label   class="col-sm-5 control-label required"> نوع الضريبة</label>
                                    <div class="">

                                        <select class="form-control" name="type">
                                            <option value="" selected>اختر نوع الضريبة</option>
                                            <option value="SERVICE_FEE" @if($tax->type === 'SERVICE_FEE') selected @endif>ضريبة خدمات</option>
                                            <option value="TRANSACTION_FEE" @if($tax->type === 'TRANSACTION_FEE') selected @endif>ضريبة تحويل</option>
                                        </select>
                                        @error('city_id')
                                        <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                        <span class="field-validation-valid text-danger" data-valmsg-for="cityid"
                                              data-valmsg-replace="true"></span>

                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="btn-group float-md-left">
                                        <button  class="btn btn-info mb-1" type="submit">إضافة ضريبة جديدة</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

@endsection
