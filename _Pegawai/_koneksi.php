<?php
    $namahost = "127.0.0.1";
    $user = "root";
    $password = "";
    $database = "pabrik";
    $conn = mysqli_connect($namahost, $user, $password, $database);
    if(!$conn) {
        echo "database tidak terhubung";
    }
?>