
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
$less->compileFile('less/1029.less', 'css/1029.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1029</title>
        <meta charset="UTF-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1029.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css">


        <script src="js/swiper.min.js"></script>
    </head>
    <body>
        <?php include $dir_block . '/1029-content.php'; ?>
        <script src="../1029/js/1029.js"></script>
    </body>
</html>