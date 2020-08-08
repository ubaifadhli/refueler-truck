<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Avtur Refueler Tank">
  <!--<meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">-->

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Avtur Refueler Truck</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Bootstrap CSS -->
  <link href="{{ asset('refueler-assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('refueler-assets/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('refueler-assets/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('refueler-assets/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <!--<link href="css/style.css" rel="stylesheet">-->
  <link href="{{ asset('refueler-assets/css/style-responsive.css') }}" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
  <!-- container div start -->
  @yield('content')
  <!-- container div end -->
  <!-- javascripts -->
  <script src="{{ asset('refueler-assets/js/jquery.js') }}"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="{{ asset('refueler-assets/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('refueler-assets/js/jquery.scrollTo.min.js') }}"></script>
  <!--custome script for all page-->
  <style type="text/css">
    #cover {
  background-image: url("img/Avtur-Pertamina-1.jpeg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }

  html,body {
    height: 100%;
  }

  h1 {
    margin-bottom: 1em;
  }

  input {
    margin-bottom: 0.5em;
  }
  </style>

</body>

</html>