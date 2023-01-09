@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">{{str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة')}}</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{str_contains(Route::current()->getName(),'heavy')?"النقل الثقيل":(str_contains(Route::current()->getName(),'light')?" النقل الخفيف":'إدارة المقدمة')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة')}}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="from-actions-top-bottom-left">{{str_contains(Route::current()->getName(),'heavy')?"تعديل الثقيل":(str_contains(Route::current()->getName(),'light')?" تعديل الخفيف":'تعديل المقدمة')}}</h4>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <div class="card-text">
                                <div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
                                    <span class="alert-icon"><i class="la la-info"></i></span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Form Actions On Top And Bottom Left.</strong>
                                </div>
                                <p>To add form actions on top and bottom of the form add a div
                                    with <code>.form-actions</code> class to start and end the
                                    form.
                                </p>
                            </div>
                                <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form"
                                      action="{{route( str_contains(Route::current()->getName(),'heavy')?'transport-heavy.update':(str_contains(Route::current()->getName(),'light')?'transport-light.update':'introduction.update'),$type->id)}}" method="post"
                                      enctype="multipart/form-data">
                                @csrf
                                    @method("PATCH")
                                <div class="form-body">
                                    <div class="row mt-5">
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput1">العنوان بالعربى: </label>
                                            <input type="text"  class="form-control" placeholder="العنوان بالعربى:"
                                                   name="title_ar"  value="{{ $type->getTranslation('title','ar')}}">
                                            @error('title_ar')
                                            <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput2">العنوان بالانجليزي: </label>
                                            <input type="text"  class="form-control" placeholder="العنوان بالانجليزي: "
                                                   name="title_en" value="{{ $type->getTranslation('title','en')}}">
                                            @error('title_en')
                                            <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput8">التفاصيل بالعربي: </label>
                                            <textarea  rows="5" class="form-control" name="details_ar" placeholder="التفاصيل بالعربي: ">{{ $type->getTranslation('details','ar')}}</textarea>
                                            @error('details_ar')
                                            <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput8">التفاصيل بالانجليزي: </label>
                                            <textarea id="details_en" rows="5" class="form-control" name="details_en" placeholder="التفاصيل بالانجليزي:">{{ $type->getTranslation('details','ar')}}</textarea>
                                            @error('details_en')
                                            <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
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

                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" id="image" name="image" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="image">
                                                    </label>

                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                                </div>

                                                @error('image')
                                                <div class="invalid-feedback" id="image_validate"> {{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <input id="file-input" type="file" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="btn-group float-md-left">
                                        <button class="btn btn-info mb-1" type="submit">إضافة مقدمة جديدة</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

    <script>
        image.onchange = evt => {
            const [file] = image.files

            if (file) {
                kt_image_1.style.backgroundImage = "url('" + URL.createObjectURL(file) + "')"
            }
        }
        imageUpdate.onchange = evt => {
            const [file] = imageUpdate.files

            if (file) {
                kt_image_2.style.backgroundImage = "url('" + URL.createObjectURL(file) + "')"
            }
        }
    </script>

@endsection
