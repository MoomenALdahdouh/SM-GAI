@extends('layouts.dashboard')
@section('title')
    الصفحة الرئيسية
@endsection
@section('content')

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: [
                'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
                'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
                'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
                'alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>

    <div class="content-body">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">الشروط و الأحكام</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">الرئيسية</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">الشروط و الأحكام</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="from-actions-top-bottom-left">إضافة الشروط و الأحكام</h4>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form class="form" method="post" action="{{route('terms-conditions.store')}}">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput8">الشروط و الأحكام بالعربي: </label>
                                            <textarea id="mytextarea" name="details_ar">{{$setting !=null?$setting->getTranslation("details",'ar'):''}}</textarea>
                                        </div>
                                        <div class="form-group col-6 mb-2">
                                            <label for="issueinput8">الشروط و الأحكام بالانجليزي: </label>
                                            <textarea id="mytextarea" name="details_en">{{$setting !=null?$setting->getTranslation("details",'en'):''}}</textarea>
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

                                <div class="btn-group float-md-left m-2">
                                    <button class="btn btn-info mb-1" type="submit">إضافة شروط جديدة</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>


@endsection
