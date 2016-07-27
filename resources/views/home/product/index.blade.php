@extends('layouts.app')

@section('content')
            
<div class="fh5co-narrow-content">
    <h3 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">
      Galleries
    </h3>
    <div class="row animate-box" data-animate-effect="fadeInLeft">
                    @foreach($products as $product)
                    
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
            <a href="{{url('product/view/'.$product->id)}}">
                <img src="{!!$product->images->first()->filepath!!}" alt="{!!$product->title!!}" style="width:280px; height:190px;" class="img-responsive">
                    <h3 class="fh5co-work-title">{!!ucwords($product->title)!!}</h3>
                    <p>{!!$product->category->name!!}</p>
                </a>
            </div>
            <div class="clearfix visible-sm-block"></div>
                    @endforeach
                
        </div>
    </div>
@endsection
