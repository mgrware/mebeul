@extends('layouts.appdashboard')
@section('content')
  <div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="page-head-line">Product</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>Create Product</h4>  
            </div>
            <div class="panel-body">
              {!! Form::open(array('url'=>'admin/product','method'=>'POST', 'enctype'=>'multipart/form-data', 'files'=>true, 'class'=>'form-horizontal')) !!}
              <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-md-1 control-label">Title</label>
                  <div class="col-md-4">
                  {!! Form::text('title', $value = null, $attributes = array('class'=>'form-control')) !!}
                    @if ($errors->has('title'))
                      <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="name" class="col-md-1 control-label">Description</label>
                  <div class="col-md-8">
                  {!! Form::textarea('description', $value = null, $attributes = array('class'=>'form-control')) !!}
                    @if ($errors->has('description'))
                      <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="name" class="col-md-1 control-label">Category</label>
                  <div class="col-md-4">
                  {!! Form::select('category_id', array('' => 'Pilih', '1' => 'Funiture', '2' => 'Building', '3' => 'Accesories'), '', ['class' => 'form-control']) !!}
                    @if ($errors->has('description'))
                      <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <label for="name" class="col-md-1 control-label">Images</label>
                <div class="col-md-4">
                   {!! Form::file('images[]', array('multiple'=>true)) !!}
                  @if ($errors->has('image'))
                  <span class="help-block">
                    <strong>{{ $errors->first('image') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-1 control-label"></label>
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
@endsection
