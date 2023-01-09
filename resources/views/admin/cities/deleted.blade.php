@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة المدن</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('cities.index')}}">إدارة المدن</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة المدن المحذوفة</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                    <div class="row float-md-right">
                        <div class="btn-group  col-md-6">
                            <a href="{{ URL::previous() }}" class="btn btn-blue font-weight-bolder  mb-1">
                                المدن الحالية
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
                            <th scope="col">اسم المدينة بالعربى</th>
                            <th scope="col">اسم المدينة بالانجليزي</th>
                            <th scope="col">التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cities as $city)
                            <tr>
                                <th>    {{$loop->iteration}}</th>
                                <td>{{$city->getTranslation('name','ar')}}</td>
                                <td><span >{{$city->getTranslation('name','en')}}</span></td>
                                <td>
                                    <a data-toggle="modal"
                                       data-target="#deleteProduct{{$city->id}}"  class="btn btn-danger">استعادة
                                    </a>
                                </td>

                                <div class="modal fade" id="deleteProduct{{$city->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form  action="{{url('cities/restore',$city->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control form-control-solid form-control-lg" readonly  rows="3" style="line-height: 24px">Are You Sure you want to delete this product, by Accept the deletion you will lose the product details?</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Cancel</button>
                                                        <button type="submit"  class="btn btn-primary font-weight-bold">Confirm</button>
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
