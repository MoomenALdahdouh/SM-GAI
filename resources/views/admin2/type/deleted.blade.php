@extends('admin.layout.main')
@section('title',str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف'))
@section('description',str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف'))
@section('author',str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف'))
@section('keywords',str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف'))
@section('copyright',str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف'))
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف')}}</h1>
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
                        <li class="breadcrumb-item text-dark">{{str_contains(Route::current()->getName(),'heavy')?"إدارة النقل الثقيل المحذوف":(str_contains(Route::current()->getName(),'light')?" إدارة  النقل الخفيف المحذوف":'إدارة المقدمة المحذوف')}}</li>
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
                <div class="card card-flush mt-10">
                    <!--begin::Card header-->
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Card title-->
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div id="filter_perant" class="card-toolbar flex-row-fluid justify-content-end gap-5"
                             data-kt-forms-table-toolbar="base">
                            <div class="card-toolbar">
                                <a href="{{route(str_contains(Route::current()->getName(),'heavy')?'transport-heavy.index':(str_contains(Route::current()->uri(),'light')?'transport-light.index':'introduction.index')) }}" class="btn btn-primary font-weight-bolder  mb-1">
                                    {{str_contains(Route::current()->uri(),'heavy')?"النقل الثقيل الحالية":(str_contains(Route::current()->uri(),'light')? 'النقل الخفيف الحالية':'المقدمه الحالية')}}

                                </a>
                                <ul class="list-inline mb-0">
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                </ul>
                            </div>
                            <!--end::Card toolbar-->
                            <!--end::Add forms-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
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
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
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
