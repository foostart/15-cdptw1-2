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

        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../css/type-1.css">
        <script src="../js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>

      
        <link href="../css/all_css.css" rel="stylesheet" type="text/css"/>
        <link href="../css/type-comment.css" rel="stylesheet" type="text/css"/>



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
                                        Ý kiến thảo luận
                                    </div>
                                    <div class="form-comment">
                                        <div class="input-group">
                                            <div class="txt-comment">
                                                <textarea id="txtComment" placeholder="Mời bạn nhập ý kiến thắc mắc của bạn" class="form-control" style="height: 155px;"></textarea>
                                            </div>
                                            <div class="content-info">
                                                <div class="info-title">Nhập thông tin của bạn</div>
                                                <input id="email" class="form-control" placeholder="Email">
                                                <input id="name" class="form-control" placeholder="Name">
                                                <div>
                                                    <label>Đáng giá SP:</label> 
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
                                                </div>
                                                <div>
                                                    <div class="vk-menu">
                                                        <b>Bộ gõ :</b> <input id="him_off" name="viet_method" type="radio" style="cursor: pointer;"> Off
                                                        <input id="him_telex" type="radio"  name="viet_method" style="cursor: pointer;"> Telex
                                                        <input id="him_vni" name="viet_method"  type="radio" style="cursor: pointer;"> VNI
                                                    </div>
                                                    <script type="text/javascript">var method = 2, on_off = 1, useCookie = 0;</script>
                                                </div>
                                                <div>
                                                    <input type="checkbox" value="1" name="hidden_email" id="hidden_email"> &nbsp;Ẩn email của tôi
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
