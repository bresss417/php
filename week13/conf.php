<?php

    $server ="localhost";    //hostname OR Address OR localhost
    $usr ="root";            //User DB Server
    $pwd ="";                //password User
    $db ="student";          //Database Name

    $conn = mysqli_connect($server,$usr,$pwd,$db);

    if($conn){
echo "Connected!";
    }
?>