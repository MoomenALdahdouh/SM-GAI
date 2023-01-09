<!--begin::Toolbar wrapper-->
<div class="d-flex align-items-stretch flex-shrink-0">
    {{--Select language--}}
    <!--begin::Search-->
    <div class="d-flex align-items-stretch ms-1 ms-lg-3">
        <!--layout-partial:layout/search/_base.html-->
        {{--@include("partials.search._base")--}}
    </div>
    <!--end::Search-->
    <!--begin::Chat-->
    <!--end::Chat-->
    <!--begin::User-->
    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
             data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img src="{{asset("assets/admin/images/blank.svg")}}" alt="user"/>
        </div>

        <!--layout-partial:layout/topbar/partials/_user-menu.html-->
        @include("admin.layout.partials.topbar._user-menu")
        <!--end::Menu wrapper-->
    </div>
    <!--end::User -->
    <!--begin::Heaeder menu toggle-->
    <!--end::Heaeder menu toggle-->
</div>
<!--end::Toolbar wrapper-->

