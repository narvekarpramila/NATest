<!DOCTYPE html>
<html class="fixed">
<head>
    <title>
        @section('title') @show
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="550x550" href="{{ asset('public/assets_panel/images/logo-favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/font-awesome.min.css') }}">
    <!-- adminpro icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/adminpro-custon-icon.css') }}">
    <!-- meanmenu icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/meanmenu.min.css') }}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/animate.css') }}">
    <!-- data-table CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/data-table/bootstrap-table.css') }}">
        <link rel="stylesheet" href="{{ asset ('public/admin/css/data-table/bootstrap-editable.css') }}">
    <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/normalize.css') }}">
    <!-- charts C3 CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/c3.min.css') }}">
    <!-- forms CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/form/all-type-forms.css') }}">
    <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/style.css') }}">
    <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset ('public/admin/css/responsive.css') }}">

      
    <!-- modernizr JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>

          <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset ('public/admin/css/summernote.css') }}">

        @yield('header_styles')

    </head>
    <body class="materialdesign">
        <div class="wrapper-pro">
            <!-- ============================================================== -->
            <!-- main wrapper -->
            <!-- ============================================================== -->
            <!--sidebar section-->
            @include('layouts.admin.webapp_sidebar') 
            <!--sidebar section-->
            <div class="content-inner-all">
                <!--header section-->
                @include('layouts.admin.webapp_header') 
                <!--header section-->               

                <!--middle section-->
                <!-- ============================================================== -->
                <!-- wrapper  -->
                <!-- ============================================================== -->
                <div class="welcome-adminpro-area">
                    @yield('navbar')
                      
                    @yield('content')

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
            <!--middle section-->


            <!--footer section-->
            <!-- @include('layouts.admin.webapp_footer') -->
            <!--footer section-->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper  -->
        <!-- ============================================================== -->
 <!-- jquery
    ============================================ -->
    
    <script src="{{ asset ('public/admin/js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/jquery.meanmenu.js') }}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sticky JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset ('public/admin/js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset ('public/admin/js/counterup/counterup-active.js') }}"></script>
    <!-- peity JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/peity/jquery.peity.min.js') }}"></script>
        <script src="{{ asset ('public/admin/js/peity/peity-active.js') }}"></script>
    <!-- sparkline JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset ('public/admin/js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/flot/Chart.min.js') }}"></script>
        <script src="{{ asset ('public/admin/js/flot/flot-active.js') }}"></script>
    <!-- map JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/map/raphael.min.js') }}"></script>
        <script src="{{ asset ('public/admin/js/map/jquery.mapael.js') }}"></script>
        <script src="{{ asset ('public/admin/js/map/france_departments.js') }}"></script>
        <script src="{{ asset ('public/admin/js/map/world_countries.js') }}"></script>
        <script src="{{ asset ('public/admin/js/map/usa_states.js') }}"></script>
        <script src="{{ asset ('public/admin/js/map/map-active.js') }}"></script>
    <!-- data table JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/data-table/bootstrap-table.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/tableExport.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/data-table-active.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/bootstrap-table-editable.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/bootstrap-editable.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/bootstrap-table-resizable.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/colResizable-1.5.source.js') }}"></script>
        <script src="{{ asset ('public/admin/js/data-table/bootstrap-table-export.js') }}"></script>

         <!-- summernote JS
        ============================================ -->
    <script src="{{ asset ('public/admin/js/summernote.min.js') }}"></script>
    <script src="{{ asset ('public/admin/js/summernote-active.js') }}"></script>
    <!-- main JS
        ============================================ -->
        <script src="{{ asset ('public/admin/js/main.js') }}"></script>

            <script>
            var APP_PATH = "{{url('/')}}";
        </script>
        <!-- begin page level js -->
        @yield('footer_scripts')
        <!-- end page level js -->
    </body>
    </html>
