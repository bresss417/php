<?php

$d = date('w');
switch ($d) {
 case '1':
       echo "<body bgcolor='yellow'>";
        break;
 case '2':
    echo "<body bgcolor='red'>";
        break;   
 case '3':
        echo "<body bgcolor='orange'>";
 case '4':
    echo "<body bgcolor='pink'>";
        break;
 case '5':
        echo "<body bgcolor='purple'>";
        break;
 case '6':
     echo "<body bgcolor='yellow'>";
        break;

    default:
    echo "<body bgcolor='red'>";
        break;
}



#คำสั่งเปลี่ยนสีตามวัน ในเว็บสีพืันหลัง
?>