<?php
    include "conf.php";
    

   $user = $_SESSION['username'];

    $sql ="SELECT * FROM profile WHERE username = '$user'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>หน้าแรก</title>
</head>
<body>
    <div class="menu">
        <ul>
            <li>
                <a href="#">หน้าแรก</a>
            </li>
            <li>
                <a href="listprofile.php">ข้อมูลทั้งหมด</a>
            </li>
            <li>
                <a href="logout.php">ออกจากระบบ</a>
            </li>
        </ul>
    </div>
    <div class="main">
        <div class="card">
            <div class="front">
            <img src="images/<?php echo $result['photo']; ?>" alt="user">
            </div>
            <div class="back">
                FULLNAME: <?php echo $result['fullname'];  ?><br>
                USERNAME: <?php echo $result['username'];  ?><br>
                PROVINCE: <?php echo $result['province'];  ?><br>

            </div>
        </div>
    </div>
</body>
</html>
