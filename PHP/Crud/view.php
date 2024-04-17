<?php
$connectDB = mysqli_connect("localhost","root","","crud");
?>

<?php
$showData = "SELECT * FROM personal_information";
$query = mysqli_query($connectDB,$showData);

echo "<table>";
echo <tr> 
       " <th>id</th>"
       " <th>name</th>"
       " <th>email</th>"
     </tr>





   </table>


?>