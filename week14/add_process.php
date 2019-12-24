<?php

    include "conf.php";
    
    $i = $_POST['idstd'];
    $p = $_POST['pass'];
    $f = $_POST['fname'];
    $d = $_POST['dep'];
    $g = $_POST['gpa'];
    $a = $_POST['adv'];
    $s = $_POST['sta'];

    $sql = "INSERT INTO std VALUES('','$i','$p','$f','$d','$g','$a','$s')";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "สมัครสมาชิกเรียบร้อยแล้ว<br>";
        echo "รอสักครู่...<br>";
        header('refresh: 3; url=./profile.php');
    }else{
        echo "ไม่สามารถสมัครสมาชิกได้<br>";
        echo "รอสักครู่...กลับไปหน้าแรก<br>";
        header('refresh: 3; url=./profile.php');

    }
?>