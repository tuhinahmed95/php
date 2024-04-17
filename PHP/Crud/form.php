<?php
$connectDb = mysqli_connect("localhost","root","","crud");
if(isset($_POST['btn'])){ 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    $datainsert = "INSERT INTO personal_information 
                  VALUES ('$id','$name','$email')";

    $query = mysqli_query($connectDb,$datainsert);

    if($query == true){ 
        echo "data inserted succesfully";
        header("location:form.php");
    }
    else { 
        echo "data not inserted";
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <form action="form.php" method="POST"> 
        <label for="id">ID 
            <input type="number" name="id" placeholder="enter your id no">
        </label><br><br>

        <label for="name">FULL NAME 
            <input type="text" name="name" placeholder="enter your full name">
        </label><br><br>

        <label for="email">EMAIL 
            <input type="email" name="email" placeholder="enter your email">
        </label><br><br>

        <input type="submit" name="btn" value="submit">
    </form>
    
</body>
</html>