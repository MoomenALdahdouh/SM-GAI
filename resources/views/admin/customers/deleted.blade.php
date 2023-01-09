@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block"> المستخدمين المحذوفة </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}} ">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('drivers.index')}}">إدارة المستخدمين </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">المستخدمين المحذوفة المحذوفة</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                    <div class="row float-md-right">
                        <div class="btn-group  col-md-6">
                            <a href="{{ URL::previous() }}" class="btn btn-blue font-weight-bolder  mb-1">
                                المستخدمين الحالية
                            </a>
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
                            <th scope="col">الصورة</th>
                            <th scope="col">اسم المستخدم</th>
                            <th scope="col">رقم الهاتف</th>
                            <th scope="col">الايميل</th>
                            <th scope="col">الحالة</th>
                            <th scope="col">التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <th>1</th>
                                <td><img src="{{$customer->image!=null?\Illuminate\Support\Facades\Storage::url($customer->image):asset('dashboard/images/portrait/small/avatar-s-18.png')}}" width="120"  height="69"></td>
                                <td>{{$customer->name}}</td>
                                <td><span >{{$customer->phone_number}}</span></td>
                                <td><span >{{$customer->email}}</span></td>
                                <td><span >محذوف</span></td>
                                <td>
                                        <a href="" class="btn btn-blue mb-1"  data-toggle="modal"
                                           data-target="#restortUser{{$customer->id}}">استعادة</a>
                                </td>

                                <div class="modal fade" id="restortUser{{$customer->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{str_contains(Route::current()->getName(),'drivers')?'استعادة السائق':'استعادة المستخدم'}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form  action="{{url(str_contains(Route::current()->getName(),'drivers')?'drivers/restore':'customers/restore',$customer->id)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="id" value="{{$customer->id}}"/>
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
