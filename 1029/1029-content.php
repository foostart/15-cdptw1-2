
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?> 
<div class="module-1029">
    <div class="container">
        <div class="row">
            <div class="detail">
             <!-- Swiper -->
                <div class="col-md-6 col-sm-6 col-xs-12 hinh">
                <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide"><img src="../1029/images/1.jpg" alt=""></div> 
                              <div class="swiper-slide"><img src="../1029/images/3.jpg" alt=""></div>
                              <div class="swiper-slide"><img src="../1029/images/4.jpg" alt=""></div>
                              <div class="swiper-slide"><img src="../1029/images/5.jpg" alt=""></div>
                              <div class="swiper-slide"><img src="../1029/images/6.jpg" alt=""></div>
                              <div class="swiper-slide"><img src="../1029/images/7.jpg" alt=""></div>
                            </div>
                            <!-- Add Pagination -->
                            <br>
                            <br>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </div>
                      </div>      
                <div class="col-md-6 col-sm-6 col-xs-12 chitiet">
                    <h2 class="title">SALTED FRIED CHICKEN</h2>
                    <p class="price">£12.00</p>
                    <p class="description">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <form class="number">
                        <div class="quantity">
                            <input type="number" step="1" min="1" name="quantity" value="1">
                            <button type="submit" class="addtocart">ADD TO CART</button>
                            <p class="tag">Category:<a href="#">delivery</a></p>
                            <p class="tag">Tag:<a href="#">delivery</a></p>
                        </div>
                    </form>
                </div>
            
            <div class="clearfix"></div>
            <div class="tabmenu">
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1">Description</label>
                <input id="tab2" type="radio" name="tabs">
                <label for="tab2">Review</label>
                <section id="content1">
                    <h2>
                        Product Description
                    </h2>
                    <p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus
                    </p>
                </section>
                <section id="content2">
                    <h2>
                        Reviews<br>
                    </h2>
                    <p>
                        There are no reviews yet.<br>
                        BE THE FIRST TO REVIEW “BAKED POTATO PIZZA”<br>
                        Your email address will not be published. Required fields are marked *
                    </p>
                </section>
            </div>
        </div>
    </div>
</div>