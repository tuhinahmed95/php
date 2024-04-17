<?php
$connectDB = mysqli_connect("localhost","root","","crud");
?>

<?php
$showData = "SELECT * FROM personal_information";
$query = mysqli_query($connectDB,$showData);

echo "<table border='1'>";
echo "<tr> 
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
     </tr>";
     while($queryShow = mysqli_fetch_assoc($query)){ 
        $id = $queryShow['id'];
        $name = $queryShow['name'];
        $email = $queryShow['email'];

        echo "<tr> 
                <td>$id</td>
                <td>$name</td>
                <td>$email</td>
        
        
             </tr>";
     }





  echo "</table>";


?>