@extends('admin.layout.main')
@section('title',str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة'))
@section('description',str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة'))
@section('author',str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة'))
@section('keywords',str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة'))
@section('copyright',str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة'))
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة')}}</h1>
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
                        <li class="breadcrumb-item text-dark">{{str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة')}}</li>
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
                    <form class="form card-body mt-0 pt-0" id="kt_form"
                          action="{{route( str_contains(Route::current()->getName(),'heavy')?'transport-heavy.update':(str_contains(Route::current()->getName(),'light')?'transport-light.update':'introduction.update'),$type->id)}}"
                          method="post"
                          enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                        <div class="form-body mt-0 pt-0">
                            <div class="row mt-5">
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput1">العنوان بالعربى: </label>
                                    <input type="text" class="form-control mt-2" placeholder="العنوان بالعربى:"
                                           name="title_ar" value="{{ $type->getTranslation('title','ar')}}">
                                    @error('title_ar')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput2">العنوان بالانجليزي: </label>
                                    <input type="text" class="form-control mt-2" placeholder="العنوان بالانجليزي: "
                                           name="title_en" value="{{ $type->getTranslation('title','en')}}">
                                    @error('title_en')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput8">التفاصيل بالعربي: </label>
                                    <textarea rows="5" class="form-control mt-2" name="details_ar"
                                              placeholder="التفاصيل بالعربي: ">{{ $type->getTranslation('details','ar')}}</textarea>
                                    @error('details_ar')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-6 mb-2">
                                    <label for="issueinput8">التفاصيل بالانجليزي: </label>
                                    <textarea id="details_en" rows="5" class="form-control mt-2" name="details_en"
                                              placeholder="التفاصيل بالانجليزي:">{{ $type->getTranslation('details','ar')}}</textarea>
                                    @error('details_en')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row py-4 mt-0 pt-0">
                            <div class="image-upload">
                                <div class="col-md-12">
                                    <div class="form-group" style="margin-top: 18px">
                                        <label class="mb-2 ml-2 mt-6"> صورة المقدمه الرئيسية:</label>
                                        <br>
                                        <br>
                                        <div class="image-input image-input-outline" style="margin-top: -16px">
                                            <div class="image-input-wrapper" id="kt_image_1"
                                                 style="background-image: url({{\Illuminate\Support\Facades\Storage::url($type->image)}})"
                                            >

                                            </div>

                                            <label
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="change" data-toggle="tooltip" title=""
                                                data-original-title="Change avatar">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" id="image" name="image"
                                                       accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="image">
                                            </label>

                                            <span
                                                class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                                data-action="cancel" data-toggle="tooltip" title=""
                                                data-original-title="Cancel avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                        </div>

                                        @error('image')
                                        <div class="invalid-feedback" id="image_validate"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input id="file-input" type="file"/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="btn-group float-md-left">
                                <button class="btn btn-info mb-1" type="submit">حفظ التعديلات</button>
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
