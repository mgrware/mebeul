@extends('layouts.app')

@section('content')
<div id="fh5co-intro-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 animate-box">
                        <h2 class="intro-heading">We Create Cool Things For The Better Web.</h2>
                        <p><span>Created with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-portfolio-section">
            <div class="container">
                <ul id="filters" class="clearfix animate-box">
                    <li><span class="filter active" data-filter=".all">All</span></li>
                    <li><span class="filter" data-filter=".app">App</span></li>
                    <li><span class="filter" data-filter=".card">Card</span></li>
                    <li><span class="filter" data-filter=".icon">Icon</span></li>
                    <li><span class="filter" data-filter=".logo">Logo</span></li>
                    <li><span class="filter" data-filter=".web">Web</span></li>
                </ul>

                <div id="portfoliolist" class="animate-box">
                    
                    <div class="portfolio all logo" data-cat="logo">
                        <div class="portfolio-wrapper">             
                            <img src="images/portfolio_pic1.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Camera</a>
                                    <span class="text-category">Logo</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>              

                    <div class="portfolio all card web" data-cat="card">
                        <div class="portfolio-wrapper">         
                            <img src="images/portfolio_pic2.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Card</a>
                                    <span class="text-category">Card</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>      
                    
                    <div class="portfolio all web" data-cat="web">
                        <div class="portfolio-wrapper">                     
                            <img src="images/portfolio_pic3.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Sonor's Design</a>
                                    <span class="text-category">Web design</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>              
                    
                    <div class="portfolio all card" data-cat="card">
                        <div class="portfolio-wrapper">         
                            <img src="images/portfolio_pic4.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Typography Company</a>
                                    <span class="text-category">Business card</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>  
                                
                    <div class="portfolio all app" data-cat="app">
                        <div class="portfolio-wrapper">
                            <img src="images/portfolio_pic5.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Weatherette</a>
                                    <span class="text-category">App</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>          
                    
                    <div class="portfolio all card" data-cat="card">
                        <div class="portfolio-wrapper">         
                            <img src="images/portfolio_pic6.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">BMF</a>
                                    <span class="text-category">Business card</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="portfolio all card" data-cat="card">
                        <div class="portfolio-wrapper">         
                            <img src="images/portfolio_pic7.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Techlion</a>
                                    <span class="text-category">Business card</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="portfolio all logo" data-cat="logo">
                        <div class="portfolio-wrapper">         
                            <img src="images/portfolio_pic8.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">KittyPic</a>
                                    <span class="text-category">Logo</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio all icon" data-cat="icon">
                        <div class="portfolio-wrapper">         
                            <img src="images/portfolio_pic9.jpg" alt="" />
                            <div class="label">
                                <div class="label-text">
                                    <a class="text-title">Domino's Pizza</a>
                                    <span class="text-category">Icon</span>
                                </div>
                                <div class="label-bg"></div>
                            </div>
                        </div>
                    </div>                                                                                                          
                </div>
            </div>
        </div>
        <!-- END fh5co-portfolio-section -->
        <div id="fh5co-services-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section">
                        <h2>Our Services</h2>
                        <h3>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                            <i class="icon-heart"></i>
                            <div class="holder-section">
                                <h3>Crafted With Love</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                            <i class="icon-laptop"></i>
                            <div class="holder-section">
                                <h3>Web Developement</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                            <i class="icon-video"></i>
                            <div class="holder-section">
                                <h3>Video Editing</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                            <i class="icon-mobile"></i>
                            <div class="holder-section">
                                <h3>Mobile Optimization</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                            <i class="icon-gears"></i>
                            <div class="holder-section">
                                <h3>Search Engine Optimization</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 animate-box">
                        <div class="fh5co-services text-center">
                            <i class="icon-piechart"></i>
                            <div class="holder-section">
                                <h3>Web Marketing</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: fh5co-services-section -->
        <footer>
            <div id="footer" class="fh5co-border-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Copyright 2016 Free Html5 <a href="#">Agency</a>. All Rights Reserved. <br>Made with <i class="icon-heart3 love"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://www.pexels.com/" target="_blank">Pexels</a> &amp; <a href="http://plmd.me/" target="_blank">PLMD</a> </p>
                        </div>
                        <div class="col-md-6 social-text-align">
                            <p class="fh5co-social-icons">
                                <a href="#"><i class="icon-twitter-with-circle"></i></a>
                                <a href="#"><i class="icon-facebook-with-circle"></i></a>
                                <a href="#"><i class="icon-instagram-with-circle"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
@endsection

@section('footer')