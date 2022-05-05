<html lang="en">
<head>
<title>Forum Page</title>
</head>


<?php 
include ("connection.php");
include("header.php"); ?>
    <!---content goes here ----->
    <?php 
$sql = "SELECT
*
FROM
Forum_Topics";

$result = mysqli_query($dbs,$sql);

if(!$result)
{
//the query failed, uh-oh :-(
echo 'Error while selecting from database. Please try again later.';
}
else
{ 
    echo '<a href="forumCreate.php">Create A topic</a>';
    echo "<table>";
    echo "<tr>";
        echo "<th>Topic_id</th>";
        echo "<th>Topic_Title</th>";
        
        echo "<th>Date</th>";
    echo "</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
        echo "<td>" . $row['Topic_Id'] . "</td>";
        echo "<td>" ;
         echo '<h3><a href="topic.php?id=' .$row['Topic_Id'] . '">' . $row['Topic_Title'] . '</a><h3>';
        echo"</td>";
        echo "<td>" . $row['Topic_Time'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}

mysqli_close($dbs);
?>



<?php include("footer.php"); 
?>

</html> 