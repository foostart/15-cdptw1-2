<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/type-comment.less', 'css/type-comment.css');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
        <link href="./css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="./css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="./js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="./js/bootstrap.js" type="text/javascript"></script>

         

        <link href="./css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="./css/type-comment.css" rel="stylesheet" type="text/css"/>


    </head>
    <body>
    
       <?php include $dir_block . '/1032-content.php'; ?>
        
    </body>
</html>
