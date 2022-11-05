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
    <div class="main">
        <section class="section content__item" id="cont1">
            <div class="container">
                <article class="cont-wrap">
                    <div class="img-wrap">
                        <div class="img-container1">
                            <div class="img-before1">
                                <img class="before1" src="../assets/img/mainwomen.png" alt="보정 전 이미지" />
                            </div>
                            <div class="img-after1">
                                <img class="after1" src="../assets/img/after-mainwomen@3x.png" alt="보정 후 이미지"/>
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
                        <p>R01로 편집됨</p>
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
                                <img class="before2" src="../assets/img/mainbuilding.jpg" alt="보정 전 이미지" />
                            </div>
                            <div class="img-after2">
                                <img class="after2" src="../assets/img/after-mainbuilding@3x.png" alt="보정 후 이미지"/>
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
                        <p>G01로 편집됨</p>
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
                        <p>Y01로 편집됨</p>
                        <button><a href="../edit/import.php">EDIT</a></button>
                    </div>
                    <div class="img-wrap">
                        <div class="img-container3">
                            <div class="img-before3">
                                <img class="before3" src="../assets/img/mainadventure.png" alt="보정 전 이미지" />
                            </div>
                            <div class="img-after3">
                                <img class="after3" src="../assets/img/after-mainadventure@3x.png" alt="보정 후 이미지"/>
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
                            <p>사진 보정 웹사이트 Bild는 사용자가 손쉽게 자주 쓰는 필터를 저장하고 공유하여 필요할 때 마다 꺼내쓸 수 있는 웹사이트입니다.
                            필터 레시피를 만들고 공유함으로써 자신만의 스타일을 뽐낼 수 있으며, 좋아요 및 댓글 기능을 제거한 나만의 공간입니다.
                            </p>
                            <div>
                                <span>B01로 편집됨</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box aboutus aboutus2">
                            <h1>Background</h1>
                            <p>sns 사용이 증가함에 따라 사진이나 생활을 공유하는 것을 즐기는 사람들이 증가하고 있습니다. 
                            하지만 복잡한 UI/UX와 어려운 보정법 때문에 보정을 하지 않거나 불편함을 감수하며 사진을 편집하는 사용자들이 많습니다.
                            </p>
                            <div>
                                <span>B01로 편집됨</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="box aboutus aboutus3">
                            <h1>About Goal</h1>
                            <p>사진 편집에 대한 '쉬운 접근성', '나의 비밀공간', '압력이 없는 자유로운 공간'을 만들고자하는 것이 저희 bild의 목표입니다.
                            </p>
                            <div>
                                <span>B01로 편집됨</span>
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
                         <img class="triangle" src="../assets/img/Triangle.png" alt="화살표아이콘">
                    </div>
                    <div class="desc-wrap">
                        <div class="Box qna">
                           <div class="qnaTitle">
                                <h2>Q&A</h2>
                                <a href="../board/baord.php"><img class="plus" src="../assets/img/plus.png" alt="plusbutton"></a>
                           </div>
                           <div class="BoardBox">
                                <a href='../board/boardView.php?boardID=103'><ul><li>포인트 적립 유효기간은 언제인가요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=100'><ul><li>같이 사진찍으러 갈사람~있나여</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=99'><ul><li>필터는 어떻게 적용하는거예요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=98'><ul><li>구글 연동 가능한가요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=97'><ul><li>회원가입은 어떻게 하는건가요?</li><li>2021.10.14</li></ul></a>
                           </div>
                        </div>
                        <div class="Box faq">
                            <div class="faqTitle">
                                <h2>COMMUNITY</h2>
                                <a href="../board/board.php"><img class="plus" src="../assets/img/plus.png" alt="plusbutton"></a>
                           </div>
                           <div class="BoardBox">
                                <a href='../board/boardView.php?boardID=103'><ul><li>집에 같이 가자~~~~</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=100'><ul><li>필터효과 나만 못하나봐</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=99'><ul><li>역시 유료가 좋은거 같아요.</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=98'><ul><li>구글 연동 가능한가요?</li><li>2021.10.14</li></ul></a>
                                <a href='../board/boardView.php?boardID=97'><ul><li>회원가입은 어떻게 하는건가요?</li><li>2021.10.14</li></ul></a>
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

            //이미지 컨테이너 너비 가져오기
            let containerSize = container1.offsetHeight;

            //막대를 사용하여 이전 이미지 너비 크기 수정
            after1.style.height = yPos + "px";
            slider1.style.top = yPos + "px";

            //슬라이더 막대가 이미지 가장자리에 가까우면 막대를 가장자리로
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

            //이미지 컨테이너 너비 가져오기
            let containerSize = container2.offsetHeight;

            //막대를 사용하여 이전 이미지 너비 크기 수정
            after2.style.height = yPos + "px";
            slider2.style.top = yPos + "px";

            //슬라이더 막대가 이미지 가장자리에 가까우면 막대를 가장자리로
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

            //이미지 컨테이너 너비 가져오기
            let containerSize = container3.offsetHeight;

            //막대를 사용하여 이전 이미지 너비 크기 수정
            after3.style.height = yPos + "px";
            slider3.style.top = yPos + "px";

            //슬라이더 막대가 이미지 가장자리에 가까우면 막대를 가장자리로
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

        //가로모드 제이쿼리
        // $(window).scroll(function(){
        //     let scrollTop = $(window).scrollTop();
        //     let goLeft = scrollTop - $("#cont4").offset().top;   //초기화

        //     if(scrollTop > $("#cont4").offset().top) {
        //         $(".sc3").css("left", -goLeft)
        //     }
        // })


        //가로모드 자바스크립트
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