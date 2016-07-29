
@extends('layouts.appdashboard')
@section('content')
    @include('shared.header')
  
    @include('shared.side-bar')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Add new product
              </h3>
              <!-- tools box -->
              <div class="pull-left box-tools">
                <button type="button" class="btn btn-info btn-sm" id="create-product" data-widget="collapse" data-toggle="tooltip" title="Add new product">
                  <i class="fa fa-plus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
               {!! Form::open(array('url'=>'admin/user','method'=>'POST', 'class'=>'form-horizontal', 'id'=>'form-user')) !!}
              <div class="form-group">
                <label for="name" class="col-md-1 control-label">Name</label>
                  <div class="col-md-4 name">
                  {!! Form::text('name', $value = null, $attributes = array('class'=>'form-control')) !!}
                      <span class="help-block help-name">
                        <strong></strong>
                      </span>
                  </div>
                  <label for="email" class="col-md-1 control-label">Email</label>
                  <div class="col-md-4 email">
                  {!! Form::text('email', $value = null, $attributes = array('class'=>'form-control')) !!}
                      <span class="help-block help-email">
                        <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  </div>

              </div>
              <div class="form-group">
                
                  <label for="name" class="col-md-1 control-label">role</label>
                  <div class="col-md-4 role">
                        {!! Form::select('role', ['admin'=>'Admin'] ,null, array('class' => 'form-control input-form'))!!}
                      <span class="help-block help-role">
                        <strong></strong>
                      </span>
                  </div>
              </div>

              <div class="form-group">
                <label for="password" class="col-md-1 control-label">Password</label>
                  <div class="col-md-4 password">
                  {!! Form::password('password', array('class'=>'form-control')) !!}
                      <span class="help-block help-password">
                        <strong></strong>
                      </span>
                  </div>
                  <label for="password-confirm" class="col-md-1 control-label">Confirm Password</label>
                  <div class="col-md-4 password_confirmation">
                    {!! Form::password('password_confirmation', array('class'=>'form-control')) !!} 
                        <span class="help-block help-password_confirmation">
                              <strong></strong>
                          </span>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-1 control-label"></label>
                <div class="col-md-4">
                  {!! Form::button('Save', array('class'=>'btn btn-primary', 'id'=>'save-btn')) !!}
                </div>
              </div>
                
              {!! Form::close() !!}
            </div>
              <div class="overlay hide">
                <i class="fa fa-refresh fa-spin"></i>
              </div>
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">User List
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <table id="user-table" class="table table-bordered table-striped">
              </table>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@push('scripts')

{!!HTML::script('/dashboard/main/js/user.js')!!}
<script>
  $(document).ready(function(){
    tableUser();
    initialButton();

  })
    
</script>
@endpush