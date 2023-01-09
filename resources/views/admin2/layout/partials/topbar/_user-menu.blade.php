<!--begin::Menu-->
@php
    $language = config('app.locale');
    $url = \Illuminate\Support\Facades\URL::current();
    $previous_url = \Illuminate\Support\Facades\URL::previous();
@endphp
<div
    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
    data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            @if(auth()->guard("web")->user())
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{asset("uploads/users/". auth()->guard("web")->user()->image)}}"/>
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">{{auth()->guard("web")->user()->name}}
                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2"><!--Pro--></span></div>
                    <a href="#"
                       class="fw-bold text-muted text-hover-primary fs-7">{{auth()->guard("web")->user()->email}}</a>
                </div>
            @endif
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->
    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{url("admin/account")}}"
           class="menu-link px-5 {{str_contains($url,"account")? "active":""}}">{{__("str.My Profile")}}</a>
    </div>
    <!--end::Menu item-->
    <div class="menu-item px-5 " data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
         data-kt-menu-flip="bottom, top">
        <a href="#" class="menu-link px-5">
														<span class="menu-title position-relative">{{__("str.Language")}}
														<span
                                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">{{--{{ Config::get('language')[App::getLocale()] }}--}}
                                                            {{--@if(App::getLocale() == "ar")
                                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/palestine.svg")}}"
                                                                     alt="metronic"/>
                                                            @else
                                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/united-states.svg")}}"
                                                                     alt="metronic"/>
                                                            @endif--}}
                                                        </span>
                                                        </span>
        </a>
        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4 ">
            <!--begin::Menu item-->
            {{--@foreach (Config::get('language') as $lang => $language)
                @if ($lang == App::getLocale())
                    <div class="menu-item px-3">
                        <a href="{{ route('lang.switch', $lang) }}" class="menu-link d-flex px-5 active">
                                                        <span class="symbol symbol-20px me-4">
                                                            @if($lang == "ar")
                                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/palestine.svg")}}"
                                                                     alt="metronic"/>
                                                            @else
                                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/united-states.svg")}}"
                                                                     alt="metronic"/>
                                                            @endif
                                                        </span>{{$language}}</a>
                    </div>
                @else
                    <div class="menu-item px-3">
                        <a href="{{ route('lang.switch', $lang) }}" class="menu-link d-flex px-5">
                                                        <span class="symbol symbol-20px me-4">
                                                            @if($lang == "ar")
                                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/palestine.svg")}}"
                                                                     alt="metronic"/>
                                                            @else
                                                                <img class="w-15px h-15px rounded-1 ms-2"
                                                                     src="{{asset("assets/admin/images/united-states.svg")}}"
                                                                     alt="metronic"/>
                                                            @endif
                                                        </span>{{$language}}</a>
                    </div>
                @endif
            @endforeach--}}
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->
    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="{{--{{ route('admin.logout') }}--}}" class="menu-link px-5">{{__("str.Sign Out")}}</a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
