<!--begin::Aside Menu-->
@php
    $language = config('app.locale');
    $url = \Illuminate\Support\Facades\URL::current();
    $previous_url = \Illuminate\Support\Facades\URL::previous();
@endphp
<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
     data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
     data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
     data-kt-scroll-offset="0">
    <!--begin::Menu-->
    <div
        class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
        id="#kt_aside_menu" data-kt-menu="true">
        <div class="menu-item">
            <div class="menu-content pb-2">
                <span class="menu-section text-muted text-uppercase fs-8 ls-1">لوحة التحكم</span>
            </div>
        </div>
        @can('SM_GAI_EMPLOYEE')
            <div class="menu-item">
                <a class="menu-link {{$url == url("/admin")? "active":""}}" href="{{url('/')}}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                    <span class="menu-title">الصفحة الرئيسية</span>
                </a>
            </div>
        @endcan
    </div>
    <!--end::Menu-->
</div>
<!--end::Aside Menu-->
