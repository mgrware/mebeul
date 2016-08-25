<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rachipta Lestari</title>

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   
    <!-- Google Webfont -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400|Crimson+Text' rel='stylesheet' type='text/css'>
    <!-- Themify Icons -->
    {!! HTML::style('assets/css/themify-icons.css') !!}
    {!! HTML::style('assets/css/bootstrap.css') !!}
    {!! HTML::style('assets/css/owl.carousel.min.css') !!}
    {!! HTML::style('assets/css/owl.theme.default.min.css') !!}
    {!! HTML::style('assets/css/magnific-popup.css') !!}
    {!! HTML::style('assets/css/superfish.css') !!}
    {!! HTML::style('assets/css/easy-responsive-tabs.css') !!}
    {!! HTML::style('assets/css/style.css') !!}

</head>
<body id="app-layout">
        <!-- START #fh5co-hero -->
    <header id="fh5co-header-section" role="header" class="" >
                <div class="container">
                    
                    <!-- START #fh5co-logo -->
                    <h3 id="fh5co-logo" class="pull-left"><img src="{{url('/assets/images/logo-rhcp.png')}}" class="img-square sm" width="30px" height="30px"> <a href="/">Rachipta Lestari</a></h3>
                    
                    <!-- START #fh5co-menu-wrap -->
                    <nav id="fh5co-menu-wrap" role="navigation">
                        <ul class="sf-menu" id="fh5co-primary-menu">
                            <li class="active">
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="#" class="fh5co-sub-ddown">Products</a>
                                 <ul class="fh5co-sub-menu">
                                    <li><a href="{{url('/products')}}">All Products</a></li>
                                    <li>
                                        <a href="#" class="fh5co-sub-ddown">Categories</a>
                                        <ul class="fh5co-sub-menu">
                                            @foreach($cat as $category)
                                                <li><a href="{{url('/products/'.strToLower($category->name))}}">{{ucwords($category->name)}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="#">HTML5</a></li> 
                                </ul>
                            </li>
                            <li>
                                <a href="elements.html">Abouts</a>
                            </li>
                            <li><a href="contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
         @yield('content')
          
        
        {!! HTML::script('assets/js/jquery-1.10.2.min.js') !!}
        {!! HTML::script('assets/js/jquery.easing.1.3.js') !!}
        {!! HTML::script('assets/js/jquery-waypoints.min.js') !!}
        {!! HTML::script('assets/js/bootstrap.js') !!}
        {!! HTML::script('assets/js/owl.carousel.min.js') !!}
        {!! HTML::script('assets/js/jquery.magnific-popup.min.js') !!}
        {!! HTML::script('assets/js/hoverIntent.js') !!}
        {!! HTML::script('assets/js/superfish.js') !!}
        {!! HTML::script('assets/js/easyResponsiveTabs.js') !!}
        {!! HTML::script('assets/js/fastclick.js') !!}
        {!! HTML::script('assets/js/main.js') !!}

    

</body>
</html>
