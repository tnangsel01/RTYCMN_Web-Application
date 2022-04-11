<?php
include 'connection.php';

include "header.php";

$sql = "SELECT * FROM items;";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>itemName</th>";
                echo "<th>itemPrice</th>";
                ;
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo '<td><h3><a href="AlterItem.php?id=' .$row['Item_Id'] . '">' . $row['Item_Id'] . '</a><h3><td>';
                echo "<td>" . $row['Item_Name'] . "</td>";
                echo "<td>" . $row['Item_Price'] . "</td>";
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
mysqli_close($dbs);
include "footer.php";
?>