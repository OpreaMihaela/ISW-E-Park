<?php
    include("config.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "select * from user where email = '$email' and pass = '$pass'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location:epark.php");
        }
        else{
            echo '<script>
                window.location.href = "index_login.php";
                alert("Login failed. Invalid username or password.")
            </script>';

        }
    }
?>
