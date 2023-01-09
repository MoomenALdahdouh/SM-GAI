@extends('admin.layout.main')
@section('title','تعديل ضريبة')
@section('description','تعديل ضريبة')
@section('author','تعديل ضريبة')
@section('keywords','تعديل ضريبة')
@section('copyright','تعديل ضريبة')
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">تعديل ضريبة</h1>
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
                        <li class="breadcrumb-item text-dark">تعديل ضريبة</li>
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
                <div class="card card-flush mt-10 pt-2">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>التفاصيل</h2>
                        </div>
                    </div>
                    <form class="form card-body mt-0 pt-0" action="{{route("taxes.update",$tax->id)}}"  method="POST">
                        @csrf
                        @method("PATCH")
                        <div class="form-body ">
                            <div class="row mt-2 ">
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput1">اسم الضريبة بالعربي:</label>
                                    <input type="text" id="issueinput1" required class="form-control mt-3" placeholder="اسم الضريبة بالعربي:"
                                           name="title_ar" data-toggle="tooltip" data-trigger="hover"
                                           data-placement="top" data-title="Issue Title" value="{{$tax->getTranslation('title','ar')}}">
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput2">اسم الضريبة بالانجليزي: </label>
                                    <input type="text" id="issueinput2" required class="form-control mt-3" placeholder="اسم الضريبة بالانجليزي:"
                                           name="title_en" data-toggle="tooltip" data-trigger="hover"
                                           data-placement="top" data-title="Opened By" value="{{$tax->getTranslation('title','en')}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput8">التفاصيل الضريبة بالعربي: </label>
                                    <textarea id="issueinput8" required rows="5" class="form-control mt-3" name="details_ar" placeholder="لتفاصيل الضريبة بالعربي:"
                                              data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                              data-title="Comments">{{$tax->getTranslation('details','en')}}</textarea>
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput8">التفاصيل الضريبة بالانجليزي: </label>
                                    <textarea id="issueinput8" rows="5" required class="form-control mt-3" name="details_en" placeholder="التفاصيل الضريبة بالانجليزي: "
                                              data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                              data-title="Comments">{{$tax->getTranslation('details','en')}}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="issueinput1">قيمة الضريبة:</label>
                            <input type="number" id="issueinput1" required class="form-control mt-3" placeholder="قيمة الضريبة:"
                                   name="value" value="{{$tax->value}}"  maxlength="4"
                                   oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            >
                        </div>
                        <div class="form-group mb-4">
                            <label   class="col-sm-5 control-label required"> نوع الضريبة</label>
                            <div class="">

                                <select class="form-control mt-3" name="type">
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
                                <button  class="btn btn-info mb-1 mt-3" type="submit">تعديل ضريبة </button>
                            </div>
                        </div>

                    </form>
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
