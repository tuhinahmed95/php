
<?php
    $conn = mysqli_connect("localhost","root","","php_db");
    if(isset($_POST['submit'])){ 
        $firstName = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $email     = $_POST['email'];


        $sql = "INSERT INTO product(firstname,lastname,email) VALUES('$firstName','$lastname','$email')";
        if(mysqli_query($conn,$sql) == TRUE){ 
            echo "data inserted succesfully";
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
</head>
<body>

    <form action="" method="POST"> 
        Firstname : <br>
        <input type="text" name="firstname"><br><br>
        Lastname : <br>
        <input type="text" name="lastname"><br><br>
        Email : <br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>