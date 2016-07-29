@extends('layouts.app')
@section('content')
<div class="">
<div class="fh5co-narrow-content">
    <h4 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Our Project
    </h4>
    <div class="row animate-box" data-animate-effect="fadeInLeft">
                    @foreach($products as $product)
                    
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
            <a href="{{url('product/view/'.$product->id)}}">
                <img src="{!!$product->images->first()->filepath!!}" alt="{!!$product->title!!}" class="img-responsive">
                    <h4 class="fh5co-work-title">{!!ucwords($product->title)!!}</h4>
                    <p>{!!$product->category->name!!}</p>
                </a>
            </div>
            <div class="clearfix visible-sm-block"></div>
                    @endforeach
                
        </div>
    </div>
</div>
    <div class="fh5co-narrow-content ">
        <div class="border-bottom"></div>
        <h3 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Client Testimoni</h3>
        <div class="fh5co-testimonial" >
            <div class="fh5co-narrow-content">
                <div class="owl-carousel-fullwidth animate-box" data-animate-effect="fadeInLeft">
                    <div class="item">
                        <figure>
                            <img src="assets/images/testimonial_person2.jpg" alt="Free HTML5 Bootstrap Template">
                            </figure>
                            <p class="text-center quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained. &rdquo; 
                                <cite class="author">&mdash; Ferdinand A. Porsche</cite>
                            </p>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="assets/images/testimonial_person3.jpg" alt="Free HTML5 Bootstrap Template">
                                </figure>
                                <p class="text-center quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while. &rdquo;
                                    <cite class="author">&mdash; Steve Jobs</cite>
                                </p>
                            </div>
                            <div class="item">
                                <figure>
                                    <img src="assets/images/testimonial_person4.jpg" alt="Free HTML5 Bootstrap Template">
                                    </figure>
                                    <p class="text-center quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly. &rdquo;
                                        <cite class="author">&mdash; Frank Chimero</cite>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="bg-gray">
                <div class="fh5co-narrow-content">
                    <div class="border-bottom"></div>
                    <h3 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">This Is What 
                        <span>We Love To Do</span>
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="fh5co-icon">
                                    <i class="icon-strategy"></i>
                                </div>
                                <div class="fh5co-text">
                                    <h3>Strategy</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="fh5co-icon">
                                    <i class="icon-telescope"></i>
                                </div>
                                <div class="fh5co-text">
                                    <h3>Explore</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="fh5co-icon">
                                    <i class="icon-circle-compass"></i>
                                </div>
                                <div class="fh5co-text">
                                    <h3>Direction</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
                                <div class="fh5co-icon">
                                    <i class="icon-tools-2"></i>
                                </div>
                                <div class="fh5co-text">
                                    <h3>Expertise</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="fh5co-counters" style="background-image: url(assets/images/hero.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
                    <div class="fh5co-narrow-content animate-box">
                        <div class="row" >
                            <div class="col-md-4 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="67" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Clients Worked With</span>
                            </div>
                            <div class="col-md-4 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="{!!$counts!!}" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Completed Projects</span>
                            </div>
                            <div class="col-md-4 text-center">
                                <span class="fh5co-counter js-counter" data-from="0" data-to="27232" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="fh5co-counter-label">Line of Codes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fh5co-cards">
                    <div class="fh5co-narrow-content">
                        <div class="border-bottom"></div>
                        <h3 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Press Release</h3>
                        <div class="fh5co-flex-wrap">
                            <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                                <h5>Expertise</h5>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                <p>
                                    <a href="#" class="btn btn-md btn-primary">Learn More</a>
                                </p>
                            </div>
                            <div class="fh5co-card animate-box" data-animate-effect="fadeInLeft">
                                <h5>Explore</h5>
                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas.</p>
                                <p>
                                    <a href="#" class="btn btn-md btn-primary">Learn More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fh5co-narrow-content">
                    <div class="border-bottom"></div>
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <h1 class="fh5co-heading-colored">We Design Beautiful &amp; Functional Website</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
                            <p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            <p>
                                <a href="#" class="btn btn-primary btn-outline">Learn More</a>
                            </p>
                        </div>
                        <div class="col-md-7 col-md-push-1">
                            <div class="row">
                                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
