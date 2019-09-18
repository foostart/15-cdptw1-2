<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1019">
    <div class="container">
        <div class="row">
            <div class="navbar navbar-default navbar-fixed-top navbar-1" id="menu-home">
            <div class="container width-1214">
                <!--LOGO-->
                <div class="logo-container hasInfoCard">
                        <h1 id="logo">
                            <a href="#">
                                <img src="<?php echo $url_path ?>/images/logo@2x.png" alt="Joomla">
                            </a>
                        </h1>
                    </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed btn-menu" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--MENU DROP DOWN-->
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">HOME</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Home 1 - New</a></li>
                                <li><a href="#">Home 2 - Classic</a></li>
                                <li><a href="#">Home 3 - Simple</a></li>
                                <li><a href="#">Home 4 - One Page</a></li>
                                <li><a href="#">Home 5 - Parallax</a></li>
                                <li><a href="#">Home 6 - Video</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">MENU</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Default Style</a></li>
                                    <li><a href="#">Menu Mixed</a></li>
                                    <li><a href="#">Menu Classic</a></li>
                                    <li><a href="#">Menu Grid</a></li>
                                    <li><a href="#">Menu Gird Image</a></li>
                                    <li><a href="#">Menu Parallax</a></li>   
                            </ul>
                        </li>
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">PAGES</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Shop Frontpage</a></li>
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">Fullwitch</a></li>
                                <li><a href="#">Grid</a></li>
                            </ul>
                        </li>
                        <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">DELIVERY</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">Fullwitch</a></li>
                                <li><a href="#">Grid</a></li>
                            </ul>
                        </li>
                         <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">NEWS</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Right Sidebar</a></li>
                                <li><a href="#">Left Sidebar</a></li>
                                <li><a href="#">Fullwitch</a></li>
                                <li><a href="#">Grid</a></li>
                                <li><a href="#">Grid Left Sidebar</a></li>
                                <li><a href="#">Grid Right Sidebar</a></li>
                                <li><a href="#">Single Post</a></li>
                            </ul>
                        </li>
                         <li class="dropdown show-hover">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">PAGES</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Menu Classic</a></li>
                                <li><a href="#">Menu Grid</a></li>
                                <li><a href="#">Menu Gird Image</a></li>
                                <li><a href="#">Menu Parallax</a></li> 
                                <li><a href="#">Button Desgin</a></li>
                                <li><a href="#">Button Desgin</a></li>
                            </ul>
                        </li>
                         <li> <button type="button"> RESERVATION </button></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="clearfix"></div>
          