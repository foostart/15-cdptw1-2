<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class = "type-1020">
  <div class = "container">
    <div class="row">
      <div class="col-md-9  ">  
        <div class="images">
        
          <img src="<?php echo $url_path ?>/images/hinh2.jpg" width="80%" height="100%" alt="">
        
        <div class="text">
                        <div>
                                    <h1>Welcome to</h1> 
                                    <h2>GRANDRESTAURANT</h2>       
                                    <h3>Making The Delicious Premium Food Since 1990 <br>
                                        Book Online Or Call (1800)456-6743</h3>
                                </div>
                           
                            </div>
                        </div> 
                 
             
      </div>
      <div class="col-md-3  ">
          <div class="Khung">
            <a target="_blank" href="#"><i class="fa fa-cog"></i></a><br>
                  <a target="_blank" href="#"><i class="fa fa-edit"></i></a><br>
                  <a target="_blank" href="#"><i class="fa fa-book"></i></a><br>
                  <a target="_blank" href="#"><i class="fa fa-shopping-basket"></i></a>
                
                <div class="Khung-Dai">
                  <div class="Noi-Dung">
                    <h5>PREDEFINED DEMOS</h5>
                    <p>Grand Restaurant is so powerful theme allow you to easily create your own style of restaurant site. Here are example that can be imported with one click.</p>
                  </div>
                    <ul class="Menu-Hinh">
                              <div class="swiper-container">
                                  <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="../1020/images/1.jpg" alt=""></div> 
                                    <div class="swiper-slide"><img src="../1020/images/7.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="../1020/images/3.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="../1020/images/4.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="../1020/images/5.jpg" alt=""></div>
                                    <div class="swiper-slide"><img src="../1020/images/6.jpg" alt=""></div>
                                  </div>
                                  <!-- Add Pagination -->
                                 
                                  <div class="swiper-pagination"></div>
                                  
                                  </div>                 
                     </ul>
                       </div>
          </div>
      </div>
    </div>
  </div>
</div>
                    





                