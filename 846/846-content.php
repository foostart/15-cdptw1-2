<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>



     
        <div class="type-2">
            <div class="hinh">
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
                        <div class="item slides">
                            <div class="slide-2"></div>
                            <div class="hero">        
                                <div>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </div>       

                            </div>
                        </div>
                        <div class="item slides">
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

            </div>
            <div class="container boder">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Write the course name here then choose Time, Category & Country">
                    </div>
                    <div class="col-md-2 today">
                        <div class="dropdown">
                            <span class="old">
                                <select class="" name="course-time" id="course-time" data-settings="{&quot;cutOff&quot;: 7}" style="padding: 10px;
                                        font-size: 15px;">
                                    <option value="" class="label">Time (this month)</option>
                                </select>
                            </span>
                            <span class="carat"></span>
                        </div>
                    </div>
                    <div class="col-md-2 today">
                        <div class="dropdown">
                            <span class="old">
                                <select class="" name="course-time" id="course-time1" data-settings="{&quot;cutOff&quot;: 7}" style="padding: 10px;
                                        font-size: 15px;">
                                    <option value="" class="label">Time (this month)</option>
                                </select>
                            </span>
                            <span class="carat"></span>
                        </div>
                    </div>
                    <div class="col-md-2 today">
                        <div class="dropdown">
                            <span class="old">
                                <select class="" name="course-time" id="course-time2" data-settings="{&quot;cutOff&quot;: 7}" style="padding: 10px;
                                        font-size: 15px;">
                                    <option value="" class="label">Time (this month)</option>
                                </select>
                            </span>
                            <span class="carat"></span>
                        </div>
                    </div> 
                    <div class="col-md-2 timkiem">
                        <div class="search">
                            <input type="submit" class="ln-tr" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>

 