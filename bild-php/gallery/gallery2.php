
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
                <div class="gallery container3">
                    <div class="gallery top">
                        <h2>MY GALLERY</h2>
                        <img class="profileImg" src="../assets/img/profile.jpg" alt="profileImg">
                        <p>bild</p>
                    </div>
                <div class="slider-wrap">
                    <div class="slider-img">
                        <div class="slider-inner">
                            <div class="slider">
                                <img src="../assets/img/gallery2main.jpg" alt="이미지1">
                                <h2>last summer</h2>
                                <p>#summer #vacation #daily #Italy</p>
                                <p>2021.07.14 03:20 PM</p>
                                <strong> 이탈리아 여행때 찍은 바닷가 사진입니다.</strong>
                           </div>
                            <div class="slider">
                                <img src="../assets/img/gallery2main02.jpg" alt="이미지2">
                                <h2>last summer2</h2>
                                <p>#swimming #vacation #floating #Italy</p>
                                <p>2021.07.16 01:29 PM</p>
                                <strong> floating in ocean.</strong>
                            </div>
                            <div class="slider">
                                <img src="../assets/img/gallery2main03.jpg" alt="이미지3">
                                <h2>Vitage feeling door</h2>
                                <p>#door #company #onthestreet #building</p>
                                <p>2021.08.14 11:20 AM</p>
                                <strong> 길 걷다가 우연히 찍어봤어요~!</strong></div>
                            <div class="slider">
                                <img src="../assets/img/gallery2main04.jpg" alt="이미지4">
                                <h2>Twin flowers</h2>
                                <p>#park #couple #flower #red</p>
                                <p>2021.08.20 01:20 PM</p>
                                <strong> 나른한 오후에 공원에서 </strong>
                            </div>
                            <div class="slider">
                                <img src="../assets/img/gallery2main05.jpg" alt="이미지5">
                                <h2>old car</h2>
                                <p>#old #car #vintage #yellow</p>
                                <p>2021.08.24 04:21 PM</p>
                                <strong> 길가다가 한번 찰칵</strong>
                            </div>
                        </div>
                    </div>
                    <div class="slider-btn">
                            <a href="#" class="prev">&lt;</a>
                            <a href="#" class="next">&gt;</a>
                    </div>
                </div>
                    <button class="btn_submit3"><a href="../edit/import.php">EDIT</a></button>
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
        const sliderWrap = $(".slider-wrap");
        const sliderImg = $(".slider-img");
        const sliderInner = $(".slider-inner");
        const slider = $(".slider");
        const sliderBtn = $(".slider-btn");

        let sliderWidth = slider.width();
        let sliderCount = slider.length;
        
        sliderInner.css({marginLeft: -sliderWidth});
        $(".slider:last-child").prependTo(sliderInner);

        function movePrev(){
            sliderInner.animate({left :sliderWidth},400, function(){
                $(".slider:last-child").prependTo(sliderInner);
                sliderInner.css("left","")   // 초기화 800이동마다
            });    //move img ->뒤에 있는것을 앞으로
        }
        
        function moveNext() {
            sliderInner.animate({left:-sliderWidth},400, function(){
                $(".slider:first-child").appendTo(sliderInner);
                sliderInner.css("left","")   // 초기화 800이동마다
            });  //move img ->앞에 있는것을 뒤로
        }

        sliderBtn.find(".prev").click(function(){
            //왼쪽버튼 클릭
            movePrev();
        });
        
        sliderBtn.find(".next").click(function(){
            //오른쪽버튼 클릭
            moveNext();
        });
    </script>
</body>
</html>