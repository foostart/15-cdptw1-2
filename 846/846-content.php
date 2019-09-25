 <!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet">       
        <link href="<?php echo $url_path ?>/css/type-1.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css" rel="stylesheet" type="text/css"/> 
        <script src="<?php echo $url_path ?>/js/jquery.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
    </head>
    <body>
            <?php
            $url_host = 'http://'.$_SERVER['HTTP_HOST'];
            $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
            $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
            
            preg_match_all($pattern_uri, __DIR__, $matches);
            $url_path = $url_host . $matches[1][0];
            $url_path = str_replace('\\', '/', $url_path);
            ?>





     
<div class="type-2">
    <div class="swiper-container">
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>
            
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <div>
                            <h1>We Help You Learn What You Love</h1>        
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide"">
                    <div class="slide-2"></div>
                    <div class="hero">        
                        <div>
                            <h1>We Help You Learn What You Love</h1>        
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                        </div>       

                    </div>
                </div>
                <div class="swiper-slide"">
                    <div class="slide-3"></div>
                    <div class="hero">        
                        <div>
                            <h1>We Help You Learn What You Love</h1>        
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                        </div>

                    </div>
                </div>
            </div> 
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

    
            
        </div>
    </div>
</div>

</body>

</html>
