<script src="{{asset('assets/admin/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('assets/admin/js/scripts.bundle.js')}}"></script>
<script src="{{asset("assets/admin/plugins/custom/datatables/datatables.bundle.js")}}"></script>
<script src="{{ asset('assets/admin/js/utils/constants.js') }}" defer></script>
<script src="{{asset("assets/admin/plugins/custom/formrepeater/formrepeater.bundle.js")}}"></script>
{{--<script src="{{asset("assets/admin/plugins/custom/formrepeater/formrepeater.bundle.js")}}"></script>--}}
{{--<script src="{{asset('assets/admin/js/custom/widgets.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('assets/admin/js/custom/intro.js')}}"></script>
<script src="{{asset("assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js")}}"></script>
<script src="{{asset("assets/admin/plugins/custom/vis-timeline/vis-timeline.bundle.js")}}"></script>
<script src="{{asset("assets/admin/js/widgets.bundle.js")}}"></script>
<script src="{{asset("assets/admin/js/custom/utilities/modals/upgrade-plan.js")}}"></script>
<script src="{{asset("assets/admin/js/custom/utilities/modals/users-search.js")}}"></script>
<script src="{{asset("assets/admin/js/custom/utilities/modals/create-app.js")}}"></script>--}}
{{--<script src="{{asset("assets/admin/js/custom/apps/calendar/calendar.js")}}"></script>--}}
<div class="modal fade" id="newUser" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل البيانات</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                @if(Auth::user())
                    <form action="{{route('profile.update',\Illuminate\Support\Facades\Auth::user()->id)}}"
                          method="post">
                        @csrf
                        @method("PATCH")
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mb-1">الاسم</label>
                                    <input class="form-control" id="name"
                                           type="text" name="name"
                                           value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mb-1">الإيميل : </label>
                                    <input class="form-control"
                                           placeholder="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                           id="email" type="text" name="email">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="mb-1">كلمة السر جديدة</label>
                                    <input class="form-control" id="password"
                                           type="password" name="password">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label class="mb-1">تأكيد كلمة السر الجديدة</label>
                                    <input class="form-control" id="password"
                                           type="password" name="password">
                                    <div class="invalid-feedback" id="name_en_validate"></div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-primary font-weight-bold"
                                    data-bs-dismiss="modal">إغلاف
                            </button>
                            <button type="submit" onclick="CreateProduct()"
                                    class="btn btn-primary font-weight-bold">تعديل
                            </button>
                        </div>
                    </form>
                @endif
            </div>

        </div>
    </div>
</div>
@yield('js')
