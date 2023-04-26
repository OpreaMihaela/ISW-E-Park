<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $sql = "select * from login where username = '$email' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count==1){
            header("Location:epark.php");
        }
        else{
            echo '<script>
                window.location.href = "index.php";
                alert("Login failed. Invalid username or password.")
            </script>';

        }
    }
?>
