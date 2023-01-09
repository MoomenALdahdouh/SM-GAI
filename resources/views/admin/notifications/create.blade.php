@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">ارسال اشعار جديد</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('notifications.index')}}">إدارة الاشعارات</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">ارسال اشعار جديد</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <form class="form" action="{{route('notifications.store')}}" method="post">
                    @csrf
                    <div class="form-body">
                        <label class="card-title mt-5" for="issueinput1">اختيار المرسل اليهم:</label>
                        <br/>
                        <dav>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                            <select name="users[]" class="selectpicker form-control" required id="users" multiple
                                    data-live-search="true" data-live-al>
                                <option value="all">All</option>
                                @foreach($customers as $customer)
                                    <option style="direction: ltr;"
                                            value="{{$customer->id}}">{{$customer->name}} </option>
                                @endforeach
                            </select>

                        </dav>
                        <div class="row mt-2">
                            <div class="form-group col-12 mb-2">
                                <label for="issueinput1">عنوان الاشعار: </label>
                                <input type="text" id="issueinput1" required class="form-control"
                                       placeholder="المدينة بالعربى:"
                                       name="title" data-toggle="tooltip" data-trigger="hover"
                                       data-placement="top" data-title="المدينة بالعربى:">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-12 mb-2">
                                <label for="issueinput8">محتوى الاشعار: </label>
                                <textarea id="issueinput8" required rows="5" class="form-control" name="details"
                                          placeholder="التفاصيل بالعربي: "
                                          data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                          data-title="التفاصيل بالعربي"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="btn-group float-md-left m-2">
                            <button class="btn btn-info mb-1" type="submit">ارسال اشعار جديد</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>



@endsection
