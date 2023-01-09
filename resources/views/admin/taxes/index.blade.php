@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة الضريبة </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة الضريبة</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-6">
                <div class="row float-md-right">
                    <div class="btn-group  col-md-6">
                        <a href="{{ route('taxes.create') }}" class="btn btn-info font-weight-bolder  mb-1">
                            إضافة ضريبة جديدة
                        </a>                        </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card">

        <div class="card-content collapse show">
            <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم الضريبة بالعربي</th>
                        <th scope="col">اسم الضريبة بالانجليزي</th>
                        <th scope="col">تفاصييل الضريبة بالعربي</th>
                        <th scope="col">نوع الضريبة بالانجليزي</th>
                        <th scope="col">قيمة الضريبة المئوية</th>
                        <th scope="col">نوع الضريبة</th>
                        <th scope="col">التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($taxes as $tax)
                    <tr>
                        <th>  {{$loop->iteration}}</th>
                        <td>{{$tax->getTranslation('title','ar')}}</td>
                        <td>{{$tax->getTranslation('title','en')}}</td>
                        <td>{{$tax->getTranslation('details','ar')}}</td>
                        <td>{{$tax->getTranslation('details','en')}}</td>
                        <td>{{$tax->value.'%'}}</td>
                        <td>{{$tax->type =='SERVICE_FEE'?'ضريبة خدمات':'ضريبة تحويل'}}</td>
                        <td>
                            <a href="{{route("taxes.edit",$tax->id)}}" class="btn btn-grey-blue mb-1">تعديل</a>
                            <span>|</span>
                            <a href="" class="btn btn-pink mb-1"  data-toggle="modal"
                               data-target="#deleteTax{{$tax->id}}">حذف</a>
                        </td>
                        <div class="modal fade" id="deleteTax{{$tax->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{str_contains(Route::current()->getName(),'drivers')?'حذف السائق':'الحذف المستخدم'}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form  action="{{route('taxes.destroy',$tax->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{$tax->id}}"/>
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
@endsection
