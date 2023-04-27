<?php
if(isset($_GET['date'])){
   $date = $_GET['date']; 
}

if(isset($_POST['submit'])){

    $fname =$_POST['FIRSTNAME'];
    $lname =$_POST['LASTNAME'];
    $phone =$_POST['PHONE'];
    $email =$_POST['EMAIL'];

    $conn = new mysqli('localhost','root','','bookingsysystem');

    $sql = "INSERT INTO bookings_record8(FIRSTNAME,LASTNAME,PHONE,EMAIL,DATE)VALUES('$fname','$lname','$phone','$email','$date')";
    if($conn->query($sql)){
        $message = "<div class='alert alert-success'>Booking Successful</div>";
    }else{
        $message = "<div class='alert alert-danger'>Booking was not Successful</div>";
    }
}
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online booking system</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <style>
    body {
        background-color:#242333;
    }
    h1 {
        height: 80px;
        padding-top:20px;
    }
    </style>
    <body>
        <div class="container">
            <h1 class="text-center alert-alert-danger" style="background:#12D61B;border:none;color:#fff">Rezervare pentru data de: <?php echo date('d/m/Y', strtotime($date)) ?> </h1>
            <div class="row">
                <div class="col-md-12">
                    <?php echo isset($message)?$message:''; ?>
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group" style="color:white">
                            <label for="">NUME</label>
                            <input type="text" class="form-control" name="FIRSTNAME" required>
                        </div>
                        <div class="form-group"style="color:white">
                            <label for="">PRENUME</label>
                            <input type="text" class="form-control" name="LASTNAME" required>
                        </div>
                        <div class="form-group"style="color:white">
                            <label for="">TELEFON</label>
                            <input type="text" class="form-control" name="PHONE" required>
                        </div>
                        <div class="form-group"style="color:white">
                            <label for="">EMAIL</label>
                            <input type="email" class="form-control" name="EMAIL" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Rezerva</button>
                        <a href="indexr8.php?month=04&year=2023" class="btn btn-success">Inapoi</a>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js"></script>
    </body>
</html>
