<?php
$conn  = mysqli_connect("localhost","root","","php_db");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3"></div>
            <div class="col-sm-6"> 
                <form action="<?php echo $_SERVER['PHP_SELF']?> " method="post">

                Firstname <br>
                <input type="text" name="firstname" value="<?php echo $firstname?>"><br><br>

                </form>


            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>