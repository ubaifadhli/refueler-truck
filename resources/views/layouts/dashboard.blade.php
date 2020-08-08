<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Avtur Refueler Tank">
  <!--<meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">-->

  <title>Dashboard</title>

  <!-- Bootstrap CSS -->
  <link href="{{ asset('refueler-assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('refueler-assets/css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('refueler-assets/css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('refueler-assets/css/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />

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
  <!-- container section start -->
  <section id="container" class="">
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="{{ route('home') }}">
                <i class="fa fa-tachometer"></i>
                <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a class="" href="{{ route('airport.index') }}">
                <i class="fa fa-plane"></i>
                <span>Airport</span>
            </a>
          </li>
          <li style="margin-top: 20em">
            <a class="" href="{{ route('logout') }}"
                onclick="logout()">
                <i class="fa fa-sign-out"></i>
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

    <!--main content start-->
    <section id="main-content">
      @yield('content')
    </section>
    <!--main content end-->
    <!--<div class="text-right">
      <div class="credits">
          
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="{{ asset('refueler-assets/js/jquery.js') }}"></script>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script src="{{ asset('refueler-assets/js/bootstrap.min.js') }}"></script>
  <!-- nice scroll -->
  <script src="{{ asset('refueler-assets/js/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('refueler-assets/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <!--chart js -->
  <script src="{{ asset('refueler-assets/js/Chart.min.js') }}"></script>
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
