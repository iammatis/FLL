<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

	<title>TEST</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}"/>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link rel="stylesheet" href="{{ URL::asset('vendor/IE10-workaround/ie10-viewport-bug-workaround.css') }}"/>

	<!-- Custom styles for this template -->
	{{-- <link rel="stylesheet" href="{{ URL::asset('vendor/offcanvas/offcanvas.css') }}"/> --}}
	<link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
	<link rel="stylesheet" href="{{ URL::asset('css/web.css') }}">
</head>
<body>

<!-- Header -->
    <header id="header">
        <div id="header-wrap">
            <div class="container">

                <!--LOGO-->
                <div id="logo">
                    <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
                        <img src="images/logo.png" alt="Polo Logo">
                    </a>
                </div>
                <!--END: LOGO-->

                <!--MOBILE MENU -->
                <div class="nav-main-menu-responsive">
                    <!--  <button class="lines-button x">
                        <span class="lines"></span>
                    </button>-->
                    <button type="button" class="lines-button x">
                        <span class="lines"></span>
                    </button>

                </div>
                <!--END: MOBILE MENU -->

                <!--NAVIGATION MENU-->
                <div class="navigation-wrap">
                    <nav id="mainMenu" class="style-1 main-menu mega-menu">
                        <ul class="main-menu nav nav-pills">
                            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="dropdown"> <a href="#">Pages <i class="fa fa-angle-down"></i> </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="page-services.html">Services</a> </li>
                                    <li> <a href="page-our-team.html">Our team</a> </li>
                                    <li> <a href="page-our-clients.html">Our clients</a> </li>
                                    <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                    <li> <a href="page-404.html">404 Page</a> </li>
                                    <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                    <li> <a href="page-500.html">500 Page</a> </li>
                                    <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                    <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                    <li> <a href="page-site-map.html">Site Map</a> </li>
                                    <li> <a href="page-faq.html">FAQ</a> </li>
                                </ul>
                            </li>
                            </ul>
                        </nav>
                    </div>
                    <!--END: NAVIGATION-->

                </div>
            </div>
        </header>
        <!-- END: Header -->

	


	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ URL::asset('jquery/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="{{ URL::asset('vendor/IE10-workaround/ie10-viewport-bug-workaround.js') }}"></script>
	{{-- <script src="{{ URL::asset('vendor/offCanvas/offcanvas.js') }}"></script> --}}
	<script src="{{ URL::asset('vendor/toastr/toastr.min.js') }}"></script>
</body>
</html>