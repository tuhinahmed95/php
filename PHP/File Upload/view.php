



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container"> 
        <div class="row"> 
            <div class="col-sm-3"></div>
            <div class="col-sm-6"> 
               <?php  
               $sql   = "SELECT * FROM practice";
               $query = mysqli_query($conn,$sql);
               echo <table>
                        <tr> 
                        <td>ID</td>
                        <td>Product Name</td>
                        </tr>
               ?>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>