<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>login</title>
</head>
<body>

        <?php
        session_start();
        if(isset($_POST['login_btn'])){ 
            $username   = $_POST['username'];
            $password   = $_POST['pass'];

            
        }



        ?>

        <center> 
            <form action="homm.php" method="POST"> 
                Username <br>
                <input type="text" name="username" required=""><br><br>
                Password <br>
                <input type="text" name="pass" required=""><br><br>
                <input type="submit" name="login_btn" value="Login">
            </form>
        </center>
</body>
</html>