<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#6993FF",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#E1E9FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#FFFFFF",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
</script>
<script src="{{ asset('public/assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('public/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/swal.js') }}"></script>
<script src="{{ asset('public/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/widgets.js') }}"></script>
<script src="{{ asset('public/assets/js/pages/custom/login/login.js')}}"></script>
<script src="{{ asset('public/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!-- validation js -->
<script src="{{ asset('public/assets/js/jquery.validate.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.validate.min.js') }}"></script>

<script>
    "use strict";

    // Class definition
    var KTProfile = function () {
        // Elements
        var avatar;
        var offcanvas;

        // Private functions
        var _initAside = function () {
            // Mobile offcanvas for mobile mode
            offcanvas = new KTOffcanvas('kt_profile_aside', {
                overlay: true,
                baseClass: 'offcanvas-mobile',
                //closeBy: 'kt_user_profile_aside_close',
                toggleBy: 'kt_subheader_mobile_toggle'
            });
        }

        var _initForm = function() {
            avatar = new KTImageInput('kt_profile_avatar');
        }

        return {
            // public functions
            init: function() {
                _initAside();
                _initForm();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTProfile.init();
    });
</script>
