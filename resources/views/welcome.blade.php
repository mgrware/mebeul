@extends('layouts.app')
@section('content')
@include('shared.frontend.aside')
<div id="fh5co-main">
                <section id="fh5co-feature-slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">                                
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
                                                            <h4>{!!ucwords($product->title)!!}<span class="fh5co-border"></span></h4>
                                                            <p><a href="{{url('/products/'.strToLower($product->category->name))}}">{!!$product->category->name!!}</a></p>
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
                    </div>
                </section>
                
                <div class="fh5co-spacer fh5co-spacer-lg"></div>


<div class="container">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-lead-wrap ">
                            <h2 class="fh5co-serif fh5co-lead">Cras <a href="#">rhoncus</a> scelerisque eros. Donec nec massa eu sapien condimentum aliquet ac in erat. Proin eleifend tortor eu arcu bibendum congue. </h2>
                            <div class="fh5co-spacer fh5co-spacer-sm"></div>
                            <p><a href="#" class="btn btn-outline btn-lg">Read More</a></p>
                        </div>
                    </div>
                </div>

                <section id="fh5co-feature">
                    <div class="container">
                        <!-- FEATURE -->
                        <div class="row fh5co-feature-2">
                            
                            <h2 class="fh5co-uppercase-heading-sm text-center">Theme Features</h2>
                            <div class="fh5co-spacer fh5co-spacer-md"></div>
                            

                            <div class="col-md-3 col-sm-6 fh5co-feature-item">
                                <span class="fh5co-feature-icon fh5co-circle"><i class="ti-gift"></i></span>
                                <h3 class="text-center fh5co-feature-title h4 text-uppercase">Free HTML5 Template</h3>
                                <p class="text-center fh5co-feature-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid placeat nobis veritatis neque earum possimus tempora sunt. </p>
                                <p class="text-center"><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            <div class="col-md-3 col-sm-6 fh5co-feature-item">
                                <span class="fh5co-feature-icon fh5co-circle"><i class="ti-mobile"></i></span>
                                <h3 class="text-center fh5co-feature-title h4 text-uppercase">Mobile First</h3>
                                <p class="text-center fh5co-feature-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid placeat nobis veritatis neque earum possimus tempora sunt.</p>
                                <p class="text-center"><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            
                            <div class="clearfix visible-sm-block"></div>

                            <div class="col-md-3 col-sm-6 fh5co-feature-item">
                                <span class="fh5co-feature-icon fh5co-circle"><i class="ti-pie-chart"></i></span>
                                <h3 class="text-center fh5co-feature-title h4 text-uppercase">Analytics</h3>
                                <p class="text-center fh5co-feature-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid placeat nobis veritatis neque earum possimus tempora sunt.</p>
                                <p class="text-center"><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            <div class="col-md-3 col-sm-6 fh5co-feature-item">
                                <span class="fh5co-feature-icon fh5co-circle"><i class="ti-wallet"></i></span>
                                <h3 class="text-center fh5co-feature-title h4 text-uppercase">Increase Income</h3>
                                <p class="text-center fh5co-feature-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat aliquid placeat nobis veritatis neque earum possimus tempora sunt.</p>
                                <p class="text-center"><a href="#" class="btn btn-primary btn-sm">Read more</a></p>
                            </div>
                            
                            <!-- <div class="fh5co-spacer fh5co-spacer-md"></div> -->

                        </div>
                    </div>
                </section>

                
                <div class="fh5co-spacer fh5co-spacer-xlg"></div>

                <section id="fh5co-testimonial">
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-12 text-center">
                                <h2 class="fh5co-uppercase-heading-sm">Testimony</h2>
                                <div class="owl-carousel-fullwidth fh5co-light-arrow owl-carousel-2">
                                    <div class="item">
                                        <blockquote>
                                            <p class="fh5co-serif">&ldquo;Design is not just what it looks like and feels like. Design is how it works.&rdquo;</p>
                                            <p class="fh5co-testimonial-author"><cite>&mdash; Steve Jobs</cite></p>
                                        </blockquote>
                                    </div>
                                    <!-- END .item -->
                                    <div class="item">
                                    
                                        <blockquote>
                                            <p class="fh5co-serif">&ldquo;Design is not just what it looks like and feels like. Design is how it works.&rdquo;</p>
                                            <p class="fh5co-testimonial-author"><cite>&mdash; Steve Jobs</cite></p>
                                        </blockquote>
                                    </div>
                                    <!-- END .item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="fh5co-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                                <h2 class="fh5co-uppercase-heading-sm fh5co-no-margin-bottom">Subscribe Newsletter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, assumenda.</p>
                                <div class="fh5co-spacer fh5co-spacer-xxs"></div>
                                <form method="post" action="#">
                                  <div class="form-group">
                                    <label for="email" class="sr-only">Email address</label>
                                    <input type="email" class="form-control input-lg" id="email" placeholder="Email">
                                  </div>
                                  <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send">
                                </form>     
                            </div>
                        </div>
                    </div>
                </section>
                
                <footer id="fh5co-footer">
                    <div class="container">
                        
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-github"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                        <p class="text-muted fh5co-no-margin-bottom text-center"><small>&copy; 2015 <a href="#">Display</a>. All rights reserved. Crafted with love <em>by</em> <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a> <br> Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>

                    </div>
                </footer>
</div>

@endsection
