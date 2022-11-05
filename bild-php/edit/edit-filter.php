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
    <style>
        .edit-img {
            display: inline-block;
        }
        .edit-img img {
            height: 60vh;
            position: absolute;
            left: 50%; top: 60%;
            transform: translate(-50%, -50%);
            margin-bottom: 50px;
        }
    </style>

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
            <div class="edit-top"></div>
            <div class="edit-container">
                <h2 class="ir_so">로그인 컨텐츠</h2>
                <article class="edit-article">
                <div class="edit-header">
                        <a href="javascript:history.back();" class="left"><img src="../assets/img/edit-header-left.jpg" alt="화살표"></a>
                        <a href="#" class="center"><img src="../assets/img/edit-header-center.jpg" alt="화살표"></a>
                        <nav role="navigation">
                            <ul id="main-menu">
                                <li><a href="#"><img src="../assets/img/edit-header-right.png" alt="화살표"></a>
                                    <ul id="sub-menu">
                                        <li><a href="#" aria-label="subemnu">내 pc에 저장</a></li>
                                        <!-- <li><a href="#" aria-label="subemnu">내 프로필에 저장</a></li>
                                        <li><a href="#" aria-label="subemnu">보정법 저장</a></li>
                                        <li><a href="#" aria-label="subemnu">삭제</a></li> -->
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
                            <!-- <li class="side-menu-item">
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
                            </li> -->
                        </ul>  
                    </div>

                    <!-- 아래 filter -->
                    <div class="child-page-listing">
                        <div class="grid-container">
                            <article id="B1" class="location-listing">
                                <a class="location-title" href="#">B1</a>
                                <div class="location-image">
                                    <a href="#"><img width="80" height="100" src="../assets/img/filter1.jpg" alt="san francisco"></a>
                                </div>
                            </article>

                            <article id="R1" class="location-listing">
                            <a class="location-title" href="#">R1</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter2.jpg" alt="london"></a>
                            </div>
                            </article>

                            <article id="Y1" class="location-listing">
                            <a class="location-title" href="#">Y1</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter3.jpg" alt="new york"></a>
                            </div>
                            </article>

                            <!-- <article id="3694" class="location-listing">
                            <a class="location-title" href="#">Y2</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter4.jpg" alt="cape town"></a>
                            </div>
                            </article>

                            <article id="3697" class="location-listing">
                            <a class="location-title" href="#">Y3</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter5.jpg" alt="beijing"></a>
                            </div>
                            </article>

                            <article id="3700" class="location-listing">
                            <a class="location-title" href="#">G1</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter6.jpg" alt="paris"></a>
                            </div>
                            </article>

                            <article id="3700" class="location-listing">
                            <a class="location-title" href="#">B1</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter7.jpg" alt="paris"></a>
                            </div>
                            </article>

                            <article id="3700" class="location-listing">
                            <a class="location-title" href="#">B2</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter7.jpg" alt="paris"></a>
                            </div>
                            </article>

                            <article id="3700" class="location-listing">
                            <a class="location-title" href="#">P1</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter8.jpg" alt="paris"></a>
                            </div>
                            </article>

                            <article id="3700" class="location-listing">
                            <a class="location-title" href="#">B0</a>
                            <div class="location-image">
                                <a href="#"><img width="80" height="100" src="../assets/img/filter9.jpg" alt="paris"></a>
                            </div>
                            </article> -->

                        </div>
                        <!-- end grid container -->
                    </div>
                </article>
                <?php
                    $sql = "SELECT * FROM myphoto ORDER BY image_id DESC limit 1"; 
                    // echo $id;
                    $sth = $connect -> query($sql); 
                    $result = $sth -> fetch_array(MYSQLI_ASSOC);

                    echo "<div class='edit-img'>";
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
                    echo "</div>"
                ?>
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

    </script>

</body>
</html>