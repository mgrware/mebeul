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
    {!! HTML::style('/dashboard/lte/dist/plugins/iCheck/square/blue.css') !!}
</head>
<body class="hold-transition login-page">

  <div class="login-box">
    @yield('content')
  </div>
<!-- /.login-box -->


    <!-- JavaScripts -->
    {!! HTML::script('/dashboard/lte/dist/plugins/jQuery/jquery-2.2.3.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/bootstrap/js/bootstrap.min.js') !!}
    {!! HTML::script('/dashboard/lte/dist/plugins/iCheck/icheck.min.js') !!}
    <script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

</body>
</html>
