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
                            <a href="javascript:void(0)" class="btn btn-info btn-lg" data-toggle="modal" data-target="#create-product"> <i class="fa fa-plus"></i> Create Product</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Images</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Catagories</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{ URL::to('/') }}/assets/images/img_large_1.jpg" style="width:110px;height:110px;" alt="image"></td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Otto</td>
                                            <td>
                                                <i class="fa fa-trash fa-lg">delete</i>
                                            </td>
                                            <td>
                                                <i class="fa fa-pencil fa-lg">Edit</i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
    </div>
</div>

@include('product.modal')
@endsection

