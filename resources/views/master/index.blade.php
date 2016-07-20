@extends('layouts.appdashboard')
@section('content')
 <div class="content-wrapper">
        <div class="container">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Master</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="">
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Category</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">User</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Image</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Setting</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home-pills">
                                    <br>
                                    <div class="form-group">
                                        <a href="{{url('admin/product/create')}}" class="btn btn-info"> <i class="fa fa-plus"></i> Create New Category</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="category-table" class="table table-striped table-bordered table-hover">
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <div class="table-responsive">
                                        <table id="user-table" class="table table-striped table-bordered table-hover">
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
            var link ='<a href="product/view/' + data + '"> View </a> || <a href="product/edit?' + data + '"> Edit </a> || <a class="is_active" href="/admin/product/'+ string_url+ '/' + data + '">'+text_url+'  </a>';


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
        ajax: '{!! route('datatables.data') !!}',
        columns: [
            {title: 'No',  data: 'id', name: 'id', width: "5%" },
            {title: 'title', data: 'title', name: 'title', width: "15%"},
            colDesc,
            {title: 'Category', data: 'category_id', name: 'category_id', width: "15%" },
            colIsActive,
            colAction,

        ]
    });

    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('test.data') !!}',
        columns: [
            {title: 'No',  data: 'id', name: 'id' },
            {title: 'Name', data: 'name', name: 'name' },
            {title: 'Email', data: 'email', name: 'email'},
            {title: 'Status'},
            {title: 'View'},

        ]
    });
});
</script>
@endpush