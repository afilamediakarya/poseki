<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <title>Metronic - the worlds #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel
        by Keenthemes</title>
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ url('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .input::placeholder {
            color: #ffffff;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">

    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10" style="background-color: #2f5ed9;">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-500px p-10 p-lg-15 mx-auto ">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                            <!--begin::Heading-->
                            <div class="text-center mb-10">
                                <table>
                                    <tr>
                                        <td>
                                            <h1 class="text-white mb-3 me-lg-20">Welcome to</h1>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img alt="Logo" src="assets/media/logos/logoPoseki.png"
                                                style="width: 60%" />
                                        </td>
                                    </tr>
                                </table>
                                {{--  <!--begin::Title-->
                                <h1 class="text-white mb-3">Welcome to</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div>
                                    <img alt="Logo" src="assets/media/logos/logoPoseki.png" class="h-25px logo" />
                                </div>  --}}
                                {{--  <div class="text-gray-400 fw-bold fs-4">New Here?
									<a href="../../demo2/dist/authentication/flows/aside/sign-up.html" class="link-primary fw-bolder">Create an Account</a></div>  --}}
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="row mb-10">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-white ms-1">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid border rounded-pill input"
                                    type="email"
                                    style="background-color: #2f5fd96c;" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row ">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-white ms-1">Password</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid border rounded-pill"
                                    type="password"
                                    style="background-color: #2f5fd96c;" />
                                <!--end::Input-->
                            </div>

                            <!--begin::Link-->
                            <a href="../../demo2/dist/authentication/flows/aside/password-reset.html"
                                class="link-primary fs-6">
                                <p class="text-end">Forgot Password ?</p>
                            </a>
                            <!--end::Link-->
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-white w-100 mb-5">
                                    <span class="indicator-label text-dark fw-bold">Sign in</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                <div class="text-center text-white text-uppercase fw-bolder mb-5">or</div>
                                <!--end::Separator-->
                                <!--begin::Google link-->
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                                    <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                        class="h-20px me-3" />Continue with Google</a>
                                <!--end::Google link-->
                                <p class="text-white">Don’t have an account? <a href="{{ url('/register') }}" style="color: #fff700">Sign up</a></p>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color: #fff; overflow-y: hidden;">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <img src="{{ url('assets/media/imageLogin.png') }}" alt="" class="mx-3 my3">
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "{{ url('assets/') }}";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ url('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ url('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ url('assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
