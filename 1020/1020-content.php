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
      <div class="col-md-9">  
        <div class="images">
          <img src="<?php echo $url_path ?>/images/hinh2.jpg" width="100%" height="100%" alt="">
        </div>
            <div class="text">
              <p class="text-1">Welcome to</p>
              <p class="text-2">GRANDRESTAURANT</p>
              <p class="text-3">Making The Delicious Premium Food Since 1990 <br>
                Book Online Or Call (1800)456-6743 
              </p>
            </div>     
      </div>
      <div class="col-md-3">
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
                <li><img src="<?php echo $url_path ?>/images/screen1.jpg" alt=""></li>
                <li><img src="<?php echo $url_path ?>/images/screen2.jpg" alt=""></li>                   
              </ul>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
                    





                