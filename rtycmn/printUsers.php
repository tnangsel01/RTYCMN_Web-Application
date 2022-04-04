<?php
include 'connection.php';


echo "hello";
$sql = "SELECT * FROM Users;";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['User_Id'] . "</td>";
                echo "<td>" . $row['First_Name'] . "</td>";
                echo "<td>" . $row['Last_Name'] . "</td>";
                echo "<td>" . $row['Email_Address'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbs);
}

?>