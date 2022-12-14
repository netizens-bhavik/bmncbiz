<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../../"/>
    <meta charset="utf-8"/>
    <title>Keen | Sign Up</title>
    <meta name="description" content="Singin page example"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!--begin::Fonts-->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"
    />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link
        href="{{ asset('public/assets/css/pages/login/login-3.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link
        href="{{ asset('public/assets/plugins/global/plugins.bundle.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('public/assets/plugins/custom/prismjs/prismjs.bundle.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{ asset('public/assets/css/style.bundle.css') }}"
        rel="stylesheet"
        type="text/css"
    />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link
        rel="shortcut icon"
        href="{{ asset('public/assets/media/logos/favicon.ico') }}"
    />
</head>
<!--end::Head-->
<!--begin::Body-->
<body
    id="kt_body"
    class="header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading"
>
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div
        class="login login-3 wizard d-flex flex-column flex-lg-row flex-column-fluid wizard"
        id="kt_login"
    >
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column py-lg-20 py-10 mb-20">
                <!--begin::Aside header-->
                <a href="#" class="login-logo text-center pt-lg-10 pb-10">
                    <img
                        src="{{ asset('public/assets/media/logos/logo-6.svg') }}"
                        alt="logo"
                        class="h-60px"
                    />
                </a>
                <!--end::Aside header-->
                <!--begin::Aside Title-->
                <h3
                    class="font-weight-bolder text-center font-size-h4 text-dark-50 line-height-xl"
                >
                    User Experience &amp; Interface Design <br/>Strategy SaaS
                    Solutions
                </h3>
                <!--end::Aside Title-->
            </div>
            <!--end::Aside Top-->
            <!--begin::Aside Bottom-->
            <div
                class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-contain"
                style="background-image: url({{ asset('public/assets/media/svg/illustrations/accomplishment.svg') }})"
            ></div>

            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column p-10">
            <!--begin::Top-->
            <div class="text-right d-flex justify-content-center">
                <div class="top-signin text-right d-flex justify-content-end pt-5 pb-lg-0 pb-10">
                    <span class="font-weight-bold text-muted font-size-h4">Having issues?</span>
                    <a href="javascript:;" class="font-weight-bold text-primary font-size-h4 ml-2" id="kt_login_signup">Get
                        Help</a>
                </div>
            </div>
            <!--end::Top-->
            <!--begin::Wrapper-->
            <div class="row justify-content-center">

                <!--begin::Signup-->
                <div class="signup-form col-md-6">
                    <!--begin::Form-->
                    <form class="form" id="signup-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--begin::Title-->
                        <div class="pb-5 pb-lg-15">
                            <h3 class="font-weight-bolder text-dark font-size-h2 font-size-h1-lg">Sign Up</h3>
                            <div class="text-muted font-weight-bold font-size-h4">Already Here?
                                <a href="{{ route('login') }}" class="text-primary font-weight-bolder">Login Now</a>
                            </div>
                        </div>
                        <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Full Name</label>
                            <input class="form-control h-auto py-6 rounded-lg border-0" type="text" name="name"
                                   :value="old('name')" required autofocus/>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">Your Email</label>
                            <input class="form-control h-auto py-6 rounded-lg border-0" id="email"
                                   type="email" name="email" :value="old('email')" required/>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Your Password</label>
                            </div>
                            <input class="form-control h-auto py-6 rounded-lg border-0" id="password"
                                   type="password"
                                   name="password"
                                   required autocomplete="new-password"/>
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Confirm Password</label>
                            </div>
                            <input class="form-control h-auto py-6 rounded-lg border-0" id="password_confirmation"
                                   type="password"
                                   name="password_confirmation"
                                   required autocomplete="new-password"/>
                        </div>
                        <!--end::Form group-->
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>





                        <div class="form-group">
                            <div class="checkbox-inline">
                                <label class="checkbox m-0 text-muted">
                                    <input type="checkbox" id="tnc_check" name="tnc_check" required/>
                                    <span></span>I Agree the terms and conditions</label>
                            </div>
                            <!--end::Validation Errors -->

                            <div>
                                <!--begin::Action-->
                                <div class="pb-lg-0 pb-5">
                                    <button type="submit"
                                            class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">
                                        Sign
                                        Up
                                    </button>
                                    <a href="{{ route('login') }}">
                                        <button type="button"
                                                class="btn btn-light-primary font-weight-bolder px-8 py-4 my-3 font-size-lg">
                                            Cancel
                                        </button>
                                    </a>
                                </div>
                                <!--end::Action-->
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->
        </div>

        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>
    var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        breakpoints: {sm: 576, md: 768, lg: 992, xl: 1200, xxl: 1200},
        colors: {
            theme: {
                base: {
                    white: "#ffffff",
                    primary: "#3699FF",
                    secondary: "#E5EAEE",
                    success: "#1BC5BD",
                    info: "#6993FF",
                    warning: "#FFA800",
                    danger: "#F64E60",
                    light: "#F3F6F9",
                    dark: "#212121",
                },
                light: {
                    white: "#ffffff",
                    primary: "#E1F0FF",
                    secondary: "#ECF0F3",
                    success: "#C9F7F5",
                    info: "#E1E9FF",
                    warning: "#FFF4DE",
                    danger: "#FFE2E5",
                    light: "#F3F6F9",
                    dark: "#D6D6E0",
                },
                inverse: {
                    white: "#ffffff",
                    primary: "#FFFFFF",
                    secondary: "#212121",
                    success: "#ffffff",
                    info: "#ffffff",
                    warning: "#ffffff",
                    danger: "#ffffff",
                    light: "#464E5F",
                    dark: "#ffffff",
                },
            },
            gray: {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121",
            },
        },
        "font-family": "Poppins",
    };
</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<link
    href="{{ asset('public/assets/plugins/global/plugins.bundle.css') }}"
    rel="stylesheet"
    type="text/css"
/>
<link
    href="{{ asset('public/assets/plugins/custom/prismjs/prismjs.bundle.css') }}"
    rel="stylesheet"
    type="text/css"
/>
<link
    href="{{ asset('public/assets/css/style.bundle.css') }}"
    rel="stylesheet"
    type="text/css"
/>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('public/assets/js/pages/custom/login/login-3.js') }}"></script>

<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
