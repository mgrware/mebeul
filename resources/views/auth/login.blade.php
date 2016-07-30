@extends('layouts.login-page')

@section('content')
<div class="login-logo">
    <img src="{{url('assets/images/logo-rhcp.png')}}">
    Rachipta Lestari
</div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address">
    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
</div>

<div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
</div>

      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->
    <a href="{{ url('/password/reset') }}">Forgot Your Password?</a>

  </div>
  <!-- /.login-box-body -->
@endsection
