<?php

    $server = "localhost";
    $user = "root";
    $password ="";
    $database = "student";

    $conn = mysqli_connect($server,$user,$password,$database);
    mysqli_set_charset($conn,"utf8");

    if(!$conn){
        echo "ไม่สามารถเชื่อมต่อได้";
    }

?>