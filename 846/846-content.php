<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

 <div class="type-1">
    <div class="swiper-container">
        <div class="swiper-wrapper">
         <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/1.jpg" alt="Flower">
                    <div class="caption slide2">
                        <div class="title">
                        <div>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </div>
                           
                            <span class="btn btn-primary b1"><strong>Read more</strong></span>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/2.jpg" alt="Flower">
                    <div class="caption slide2">
                        <div class="title">
                        <div>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </div>
                           
                            <span class="btn btn-primary b1"><strong>Read more</strong></span>
                        </div> 
                    </div>
                     
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/3.jpg" alt="Flower">
                    <div class="caption slide2">
                        <div class="title">
                        <div>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </div>
                           
                            <span class="btn btn-primary b1">Read more</span>
                        </div> 
                    </div>
                     
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="contact">
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
    </div>
</div>
