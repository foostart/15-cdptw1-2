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

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/type-comment.less', './css/type-comment.css');
       
        ?>

        <link href="./css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="./css/type-comment.css" rel="stylesheet" type="text/css"/>

        


        




    </head>
    <body>
    
        <div class="type-comment">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="comment">
                            <div class="box-comment">
                                <form>
                                    <div class="title">
                                        Ý kiến thảo luận:
                                    </div><br>
                                    <div class="form-comment">
                                        <div class="input-group">
                                            <div class="txt-comment">
                                                <textarea id="txtComment" placeholder="Nhập vào đây ý kiến của các bạn" class="form-control" style="height: 155px;"></textarea>
                                                
                                            </div><br>
                                            <div class="content-info"><br>
                                                <div class="info-title">Nhập thông tinh cá nhân:</div><br>
                                                <input id="email" class="form-control" placeholder="Email">
                                                <input type="name" id="name" class="form-control" placeholder="Name"><br>

                                                <div class="title">
                                                Giới tính:
                                                    </div><br>
                                                   <label> <input type="radio" value="1" name="hidden_email" id="hidden_email"> &nbsp;Nam </label><br>
                                                   <label> <input type="radio" value="2" name="hidden_email" id="hidden_email"> &nbsp;Nữ</label><br>
                                                </div>
                                                <label>Ðánh giá SP:</label> 
                                                <div class="stars">
                                                <form action="">     
                                                    <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                    <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                    <label class="star star-4" for="star-4"></label>
                                                    <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                    <label class="star star-3" for="star-3"></label>
                                                    <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                    <label class="star star-2" for="star-2"></label>
                                                    <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                    <label class="star star-1" for="star-1"></label>
                                                </form>
                                                </div>                     
                                                <div><br>
                                                    <div class="vk-menu">
                                                        
                                                    </div>
                                                    <script type="text/javascript">var method = 2, on_off = 1, useCookie = 0;</script>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        <span class="input-group-btn">
                                            <input type="hidden" name="h_code" id="h_code" value="427570">
                                            <input name="comment_id" value="117" type="hidden">
                                            <button name="btnSend" id="btnSend" value="submit" class="btn" type="submit">Gửi</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
