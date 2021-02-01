<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Tour & Travels </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('public/website/css/bootstrap.min.css') }}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset ('public/website/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset ('public/website/css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('public/website/css/custom.css') }}">

     <!-- Own CSS -->
    <link rel="stylesheet" href="{{ asset ('public/website/css/myStyle.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
    .mr{
        margin-right: 20px !important;
    }
</style>
</head>
<body class="home-one">  
    @include('layouts.website.header') 
    <!--middle section-->
     @include('layouts.flash_message')
    @yield('content')
    <!--middle section-->
    @include('layouts.website.footer')
 
  <script>
    var APP_PATH = "{{url('/')}}";
  </script>
  <!-- begin page level js -->
  @yield('footer_scripts')
  <!-- end page level js -->
</body>


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{ asset ('public/website/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/popper.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/bootstrap.min.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset ('public/website/js/jquery.superslides.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset ('public/website/js/inewsticker.js') }}"></script>
    <script src="{{ asset ('public/website/js/bootsnav.js') }}"></script>
    <script src="{{ asset ('public/website/js/images-loded.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/isotope.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/baguetteBox.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/form-validator.min.js') }}"></script>
    <script src="{{ asset ('public/website/js/contact-form-script.js') }}"></script>
    <script src="{{ asset ('public/website/js/custom.js') }}"></script>

    </html>