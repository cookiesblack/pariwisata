<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <meta name="description"
        content="Dinas Pariwisata dan Kebudayaan Minahasa">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dinas Pariwisata dan Kebudayaan Minahasa">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Dinas Pariwisata dan Kebudayaan Minahasa">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/minahasa.ico">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets') }}/minahasa.ico">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets') }}/minahasa.ico">

        <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/magnific-popup/magnific-popup.css">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/slick/slick-theme.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/evo/css/evo-calendar.css" />

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets') }}/css/codebase.min.css">
    <style>
        .text-italic {
            font-style: italic !important;
        }
    </style>
    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="{{ asset('assets') }}/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>

    <!-- Page Container -->
    <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
    <div id="page-container" class="enable-page-overlay side-scroll page-header-modern main-content-boxed">
        <!-- Side Overlay-->
        {{-- @include('layout.sideoverlay') --}}
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        {{-- @include('layout.sidemenu') --}}
        <!-- END Sidebar -->

        <!-- Header -->
        {{-- @include('layout.header') --}}
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            @yield('content')
            <!-- END Page Content -->

        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="opacity-0">
            <div class="content py-20 font-size-xs clearfix">
                <div class="float-left">
                    &copy;
                    <span class="js-year-copy"></span>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
    {{-- <div class="modal fade" id="modal-onboarding" tabindex="-1" role="dialog" aria-labelledby="modal-onboarding" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-popout" role="document">
                <div class="modal-content rounded">
                    <div class="block block-rounded block-transparent mb-0 bg-pattern" style="background-image: url('assets/media/various/bg-pattern-inverse.png');">
                        <div class="block-header justify-content-end">
                            <div class="block-options">
                                <a class="font-w600 text-danger" href="#" data-dismiss="modal" aria-label="Close">
                                    Skip Intro
                                </a>
                            </div>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="js-slider slick-dotted-inner" data-dots="true" data-arrows="false" data-infinite="false">
                                <div class="pb-50">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-10 col-lg-8">
                                            <i class="si si-fire fa-4x text-primary"></i>
                                            <h3 class="font-size-h2 font-w300 mt-20">Welcome to Codebase!</h3>
                                            <p class="text-muted">
                                                This is a modal you can show to your users when they first sign in to their dashboard. It is a great place to welcome and introduce them to your application and its functionality.
                                            </p>
                                            <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 1);">
                                                Key features <i class="fa fa-arrow-right ml-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide pb-50">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-8">
                                            <h3 class="font-size-h2 font-w300 mb-5">Backup</h3>
                                            <p class="text-muted">
                                                Backups are taken with every new change to ensure complete piece of mind. They are kept safe for immediate restores.
                                            </p>
                                            <h3 class="font-size-h2 font-w300 mb-5">Invoices</h3>
                                            <p class="text-muted">
                                                They are sent automatically to your clients with the completion of every project, so you don't have to worry about getting paid.
                                            </p>
                                            <div class="text-center">
                                                <button type="button" class="btn btn-sm btn-hero btn-noborder btn-primary mb-10 mx-5" onclick="jQuery('.js-slider').slick('slickGoTo', 2);">
                                                    Complete Profile <i class="fa fa-arrow-right ml-5"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide pb-50">
                                    <div class="row justify-content-center text-center">
                                        <div class="col-md-10 col-lg-8">
                                            <i class="si si-note fa-4x text-primary"></i>
                                            <h3 class="font-size-h2 font-w300 mt-20">Finally, let us know your name</h3>
                                            <form class="push">
                                                <input type="text" class="form-control form-control-lg py-20 border-2x" id="onboard-first-name" name="onboard-first-name" placeholder="Enter your first name..">
                                            </form>
                                            <button type="button" class="btn btn-sm btn-hero btn-noborder btn-success mb-10 mx-5" data-dismiss="modal" aria-label="Close">
                                                Get Started <i class="fa fa-check ml-5"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- END Onboarding Modal -->


    <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
    <script src="{{ asset('assets') }}/js/codebase.core.min.js"></script>

    <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
    <script src="{{ asset('assets') }}/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets') }}/js/plugins/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/slick/slick.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('assets') }}/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/chartjs/Chart.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flot/jquery.flot.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flot/jquery.flot.stack.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/flot/jquery.flot.resize.min.js"></script>

    <script src="//rawgit.com/beaver71/Chart.PieceLabel.js/master/build/Chart.PieceLabel.min.js"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets') }}/js/pages/be_comp_charts.min.js"></script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}
    <script src="{{ asset('assets') }}/evo/js/evo-calendar.js"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('assets') }}/js/pages/be_pages_dashboard.min.js"></script>
    <script src="{{ asset('assets')}}/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Page JS Helpers (Magnific Popup plugin) -->

    <script>
        jQuery(function() {
            Codebase.helpers('table-tools');
        });

        $('#calendar').evoCalendar({
            todayHighlight: true,
            sidebarToggler: true,
            eventListToggler: true,
            canAddEvent: false,
            calendarEvents: [{
                    name: "New Year",
                    date: "Wed Jan 01 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                    type: "holiday",
                    everyYear: true
                },
                {
                    name: "Valentine's Day",
                    date: "Fri Feb 14 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                    type: "holiday",
                    everyYear: true
                },

                @php
                    if (isset($kalendar)) {
                        foreach ($kalendar as $key => $row) {
                            echo '{ name: "' . $row->title . '", date: "' . date('Y-m-d', strtotime($row->start)) . '", type: "event", everyYear: true  },';
                        }
                    }
                @endphp

            ],
            onSelectDate: function() {
                // console.log('onSelectDate!')
            },
            onAddEvent: function() {
                console.log('onAddEvent!')
            }
        })
    </script>
        <script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>
    <script>
        $(document).ready(function() {

        })
    </script>
</body>

</html>
