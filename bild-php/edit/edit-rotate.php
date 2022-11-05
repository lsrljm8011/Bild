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
    <title>filter</title>

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
        <section id="editCont">
            <div class="edit-container">
                <h2 class="ir_so">로그인 컨텐츠</h2>
                <article class="edit-article">
                    <div class="edit-header">
                        <a href="#" class="left"><img src="../assets/img/edit-header-left.jpg" alt="화살표"></a>
                        <a href="#" class="center"><img src="../assets/img/edit-header-center.jpg" alt="화살표"></a>
                        <nav role="navigation">
                            <ul id="main-menu">
                                <li><a href="#"><img src="../assets/img/edit-header-right.png" alt="화살표"></a>
                                    <ul id="sub-menu">
                                        <li><a href="#" aria-label="subemnu">내 pc에 저장</a></li>
                                        <li><a href="#" aria-label="subemnu">내 프로필에 저장</a></li>
                                        <li><a href="#" aria-label="subemnu">보정법 저장</a></li>
                                        <li><a href="#" aria-label="subemnu">삭제</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- 왼쪽 사이드 메뉴 -->
                    <div class="sideMenu">
                        <ul class="side-menu">
                            <li class="side-menu-item">
                                <a href="../edit/edit-filter.php">
                                    <i class="fa fa-envelope"></i>
                                    <span><img src="../assets/img/edit-menu1.jpg" onmouseover="this.src='../assets/img/edit-menu1-hover.jpg'" onmouseout="this.src='../assets/img/edit-menu1.jpg'"  alt="메뉴"><span class="name">filter</span></span>
                                </a> 
                            </li>
                            <li class="side-menu-item">
                                <a href="../edit/edit-rotate.php">
                                    <i class="fa fa-file-text"></i>
                                    <span><img src="../assets/img/edit-menu2.jpg" onmouseover="this.src='../assets/img/edit-menu2-hover.jpg'" onmouseout="this.src='../assets/img/edit-menu2.jpg'" alt="메뉴"><span class="name">adjust</span></span>
                                </a>
                                <ul class="side-menu-sub">
                                    <li>
                                        <a>
                                            <img src="../assets/img/side1.jpg" onmouseover="this.src='../assets/img/side1-hover.jpg'" onmouseout="this.src='../assets/img/side1.jpg'" alt="메뉴">
                                            <img src="../assets/img/side2.jpg" onmouseover="this.src='../assets/img/side2-hover.jpg'" onmouseout="this.src='../assets/img/side2.jpg'" alt="메뉴">
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <img src="../assets/img/side3.jpg" onmouseover="this.src='../assets/img/side3-hover.jpg'" onmouseout="this.src='../assets/img/side3.jpg'" alt="메뉴">
                                            <img src="../assets/img/side4.jpg" onmouseover="this.src='../assets/img/side4-hover.jpg'" onmouseout="this.src='../assets/img/side4.jpg'" alt="메뉴">
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <img src="../assets/img/side5.jpg" onmouseover="this.src='../assets/img/side5-hover.jpg'" onmouseout="this.src='../assets/img/side5.jpg'" alt="메뉴">
                                            <img src="../assets/img/side6.jpg" onmouseover="this.src='../assets/img/side6-hover.jpg'" onmouseout="this.src='../assets/img/side6.jpg'" alt="메뉴">
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <img src="../assets/img/side7.jpg" onmouseover="this.src='../assets/img/side7-hover.jpg'" onmouseout="this.src='../assets/img/side7.jpg'" alt="메뉴">
                                            <img src="../assets/img/side8.jpg" onmouseover="this.src='../assets/img/side8-hover.jpg'" onmouseout="this.src='../assets/img/side8.jpg'" alt="메뉴">
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <img src="../assets/img/side9.jpg" onmouseover="this.src='../assets/img/side9-hover.jpg'" onmouseout="this.src='../assets/img/side9.jpg'" alt="메뉴">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="side-menu-item">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span><img src="../assets/img/edit-menu3.jpg" onmouseover="this.src='../assets/img/edit-menu3-hover.jpg'" onmouseout="this.src='../assets/img/edit-menu3.jpg'" alt="메뉴"><span class="name">reset</span></span>
                                </a> 
                            </li>
                            <li class="side-menu-item">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span><img src="../assets/img/edit-menu4.jpg" onmouseover="this.src='../assets/img/edit-menu4-hover.jpg'" onmouseout="this.src='../assets/img/edit-menu4.jpg'" alt="메뉴"><span class="name">save</span></span>
                                </a>
                            <ul class="side-menu-sub">
                                <div class="sub-wrap">
                                    <li><a>나의 레시피</a></li>
                                    <li><a>다른 사용자의 레시피</a></li>
                                </div>
                            </ul>  
                            </li>
                        </ul>  
                    </div>

                    <!-- 아래 circleVar -->
                    <div class="range-slider">
                        <div class="edit-move">
                            <a href="#"><img src="../assets/img/edit-move1.jpg" alt="이미지조정아이콘"></a>
                            <a href="#"><img src="../assets/img/edit-move2.jpg" alt="이미지조정아이콘"></a>
                            <a href="#"><img src="../assets/img/edit-move3.jpg" alt="이미지조정아이콘"></a>
                        </div>
                        <input class="range-slider__range" type="range" value="0" min="-100" max="100">
                        <span class="range-slider__value">0</span>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <!-- //contents -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/highlight.min.js"></script>
    <script>
        var rangeSlider = function(){
            var slider = $('.range-slider'),
                range = $('.range-slider__range'),
                value = $('.range-slider__value');
                
            slider.each(function(){
                value.each(function(){
                    var value = $(this).prev().attr('value');
                    $(this).html(value);
                });

                range.on('input', function(){
                    $(this).next(value).html(this.value);
                });
            });
        };

        rangeSlider();
    </script>

</body>
</html>