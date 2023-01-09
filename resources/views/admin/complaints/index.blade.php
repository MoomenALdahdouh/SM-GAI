@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">إدارة شكاوي ومقترحات المستخدمين </h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">إدارة شكاوي ومقترحات المستخدمين</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">

        <div class="card-content collapse show">
            <div class="mt-4 ml-4">
                <a href="{{route('complains-suggestion.index') }}" class="btn btn-blue-grey  mb-1"> الكل</a>
                <span>|</span>
                <a href="{{route('complains-suggestion.index',['is-reply'=>true]) }}" class="btn btn-blue mb-1">تم الرد
                    عليها </a>
                <span>|</span>
                <a href="{{route('complains-suggestion.index',['is-reply'=>false]) }}" class="btn btn-pink mb-1">لم يتم
                    الرد عليها </a>
            </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">اسم المستخدم</th>
                        <th scope="col">الايميل</th>
                        <th scope="col">تفاصيل الشكوى</th>
                        <th scope="col">تم الرد؟</th>
{{--                        <th scope="col">تفاصيل الرد</th>--}}
                        <th scope="col">التحكم</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($complaints  as $complaint)
                        <tr>
                            <th>    {{$loop->iteration}}</th>
                            <td>{{$complaint->customer->name}}</td>
                            <td><span>{{$complaint->customer->email}}</span></td>
                            <td><span>{{$complaint->complaint_details}}</span></td>
                            <td><span>{{$complaint->is_reply == 1?'تم الرد':'لم يتم الرب'}}</span></td>
{{--                            <td><span>{{$complaint->reply_details ?? '------'}}</span></td>--}}
                            <td>
                                @if($complaint->is_reply)
                                    <a data-toggle="modal"
                                       data-target="#details{{$complaint->id}}" style="color: white" class="btn btn-danger mb-1">تفاصيل</a>
                                @endif
{{--                                    <span>|</span>--}}
                                @if(!$complaint->is_reply)
                                        <a data-toggle="modal"
                                   data-target="#reply{{$complaint->id}}" class="btn btn-blue mb-1" style="color: white">الرد</a>
{{--                                <span>|</span>--}}
                                    @endif

                            </td>
                            <div class="modal fade" id="reply{{$complaint->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">الرد على الشكوى</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form  action="{{route('complains-suggestion.update',$complaint->id)}}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="id" value="{{$complaint->id}}"/>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea name="reply_details" class="form-control form-control-lg" required
                                                                      rows="3" style="line-height: 24px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">إلغاء</button>
                                                    <button type="submit"  class="btn btn-primary font-weight-bold">ارسال الرد</button>
                                                </div>
                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="details{{$complaint->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">الرد على الشكوى</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form >
                                                <input type="hidden" name="id" value="{{$complaint->id}}"/>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control  form-control-solid  form-control-lg" readonly
                                                                      rows="3" style="line-height: 24px">{{$complaint->reply_details ?? '------'}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">إغلاق</button>
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
