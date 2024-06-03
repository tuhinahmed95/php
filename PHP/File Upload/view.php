



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
               echo "<table>
                        <tr> 
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Price</th>
                        <th>Action</th>
                        </tr>";

                while($data = mysqli_fetch_assoc($query)){ 
                    echo <tr> 
                            <td>$data[id]</td>
                            <td>$data[product name]</td>
                            <td>$data[product category]</td>
                            <td>$data[product price]</td>
                            <td>
                            <span class='btn btn-success'><a href="edit.php">Edit</a></span> 
                            </td>
                        </tr>";
                }        

                       
               ?>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
    
</body>
</html>