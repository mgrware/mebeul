@extends('layouts.appdashboard')
@section('content')
    @include('shared.header')
  
    @include('shared.side-bar')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Add new category
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
               {!! Form::open(array('url'=>'admin/category','method'=>'POST', 'class'=>'form-horizontal', 'id'=>'form-category')) !!}
              <div class="form-group name">
                <label for="name" class="col-md-2 control-label">Category Name</label>
                  <div class="col-md-4">
                  {!! Form::text('name', $value = null, $attributes = array('id'=>'name', 'class'=>'input-form form-control')) !!}
                      <span class="help-block">
                        <strong><label id="lb-name"></label></strong>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-2 control-label"></label>
                <div class="col-md-4">
                  {!! Form::button('Create', array('class'=>'btn btn-primary', 'id'=>'save-btn')) !!}
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
              <h3 class="box-title">Category List
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
              <table id="category-table" class="table table-bordered table-striped">
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
<script src="/dashboard/main/js/category.js"></script>

<script>
    $(document).ready(function(){
        tableCat();
        initialButton();
    })
</script>
@endpush