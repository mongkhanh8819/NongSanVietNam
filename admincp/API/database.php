<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phanphoinongsan";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    mysqli_set_charset($conn,'utf8');
    if(!$conn){
        die("Connect database failed");
    }
?>