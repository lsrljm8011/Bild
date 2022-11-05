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
    <title>import photos</title>

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
            <h2 class="ir_so">로그인 컨텐츠</h2>
            <article class="content-article">
                <form enctype="multipart/form-data" action="uploadImage.php" method="post">
                    <div class="edit-circle">
                        <li class="img">
                            <div id="image_preview">
                                <img src="/img.png" alt="" style="height:40vw;">
                            </div>
                            <div class="f_box">
                                <label for="img" class="ir_so">사진첨부</label>
                                <input type="file" id="img" name="userfile">
                            </div>
                        </li>
                    </div>
                    <div class="importBtn mt100">
                            <button class="btn_submit3" type="submit" value="시작하기">start</button>
                    </div>
                </form>
            </article>
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
        // 이미지 업로드
        $('#img').on('change', function() {
            ext = $(this).val().split('.').pop().toLowerCase(); //확장자
            
            //배열에 추출한 확장자가 존재하는지 체크
            if($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                resetFormElement($(this)); //폼 초기화
                window.alert('이미지 파일이 아닙니다! (gif, png, jpg, jpeg 만 업로드 가능)');
            } else {
                file = $('#img').prop("files")[0];
                blobURL = window.URL.createObjectURL(file);

                $('#image_preview img').attr('src', blobURL);
                $('#image_preview').slideDown(); //업로드한 이미지 미리보기 
                $(this).slideUp(); //파일 양식 감춤
            }
        });
    </script>
</body>
</html>