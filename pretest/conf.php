<?php
$s = "localhost";
$u = "hostell";
$p = "123123";
$d = "userlogin";

$conn = mysqli_connect($s,$u,$p,$d);
mysqli_set_charset($conn,"utf8");

if(!$conn){
    echo "ไม่สามารถเชื่อมต่อได้!!";
}

?>
