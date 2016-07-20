@extends('layouts.appdashboard')
@section('content')
 <div class="content-wrapper">
        <div class="container">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">UI Elements</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {!! $product->title !!}
                        </div>
                        <div class="panel-body">
                            <div class="image">
                                @foreach ($product->images as $image)
                                    <img src="{{$image->filepath}}" style="width:100px;" " alt="" />
                                @endforeach
                            </div>
                            {{$product->description}}
                        </div>
                        <div class="panel-footer">
                            Author : {!! $product->user->name!!}
                        </div>
                    </div>
                </div>       
                </div>
                </div>

        </div>

@endsection