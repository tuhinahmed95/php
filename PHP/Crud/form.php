<?php
$connectDb = mysqli_connect("localhos","","root","Crud");
if(isset($_POST['btn'])){ 
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
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
    <form action="#" method="POST"> 
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