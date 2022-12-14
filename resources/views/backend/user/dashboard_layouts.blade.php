<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NetContentBiz | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @include('includes.dashboard.style')
    @livewireStyles

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable aside-minimize">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    @include('backend.user.general_includes.mobile_nav')
    <!--end::Header Mobile-->
    <!--begin::Aside-->
    @include('backend.user.general_includes.sidebar')
    <!--end::Aside Menu-->
    <!--end::Aside-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                @include('backend.user.general_includes.dashboard_header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Dashboard-->
                    @yield('dashboard_content')
                    <!--end::Dashboard-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <!--doc: add "bg-white" class to have footer with solod background color-->
                @include('backend.user.general_includes.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!--begin::Search Panel-->
    @include('backend.user.general_includes.search_panel')
    <!--end::Search Panel-->
    <!--begin::Quick Actions Panel-->
    {{-- @include('backend.user.general_includes.quick_action_panel') --}}
    <!--end::Quick Actions Panel-->
    <!-- begin::User Panel-->
    @include('backend.user.general_includes.user_panel')
    <!-- end::User Panel-->
    <!--begin::Quick Panel-->
    @include('backend.user.general_includes.quick_panel')
    <!--end::Quick Panel-->
    <!--begin::Chat Panel-->
    @include('backend.user.general_includes.chat_panel')
    <!--end::Chat Panel-->
    <!--begin::Scrolltop-->
    @include('backend.user.general_includes.scroll_top')

    <!--end::Scrolltop-->
    @include('includes.dashboard.js')
    @yield('script')

    @livewireScripts
</body>

</html>
