<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">الصفحات الرئيسية</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                        data-placement="right" data-original-title="Layouts"></i>
            </li>
            @can('SM_GAI_EMPLOYEE')
            <li class=" nav-item"><a href="{{url('/')}}"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">الرئيسية</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('introduction.index')}}"><i class="la la-columns"></i><span class="menu-title" data-i18n="nav.page_layouts.main">إضافة المقدمة</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('transport-light.index')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.navbars.main">النقل الخفيف</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('transport-heavy.index')}}"><i class="la la-arrows-v"></i><span class="menu-title" data-i18n="nav.vertical_nav.main">النقل الثقيل</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('customers.index')}}"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.footers.main">إدارة المستخدمين</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('drivers.index')}}"><i class="la la-car"></i><span class="menu-title" data-i18n="nav.footers.main">إدارة السائقين</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('orders.index')}}"><i class="la la-cart-plus"></i><span class="menu-title" data-i18n="nav.footers.main">طلبات المستخدمين</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('taxes.index')}}"><i class="la la-money"></i><span class="menu-title" data-i18n="nav.footers.main">إعداد الأسعار</span></a>
            </li>
            @endcan
            @can('CONTENT_MANAGEMENT')
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">ادارة المحتوى</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                                 data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="{{route('complains-suggestion.index')}}"><i class="la la-comments"></i><span class="menu-title" data-i18n="nav.footers.main">الشكاوي و الإقتراحات</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('terms-conditions.index')}}"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.footers.main">الشروط و الأحكام</span></a>
            </li>
            @endcan
            @can('SETTING_MANAGEMENT')
            <li class=" navigation-header">
                <span data-i18n="nav.category.layouts">الإعدادات</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
                                                                          data-placement="right" data-original-title="Layouts"></i>
            </li>
            <li class=" nav-item"><a href="{{route('cities.index')}}"><i class="la la-hotel"></i><span class="menu-title" data-i18n="nav.horz_nav.main">المدن</span></a>
            </li>
            @endcan
            @can('ADMIN')
            <li class=" nav-item"><a href="{{url('users')}}"><i class="la la-header"></i><span class="menu-title" data-i18n="nav.page_headers.main">إدارة الأدمن</span></a>
            </li>
            @endcan
            @can('SETTING_MANAGEMENT')
            <li class=" nav-item"><a href="{{route('notifications.index')}}"><i class="la la-envelope"></i><span class="menu-title" data-i18n="nav.footers.main">الإشعارات و التنبيهات</span></a>
            </li>
            @endcan

        </ul>
    </div>
</div>
