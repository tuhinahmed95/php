//this is my first php project
<?php

require_once("connect.php");

$final = mysqli_query($conn, "SELECT * FROM student_deatails");

?>

<html> 
    <head> 
        <title>connect mysql to php</title>
    </head>
    <body>
         <h1>Student Details</h1>

         <table> 
            <tr> 
                <td><strong>ID</strong></td>
                <td><strong>Name</strong></td>
                <td><strong>Gender</strong></td>
                <td><strong>GPA</strong></td>
                <td><strong>City</strong></td>
            </tr>
            
            <?php

                while($show = mysqli_fetch_assoc($final)){ 
                    echo" <tr> ";

                    echo "<td>".$show['id']."</td>";
                    echo "<td>".$show['name']."</td>";
                    echo "<td>".$show['gender']."</td>";
                    echo "<td>".$show['gpa']."</td>";
                    echo "<td>".$show['city']."</td>";
                    
                    
                    echo "</tr>";
                }

          
            ?>
         </table>
    </body>
</html>