<?php
    include "conf.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/add.css">
    <title>ประวัติส่วนตัว</title>
</head>
<body>
    <h2>สมัครสมาชิกชมรมนักศึกษา</h2>
    <form action="add_process.php" method="post">
    <table>
        <tr>
        <th>รหัสประจำตัวนักศึกษา</th>
        <td>
            <input type="text" name="idstd" id="add"> 
        </td>
    </tr>
    <tr>
        <th>รหัสผ่าน</th>
        <td>
            <input type="password" name="pass" id="add"> 
        </td>
    </tr>
    <tr>
        <th>ชื่อ-สกุล</th>
        <td>
        <input type="text" name="fname" id="add"> 
        </td>
    </tr>
    <tr>
        <th>สาขาวิชา</th>
        <td>
        <input type="text" name="dep" id="add"> 
        </td>
    </tr>
    <tr>
        <th>เกรดเฉลี่ย</th>
        <td>
        <input type="text" name="gpa" id="add"> 
        </td>
    </tr>
    <tr>
        <th>ครูที่ปรึกษา</th>
        <td>
        <input type="text" name="adv" id="add"> 
        </td>
    </tr>
    <tr>
        <th>สถานะ</th>
        <td>
        <input type="text" name="sta" id="add"> 
        </td>
    </tr>
    <tr>
        <td colspan="4">
         <button type="submit">
            สมัครใช้งาน
         </button>   
        </td>
    </tr>
</table>

</form>
</body>
</html>