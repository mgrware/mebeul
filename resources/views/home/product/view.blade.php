@extends('layouts.app')

@section('content')

<div class="fh5co-narrow-content">
  <div class="row">
    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
      <figure class="text-center work-item">
        <a href="{!!$product->images->first()->filepath!!}" rel="prettyPhoto[pp_gal]">
          <img src="{!!$product->images->first()->filepath!!}" class="img-responsive">
          </a>
        </figure>
        <figure class="text-center">
              @foreach ($product->images as $image)
              
          <div class="col-md-2 work-item" style="margin-bottom:10px" %>
            <a href="{!!$image->filepath!!}" rel="prettyPhoto[pp_gal]">
              <img src="{!!$image->filepath!!}" class="img-responsive" style="width:150px;">
              </a>
            </div>
              @endforeach
            
          </figure>
        </div>
        <div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">
          <div class="col-md-9 col-md-push-3">
            <h2>{!!ucwords($product->title)!!}</h2>
            <p>{!!$product->description!!}</p>
          </div>
          <div class="col-md-3 col-md-pull-9 fh5co-services">
            <h3>{!!$product->category->name!!}</h3>
            <ul>
              <li>
                <small>Created On</small>
              </li>
              <li>
                <small>{{ date('F d, Y', strtotime($product->created_at)) }}</small>
              </li>
              <li>
                <small>{!!ucwords($product->user->name) !!}</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row work-pagination animate-box" data-animate-effect="fadeInLeft">
        <div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0">
          <div class="col-md-4 col-sm-4 col-xs-4 text-center">
            <a href="/product/view/{{$product->id - 1}}">
              <i class="icon-long-arrow-left"></i>
              <span>Previous Project</span>
            </a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 text-center">
            <a href="/">
              <i class="icon-th-large"></i>
            </a>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 text-center">
            <a href="/product/view/{{$product->id + 1}}">
              <span>Next Project</span>
              <i class="icon-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')

  <script>
$(function() {
  $("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal', theme:'dark_rounded', overlay_gallery: true});
});
</script>
@endpush