<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-3">
  <div class="images">
      <img src="<?php echo $url_path ?>/images/hinh2.jpg" alt="">
  </div>
  <div class="text">
    <p class="text-1">Welcome to</p>
    <p class="text-2">GRANDRESTAURANT</p>
    <p class="text-3">Making The Delicious Premium Food Since 1990 <br>
      Book Online Or Call (1800)456-6743 
    </p>
    <div class="cham-tron"></div>

      <div class="Khung">
        <a target="_blank" href="#"><i class="fa fa-cog"></i></a><br>
        <a target="_blank" href="#"><i class="fa fa-edit"></i></a><br>
        <a target="_blank" href="#"><i class="fa fa-book"></i></a><br>
        <a target="_blank" href="#"><i class="fa fa-shopping-basket"></i></a>
      </div>
      <div class="Khung-Dai">
        <div class="Noi-Dung">
          <h5>PREDEFINED DEMOS</h5>
          <p>Grand Restaurant is so powerful theme allow you to easily create your own style of restaurant site. Here are example that can be imported with one click.</p>
        </div>
        <ul class="Menu-Hinh">
          <li><img src="<?php echo $url_path ?>/images/screen1.jpg" alt=""></li>
          <li><img src="<?php echo $url_path ?>/images/screen2.jpg" alt=""></li>    
          <li><img src="<?php echo $url_path ?>/images/screen3.jpg" alt=""></li>    
          <li><img src="<?php echo $url_path ?>/images/screen4.jpg" alt=""></li>    
          <li><img src="<?php echo $url_path ?>/images/screen5.jpg" alt=""></li>    
          <li><img src="<?php echo $url_path ?>/images/screen6.jpg" alt=""></li>              
        </ul>
      </div>
  </div>
</div>