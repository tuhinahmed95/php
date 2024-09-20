<?php
$conn = mysqli_connect('localhost','root','','testdb');
if(isset($_POST['submit'])){ 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO student (firstname,lastname,email) VALUES('$firstname ','$lastname','$email')";

    if(mysqli_query($conn,$sql )==TRUE){ 
        echo 'data inserted successfully';
        header('location:insert.php');
    }else{ 
        echo "data not inserted";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
                <div class="col-sm-3"></div>
            
            <div class="col-sm-6 pt-5 border border-success mt-3">
                <h3 class="bg-success">Registration Form</h3>
                <form action="insert.php" method="POST">
                    Firstname : <br>
                    <input type="text" name="firstname"><br><br>

                    Lastname : <br>
                    <input type="text" name="lastname"><br><br>

                    Email : <br>
                    <input type="email" name="email"><br><br>

                    <input type="submit" value="insert" name="submit" class="btn btn-success">
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>