<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <center> 
        <form class="homfrm" action="#" method="POST"> 
            Id <br>
            <input type="text" name="id"><br><br>
            Name <br>
            <input type="text" name="name"><br><br>
            Addrss <br>
            <input type="text" name="address"><br><br>
            <input type="submit" name="logout" value="Submit">
            <button><a href="logout.php">Logout</a></button>
        </form>
    </center>


    
<?php

session_start();

if(!isset($_SESSION['syntax'])){ 
    header("location:login.php");
}


?>

   
</body>
</html>