<?php
if(isset($_POST['submit'])){ 
    echo 'ok';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Firstname : <br>
        <input type="text" name="firstname"><br><br>

        Lastname : <br>
        <input type="text" name="lastname"><br><br>

        Email : <br>
        <input type="email" name="email"><br><br>

        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>