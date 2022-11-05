<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE myphoto (";
    $sql .= "image_id tinyint(3) NOT NULL AUTO_INCREMENT,";
    $sql .= "image_type varchar(25) NOT NULL,";
    $sql .= "image longblob NOT NULL,";
    $sql .= "image_size varchar(255) NOT NULL,";
    $sql .= "image_name varchar(50) NOT NULL,";
    $sql .= "KEY image_id (image_id)";
    $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=utf8";

    $result = $connect -> query($sql);

    if($result){
        echo "Create Photo True";
    } else {
        echo "Create Photo false";
    }
?>