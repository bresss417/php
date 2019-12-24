<?php
 session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>เข้าระบบ</title>
</head>
<body>
    <div class="loginbox">
        <img src="images/logo.png" alt="login" class="avatar">
        <h1>เข้าสู่ระบบ</h1>
        <form action="chklogin.php" method="post">
            <p>Username</p>
            <input type="text" name="usr" placeholder="Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Password">
            <input type="submit" value="ลงชื่อใช้งาน"><br>
            <a href="#">ลืมรหัสผ่าน</a><br>
            <a href="addprofile.php">ลงทะเบียนสมัคร</a>
        </form>
    </div>
</body>
</html>
