<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bild presentation</title>
    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        #bildMain {
            background: #F6F1EB;
            width: 100%;
            height: auto;
            padding-top: 140px;
            padding-bottom: 70px;
        }
        .img {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .youtube {
            width: 50px; height: 50px;
            background: #000;
            border-radius: 50%;
            position: absolute;
            left: 48%;
            top: 4790px;
            opacity: 0;
        }
        .youtube a {
            text-align: center;
            line-height: 50px;
            color: #000;
        }
    </style>
</head>
<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">풋터 바로가기</a>
    </div>
    <!--//skip-->
    <header id="header">
        <?php
          include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <!-- main -->
    <div id="bildMain">
        <div class="img">
            <img src="../assets/img/presentation.jpg" alt="와이어프레임 이미지">
            <div class="youtube"><a href="https://youtu.be/wniv__E1NLM">ㅇddd</a></div>
        </div>
    </div>


    <!-- //main -->

    <!-- footer -->
    <footer id="footer">
        <?php
            include "../include/mainFooter.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>