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
    <title>Bild</title>
    <!--style-->
    <link rel="stylesheet" href="../assets/css/font.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        /* img-containe1 */
        .img-container1 {
            position: relative;
            top: 100px;
            width: 450px;
            height: 650px;
        }

        .img-after1,
        .img-before1 {
            position: absolute;
            width: 450px;
            height: 650px;
        }

        .img-after1 {
            overflow: hidden;
        }

        .img-container1 img {
            width: 450px;
            height: 650px;
            object-fit: cover;
        }

        .slider1 {
            width: 450px; height: 0.2rem;
            background-color: white;
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(0%, -50%);
            pointer-events: none;
        }
        .slider1 div {
            width: 30px; height: 30px;
            border-radius: 50%;
            background: #fff;
            z-index: 1000;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -50%);
        }
        .slider1 span {
            white-space: nowrap;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -200%);
            color: #fff;
            font-size: 20px;
            animation: blink-effect 1s step-end infinite;
        }
        @keyframes blink-effect { 50% { opacity: 0; } }

        /* img-containe2 */
        .img-container2 {
            position: relative;
            width: 450px;
            height: 650px;
        }

        .img-after2,
        .img-before2 {
            position: absolute;
            width: 450px;
            height: 650px;
        }

        .img-after2 {
            overflow: hidden;
        }

        .img-container2 img {
            width: 450px;
            height: 650px;
        }

        .slider2 {
            width: 450px; height: 0.2rem;
            background-color: white;
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(0%, -50%);
            pointer-events: none;
        }
        .slider2 div {
            width: 30px; height: 30px;
            border-radius: 50%;
            background: #fff;
            z-index: 1000;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -50%);
        }
        .slider2 span {
            white-space: nowrap;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -200%);
            color: #fff;
            font-size: 20px;
            animation: blink-effect 1s step-end infinite;
        }
        @keyframes blink-effect { 50% { opacity: 0; } }

        /* img-containe3 */
        .img-container3 {
            position: relative;
            width: 450px;
            height: 650px;
        }

        .img-after3,
        .img-before3 {
            position: absolute;
            width: 450px;
            height: 650px;
        }

        .img-after3 {
            overflow: hidden;
        }

        .img-container3 img {
            width: 450px;
            height: 650px;
            object-fit: cover;
        }

        .slider3 {
            width: 450px; height: 0.2rem;
            background-color: white;
            z-index: 1;
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(0%, -50%);
            pointer-events: none;
        }
        .slider3 div {
            width: 30px; height: 30px;
            border-radius: 50%;
            background: #fff;
            z-index: 1000;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -50%);
        }
        .slider3 span {
            white-space: nowrap;
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -200%);
            color: #fff;
            font-size: 20px;
            animation: blink-effect 1s step-end infinite;
        }
        @keyframes blink-effect { 50% { opacity: 0; } }

        /* cont4 */
        .section.content__item {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        #cont1 {z-index: 9000;}
        #cont2 {z-index: 8000;}
        #cont3 {z-index: 7000;}
        #cont4 {z-index: 6000; height: 260vw;}
        #cont5 {z-index: 6100;}
        #cont6 {z-index: 6200;}
        
        .sc3 {
            position: fixed;
            left: 0; top: 0;
            z-index: 1000;
            width: 300vw;
            height: 110vw;
            overflow: hidden;
        }
        .sc3 > div {
            float: left;
            width: 100vw;
            height: 110vw;
        }
        .sc3 > div:nth-child(1) {
            background-image: url(../assets/img/bg4-1.png); 
            /* background-size: 100%; */
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        .sc3 > div:nth-child(2) {
            background-image: url(../assets/img/bg4-2.png); 
            /* background-size: 100%; */
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
        .sc3 > div:nth-child(3) {
            background-image: url(../assets/img/bg4-3.png); 
            /* background-size: 100%; */
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div id="skip">
        <a href="#contents">????????? ????????????</a>
        <a href="#footer">?????? ????????????</a>
    </div>
    <!--//skip-->
    <header id="header">
        <?php
          include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    <!-- main -->
    <div class="main">
        <section class="section content__item" id="cont1">
            <div class="container">
                <article class="cont-wrap">
                    <div class="img-wrap">
                        <div class="img-container1">
                            <div class="img-before1">
                                <img class="before1" src="../assets/img/mainwomen.png" alt="?????? ??? ?????????" />
                            </div>
                            <div class="img-after1">
                                <img class="after1" src="../assets/img/after-mainwomen@3x.png" alt="?????? ??? ?????????"/>
                            </div>
                            <div class="slider1">
                                <div>
                                    <span>mouse hover!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <h2>Want to get <br> &nbsp; &nbsp; &nbsp;better pictures?</h2>
                        <p>R01??? ?????????</p>
                        <button><a href="../edit/import.php">EDIT</a></button>
                    </div>
                </article>
            </div>
        </section>
        <section class="section content__item" id="cont2">
            <div class="container">
                <article class="cont-wrap">
                    <div class="img-wrap">
                        <div class="img-container2">
                            <div class="img-before2">
                                <img class="before2" src="../assets/img/mainbuilding.jpg" alt="?????? ??? ?????????" />
                            </div>
                            <div class="img-after2">
                                <img class="after2" src="../assets/img/after-mainbuilding@3x.png" alt="?????? ??? ?????????"/>
                            </div>
                            <div class="slider2">
                                <div>
                                    <span>mouse hover!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc-wrap">
                        <h2>More Creative,<br>More Fun!</h2>
                        <p>G01??? ?????????</p>
                        <button><a href="../edit/import.php">EDIT</a></button>
                    </div>
                </article>
            </div>
        </section>
        <section class="section content__item" id="cont3">
            <div class="container">
                 <article class="cont-wrap">
                    <div class="desc-wrap">
                        <h2>Make it with Bild.</h2>
                        <p>Y01??? ?????????</p>
                        <button><a href="../edit/import.php">EDIT</a></button>
                    </div>
                    <div class="img-wrap">
                        <div class="img-container3">
                            <div class="img-before3">
                                <img class="before3" src="../assets/img/mainadventure.png" alt="?????? ??? ?????????" />
                            </div>
                            <div class="img-after3">
                                <img class="after3" src="../assets/img/after-mainadventure@3x.png" alt="?????? ??? ?????????"/>
                            </div>
                            <div class="slider3">
                                <div>
                                    <span>mouse hover!</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="section content__item" id="cont4">
            <div class="container">

                <div class="sc3">
                    <div>
                        <div class="box aboutus aboutus1">
                            <h1>overview</h1>
                            <p>?????? ?????? ???????????? Bild??? ???????????? ????????? ?????? ?????? ????????? ???????????? ???????????? ????????? ??? ?????? ????????? ??? ?????? ?????????????????????.
                            ?????? ???????????? ????????? ?????????????????? ???????????? ???????????? ?????? ??? ?????????, ????????? ??? ?????? ????????? ????????? ????????? ???????????????.
                            </p>
                            <div>
                                <span>B01??? ?????????</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box aboutus aboutus2">
                            <h1>Background</h1>
                            <p>sns ????????? ???????????? ?????? ???????????? ????????? ???????????? ?????? ????????? ???????????? ???????????? ????????????. 
                            ????????? ????????? UI/UX??? ????????? ????????? ????????? ????????? ?????? ????????? ???????????? ???????????? ????????? ???????????? ??????????????? ????????????.
                            </p>
                            <div>
                                <span>B01??? ?????????</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box aboutus aboutus3">
                            <h1>About Goal</h1>
                            <p>?????? ????????? ?????? '?????? ?????????', '?????? ????????????', '????????? ?????? ???????????? ??????'??? ?????????????????? ?????? ?????? bild??? ???????????????.
                            </p>
                            <div>
                                <span>B01??? ?????????</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section content__item" id="cont5">
            <div class="cont5Box">
                <div class="container">
                    <article class="cont-wrap">
                        <div class="desc-wrap">
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="section content__item" id="cont6">
            <div class="container">
                 <article class="cont-wrap">
                     <div class="icon-inner">
                         <img class="triangle" src="../assets/img/Triangle.png" alt="??????????????????">
                    </div>
                    <div class="desc-wrap">
                        <div class="Box qna">
                           <div class="qnaTitle">
                                <h2>Q&A</h2>
                                <a href="../board/baord.php"><img class="plus" src="../assets/img/plus.png" alt="plusbutton"></a>
                           </div>
                           <div class="BoardBox">
                                <a href='../board/boardView.php?boardID=103'><ul><li>????????? ?????? ??????????????? ????????????????</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=100'><ul><li>?????? ??????????????? ?????????~?????????</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=99'><ul><li>????????? ????????? ??????????????????????</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=98'><ul><li>?????? ?????? ????????????????</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=97'><ul><li>??????????????? ????????? ????????????????</li><li>2021.10.14</li></ul></a>
                           </div>
                        </div>
                        <div class="Box faq">
                            <div class="faqTitle">
                                <h2>COMMUNITY</h2>
                                <a href="../board/board.php"><img class="plus" src="../assets/img/plus.png" alt="plusbutton"></a>
                           </div>
                           <div class="BoardBox">
                                <a href='../board/boardView.php?boardID=103'><ul><li>?????? ?????? ??????~~~~</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=100'><ul><li>???????????? ?????? ????????????</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=99'><ul><li>?????? ????????? ????????? ?????????.</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=98'><ul><li>?????? ?????? ????????????????</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=97'><ul><li>??????????????? ????????? ????????????????</li><li>2021.10.14</li></ul></a>
                           </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <!-- //main -->
    <!-- footer -->
    <footer id="footer">
        <?php
            include "../include/mainFooter.php";
        ?>
    </footer>
    <!-- //footer -->
    
    <script>
        // img-container1
        const slider1 = document.querySelector(".slider1");
        const before1 = document.querySelector(".img-before1");
        const after1 = document.querySelector(".img-after1");
        const container1 = document.querySelector(".img-container1");

        function dragmyImage1(e) {
            let yPos = e.layerY;

            //????????? ???????????? ?????? ????????????
            let containerSize = container1.offsetHeight;

            //????????? ???????????? ?????? ????????? ?????? ?????? ??????
            after1.style.height = yPos + "px";
            slider1.style.top = yPos + "px";

            //???????????? ????????? ????????? ??????????????? ???????????? ????????? ???????????????
            if (yPos < 20) {
                after1.style.height = 0;
                slider1.style.top = 0;
            }
            if (yPos + 20 > containerSize) {
                after1.style.height = containerSize + "px";
                slider1.style.top = containerSize + "px";
            }
        }

        container1.addEventListener("mousemove", dragmyImage1);

        // img-container2
        const slider2 = document.querySelector(".slider2");
        const before2 = document.querySelector(".img-before2");
        const after2 = document.querySelector(".img-after2");
        const container2 = document.querySelector(".img-container2");

        function dragmyImage2(e) {
            let yPos = e.layerY;

            //????????? ???????????? ?????? ????????????
            let containerSize = container2.offsetHeight;

            //????????? ???????????? ?????? ????????? ?????? ?????? ??????
            after2.style.height = yPos + "px";
            slider2.style.top = yPos + "px";

            //???????????? ????????? ????????? ??????????????? ???????????? ????????? ???????????????
            if (yPos < 20) {
                after2.style.height = 0;
                slider2.style.top = 0;
            }
            if (yPos + 20 > containerSize) {
                after2.style.height = containerSize + "px";
                slider2.style.top = containerSize + "px";
            }
        }

        container2.addEventListener("mousemove", dragmyImage2);

        // img-container3
        const slider3 = document.querySelector(".slider3");
        const before3 = document.querySelector(".img-before3");
        const after3 = document.querySelector(".img-after3");
        const container3 = document.querySelector(".img-container3");

        function dragmyImage3(e) {
            let yPos = e.layerY;

            //????????? ???????????? ?????? ????????????
            let containerSize = container3.offsetHeight;

            //????????? ???????????? ?????? ????????? ?????? ?????? ??????
            after3.style.height = yPos + "px";
            slider3.style.top = yPos + "px";

            //???????????? ????????? ????????? ??????????????? ???????????? ????????? ???????????????
            if (yPos < 20) {
                after3.style.height = 0;
                slider3.style.top = 0;
            }
            if (yPos + 20 > containerSize) {
                after3.style.height = containerSize + "px";
                slider3.style.top = containerSize + "px";
            }
        }

        container3.addEventListener("mousemove", dragmyImage3);

        //???????????? ????????????
        // $(window).scroll(function(){
        //     let scrollTop = $(window).scrollTop();
        //     let goLeft = scrollTop - $("#cont4").offset().top;   //?????????

        //     if(scrollTop > $("#cont4").offset().top) {
        //         $(".sc3").css("left", -goLeft)
        //     }
        // })


        //???????????? ??????????????????
        let scrollTotalWidth = 
        window.addEventListener("scroll", function(){
            let scrollTop = document.documentElement.scrollTop || window.scrollY || window.pageYOffset;
            let goLeft = scrollTop - document.querySelector("#cont4").offsetTop;

            if(scrollTop > document.querySelector("#cont4").offsetTop) {
                document.querySelector(".sc3").style.left = -goLeft + "px";
            }
        })
    </script>
</body>
</html>