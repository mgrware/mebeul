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
              <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                <label for="name" class="col-md-1 control-label">Category</label>
                  <div class="col-md-4">
                  {!! Form::select('category_id', $categories ,null, array('class' => 'form-control'))!!}
                    @if ($errors->has('category_id'))
                      <span class="help-block">
                        <strong>{{ $errors->first('category_id') }}</strong>
                      </span>
                    @endif
                  </div>
              </div>
              <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
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
                  {!! Form::submit('Create', array('class'=>'btn btn-primary')) !!}
                </div>
              </div>
                
              {!! Form::close() !!}
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

@endsection

@push('scripts')
<script>
$(function() {
    var colAction = {
        "title": "Action",
        "data": "id",
        "width": "15%",
        "render": function (data, type, row, meta) {
            if(row.is_active== 1){
                string_url = 'disable'
                text_url = 'Disable'
            }else{
                string_url = 'enable'
                text_url = 'Enable'
            }
            var link ='<a href="product/view/' + data + '"> View </a> || <a href="product/edit/' + data + '"> Edit </a> || <a class="is_active" href="/admin/product/'+ string_url+ '/' + data + '">'+text_url+'  </a>';


            return link
        }
    }
    var colDesc= {
        "title": "Description",
        "data": "description",
        "width": "40%",
        "render": function (data, type, row, meta) {
            if(data.length > 250){
            var data = jQuery.trim(data).substring(0, 250)
            .split(" ").slice(0, -1).join(" ") + "...";    
            }
            return data   
        }
    }

    var colIsActive= {
        "title": "Status",
        "data": "is_active",
        "width": "10%",
        "render": function (data, type, row, meta) {
            if(data==1){
                data = 'Active'
            }else if(data==0){
                data = 'Not Active'
            }
            return data   
        }
    }

    var colCategories= {
        "title": "Status",
        "data": "category.name",
        "name": "category.name",
        "width": "10%",
        "render": function (data, type, row, meta) {
            return data   
        }
    }



    $('#product-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            {title: 'No',  data: 'id', name: 'id', width: "5%" },
            {title: 'title', data: 'title', name: 'title', width: "15%"},
            colDesc,
            colCategories,
            colIsActive,
            colAction,

        ]
    });
});
</script>
@endpush