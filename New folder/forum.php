<!DOCTYPE html>
<html lang="en">
<head>
<title>Forum Page</title>
</head>


<?php 
    include ("connection.php");
    include("header.php"); 
?>
    <!---content goes here ----->

    
<?php 

    $sql = "SELECT * FROM Forum_Topics";
    $result = mysqli_query($dbs,$sql);
    if(mysqli_num_rows($result) > 0) {  
        echo "<div class='container-fluid mt-5 mb-5'>";
            echo "<div class='row justify-content-around'>";
                echo "<div class='col-sm-12 col-md-8 col-lg-8'>";  
                    echo "<table class='table table-hover table-borderless text-center'>";
                        echo "<thead class='table-dark'>";   
                            echo "<tr>";
                                echo "<th>Topic No.</th>";
                                echo "<th>Topic Title</th>";
                                echo "<th>Date Posted</th>";
                            echo "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['Topic_Id'] . "</td>";
                            echo "<td>" ;
                            echo '<h6><a style="text-decoration: none;" href="topic.php?id=' .$row['Topic_Id'] . '">' . $row['Topic_Title'] .'</a><h6>';
                            echo"</td>";
                            echo "<td>" . $row['Topic_Time'] . "</td>";
                        echo "</tr>";
                        }
                    echo "</table>";
?>
    <hr>

    <div class="d-flex justify-content-center">
        <form action="forumCreate.php" method="post">
            <button type="submit" class="btn-success btn-lg">Create Topic</button>
        </form>
    </div>
<?php
                echo "</div>";
            echo "</div>";
        echo "</div>";
    
    }else{//the query failed, uh-oh :-(
        echo 'Error while selecting from database. Please try again later.';
    }
    mysqli_close($dbs);
    include("footer.php"); 
?>

</html> 