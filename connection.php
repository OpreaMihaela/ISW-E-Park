<?php
    $servername = "localhost";
    $email = "root";
    $pass = "root";
    $db_name = "database1";
    $conn = new mysqli($servername, $email, $pass, $db_name);
    if($conn -> connect_error){
        die("Connection failed".$conn -> connect_error);
    }
    echo "";
?>
