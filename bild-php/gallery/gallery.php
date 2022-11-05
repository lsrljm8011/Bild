
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
                <div class="gallery container2">
                    <div class="gallery top">
                        <h2>MY GALLERY</h2>
                        <img class="profileImg" src="../assets/img/profile.jpg" alt="profileImg">
                        <p>bild</p>
                    </div>
                    <div class="container main">
                        <div class="sliderVer2">
                            <div class="slides">
                                <div class="slide">
                                    <a href="gallery2.php"><img src="../assets/img/galleryImg1.jpg" alt="img1"></a>
                                </div>
                                <div class="slide">
                                    <img src="../assets/img/galleryImg2.jpg" alt="img2">
                                </div>
                                <div class="slide">
                                    <img src="../assets/img/galleryImg3.jpg" alt="img3">
                                </div>
                                <div class="slide">
                                    <img src="../assets/img/galleryImg4.jpg" alt="img4">
                                </div>
                                <div class="slide">
                                    <img src="../assets/img/galleryImg5.jpg" alt="img5">
                                </div>
                            </div>
                        </div>
                        <nav class="sliderSmall">
                            <ul>

                            </ul>
                        </nav>
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
        $(document).ready(function () {
        var image = $(".sliderVer2 img");

        image.each(function (i) {
            var container = $(".sliderSmall ul");
            var imageUrl = image[i].src;

            container.append(getimage(imageUrl));
        });

        $(".sliderSmall li img", this).click(function () {
            var nav = $(this);
            var url = nav.attr("src");

            image.attr("src", url);
        });

        function getimage(imageUrl) {
            return '<li><img src=" ' + imageUrl + ' " alt=""></li>';
        }
});

    </script>
</body>
</html>