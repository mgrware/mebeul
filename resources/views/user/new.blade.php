@extends('layouts.appdashboard')
@section('content')
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-head-line">Users</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Register New User</h4>  
            </div>
            <div class="panel-body">
              {!! Form::open(array('url'=>'admin/user','method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal')) !!}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">Name</label>
                  <div class="col-md-4">
                  {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control')) !!}
                    @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-2 control-label">Email</label>
                  <div class="col-md-4">
                  {!! Form::text('email', $value = null, $attributes = array('class'=>'form-control')) !!}
                    @if ($errors->has('email'))
                      <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-2 control-label">Password</label>
                  <div class="col-md-4">
                  {!! Form::password('password', array('class'=>'form-control')) !!}
                    @if ($errors->has('password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="col-md-2 control-label">Confirm Password</label>
                  <div class="col-md-4">
                    {!! Form::password('password_confirmation', array('class'=>'form-control')) !!} 
                      @if ($errors->has('password_confirmation'))
                      <span class="help-block">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </span>
                      @endif
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-2 control-label"></label>
                <div class="col-md-4">
                  {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
                </div>
              </div>
                
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>