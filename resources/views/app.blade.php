<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <link
        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico"
        rel="shortcut icon"
        type="image/x-icon"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet"
    />

    <!-- BEGIN: Vendor CSS-->
    <link
        href="{{asset('app-assets/vendors/css/vendors.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/vendors/css/charts/apexcharts.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/vendors/css/extensions/toastr.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-blog.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-sliders.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <!-- END: Page CSS-->


    <!-- BEGIN: Theme CSS-->
    <link
        href="{{asset('app-assets/css/bootstrap.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/bootstrap-extended.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/colors.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/components.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/themes/dark-layout.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/themes/bordered-layout.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/themes/semi-dark-layout.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />

    <!-- BEGIN: Page CSS-->
    <link
        href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/plugins/charts/chart-apex.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />

    <link
        href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <link
        href="{{asset('app-assets/css/pages/app-invoice-list.min.css')}}"
        rel="stylesheet"
        type="text/css"
    />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link
        href="{{asset('assets/css/style.css')}}"
        rel="stylesheet"
        type="text/css"/>


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-swiper.min.css')}}">
    <!-- END: Page CSS-->

    <!-- END: Custom CSS-->


    <!-- BEGIN: Vendor CSS-->
    <link href="{{asset('app-assets/vendors/css/vendors.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/vendors/css/extensions/swiper.min.css')}}" rel="stylesheet" type="text/css">
    <!-- END: Vendor CSS-->


    <!-- BEGIN: Theme CSS-->
    <link href="{{asset('app-assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/bootstrap-extended.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/themes/dark-layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/themes/bordered-layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('app-assets/css/themes/semi-dark-layout.min.css')}}" rel="stylesheet" type="text/css">

    <!-- BEGIN: Page CSS-->
    <link href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('app-assets/css/plugins/extensions/ext-component-swiper.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-profile.min.css')}}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- END: Custom CSS-->


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/forms/pickers/form-pickadate.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/form-validation.css')}}">
    <!-- END: Page CSS-->


    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-ecommerce.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/charts/chart-apex.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard-ecommerce.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('app-assets/css/plugins/extensions/ext-component-sweet-alerts.min.css')}}">


    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/pages/app-ecommerce-details.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/plugins/forms/form-number-input.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" href="{{asset('js/notiflix/dist/notiflix-3.2.5.min.css')}}"/>


    <style>
        #freechat-popup > div.freechat-popup-header {
            background: #0e111d url("{{asset('app-assets/images/banner/treble Clef_logo original.png')}}");
        }

        #freechat-popup > div.freechat-popup-header > div.freechat-popup-top > h1 {
            color: #fff;
            background: #300606;
            border-radius: 7px;
            padding: 0.15em;
        }

        #freechat-popup > div.freechat-popup-content > p {
            background-color: #502734 !important;
            color: #fff !important;
        }


        #main-menu-navigation {
            margin-top: 57px;
        }


    </style>


    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/page-pricing.min.css')}}">

    <style>
        @media only screen and (min-width: 768px) {
            #main-menu-navigation > li:nth-child(11) {
                margin-top: 136%;
            }
        }

    </style>
    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">

    @routes
    @vite('resources/js/app.js')
    @inertiaHead

</head>
<body class="vertical-layout vertical-menu-modern navbar-floating footer-static"
      style="{{Auth::check() ? 'background-color: #0e111d' : '' }}"
      data-col=""
      data-menu="vertical-menu-modern"
      data-open="click">


        @inertia

<!-- END: Content-->



<!-- BEGIN: Page Vendor JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Vendor JS-->
<script src="{{asset('app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
<script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.min.js') }}"></script>
<script src="{{ asset('app-assets/js/scripts/pages/app-invoice-list.min.js') }}"></script>
<!-- END: Page JS-->

@if(!Auth::check())
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/page-auth-login.js')}}"></script>
    <!-- END: Page JS-->

@endif
</body>
</html>
