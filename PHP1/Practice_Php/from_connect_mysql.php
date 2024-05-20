<?php
   if(isset($_GET['btn'])){ 
    $name = $_GET['name'];
    $address = $_GET['address'];
    $email = $_GET['email'];
    $gender = $_GET['select'];
   }

   

?>


<head> 
    <body>
        <form action="#" method="GET" border="1"> 
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