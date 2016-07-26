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
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="form-group">
                                <a href="{{url('admin/category/create')}}" class="btn btn-info"> <i class="fa fa-plus"></i> Create New Category</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="category-table" class="table table-striped table-bordered table-hover">
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


    $('#category-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('catagories.data') !!}',
        columns: [
            {title: 'No',  data: 'id', name: 'id', width: '15%'},
            {title: 'name', data: 'name', name: 'name'},
            colIsActive,
        ]
    });
});
</script>
@endpush