@extends('layouts.app')

@section('content')
<div class="fh5co-spacer fh5co-spacer-sm"></div>
<div id="fh5co-sub-main">
  <section>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/products')}}">Products</a></li>
        <li class="active">{!!ucwords($category)!!}</li>
      </ol>
        <div class="row">
            <p class="product-header">
                <span class="product-title">{!!ucwords($category)!!}</span>
            </p>
      <div class="row">
        <div class="col-md-12">
          <div class="fh5co-side-section">
            <div class="fh5co-spacer fh5co-spacer-xxs"></div>
              @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="project project-default">
                        <!-- <div class="shape">
                            <div class="shape-text">
                                top                             
                            </div>
                        </div> -->
                        <div class="project-img">
                            <img class="card-img-top" src="{!!$product->images->first()->filepath!!}" alt="Card image cap">
                        </div>
                        <div class="project-content">
                            <h3 class="lead">
                                {!!ucwords($product->title)!!}
                            </h3>
                            <center>
                              <p><a href="{{url('/products/'.strToLower($product->category->name))}}"> {!!$product->category->name!!}</a></p>
                              <p><a href="{{url('/products/view/'.$product->slug)}}" class="btn btn-primary">See Detail</a></p>
                            </center> 
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="fh5co-spacer fh5co-spacer-sm"></div>
          <div class="col-md-12">
              <p class="product-header">
                <span class="product-title">More Product</span>
              </p>
          </div>
          <div class="fh5co-spacer fh5co-spacer-sm"></div>
          <div class="owl-carousel-fullwidth owl-carousel-2">
              @foreach($products as $product)
              <div class="item">
                  <!-- <div class="container"> -->
                      <div class="row">
                          <div class="col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1">
                              <div class="row">
                                  <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-img"> 
                                      <img src="{!!$product->images->first()->filepath!!}" alt="Images" class="img-responsive">
                                  </div>
                                  <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-item-slide-text">
                                      <h3>{!!ucwords($product->title)!!}<span class="fh5co-border"></span></h3>
                                      <p>{!!str_limit($product->description, $limit=128, $end="...")!!}</p>
                                      <p><a href="{{url('/products/view/'.$product->slug)}}" class="btn btn-primary">Read more</a></p> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  <!-- </div> -->
              </div>
              <!-- END .item -->
              @endforeach
          </div>
      </div>
    </div>
  </section>
</div>
<div class="fh5co-spacer fh5co-spacer-sm"></div>
<div class="fh5co-spacer fh5co-spacer-xxs"></div>
@include('shared.frontend.footer')
@endsection

@push('scripts')

  <script>
// $(function() {
//   $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal', theme:'dark_rounded', overlay_gallery: true});
// });
</script>
@endpush