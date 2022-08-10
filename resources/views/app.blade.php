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
              type="text/css">
        <link href="{{asset('app-assets/css/plugins/extensions/ext-component-swiper.min.css')}}" rel="stylesheet"

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
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/pages/app-ecommerce-details.min.css">
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/plugins/forms/form-number-input.min.css">
        <link rel="stylesheet" type="text/css" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
        <!-- END: Page CSS-->

        <link rel="stylesheet" href="{{asset('js/notiflix/dist/notiflix-3.2.5.min.css')}}" />



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
    <body class="font-sans antialiased">


        <!-- BEGIN: Header-->
        <nav
            class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow container-xxl"
            style="background-color: #871010">
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item">
                            <a class="nav-link menu-toggle" href="#"
                            ><i class="ficon" data-feather="menu"></i
                                ></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">

                        <li class="nav-item d-none d-lg-block">
                            <a
                                class="nav-link"
                                data-bs-placement="bottom"
                                data-bs-toggle="tooltip"
                                href="/chat"
                                title="Chat"
                            ><i class="ficon" data-feather="message-square"></i
                                ></a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a
                                class="nav-link"
                                data-bs-placement="bottom"
                                data-bs-toggle="tooltip"
                                href="/calendar"
                                title="Calendar"
                            ><i class="ficon" data-feather="calendar"></i
                                ></a>
                        </li>

                    </ul>

                </div>
                <ul class="nav navbar-nav align-items-center ms-auto">

                    <li class="nav-item dropdown dropdown-user">
                        <a

                            class="nav-link dropdown-user-link"
                            data-bs-toggle="dropdown"
                            href="{{route('profile')}}"
                            onclick="window.location='/profile'"
                            id="dropdown-user">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name fw-bolder">{{Auth::user()->name}}</span>
                                @if(Auth::user()->userType === 1)
                                    <span class="user-status">Student</span>
                                @elseif(Auth::user()->userType === 2)
                                    <span class="user-status">Tutor</span>
                                @elseif(Auth::user()->userType === 3)
                                    <span class="user-status">Admin</span>
                                @elseif(Auth::user()->userType === 4)
                                    <span class="user-status">Office</span>

                                @endif
                            </div>
                            @if(!empty($currentUser->profile_picture))
                                <span class="avatar">
                            <img
                                alt="avatar"
                                class="round"
                                height="40"
                                src="{{asset('storage/profilePictures/'.$currentUser->profile_picture)}}"
                                width="40"/><span class="avatar-status-online"></span></span
                                ></a>
                        @endif


                        <div
                            aria-labelledby="dropdown-user"
                            class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="page-profile.html"
                            ><i class="me-50" data-feather="user"></i> Profile</a
                            ><a class="dropdown-item" href="app-email.html"
                            ><i class="me-50" data-feather="mail"></i> Inbox</a
                            ><a class="dropdown-item" href="app-todo.html"
                            ><i class="me-50" data-feather="check-square"></i> Task</a
                            ><a class="dropdown-item" href="/chat"
                            ><i class="me-50" data-feather="message-square"></i> Chats</a
                            >
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- END: Header-->

        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow"
             data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item me-auto">
                        <a class="navbar-brand" href="/"
                        ><span class="brand-logo">

                            <img src="{{asset('app-assets/images/logo/treble Clef white.jpeg')}}" style="    max-width: 124%;
        margin-top: -25px;
        margin-left: -23px;"/>
                        </span></a>

                    </li>
                    <li class="nav-item nav-toggle">
                        <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"
                        ><i
                                class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                                data-feather="x"
                            ></i
                            ><i
                                class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
                                data-feather="disc"
                                data-ticon="disc"
                            ></i
                            ></a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main"
                    data-menu="menu-navigation"
                    id="main-menu-navigation">
                    <li class="nav-item has-sub sidebar-group-active open">
                        <a class="d-flex align-items-center" href="/"
                        ><i data-feather="home"></i
                            ><span class="menu-title text-truncate" data-i18n="Dashboards"
                            >Dashboards</span
                            ><span class="badge badge-light-warning rounded-pill ms-auto me-1"
                            >2</span
                            ></a
                        >
                        <ul class="menu-content">
                            <li class="">
                                <a
                                    class="d-flex align-items-center" href="/"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Analytics"
                                    >Home</span
                                    ></a
                                >
                            </li>
                            <li>
                                <a
                                    class="d-flex align-items-center"
                                    href="{{route('classroom')}}"
                                ><i data-feather="circle"></i
                                    ><span class="menu-item text-truncate" data-i18n="eCommerce"
                                    >The Classroom</span
                                    ></a
                                >
                            </li>

                        </ul>
                    </li>
                    <li class="navigation-header">
                <span data-i18n="">More</span
                ><i data-feather="more-horizontal"></i>
                    </li>

                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/events"
                        ><i data-feather="bell"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >Events</span
                            ></a
                        >
                    </li>

                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/calendar"
                        ><i data-feather="calendar"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >School Calendar</span
                            ></a
                        >
                    </li>

                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/foundations"
                        ><i data-feather="heart"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >Foundations</span
                            ></a>
                    </li>


                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/office"
                        ><i data-feather="file-text"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >Visit Office</span
                            ></a>
                    </li>

                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/gallery"
                        ><i data-feather="image"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >Gallery</span
                            ></a>
                    </li>

                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/chat"
                        ><i data-feather="message-square"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >Chat</span
                            ></a>
                    </li>


                    <br/>
                    <br/>
                    <br/>
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/logout"
                        ><i data-feather="log-out"></i
                            ><span class="menu-title text-truncate" data-i18n="Calendar"
                            >Logout</span
                            ></a>
                    </li>


                    {{--            <li class="nav-item">--}}
                    {{--                <a class="d-flex align-items-center" href="#"--}}
                    {{--                ><i data-feather="shopping-cart"></i--}}
                    {{--                    ><span class="menu-title text-truncate" data-i18n="eCommerce"--}}
                    {{--                    >eCommerce</span--}}
                    {{--                    ></a--}}
                    {{--                >--}}
                    {{--                <ul class="menu-content">--}}
                    {{--                    <li>--}}
                    {{--                        <a class="d-flex align-items-center" href="/">--}}
                    {{--                            <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop"--}}
                    {{--                            >Premium Lessons</span--}}
                    {{--                            ></a>--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        <a class="d-flex align-items-center" href="/">--}}
                    {{--                            <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop"--}}
                    {{--                            >Instruments</span--}}
                    {{--                            ></a--}}
                    {{--                        >--}}
                    {{--                    </li>--}}
                    {{--                    <li>--}}
                    {{--                        <a class="d-flex align-items-center" href="/">--}}
                    {{--                            <i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop"--}}
                    {{--                            >Swag</span--}}
                    {{--                            ></a--}}
                    {{--                        >--}}
                    {{--                    </li>--}}
                    {{--                </ul>--}}
                    {{--            </li>--}}
                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->

    @inertia

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
    </body>
</html>
