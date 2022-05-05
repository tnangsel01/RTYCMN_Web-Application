<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Users Page</title>
</head>

<?php include("header.php"); ?>
<main class="mt-10">
    <div class="container md-6 mb-5">
        <div class="mx-auto" style="width: 800px;">
            <div class="main">
        
                <?php
                    include 'connection.php';

                        echo " Hello, Admin ". $_SESSION['First_Name'].$_SESSION['Last_Name'] ." Welcome to the Purchases page.";
                        $sql = "SELECT * FROM Purchases;";
                        if($result = mysqli_query($dbs, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo "<table class='table'>";
                                    echo "<tr>";
                                        echo "<th>Purchase Id </th>";
                                        echo "<th>Item_ID</th>";
                                        echo "<th>User_</th>";
                                        echo "<th>quantity</th>";
                                        echo "<th>Total</th>";
                                        
                                    echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Purchase_Id'] . "</td>";
                                        echo "<td>" . $row['Item_Id'] . "</td>";
                                        echo "<td>" . $row['User_Id'] . "</td>";
                                        echo "<td>" . $row['Quantity'] . "</td>";
                                        echo "<td>" . $row['Total'] . "</td>";
                
                                    echo "</tr>";
                                }
                                echo "</table>";
                                // Free result set
                            mysqli_free_result($result);
                            } else{
                                echo "No records matching your query were found.";
                            }
                        }else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbs);
                        }
                    mysqli_close($dbs);
                ?>
            </div>
        </div>
    </div>
</main>
<?php include("footer.php"); ?>

</html>