
<?php
    $conn = mysqli_connect("localhost","root","","php_db");
    if(isset($_POST['submit'])){ 
        $firstName = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];


        $sql = "INSERT INTO student(firstname,lastname,email) VALUES('$firstName','$lastname','$email')";
        if(mysqli_query($conn,$sql) == TRUE){ 
            echo "data inserted succesfully";
            header('location:insert.php');
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
    <title>Crud Operation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row"> 
        <div class="col-sm-3"></div>
        <div class="col-sm-6 mt-4 pt-4 border border-success" >

        <form action="inset.php" method="POST"> 
            <h1>Registration Form</h1>
            
            Firstname : <br>
            <input type="text" name="firstname"><br><br>
            Lastname : <br>
            <input type="text" name="lastname"><br><br>
            Email : <br>
            <input type="text" name="email"><br><br>
            <input type="submit" name="submit" value="Inset" class="btn btn-success">
        </form>

        </div>
        <div class="col-sm-3"></div>

    
    </div>
    </div>
    
</body>
</html>