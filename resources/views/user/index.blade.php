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
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="form-group">
                                <a href="{{url('/admin/user/new')}}" class="btn btn-info"> <i class="fa fa-plus"></i> Create New User</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="user-table" class="table table-striped table-bordered table-hover">
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
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('user.data') !!}',
        columns: [
            {title: 'No',  data: 'id', name: 'id' },
            {title: 'Name', data: 'name', name: 'name' },
            {title: 'Email', data: 'email', name: 'email'},
            {title: 'Status', data: 'status', name: 'status'},

        ]
    });
});
</script>
@endpush