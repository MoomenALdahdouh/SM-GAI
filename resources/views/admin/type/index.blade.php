@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">{{str_contains(Route::current()->getName(),'heavy')?"النقل الثقيل":(str_contains(Route::current()->getName(),'light')?" النقل الخفيف":'إدارة المقدمة')}}</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{str_contains(Route::current()->getName(),'heavy')?"النقل الثقيل":(str_contains(Route::current()->getName(),'light')?" النقل الخفيف":'إدارة المقدمة')}}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                    <div class="row float-md-right">
                        <div class="btn-group  col-md-6">
                            <a href="{{route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.create':(str_contains(Route::current()->getName(),'light')?'transport-light.create':'introduction.create')) }}" class="btn btn-info font-weight-bolder  mb-1">
                                {{str_contains(Route::current()->getName(),'heavy')?" إضافة نقل ثقيل":(str_contains(Route::current()->getName(),'light')?"إضافة نقل خفيف":' إضافة مقدمة جديدة')}}
                            </a>
                        </div>
                        <div class="btn-group  col-md-6">
                            <a href="{{url(str_contains(Route::current()->getName(),'heavy')?'/transport-heavy/deleted':(str_contains(Route::current()->getName(),'light')?'/transport-light/deleted':'/introduction/deleted')) }}" class="btn btn-danger font-weight-bolder  mb-1">
                                {{str_contains(Route::current()->getName(),'heavy')?" نقل ثقيل المحذوفة":(str_contains(Route::current()->getName(),'light')?" نقل خفيف المحذوفة":'  مقدمة جديدة المحذوفة')}}
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content collapse show mt-4">
               <br>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الصورة</th>
                            <th scope="col">الإسم بالعربي</th>
                            <th scope="col">الإسم بالانجليزي</th>
                            <th scope="col">التفاصيل بالعربي</th>
                            <th scope="col">التفاصيل بالانجليزي</th>
                            <th scope="col">التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($types as $type)
                        <tr>
                            <th>    {{$loop->iteration}}</th>
                            <td><img src="{{\Illuminate\Support\Facades\Storage::url($type->image)}}" width="120"  height="69"></td>
                            <td style="width: 160px">{{ $type->getTranslation('title','ar')}}</td>
                            <td style="width: 160px">{{ $type->getTranslation('title','en')}}</td>
                            <td style="width: 460px">{{ $type->getTranslation('details','ar')}}</td>
                            <td style="width: 460px">{{ $type->getTranslation('details','en')}}</td>
                            <td style="width: 250px">
                                <a  class="btn btn-warning"  href="{{route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.edit':(str_contains(Route::current()->getName(),'light')?'transport-light.edit':'introduction.edit'),$type->id)}}">
                                   تعديل
                                </a>
                                <span>|</span>
                                <a data-toggle="modal"
                                   data-target="#deleteProduct{{$type->id}}"  class="btn btn-danger">حذف
                                </a>

                            </td>

                            <div class="modal fade" id="deleteProduct{{$type->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{str_contains(Route::current()->getName(),'heavy')?'حذف نقل ثقيل':(str_contains(Route::current()->getName(),'light')?'الحذف النقل خفيف':'الحذف المقدمة')}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form  action="{{route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.destroy':(str_contains(Route::current()->getName(),'light')?'transport-light.destroy':'introduction.destroy'),$type->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control form-control-solid form-control-lg" readonly  rows="3" style="line-height: 24px">هل انت متأكد من الحذف</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">إلغاء</button>
                                                    <button type="submit"  class="btn btn-danger font-weight-bold">حذف</button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
