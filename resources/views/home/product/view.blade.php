@extends('layouts.app')

@section('content')
<div class="fh5co-spacer fh5co-spacer-sm"></div>
<div id="fh5co-sub-main">
  <section>
    <div class="container">
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="{{url('/products')}}">Products</a></li>
        <li><a href="{{url('/products/'.strToLower($product->category->name))}}">{!!ucwords($product->category->name)!!}</a></li>
        <li class="active">{!!ucwords($product->title)!!}</li>
      </ol>
      <div class="col-md-12">
              <p class="product-header">
                <span class="product-title">{!!ucwords($product->title)!!}</span>
              </p>
          </div>
<div class="fh5co-spacer fh5co-spacer-sm"></div>
      <div class="row">
        <div class="col-md-6">
          <div class="fh5co-side-section">
            <div class="fh5co-spacer fh5co-spacer-xxs"></div>
              <div class="col-md-6">
                <p>
                  <a href="{!!$product->images->first()->filepath!!}" class="image-popup">
                  <img src="{!!$product->images->first()->filepath!!}" alt="Image" class="img-responsive"></a>
                </p>
              </div>
            <div class="row">
              <div class="col-md-12">
              @foreach ($product->images as $image)
                <div class="col-md-3">
                  <p>
                    <a href="{!!$image->filepath!!}" class="image-popup">
                      <img src="{!!$image->filepath!!}" alt="Image" class="img-responsive">
                    </a>
                  </p>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-md-pull-1">
          <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#detail">Detail</a></li>
            <li><a data-toggle="tab" href="#spec">Specification</a></li>
          </ul>
          <div class="fh5co-spacer fh5co-spacer-sm"></div>
          <div class="tab-content">
            <div id="detail" class="tab-pane fade in active">
              <p>{!!$product->description!!}</p>
            </div>
            <div id="spec" class="tab-pane fade">
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <td>Color</td>
                    <td>{!!$product->color!!}</td>
                  </tr>
                  <tr>
                    <td>Size</td>
                    <td>{!!$product->size!!}</td>
                  </tr>
                  <tr>
                    <td>Material</td>
                    <td>{!!$product->material!!}</td>
                  </tr>
                </table>
              </div>
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
                                      <p>{!!str_limit($product->description, $limit=50, $end="...")!!}</p>
                                      <p><a href="{{url('/products/view/'.$product->slug)}}" class="btn btn-primary">Read more</a> 
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