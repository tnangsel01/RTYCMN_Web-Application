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

                        echo " Hello, Admin ". $_SESSION['First_Name'].$_SESSION['Last_Name'] ." Welcome to the Donation page.";
                        $sql = "SELECT * FROM Donations;";
                        if($result = mysqli_query($dbs, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo "<table class='table'>";
                                    echo "<tr>";
                                        echo "<th>Donation Id </th>";
                                        echo "<th>User_ID</th>";
                                        echo "<th>Credit_Card</th>";
                                        echo "<th>DonatedAmount</th>";
                                        
                                    echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['Donation_Id'] . "</td>";
                                        echo "<td>" . $row['User_Id'] . "</td>";
                                        echo "<td>" . $row['Credit_Card'] . "</td>";
                                        echo "<td>" . $row['Donated_Amount'] . "</td>";
                
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