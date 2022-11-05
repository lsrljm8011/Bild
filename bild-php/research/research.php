
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
    <title>나의 갤러리</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <!-- jquery -->
    <link rel="stylesheet" href="../assets/js/highlight.css">
</head>
<body>
    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header">  
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="container">
                <div class="research container2">
                    <div class="gallery top">
                        <h2>SHARE MY PHOTO WITH EVERYONE!</h2>
                        <img class="profileImg" src="../assets/img/profile.jpg" alt="profileImg">
                        <p>bild</p>
                    </div>
                    <div class="research main">
                         <ul>
                            <li>
                                 <span class="heart"><i class="far fa-heart"></i></span>
                                <a href="#">
                                    <img src="../assets/img/researchImg01.jpg" alt="img1">
                                </a>
                            </li>
                            <li> 
                                <span class="heart"><i class="far fa-heart"></i></span>
                                <a href="#">
                                     <img src="../assets/img/researchImg02.jpg" alt="img2">
                                </a>
                            </li>
                            <li>
                                <span class="heart"><i class="far fa-heart"></i></span>
                                <a href="#">
                                    <img src="../assets/img/researchImg03.jpg" alt="img3">
                                </a>
                            </li>
                            <li>
                                <span class="heart"><i class="far fa-heart"></i></span>
                                <a href="#">
                                    <img src="../assets/img/researchImg04.jpg" alt="img4">
                                </a>
                            </li>
                            <li>
                                <span class="heart"><i class="far fa-heart"></i></span>
                                <a href="#">
                                    <img src="../assets/img/researchImg05.jpg" alt="img5">
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li><span class="heart"><i class="far fa-heart"></i></span><a href="#"><img src="../assets/img/researchImg06.jpg" alt="img1"></a></li>
                            <li><span class="heart"><i class="far fa-heart"></i></span><a href="#"><img src="../assets/img/researchImg07.jpg" alt="img2"></a></li>
                            <li><span class="heart"><i class="far fa-heart"></i></span><a href="#"><img src="../assets/img/researchImg08.jpg" alt="img3"></a></li>
                            <li><span class="heart"><i class="far fa-heart"></i></span><a href="#"><img src="../assets/img/researchImg09.jpg" alt="img4"></a></li>
                            <li><span class="heart"><i class="far fa-heart"></i></span><a href="#"><img src="../assets/img/researchImg10.jpg" alt="img5"></a></li>
                        </ul>
                        <button class="btn_submit4">LOAD MORE</button>

  
                    </div>
                </div>
            </article>
        </section>
    </main>
    <!-- //contents -->
    <footer id="footer">
            <?php
            include "../include/mainFooter.php";
            ?>
        </footer>
    <!-- //footer -->

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/highlight.min.js"></script>
    <script>
    
    $(document).ready(function(){
        $(".heart").click(function(){
            if($(this).hasClass(".liked")){
                $(this).html('<i class="fa fa-heart-o"</i>');
                $(this).removeClass(".liked");

            } else {
                $(this).html('<i class="fa fa-heart"</i>');
                $(this).addClass(".liked");
            }
        });
    });

    // $(document).ready(function(){
    //     $(".heart").click(function(){
    //         if($(this).hasClass("liked")){
    //             $(this).html('<i class="fa fa-heart-o"</i>');
    //             $(this).removeClass("liked");

    //         } else {
    //             $(this).html('<i class="fa fa-heart"</i>');
    //             $(this).addClass("liked");
    //         }
    //     });
    // });

    // $(".ex2 div").click(function(){
    //     $(this).toggleClass("active");
    // });
    </script>
</body>
</html>