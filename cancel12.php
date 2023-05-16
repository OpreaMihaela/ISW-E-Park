<?php
session_start();
$con = mysqli_connect("localhost","root","","bookingsysystem");

if(isset($_POST['stud_delete_btn']))
{
    $id = $_POST['delete_stud_id'];

    $query = "DELETE FROM bookings_record12 WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        echo  '<script>
        window.location.href = "cancel12.php";
        alert("Rezervare anulata cu success!")
    </script>';
    } else {
        echo  '<script>
        window.location.href = "cancel12.php";
        alert("Eroare!")
    </script>';
    }
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anulare Rezervare</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color:#242333;
    }
</style>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Anulati rezervarea</h4>
                    </div>
                    <div class="card-body">

                        <form action="cancel12.php" method="POST">
                            <div class="froum-group mb-3">
                                <label for="">Introduceti ID-ul rezervarii</label>
                                <input type="text" name="delete_stud_id" class="form-control">
                            </div>
                            <div class="froum-group mb-3">
                                <button type="submit" name="stud_delete_btn" class="btn btn-success">Anulare rezervare</button>
                                <a href="indexr12.php?month=05&year=2023" class="btn btn-danger">Inapoi</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
