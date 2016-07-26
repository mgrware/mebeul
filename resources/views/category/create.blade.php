@extends('layouts.appdashboard')
@section('content')
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-head-line">Categories</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Create Category</h4>  
            </div>
            <div class="panel-body">
              {!! Form::open(array('url'=>'admin/category','method'=>'POST', 'class'=>'form-horizontal')) !!}
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">Category Name</label>
                  <div class="col-md-4">
                  {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control')) !!}
                    @if ($errors->has('name'))
                      <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-2 control-label"></label>
                <div class="col-md-4">
                  {!! Form::submit('Create', array('class'=>'btn btn-primary')) !!}
                </div>
              </div>
                
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
