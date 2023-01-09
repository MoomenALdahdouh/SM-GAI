@extends('admin.layout.main')
@section('title',str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين")
@section('description',str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين")
@section('author',str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين")
@section('keywords',str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين")
@section('copyright',str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين")
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين"}}</h1>
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
                        <li class="breadcrumb-item text-dark">{{str_contains(Route::current()->getName(),'drivers')?'ادارة السائقين':"إدارة المتخدمين"}}</li>
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
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1 d-none">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                              height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                              fill="black"/>
														<path
                                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                            fill="black"/>
													</svg>
												</span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-ecommerce-blank-filter="search"
                                       class="form-control form-control-solid w-250px ps-14"
                                       placeholder="@lang("str.Search Here")"/>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div id="filter_perant" class="card-toolbar flex-row-fluid justify-content-end gap-5"
                             data-kt-forms-table-toolbar="base">
                            @if(str_contains(Route::current()->getName(),'drivers'))
                                <div class="card-toolbar">
                                    <a href="{{ route('customers.create') }}"
                                       class="btn btn-info font-weight-bolder  mb-1">
                                        إضافة سائق جديدة
                                    </a>
                                </div>
                            @endif
                            <div class="card-toolbar">
                                <a href="{{   url( Route::current()->getName()=='customers.index'?'customers-deleted':'drivers-deleted') }}"
                                   class="btn btn-danger font-weight-bolder  mb-1">
                                    المستخدمين المحذوفة
                                </a>
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
                                    <th>    {{$loop->iteration}}</th>
                                    <td><img
                                            src="{{$customer->image!=null?\Illuminate\Support\Facades\Storage::url($customer->image):asset('dashboard/images/portrait/small/avatar-s-18.png')}}"
                                            width="120" height="69"></td>
                                    <td>{{$customer->name}}</td>
                                    <td><span>{{$customer->phone_number}}</span></td>
                                    <td><span>{{$customer->email}}</span></td>
                                    <td>
                                        <span>{{$customer->status == "ACCEPTED"?'نشط':($customer->status=="REJECTED"?"مرفوض":'معلق')}}</span>
                                    </td>
                                    <td style="width: 250px">
                                        @if( str_contains(Route::current()->getName(),'drivers'))
                                            <a href="{{route('drivers.show',$customer->id) }}"
                                               class="btn btn-primary  mb-1"> تفاصيل</a>
                                            <span>|</span>
                                        @endif
                                        @if($customer->status == "PENDING" || $customer->status == "REJECTED")
                                            <a href="" class="btn btn-success mb-1" data-bs-toggle="modal"
                                               data-bs-target="#acceptUser{{$customer->id}}">قبول</a>
                                            <span>|</span>
                                        @endif
                                        @if($customer->status != "REJECTED" || $customer->status == "ACCEPTED")
                                            <a href="" class="btn btn-warning mb-1" data-bs-toggle="modal"
                                               data-bs-target="#rejectUser{{$customer->id}}">رفض</a>
                                            <span>|</span>
                                        @endif
                                        <a href="" class="btn btn-danger mb-1" data-bs-toggle="modal"
                                           data-bs-target="#deleteUser{{$customer->id}}">حذف</a>
                                        {{--                                @if( str_contains(Route::current()->getName(),'drivers'))--}}
                                        {{--                                <span>|</span>--}}
                                        {{--                                <a href="{{route('drivers.edit',$customer->id)}}" class="btn btn-blue mb-1">تعديل</a>--}}
                                        {{--                                @endif--}}
                                    </td>
                                    <div class="modal fade" id="deleteUser{{$customer->id}}" tabindex="-1"
                                         aria-labelledby="edit" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLabel">{{str_contains(Route::current()->getName(),'drivers')?'حذف السائق':'الحذف المستخدم'}}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{route(str_contains(Route::current()->getName(),'drivers')?'drivers.destroy':'customers.destroy',$customer->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="id" value="{{$customer->id}}"/>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        readonly rows="3" style="line-height: 24px">هل انت متأكد من الحذف</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn btn-light-primary font-weight-bold"
                                                                    data-bs-dismiss="modal">إلغاء
                                                            </button>
                                                            <button type="submit"
                                                                    class="btn btn-danger font-weight-bold">حذف
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="acceptUser{{$customer->id}}" tabindex="-1"
                                         aria-labelledby="edit" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLabel">{{str_contains(Route::current()->getName(),'drivers')?'قبول السائق':'قبول المستخدم'}}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{route(str_contains(Route::current()->getName(),'drivers')?'drivers.update':'customers.update',$customer->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input type="hidden" name="type" value="ACCEPTED"/>
                                                        <input type="hidden" name="id" value="{{$customer->id}}"/>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        readonly rows="3" style="line-height: 24px">هل انت متأكد من القبول</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn btn-light-primary font-weight-bold"
                                                                    data-bs-dismiss="modal">إلغاء
                                                            </button>
                                                            <button type="submit"
                                                                    class="btn btn-primary font-weight-bold">قبول
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="rejectUser{{$customer->id}}" tabindex="-1"
                                         aria-labelledby="edit" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLabel">{{str_contains(Route::current()->getName(),'drivers')?'رفض السائق':'رفض المستخدم'}}</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{route(str_contains(Route::current()->getName(),'drivers')?'drivers.update':'customers.update',$customer->id)}}"
                                                        method="post">
                                                        @csrf
                                                        @method("PATCH")
                                                        <input type="hidden" name="type" value="REJECTED"/>
                                                        <input type="hidden" name="id" value="{{$customer->id}}"/>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        readonly rows="3" style="line-height: 24px">هل انت متأكد من الرفض</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn btn-danger font-weight-bold"
                                                                    data-bs-dismiss="modal">إلغاء
                                                            </button>
                                                            <button type="submit" class="btn btn-warning font-weight-bold">
                                                                رفض
                                                            </button>
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
