<?php
$connectDB = mysqli_connect("localhost","root","","evaly");
if(isset($_POST['btn'])){ 
    $id      = $_POST['id'];
    $name    = $_POST['name'];
    $email   = $_POST['email'];

    $sql = "INSERT INTO product(id,name,email) VALUES ('$id','$name','$email')";

    if(mysqli_query($connectDB,$sql) == TRUE){ 
        echo "data inserted successfully";
        header("location:crud.php");
    }
    else{ 
        echo "data is not inserted";
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud_Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-3"></div>

            <div class="col-md-6- mt-4 border border-1 width width-4">
                <h3>Registration Form</h3>
                <form action="#" method="POST"> 
                    Id <br>
                    <input type="text" name="id"><br><br>
                    Name <br>
                    <input type="text" name="name"><br><br>
                    Email <br>
                    <input type="email" name="email"><br><br>
                    <input type="submit" name="btn" value="submit" class="btn btn-success">
                </form>
            </div>

            <div class="col-3"></div>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>