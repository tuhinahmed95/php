<?php
   if(isset($_POST['btn'])){ 
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $gender = $_POST['select'];
   }

?>


// this is a practice from in php




<head> 
    <body>
        <form action="#" method="post" border="1"> 
            <label for="name"> Full Name
                <input type="text" name="name">
            </label><br><br>

            <label for="address">Address 
                <input type="text" name="address">
            </label><br><br>

            <label for="email">Email 
                <input type="emial" name="email">
            </label><br><br>

            <label for="select">Gender 
                <select name="select"> 
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </label><br><br>

            <input type="submit" name="btn" value="submit">

        </form>
    </body>
</head>