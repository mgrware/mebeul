<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rachipta</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   
    {!! HTML::style('/dashboard/lte/dist/css/bootstrap.min.css') !!}
    {!! HTML::style('/dashboard/lte/dist/css/AdminLTE.min.css') !!}
    {!! HTML::style('/dashboard/lte/dist/plugins/datatables/dataTables.bootstrap.css') !!}
    {!! HTML::style('/dashboard/sweetalert/sweetalert.css')!!}
    {!! HTML::style('/dashboard/lte/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')!!}
    {!! HTML::style('dashboard/lte/dist/css/skins/_all-skins.min.css')!!}
    {!! HTML::style('dashboard/dropzone/dropzone.css')!!}
    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body id="app-layout" class="hold-transition skin-red sidebar-mini">

    <div class="wrapper">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    {!! HTML::script('/dashboard/lte/dist/plugins/jQuery/jquery-2.2.3.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/bootstrap/js/bootstrap.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/fastclick/fastclick.js') !!}
    {!! HTML::script('/dashboard/lte/dist/js/app.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/sparkline/jquery.sparkline.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/slimScroll/jquery.slimscroll.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/chartjs/Chart.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/datatables/dataTables.bootstrap.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
    {!! HTML::script('/dashboard/sweetalert/sweetalert.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/js/demo.js') !!}
    {!! HTML::script('/dashboard/dropzone/dropzone.js') !!}
    <script charset="utf8" src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @stack('scripts')
    {!! HTML::script('/dashboard/lte/dist/js/pages/dashboard2.js') !!}
</body>
</html>
