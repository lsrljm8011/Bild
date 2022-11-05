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
    <title>Image Filter Edit</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
    #canvas {
        background: #F6F1EB;
        height: 50vh;
        border-radius: 5px;
        position: absolute;
        left: 50%; top: 55%;
        transform: translate(-50%, -50%);
    }
    .edit_box {
        position: absolute;
        left: 50%; top: 25%;
        transform: translate(-50%, -50%);
    }
    .bottom_menu {
        margin-top: 65vh;
        display: flex;
        justify-content: center;
    }
    .filter-btn {
        margin-left: 10px;
        margin-bottom: 100px;
    }
    .filter_1 {
        background: url("../assets/img/filter1.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_2 {
        background: url("../assets/img/filter2.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_3 {
        background: url("../assets/img/filter3.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_4 {
        background: url("../assets/img/filter4.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_5 {
        background: url("../assets/img/filter5.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_6 {
        background: url("../assets/img/filter6.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_7 {
        background: url("../assets/img/filter7.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .filter_8 {
        background: url("../assets/img/filter8.jpg") no-repeat;
        width: 100px; height: 120px;
    }
    .btn:hover {
        transition: all 0.3s;
        transform: scale(1.1);
    }
    .edit_box input[type="file"] {
        position: absolute;
        width: 0;
        height: 0;
        padding: 0;
        overflow: hidden;
        border: 0;
    }
    .edit_box label {
        text-align: center;
        height: 35px; width: 35px;
        display: inline-block;
        color: #999;
        vertical-align: middle;
        background-color: #fdfdfd;
        cursor: pointer;
        border: 1px solid #ebebeb;
        border-radius: 50%;
    }
    .edit_box label:hover {
        transition: all 0.3s;
        transform: scale(1.05);
    }
    .edit_box label img {
        margin-top: 6px;
    }
    /* named upload */
    .edit_box .upload-name {
        display: inline-block;
        height: 35px;
        font-size:15px; 
        padding: 0 10px;
        vertical-align: middle;
        background-color: #f5f5f5;
        border: 1px solid #ebebeb;
        border-radius: 5px;
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
            <div class="edit-container">
                <article class="edit-article">
                    <div class="edit-header">
                        <!-- 뒤로가기 -->
                        <a href="javascript:history.back();" class="left btn">
                            <img src="../assets/img/edit-header-left.jpg" alt="화살표">
                        </a>

                        <!-- 편집 전 -->
                        <nav role="navigation">
                            <ul id="main-menu">
                                <li>
                                    <a href="#" id="revert-btn" class="center btn btn-danger btn-block">
                                        <img src="../assets/img/edit-header-center.png" alt="bef">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        
                        <!-- 다운로드 -->
                        <nav role="navigation">
                            <ul id="main-menu">
                                <li>
                                    <a href="#" id="download-btn" class="btn btn-primary btn-block">
                                        <img src="../assets/img/edit-header-right.png" alt="down">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <!-- 사진 불러오기 -->
                    <div class="edit_box">
                        <input type="file" class="custome-file-input" id="upload-file">
                        <label for="upload-file" class="custom-file-label"><img src="../assets/img/upload.png" alt="upload"></label>
                        <input class="upload-name" value="file upload">
                    </div>

                    <canvas id="canvas"></canvas>
    
                    <!-- 필터 -->
                    <div class="bottom_menu">
                        <button class="filter_1 filter-btn vintage-add btn btn-dark btn-block">Vintage</button>
                        <button class="filter_2 filter-btn lomo-add btn btn-dark btn-block">Lomo</button>
                        <button class="filter_3 filter-btn clarity-add btn btn-dark btn-block">Clarity</button>
                        <button class="filter_4 filter-btn hermajesty-add btn btn-dark btn-block">Sin City</button>
                        <button class="filter_5 filter-btn crossprocess-add btn btn-dark btn-block">Crossprocess</button>
                        <button class="filter_6 filter-btn pinhole-add btn btn-dark btn-block">Pin Hole</button>
                        <button class="filter_7 filter-btn nostalgia-add btn btn-dark btn-block">Nostalgia</button>
                        <button class="filter_8 filter-btn hermajesty-add btn btn-dark btn-block">Her Majesty</button>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <!-- 스크립트 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js"></script>
    <script src="main.js"></script>
    <script>
    
    //파일경로 보여주기
    $(document).ready(function(){ 
        var fileTarget = $('#upload-file'); 
        fileTarget.on('change', function(){ // 값이 변경되면
            var cur=$(".edit_box input[type='file']").val();
            $(".upload-name").val(cur);
        }); 
    }); 
    
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    let img = new Image();
    let filename = '';

    const downloadBtn = document.getElementById('download-btn');
    const uploadFile = document.getElementById('upload-file');
    const revertBtn = document.getElementById('revert-btn');

    //필터

    document.addEventListener('click',(e)=>{
        if(e.target.classList.contains('filter-btn')){

            if (e.target.classList.contains("brightness-add")) {
                Caman("#canvas", img, function() {
                this.brightness(5).render();
                });
            } else if (e.target.classList.contains("brightness-remove")) {
                Caman("#canvas", img, function() {
                this.brightness(-5).render();
                });
            } else if (e.target.classList.contains("contrast-add")) {
                Caman("#canvas", img, function() {
                this.contrast(5).render();
                });
            } else if (e.target.classList.contains("contrast-remove")) {
                Caman("#canvas", img, function() {
                this.contrast(-5).render();
                });
            } else if (e.target.classList.contains("saturation-add")) {
                Caman("#canvas", img, function() {
                this.saturation(5).render();
                });
            } else if (e.target.classList.contains("saturation-remove")) {
                Caman("#canvas", img, function() {
                this.saturation(-5).render();
                });
            } else if (e.target.classList.contains("vibrance-add")) {
                Caman("#canvas", img, function() {
                this.vibrance(5).render();
                });
            } else if (e.target.classList.contains("vibrance-remove")) {
                Caman("#canvas", img, function() {
                this.vibrance(-5).render();
                });
            } else if (e.target.classList.contains("vintage-add")) {
                Caman("#canvas", img, function() {
                this.vintage().render();
                });
            } else if (e.target.classList.contains("lomo-add")) {
                Caman("#canvas", img, function() {
                this.lomo().render();
                });
            } else if (e.target.classList.contains("clarity-add")) {
                Caman("#canvas", img, function() {
                this.clarity().render();
                });
            } else if (e.target.classList.contains("sincity-add")) {
                Caman("#canvas", img, function() {
                this.sinCity().render();
                });
            } else if (e.target.classList.contains("crossprocess-add")) {
                Caman("#canvas", img, function() {
                this.crossProcess().render();
                });
            } else if (e.target.classList.contains("pinhole-add")) {
                Caman("#canvas", img, function() {
                this.pinhole().render();
                });
            } else if (e.target.classList.contains("nostalgia-add")) {
                Caman("#canvas", img, function() {
                this.nostalgia().render();
                });
            } else if (e.target.classList.contains("hermajesty-add")) {
                Caman("#canvas", img, function() {
                this.herMajesty().render();
                });
            }
        }
    });

    //Revert Filters
    revertBtn.addEventListener('click', (e)=>{
        Caman('#canvas', img, function(){
            this.revert();
        });
    });

    //Upload File
    uploadFile.addEventListener('change', (e) => {
        const file = document.getElementById('upload-file').files[0];

        //Init File Reader
        const reader = new FileReader();

        if(file) {
            filename = file.name;
            //Read data as URL
            reader.readAsDataURL(file);
        }

        reader.addEventListener('load', () => {
            img = new Image();
            img.src = reader.result;
            //On Image load, add to canvas
            img.onload = function() {
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0,0, img.width, img.height);
                canvas.removeAttribute('data-caman-id');
            };
        },false);

    }); 

    //Download Event

    downloadBtn.addEventListener('click', (e) => {
        //Get File Ext
        const fileExtension = filename.slice(-4);
        //Init new filename
        let newFileName;

        //Check image type
        if(fileExtension === '.jpg' || fileExtension === '.png'){
            newFileName = filename.substring(00, filename.length - 4) + '-edited.jpg';
        }

        download(canvas, newFileName);
    });

    function download( canvas, filename){
        //Init Event
        let e;
        //Create link

        const link = document.createElement('a');
        //Set Prop
    // Set props
    link.download = filename;
    link.href = canvas.toDataURL("image/jpeg", 0.8);
    // New mouse event
    e = new MouseEvent("click");
    // Dispatch event
    link.dispatchEvent(e);

    }
    </script>
</body>
</html>