@extends('admin.layout.main')
@section('title','الشروط و الأحكام')
@section('description','الشروط و الأحكام')
@section('author','الشروط و الأحكام')
@section('keywords','الشروط و الأحكام')
@section('copyright','الشروط و الأحكام')
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">الشروط و الأحكام</h1>
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
                        <li class="breadcrumb-item text-dark">الشروط و الأحكام</li>
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
                <div class="card card-flush mt-10 pt-2">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>إضافة الشروط و الأحكام</h2>
                        </div>
                    </div>
                    <form class="form card-body mt-0 pt-0" method="post" action="{{route('terms-conditions.store')}}">
                        @csrf
                        <div class="form-body">
                            <div class="">
                                <div class="form-group  mb-2 ">
                                    <label for="issueinput8" class="mb-2">الشروط و الأحكام بالعربي: </label>
                                    <textarea id="mytextarea" rows="4"
                                          class="form-control mt-2"    name="details_ar">{{$setting !=null?$setting->getTranslation("details",'ar'):''}}</textarea>
                                </div>
                                <div class="form-group  mb-2 mt-4">
                                    <label for="issueinput8" class="mb-2">الشروط و الأحكام بالانجليزي: </label>
                                    <textarea id="mytextarea" rows="4"
                                              class="form-control mt-2"  name="details_en">{{$setting !=null?$setting->getTranslation("details",'en'):''}}</textarea>
                                </div>
                            </div>
                        </div>
                        {{--                                <label class="card-title" for="issueinput1">نوع الاعدادت</label>--}}
                        {{--                                <select class="form-control input-xl" id="Small">--}}
                        {{--                                    <option selected>XLarge select options</option>--}}
                        {{--                                    <option value="1">One</option>--}}
                        {{--                                    <option value="2">Two</option>--}}
                        {{--                                    <option value="3">Three</option>--}}
                        {{--                                </select>--}}

                        <div class="btn-group float-md-left  mt-4">
                            <button class="btn btn-info mb-1 mt-4" type="submit">إضافة شروط جديدة</button>
                        </div>

                    </form>
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

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: [
                'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',
                'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',
                'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
@endsection
