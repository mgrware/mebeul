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
   
    <!-- Animate.css -->
    <!-- Animate.css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">


    <!-- Modernizr JS -->
    <script src="/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body id="app-layout">
    <div class="box-wrap">
    <header role="banner" id="fh5co-header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fh5co-navbar-brand">
                                <a class="fh5co-logo" href="index.html">Narrow</a>
                            </div>
                        </div>
                        <div class="col-md-9 main-nav">
                            <ul class="nav text-right">
                            @if (Auth::guest())
                                <li class="active"><a href="index.html"><span>Home</span></a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="product.html">Products</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            @else
                                <li><a href="ui.html">UI Elements</a></li>
                                <li><a href="table.html">Data Tables</a></li>
                                <li><a href="forms.html">Forms</a></li>
                                <li><a href="#">{{ Auth::user()->name }}</a></li>
                                <li><a href="{{ url('/home/dashboard') }}">Dashboard</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            @endif
                                
                            </ul>
                        </div>
                    </div>
                </nav>
          </div>
        </header>
        <!-- END: header -->
       @yield('content')

       <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p>Copyright 2016 Free Html5 <a href="#">Narrow</a>. All Rights Reserved. <br>Made with <i class="icon-heart3 love"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                <a href="#"><i class="icon-instagram-with-circle"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   <!-- jQuery -->
    <script src="/assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <!-- Owl carousel -->
        <script src="/assets/js/owl.carousel.min.js"></script>
    <!-- Waypoints -->
    <script src="/assets/js/jquery.waypoints.min.js"></script>
    <!-- Parallax Stellar -->
    <script src="/assets/js/jquery.stellar.min.js"></script>

    <!-- Main JS (Do not remove) -->
    <script src="/assets/js/main.js"></script>
</body>
</html>
