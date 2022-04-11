<!DOCTYPE html>
<html lang="en">
<head>
   <title>Change Item Price</title>
</head>
<style>
.center {
  margin-left: auto;
  margin-right: auto;

}

table{
    border:1px solid black;
}

form{
    text-align:center;
    
}
</style>
<?php
include 'connection.php';
include 'header.php';
$topic_Id= htmlspecialChars($_GET["id"]);

$sql = "SELECT * FROM items where Item_Id=$topic_Id;";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='center'>";
            echo "<tr>";
                echo "<th>Item_Id</th>";
                echo "<th>Item_Name</th>";
                echo "<th>Item_Price</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Item_Id'] . "</td>";
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

?>

<br>

<h1>Change Price</h1>
<?php

echo'<form method="post" class="center" action="AlterItem.php?id='.$topic_Id.'">
REPLY<br>
<br><input type="number" step="any" value="Submit reply" name="change_price" />
<button type="submit" name="donate" class="btn btn-success btn-lg btn-block">Change the price of this item</button>
</form>;'
?>

<?php
if (isset($_POST["change_price"])){
    $User_ID=$_SESSION["User_ID"];
    $topic_Id= htmlspecialChars($_GET["id"]);
    if($_SESSION["LoggedIn"]){
   
    $price=htmlspecialchars($_POST["change_price"]);
    $sql= "Update items SET Item_Price= $price where Item_Id=$topic_Id;";
    $result = mysqli_query($dbs,$sql);
    if($result){
        echo "<h1> The price has been changed";

    }
    else{
        echo mysqli_error($dbs);
        // echo "
        // <script>
        //     alert('Failed to Reply Failed');Insert 
        //     window.location.href='topic.php?id=$topic_Id';
        // </script>
        // ";
    }
}
    
    else{
        echo "
        <script>
            alert('Must be signed in to changePrice ');
            window.location.href='AlterItem.php?id=$topic_Id';
        </script>
        ";
    }
}

?>


<?php
include 'footer.php';
mysqli_close($dbs);
?>

</body>
</html>