@extends('layouts.appdashboard')
@section('content')
<div class="content-wrapper">
        <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Products</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="form-group">
                                <a href="{{url('admin/product/create')}}" class="btn btn-info"> <i class="fa fa-plus"></i> Create New Product</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="product-table" class="table table-striped table-bordered table-hover">
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
    </div>
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
            console.log(row)
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