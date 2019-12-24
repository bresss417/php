<?php
    session_start();
    session_destroy();
    echo "กรุณาสักครู่...<br>เราจะกลับไปหน้า Login";
    header('refresh: 2; url=./login.html');
?>
