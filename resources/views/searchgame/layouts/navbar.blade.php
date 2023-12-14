<!--begin::Header-->
<div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Wrapper-->
        <div class="d-flex align-items-center justify-content-between">
            <!--begin::Logo-->
            <div class="d-flex align-items-center flex-equal">
                <!--begin::Mobile menu toggle-->
                <button class="btn btn-icon btn-active-color-info me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen038.svg-->
                    <span class="svg-icon svg-icon-light-info svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                            fill="black" />
                        <rect x="11" y="11" width="2" height="2" rx="1" fill="black" />
                        <rect x="15" y="11" width="2" height="2" rx="1" fill="black" />
                        <rect x="7" y="11" width="2" height="2" rx="1" fill="black" />
                    </svg></span>
                <!--end::Svg Icon-->
                </button>
                <!--end::Mobile menu toggle-->
                <!--begin::Logo image-->
                <a href="{{ route('landing') }}" class="">
                    <img alt="Logo" src="{{ asset('assets/svg/logo-dark.svg') }}" class="h-25px h-lg-30px" />
                </a>
                <!--end::Logo image-->
            </div>
            <!--end::Logo-->
            <!--begin::Menu wrapper-->
            <div class="d-lg-block" id="kt_header_nav_wrapper">
                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true" data-kt-drawer-name="landing-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="200px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-warning nav nav-flush fs-5 fw-bold" id="kt_landing_menu">
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a href="{{ route('landing') }}" class="menu-link nav-link py-3 px-4 px-xxl-6" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Beranda</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a href="{{ route('survey') }}" class="menu-link nav-link py-3 px-4 px-xxl-6 text-black" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Cari Game</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#best-game" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Game yang paling terbaik</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Menu link-->
                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#other-game" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Game yang lain</a>
                            <!--end::Menu link-->
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Menu wrapper-->
            <!--begin::Toolbar-->
            <div class="flex-equal text-end ms-1">
                 
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->