@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')



    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"> تعديل سائق</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('drivers.index')}}">إدارة السائقين</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="from-actions-top-bottom-left">تعديل سائق</h4>
                    </div>


                    <form class="form" action="{{route('drivers.store')}}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row" style="margin:10px;">
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="FullName" class="col-sm-5 control-label required">الأســـم
                                        بالكامل: </label>
                                    <input name="name" type="text" required="" value="{{$customer->name}}" class="form-control valid">
                                    @error('name')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                    <span class="field-validation-valid text-danger" data-valmsg-for="FullName"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="Titleen" class="col-sm-5 control-label required">رقم الهاتف : </label>
                                    <input name="phone_number" type="text" value="{{$customer->phone_number}}" required class="form-control valid">
                                    @error('phone_number')
                                    <div class="invalid-feedback" id="name_en_validate" > {{$message}}</div>
                                    @enderror
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PhoneNumber"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label class="col-sm-5 control-label required">الإيميل : </label>
                                    <input name="email" type="text"  value="{{$customer->email}}" required class="form-control valid">
                                    @error('email')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="Password" class="col-sm-5 control-label required">الرقــم الســرى
                                        : </label>
                                    <input name="password" type="password" required=""  value="{{$customer->password}}" class="form-control valid">
                                    @error('password')
                                    <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Password"
                                          data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="Password" class="col-sm-5 control-label required">رقم البطاقه : </label>
                                    <input name="card_number" type="text" required="" class="form-control valid">
                                    @error('password')
                                    <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                    <span class="field-validation-valid text-danger" data-valmsg-for="NationalId"
                                          data-valmsg-replace="true"></span>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="Password" class="col-sm-5 control-label required">نوع الرخصه : </label>
                                    <input name="license_type" type="text" required="" class="form-control valid">
                                    @error('license_type')
                                    <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                    <span class="field-validation-valid text-danger"
                                          data-valmsg-for="DrivibgLicienceType" data-valmsg-replace="true"></span>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="Password" class="col-sm-5 control-label required">رقم رخصه السواقه
                                        : </label>
                                    <input name="license_number" type="text" required="" class="form-control valid">
                                    @error('license_number')
                                    <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                    @enderror
                                    <span class="field-validation-valid text-danger"
                                          data-valmsg-for="DrivibgLicienceNumber" data-valmsg-replace="true"></span>

                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label  required class="col-sm-5 control-label required">اسم
                                        المدينة:</label>
                                    <div class="">

                                        <select class="form-control" name="city_id">
                                            <option value="" selected>اختر المدينة</option>
                                            @foreach($cities as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('city_id')
                                        <div class="invalid-feedback" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                        <span class="field-validation-valid text-danger" data-valmsg-for="cityid"
                                              data-valmsg-replace="true"></span>

                                    </div>
                                </div>
                            </div>
                            {{--                                <div class="col-lg-6 mb-10">--}}
                            {{--                                    <div class="form-group">--}}
                            {{--                                        <label for="NameEn" class="col-sm-5 control-label required">النوع:</label>--}}
                            {{--                                        <div class=" ">--}}
                            {{--                                            <select required="" name="city_id" id="cityid" class="form-control valid">--}}
                            {{--                                                <option value="select-type">select-type</option>--}}
                            {{--                                                <option value="Female" name="Female">Female</option>--}}
                            {{--                                                <option value="Male" name="Male">Male</option>--}}
                            {{--                                            </select>--}}
                            {{--                                            <span class="field-validation-valid text-danger" data-valmsg-for="gender" data-valmsg-replace="true"></span>--}}

                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}

                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label required">صورة السائق:</label>
                                    <div >
                                        <div class="image-input image-input-outline form-control" >
                                            <div class="image-input-wrapper" id="kt_image_1">

                                            </div>
                                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="صورة السائق مطلوبة">
                                                <i class="fa fa-pen icon-sm text-muted"></i>
                                                <input type="file" id="image" required name="image" accept=".png, .jpg, .jpeg">
                                            </label>

                                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="صورة السائق مطلوبة">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                        </div>
                                        @error('image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label required">
                                        شهادة خلو السائق من السوابق :
                                    </label>
                                    <div class=" ">
                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="شهادة خلو السائق من السوابق مطلوبة">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="certificate_precedents_Image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="شهادة خلو السائق من السوابق مطلوبة">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>

                                        @error('certificate_precedents_Image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label">
                                        بطاقة سائق :
                                    </label>
                                    <div class=" ">

                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="بطاقة سائق مطلوبة">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="driving_license_image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="بطاقة سائق مطلوبة">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>
                                        @error('driving_license_image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label required">
                                        رخصة سير المركبة :
                                    </label>
                                    <div class=" ">
                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="رخصة سير المركبة مطلوبة">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="vehicles_driving_license_image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="رخصة سير المركبة مطلوبة">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>
                                        @error('vehicles_driving_license_image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label">
                                        في حال كنت المستخدم الفعلي او المفوض الرجاء ارفاق التفويض :
                                    </label>
                                    <div class=" ">
                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="ارفاق التفويض">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="commissioner_image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="ارفاق التفويض">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>
                                        @error('commissioner_image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label required">
                                        وثيقة التأمين على المركبة :
                                    </label>
                                    <div class=" ">
                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="وثيقة التأمين على المركبة مطلوبة">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="insurance_image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="وثيقة التأمين على المركبة مطلوبة">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>
                                        @error('insurance_image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label required">
                                        الفحص الفني الدوري :
                                    </label>
                                    <div class=" ">
                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="الفحص الفني الدوري مطلوب">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="technical_inspection_image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="الفحص الفني الدوري مطلوب">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>
                                        @error('technical_inspection_image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-10">
                                <div class="form-group">
                                    <label for="NameEn" class="col-sm-5 control-label required">
                                        بطاقة تشغيل :
                                    </label>
                                    <div class=" ">
                                        <div>
                                            <div class="image-input image-input-outline form-control" >
                                                <div class="image-input-wrapper" id="kt_image_1">

                                                </div>
                                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="بطاقة تشغيل مطلوبة">
                                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                                    <input type="file" id="image" required name="card_employment_image" accept=".png, .jpg, .jpeg">
                                                </label>

                                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="بطاقة تشغيل مطلوبة">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                                            </div>
                                        </div>
                                        @error('card_employment_image')
                                        <div class="card_number" id="name_en_validate"> {{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="btn-group float-md-left m-2">
                            <button class="btn btn-info mb-1" type="submit">إضافة سائق جديدة</button>
                        </div>
                    </form>


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
