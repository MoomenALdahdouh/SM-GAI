@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">{{str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف')}}</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{str_contains(Route::current()->getName(),'heavy')?"النقل الثقيل":(str_contains(Route::current()->getName(),'light')?" النقل الخفيف":'إدارة المقدمة')}}</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">{{str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف')}}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                    <div class="row float-md-right">
                        <div class="btn-group  col-md-6">
                            <a href="{{route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.index':(str_contains(Route::current()->uri(),'light')?'transport-light.index':'introduction.index')) }}" class="btn btn-blue font-weight-bolder  mb-1">
                                {{str_contains(Route::current()->uri(),'heavy')?"النقل الثقيل الحالية":(str_contains(Route::current()->uri(),'light')? 'النقل الخفيف الحالية':'المقدمه الحالية')}}

                            </a>
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
            </div>
            <div class="card-content collapse show">
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
                                <td>
                                    <a href="" class="btn btn-blue mb-1"  data-toggle="modal"
                                       data-target="#restortUser{{$type->id}}">استعادة</a>
                                </td>

                                <div class="modal fade" id="restortUser{{$type->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{str_contains(Route::current()->getName(),'drivers')?'حذف السائق':'الحذف المستخدم'}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form  action="{{url(str_contains(Route::current()->getName(),'heavy')?'/transport-heavy/restore':(str_contains(Route::current()->getName(),'light')?'/transport-light/restore':'/introduction/restore'),$type->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{$type->id}}"/>
                                                    <input type="hidden" name="type" value="DELETED"/>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control form-control-solid form-control-lg" readonly  rows="3" style="line-height: 24px">هل انت متأكد من الاستعادة</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">إلغاء</button>
                                                        <button type="submit"  class="btn btn-danger font-weight-bold">استعادة</button>
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
