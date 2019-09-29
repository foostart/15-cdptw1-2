<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
  $less->compileFile('less//1020.less', 'css/1020.css');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="UTF-8">
        <title>module 1020</title>
          <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.js" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1020.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">


        <script src="js/swiper.min.js"></script>
    </head>
<body>
   <?php include $dir_block.'/1020-content.php'; ?>
    <script src="../1020/js/1020.js"></script>
</body>
</html>