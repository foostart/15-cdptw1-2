       <?php
       $url_host = 'http://' . $_SERVER['HTTP_HOST'];
       $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
       $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
       preg_match_all($pattern_uri, __DIR__, $matches);
       $url_path = $url_host . $matches[1][0];
       $url_path = str_replace('\\', '/', $url_path);
       if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        include ('libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-1.less', 'css/type-1.css');
    ?>
<!DOCTYPE html>
    <html lang="en">
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/type-1.css">
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/swiper.min.js"></script>
    
    
</head>
<body>
  <?php include '../846/846-content.php'; ?>
  <script src="js/type-1.js"></script>

</body>
</html>