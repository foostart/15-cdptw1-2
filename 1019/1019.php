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
    $less->compileFile('less/1019.less', 'css/1019.css');
    
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet">      
        <link href="<?php echo $url_path ?>/css/1019.css" rel="stylesheet" type="text/css" /> 
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>   
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>  
        <title>module 1019</title>
    </head>

    <body>
        <?php
            include $dir_block.'/1019-content.php';
        ?>
    </body>

</html>




