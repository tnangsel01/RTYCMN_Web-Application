<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Edit Price</title>
    <style>
        
        .d-flex {
            background-color: lightgrey !important;
            border-radius: 5px !important;
        }
        .nav li:hover {
            background-color: darkgrey !important;
            border-radius: 5px !important;
        }
        .dropdown-menu li:hover{
            background-color: lightgrey !important;
            border-radius: 2px !important;
        }
    </style>
</head>
<body>
    <?php 

        session_start(); 

        if(($_SESSION["LoggedIn"])==TRUE && ($_SESSION["Admin"])==1){

    ?>
    <div class="p-1 bg-dark text-center">
        <header>
            <img  src="headerImage.jpg" class="bi me-0" width="1250" height="157">
        </header>
    </div>

    <div class="container m-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="sidebar">
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 250px;">
                        <a  class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <img  src="gear-wide-connected.svg" class="bi me-2 img-center" width="60" height="52">
                            <span class="fs-4">Dashboard</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                            <a href="Home.php" class="nav-link text-dark" aria-current="page">
                                <img src="house.svg" class="bi me-2" width="20" height="20">
                                Home
                                </a>
                            </li>
                            <li>
                                <a href="UsersInfo.php" class="nav-link text-dark">
                                <img src="people.svg" class="bi me-2" width="20" height="20">
                                Users
                                </a>
                            </li>
                            <li>
                                <a href="purchases.php" class="nav-link text-dark">
                                <img  src="receipt.svg" class="bi me-2" width="20" height="20">
                                Orders
                                </a>
                            </li>
                            <li>
                                <a href="StoreItems.php" class="nav-link text-dark">
                                <img src="collection.svg" class="bi me-2" width="20" height="20">
                                Products
                                </a>
                            </li>
                            <li>
                                <a href="Donations.php" class="nav-link text-dark">
                                <img src="credit-card.svg" class="bi me-2" width="20" height="20">
                                Donations
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="person-circle.svg" alt="" width="32" height="32" class="rounded-circle me-2">
                            <strong><?php echo $_SESSION['First_Name']." ".$_SESSION['Last_Name'] ?></strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="../index.php">User Page</a></li>
                                 <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                            </ul>
                        </div>
                    </div>      
                </div>
                <hr class="d-sm-none">
            </div>
            <div class="col-sm-9">
        
                <div class="mx-auto" style="width: 700px;">
                    <div class="main">

                    <!-- input of content goes here.  -->

                    <?php
                            include("connection.php");

                            
                                echo "<h3 class='text-center fa-bold'><strong>Price Change</strong></h3>";
                                echo "<hr>";
                                
                                $topic_Id= htmlspecialChars($_GET["id"]);

                                    $sql = "SELECT * FROM items WHERE Item_Id = '$topic_Id'";
                                    if($result = mysqli_query($dbs, $sql)){
                                        if(mysqli_num_rows($result) > 0){
                                        
                                            echo "<table class='table table-hover table-bordered text-center'>";
                                                echo "<thead class='table-dark text-center'>";
                                                    echo "<tr>";
                                                        echo "<th>Item ID</th>";
                                                        echo "<th>Item Name</th>";
                                                        echo "<th>Price</th>";
                                                        echo "<th>Set Price</th>";
                                                        echo "<th></th>";
                                                    echo "</tr>";
                                                echo "</thead>";
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td>" . $row['Item_Id'] . "</td>";
                                                    echo "<td>" . $row['Item_Name'] . "</td>";
                                                    echo "<td>" . $row['Item_Price'] . "</td>";
                                                    ?>
                                                    <form method="post" class="float-end" action="AlterItem.php?id=<?php echo $topic_Id ?> ">
                                                     <?php 
                                                        echo "<td><input type='number' min=1 name='change_price'></td>";
                                                        echo "<td><button type='submit' name='priceChange' class='btn btn-success btn-block'>Change price</button></td>";
                                                        ?>
                                                    </form>
                                                    <?php
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                       
                                        // Free result set
                                    mysqli_free_result($result);
                                    } else{
                                        echo "No records matching your query were found.";
                                    }
                                }else{
                                    echo "ERROR: Could not able to execute ". $sql." ". mysqli_error($dbs);
                                }
                            ?>  

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br>                            
    
    <?php
            if (isset($_POST["change_price"])){
                $User_ID=$_SESSION["User_ID"];
                $topic_Id= htmlspecialChars($_GET["id"]);
            
            
                    $price=htmlspecialchars($_POST["change_price"]);
                    $sql= "Update items SET Item_Price= $price WHERE Item_Id=$topic_Id;";
                    $result = mysqli_query($dbs,$sql);
                    if($result){
                        echo "
                            <script>
                                alert('New Price set successfullly.');
                                window.location.href='StoreItems.php';
                            </script>";
                        echo "<h1> The price has been changed";

                    }else{
                        echo mysqli_error($dbs);
                        
                    }
                
            }

            mysqli_close($dbs);
    ?>
    <!-- end here -->

   
    <div class="mt-5 p-4 bg-dark text-white text-center">
        <foorter>
            <h6><span>&copy;<span> RTYC-MN</h6>
        </footer>
    </div>

<?php 

    }else{
        echo "<script>
        alert('You are not authorized to this page!');
        window.location.href='../login.php';
        </script>";
    } 
?>

</body>
</html>
