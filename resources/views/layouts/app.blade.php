<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="stylesheet" href="/assets/prettyphoto/css/prettyPhoto.css">
    <!-- Modernizr JS -->
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body id="app-layout">
    <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><a href="index.html"><img src="/assets/images/logo.png" alt="Free HTML5 Bootstrap Website Template"></a>Brand</h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="/">Home</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <div class="fh5co-footer">
                <p><small></small></p>
                <ul>
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="http://www.instagram.com/mgramadan"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                </ul>
            </div>

        </aside>
        <!-- END: header -->

    <div id="fh5co-main">
         @yield('content')
    </div>      
   <!-- jQuery -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Owl carousel -->
    <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- Stellar -->
    <script src="/assets/js/jquery.stellar.min.js"></script>
    <!-- Waypoints -->
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <!-- Counters -->
    <script src="/assets/js/jquery.countTo.js"></script>

    <script src="/assets/prettyphoto/js/jquery.prettyPhoto.js"></script>
    
    
    <!-- MAIN JS -->
    <script src="/assets/js/main.js"></script>
    @stack('scripts')
</body>
</html>
