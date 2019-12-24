<?php

    //echo $_POST['user'];
    //echo <br>
    //echo $_POST['pass'];

    $usr = $_POST['user'];
    $pwd = $_POST['pass'];

        include "conf.php";
        //require "conf.php";
        //require_once "conf.php";

$sql = "SELECT * FROM std WHERE idstd='$usr' and passwd='$pwd'";
$query = mysqli_query($conn,$sql);
$result =  mysqli_fetch_array($query);

if ($result) {
   echo "Username และ Password ถูกต้อง<br>";
   echo "กรุณารอสักครู่...";
} else {
echo "Username หรือ password ไม่ถูกต้อง<br>";
echo "กรุณารอสักครู่...เพื่อกลับไปหน้า Login";
}


?>