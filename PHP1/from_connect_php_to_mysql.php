<?php

    $conn = new mysqli('localhost','','root','information');
    if(isset($_POST['btn'])){ 
        $name = $_POST['name'];
        $email = $_POST['email'];
        
    }

?>



<head> 
    <body>
        <form action="#" method="POST"> 
            <label for="name">Name 
                <input type="text" name="name" placeholder="enter your name">
            </label><br><br>

            <label for="email">Email 
                <input type="email" name="email" placeholder="enter your email">
            </label><br><br>

            <input type="submit" name="btn" value="submit">
        </form>
    </body>
</head>