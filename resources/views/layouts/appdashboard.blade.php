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
   
    <link href="/dashboard/lte/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="/dashboard/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="/dashboard/lte/dist/css/AdminLTE.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/dashboard/lte/dist/css/skins/_all-skins.min.css">
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/dashboard/lte/dist/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/dashboard/sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



</head>
<body id="app-layout" class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    <script src="/dashboard/lte/dist/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
    <script src="/dashboard/lte/dist/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/dashboard/lte/dist/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/dashboard/lte/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="/dashboard/lte/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/dashboard/lte/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/dashboard/lte/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/dashboard/lte/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/dashboard/lte/dist/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- AdminLTE for demo purposes -->
    <script src="/dashboard/lte/dist/js/demo.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="/dashboard/lte/dist/plugins/datatables/jquery.dataTables.min.js"></script>
    <script charset="utf8" src="/dashboard/lte/dist/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script charset="utf8" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script charset="utf8" src="/dashboard/sweetalert/sweetalert.min.js"></script>
    @stack('scripts')
    <script src="/dashboard/lte/dist/js/pages/dashboard2.js"></script>
</body>
</html>
