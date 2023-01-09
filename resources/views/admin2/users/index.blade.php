@extends('admin.layout.main')
@section('title',trans('Role.Management'))
@section('description',trans('Role.Management'))
@section('author',trans('Role.Management'))
@section('keywords',trans('Role.Management'))
@section('copyright',trans('Role.Management'))
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">إدارة الادمن</h1>
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
                        <li class="breadcrumb-item text-dark">إدارة الادمن</li>
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
                            <div class="card-toolbar">
                                <a href="{{ route('users.create') }}" class="btn btn-primary font-weight-bolder  mb-1">
                                    إضافة أدمن
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
                                <th scope="col">الاسم</th>
                                <th scope="col">الإيميل</th>
                                {{--                            <th scope="col">رقم الهاتف</th>--}}
                                <th scope="col">الدور الوظيفى</th>
                                {{--                            <th scope="col">الحالـه</th>--}}
                                <th scope="col">التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                @if($user->email !=	'admin@gmail.com')
                                    <tr>
                                        <th>{{$loop->iteration-1}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        {{--                                <td></td>--}}
                                        <td style="width: 400px">
                                            {{
                                                         $user->roles()->pluck('name')->implode(' ') == "ADMIN"?"أدمن: يتحكم بكامل لوحة التحكم"
                                                         :($user->roles()->pluck('name')->implode(' ')== "SM_GAI_EMPLOYEE"?"موظف: يتحكم في القسم الرئيسي"
                                                         :($user->roles()->pluck('name')->implode(' ') == "CONTENT_MANAGEMENT"?"إدارة المحتوى: يقوم بإدارت الفسم الخاص ب إدارة المحتوى"
                                                         :($user->roles()->pluck('name')->implode(' ') == "SETTING_MANAGEMENT"?"إدارة الاعدادات: يقوم بإدارت القسم الخاص بالاعدادات":"")))
                                                         }}
                                        </td>
                                        {{--                                <td></td>--}}


                                        <td>


                                            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">
                                                تعديل الدور الوظيفى
                                            </a>
                                            <span>|</span>

                                            <a data-bs-toggle="modal" class="btn btn-danger"
                                               data-bs-target="#deleteUser{{$user->id}}" style="color: white">
                                                حذف
                                            </a>
                                        </td>

                                        <div class="modal fade" id="deleteUser{{$user->id}}" tabindex="-1"
                                             aria-labelledby="edit" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">حذف المستخدم</h5>
                                                        <button type="button" class="close" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                            <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('users.destroy',$user->id)}}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                    <textarea
                                                                        class="form-control form-control-solid form-control-lg"
                                                                        readonly rows="3" style="line-height: 24px">هل انت متأكد من حذف المستخدم</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                        class="btn btn-light-primary font-weight-bold"
                                                                        data-bs-dismiss="modal">إغلاق
                                                                </button>
                                                                <button type="submit" class="btn btn-warning">تأكيد الحذف
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--begin::end deleteProduct Modal-->
                                    </tr>
                                @endif
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
