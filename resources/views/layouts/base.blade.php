<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avtur Refueler Truck">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">-->

    <title>Avtur Refueler Truck</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('refueler-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('refueler-assets/css/bootstrap-theme.min.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('refueler-assets/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('refueler-assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{ asset('refueler-assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('refueler-assets/css/style-responsive.css') }}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="{{ asset('refueler-assets/js/html5shiv.js') }}"></script>
      <script src="{{ asset('refueler-assets/js/respond.min.js') }}"></script>
      <script src="{{ asset('refueler-assets/js/lte-ie7.js') }}"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="{{ route('home') }}">
                <i class="icon_house_alt"></i>
                <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="" href="{{ route('airport.index') }}">
                <i class="icon_genius"></i>
                <span>Airport</span>
            </a>
          </li>
          <li style="margin-top: 20em">
            <a class="" href="{{ route('logout') }}"
                onclick="logout()">
                <i class="icon_close"></i>
                <span>Logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    @yield('content')
</section>

<script src="{{ asset('refueler-assets/js/jquery.js') }}"></script>
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
<script src="{{ asset('refueler-assets/js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('refueler-assets/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('refueler-assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<!--chart js -->
<script src="{{ asset('refueler-assets/assets/chart-master/Chart.min.js') }}"></script>
<!--custome script for all page-->
<script src="{{ asset('refueler-assets/js/scripts.js') }}"></script>
<script src="{{ asset('refueler-assets/js/js-page/page.js') }}"></script>
<script src="{{ asset('refueler-assets/js/js-page/dashboard.js') }}"></script>
<script>
function logout() {
    event.preventDefault();
    document.getElementById('logout-form').submit();
}
</script>
<style type="text/css">
    #dashboard-image {
      background-image: url("img/truk.png");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      min-height: 20em;
    }
  </style>

</body>

</html>
