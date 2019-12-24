<?php
    include "conf.php";
    session_start();

    $usr = $_POST['adduser'];
    $pwd = $_POST['addpasswd'];

    $sql = "SELECT * FROM profile WHERE username = '$usr' and password = '$pwd'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);

    $_SESSION['username'] = $result['username'];
    
    if($result){    
        echo "ยินดีต้อนรับ คุณ ".$result['adduser']."<br>";
        echo "กรุณารอสักครู่...";
        header('refresh: 3; url=./index.php');

    }else{
        echo "Username หรือ Password ไม่ถูกต้อง<br>";
        echo "กรุณารอสักครู่...<br>เราจะกลับไปหน้า Login";
        header('refresh: 3; url=./login.html');

    }
?>