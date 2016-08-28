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
               {!! Form::open(array('url'=>'admin/product','method'=>'POST', 'enctype'=>'multipart/form-data', 'files'=>true, 'class'=>'form-horizontal', 'id'=>'form-product')) !!}
              <div class="form-group">
                <label for="title" class="col-md-1 control-label">Title</label>
                  <div class="col-md-4 title">
                  {!! Form::text('title', $value = null, $attributes = array('class'=>'form-control input-form')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
                <label for="title" class="col-md-1 control-label">Color</label>
                <div class="col-md-4">
                  {!! Form::text('color', $value = null, $attributes = array('class'=>'form-control input-form')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-1 control-label">Category</label>
                <div class="col-md-4 category_id">
                {!! Form::select('category_id', $categories ,null, array('class' => 'form-control input-form'))!!}
                    <span class="help-block">
                      <strong></strong>
                    </span>
                </div>
                
                <label for="title" class="col-md-1 control-label">Materials</label>
                  <div class="col-md-4 materials">
                  {!! Form::text('material', $value = null, $attributes = array('class'=>'form-control input-form')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-1 control-label">Images</label>
                <div class="col-md-4 image">
                   {!! Form::file('images[]', array('multiple'=>true, 'class'=>'form-control input-form', 'id'=>'image')) !!}
                  <span class="help-block">
                    <strong></strong>
                  </span>
                </div>
                <label for="title" class="col-md-1 control-label">Size</label>
                  <div class="col-md-4 materials">
                  {!! Form::text('size', $value = null, $attributes = array('class'=>'form-control input-form')) !!}
                  </div>
              </div>

              <div class="form-group description">
                <label for="name" class="col-md-1 control-label">Description</label>
                  <div class="col-md-9">
                  {!! Form::textarea('description', $value = null, $attributes = array('class'=>'form-control input-form')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-1 control-label"></label>
                <div class="col-md-4">
                  {!! Form::button('Create', array('class'=>'btn btn-primary', 'id'=>'save-btn', 'onclick'=>'submitProduct()')) !!}
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
              <h3 class="box-title">Product List
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
              <table id="product-table" class="table table-bordered table-striped">
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

  <div class="example-modal">
        <div class="modal" id="edit-product">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Product</h4>
              </div>
              <div class="modal-body">
                {!! Form::open(array('url'=>'admin/product/','method'=>'PUT','enctype'=>'multipart/form-data', 'files'=>true, 'class'=>'form-horizontal', 'id'=>'form-edit-product')) !!}
              <div class="form-group">
                <label for="title" class="col-md-2 control-label">Title</label>
                  <div class="col-md-4 title">
                  {!! Form::hidden('id', $value = null, $attributes = array('class'=>'form-control input-form', 'id' => 'form-id')) !!}
                  {!! Form::text('title', $value = null, $attributes = array('class'=>'form-control input-form', 'id' => 'form-title')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
                <label for="title" class="col-md-2 control-label">Color</label>
                <div class="col-md-4">
                  {!! Form::text('color', $value = null, $attributes = array('class'=>'form-control input-form', 'id' => 'form-color')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-2 control-label">Category</label>
                <div class="col-md-4 category_id">
                {!! Form::select('category_id', $categories ,null, array('class' => 'form-control input-form', 'id' => 'form-category'))!!}
                    <span class="help-block">
                      <strong></strong>
                    </span>
                </div>
                
                <label for="title" class="col-md-2 control-label">Materials</label>
                  <div class="col-md-4 materials">
                  {!! Form::text('material', $value = null, $attributes = array('class'=>'form-control input-form', 'id' => 'form-material')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
              </div>
              <div class="form-group">
                <label for="name" class="col-md-2 control-label">Images</label>
                <div class="col-md-4 image">
                   {!! Form::file('images[]', array('multiple'=>true, 'class'=>'form-control input-form', 'id'=>'image')) !!}
                  <span class="help-block">
                    <strong></strong>
                  </span>
                </div>
                <label for="title" class="col-md-2 control-label">Size</label>
                  <div class="col-md-4 materials">
                  {!! Form::text('size', $value = null, $attributes = array('class'=>'form-control input-form', 'id' => 'form-size')) !!}
                  </div>
              </div>

              <div class="form-group">
                <div class="loop-image">
                </div>
              </div>

              <div class="form-group description">
                <label for="name" class="col-md-2 control-label">Description</label>
                  <div class="col-md-10">
                  {!! Form::textarea('description', $value = null, $attributes = array('class'=>'form-control input-form', 'id' => 'form-description')) !!}
                      <span class="help-block">
                        <strong></strong>
                      </span>
                  </div>
              </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                {!! Form::button('Save Changes', array('class'=>'btn btn-primary', 'onclick'=>'$("#form-edit-product").submit();')) !!}
              </div>
              {!! Form::close() !!}
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>
  </div>

@endsection

@push('scripts')
<script src="/dashboard/main/js/product.js"></script>
<script>
  $(document).ready(function(){
    tableProd();
    initialButton();
    hideLoadingState();
  })
    
</script>
@endpush