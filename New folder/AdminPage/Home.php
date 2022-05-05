<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Users Info</title>
    <style>
    
    .d-flex {
        background-color: #c0c0c0 !important;
        border-radius: 5px !important;
    }

    .d-flex img.img1{
        animation: rotation 10s infinite linear;
    }

    @keyframes rotation {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }    
    }

    .nav li:hover {
        background-color: #898C87 !important;
        border-radius: 5px !important;
    }
    .dropdown-menu li:hover{
        background-color: lightgrey !important;
        border-radius: 5px !important;
    }
  </style>
</head>
<body>
    <?php 

        session_start(); 

        if($_SESSION["LoggedIn"]==TRUE && $_SESSION["Admin"]==1){

    ?>
    <div class="p-1 bg-dark text-center">
        <header>
            <img  src="headerImage.jpg" class="responsive" width="1250" height="157">
        </header>
    </div>

    <div class="container m-5">
        <div class="row">
            <div class="col-sm-3">
                <div class="sidebar">
                    <div class="d-flex flex-column flex-shrink-0 p-3 mt-3 bg-light" style="width: 240px;">
                        <a  class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                            <img  src="gear-wide-connected.svg" class="img1 bi me-2 img-center" width="60" height="52">
                            <span class="fs-4">Dashboard</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                            <a href="Home.php" class="nav-link text-dark">
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
                                <!-- <li><a class="dropdown-item-disabled" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="../index.php">User Page</a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
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

                    <h2>Welcome to the Admin Home Page!</h2>
                    <hr>
                    <h5>Only Admin can view this page.</h5>
            
            
                    <p>Check out the side menu for settings for admins.</p>

                    <!-- end here -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
        <footer>
            <h6><span>&copy;<span> RTYC-MN</h6>
        </footer>
    </div>

<?php }else{
    echo "<script>
    alert('You are not authorized to this page!');
    window.location.href='../login.php';
    </script>";
} ?>

</body>
</html>
