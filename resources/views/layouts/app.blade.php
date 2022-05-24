<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/finance-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2022 08:43:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Finance</title>
    <link rel="icon" href="{{ asset('frontend/img/logo.png" type="image/png') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/vendors/morris/morris.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/colors/default.css" id="colorSkinCSS') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Magnific-Popup-master/dist/magnific-popup.css') }}">

</head>

<body class="crm_body_bg">


    @include('pages.sidebar');


    <section class="main_content dashboard_part">

        @include('pages.header');

        @yield('content')

        @include('pages.footer');
    </section>



    <script src="{{ asset('frontend/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('frontend/js/popper1.min.js') }}"></script>

    <script src="{{ asset('frontend/js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('frontend/js/metisMenu.js') }}"></script>

    <script src="{{ asset('frontend/vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/swiper_slider/js/swiper.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/gijgo/gijgo.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('frontend/js/chart.min.js') }}"></script>

    <script src="{{ asset('frontend/vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('frontend/vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('frontend/vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('frontend/vendors/apex_chart/apexcharts.js') }}"></script>

    <script src="{{ asset('frontend/js/custom.js') }}"></script>

    <script src="{{ asset('frontend/js/active_chart.js') }}"></script>
    <script src="{{ asset('frontend/vendors/apex_chart/radial_active.js') }}"></script>
    <script src="{{ asset('frontend/vendors/apex_chart/stackbar.js') }}"></script>
    <script src="{{ asset('frontend/vendors/apex_chart/area_chart.js') }}"></script>

    <script src="{{ asset('frontend/vendors/apex_chart/bar_active_1.js') }}"></script>
    <script src="{{ asset('frontend/vendors/chartjs/chartjs_active.js') }}"></script>
    <script src="{{ asset('frontend/Magnific-Popup-master/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
</body>

</html>
