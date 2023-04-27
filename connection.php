<?php
    $servername = "localhost";
    $email = "root";
    $pass = "root";
    $db_name = "user";
    $conn = new mysqli($servername, $email, $pass, $db_name, 3306);
    if($conn -> connect_error){
        die("Connection failed".$conn -> connect_error);
    }
    echo "";
?>
