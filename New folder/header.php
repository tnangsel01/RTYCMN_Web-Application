 


<!DOCTYPE html>
<html lang="en">
<head>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color:lightgreen;
        }
        
        .main {
            padding: 20px !important;
            
        }
        .main h5{
            font-weight: bolder;
            font-family: Georgia;
            text-decoration: underline;
        }
        .main p{
            font-family: Georgia;
            text-indent: 50px;
        }
        .main p:nth-child(odd){
            
            position: relative;
            animation: 3s linear move;
        }
        .main p:nth-child(even){
            
            position: relative;
            animation: 5s linear move;
        }
        
    

    
        @keyframes move {
            from {
                right: 100%;
            }
            to {
                right: 0%;
            }
        }
        header{
            /* background-image: url('headerImage.jpg'); */
            background-color: yellow;
            position: top;
            width: auto;
        }
        header nav a img.rotate{
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
        
        .collapse {
            margin-left: 20px;
            
        }

        .navbar-nav {
            position: bottom !important;
            text-align: center;
            margin-bottom: 0px;
            padding: 0px 2px;
            text-decoration: none;
            font-size: 20px;
        }

        .navbar-nav li{
            margin: 2px;
            padding: 0px 2px;
            border-radius: 5px;
             
        }
        
        .navbar-nav li a{
            filter: drop-shadow(10px 10px 5px #4444dd); 
            transition: transform 2s; 
        }
        a.nav-link{
            font-size:25px;
        }
        
        /* Change the color of links on hover */
        .navbar-nav li:hover {
            background-color: green !important;
            color: black !important;
            border-radius: 5px !important;
            -ms-transform: scale(1.2);
            -webkit-transform: scale(1.2);
            transform: scale(1.2) !important;
        }
        
        .card {
            margin: auto;
            padding: 10px;
            width: 60%;
            border: 3px solid green;
        }
        
        footer {
            float: bottom;
            width: auto;
            background-color: yellow;
            color: green;
            text-align: center;
        } 

        footer a img{
            transition: transform .2s;         
        }

        footer a img:hover{
            -ms-transform: scale(1.5);
            -webkit-transform: scale(1.5);
            transform: scale(1.5);
        }
    </style>
    
</head>
<body>
    <header>
       <?php session_start(); ?>
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="logo.png" class="rotate"  width="100" height="100">
                </a>
                <br>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">Regional Tibetan Youth Congress of Minnesota.</span>
                </button>

                <div class="collapse navbar-collapse mb-0">
                <script> 
                var triggerTabList = [].slice.call(document.querySelectorAll('#myTab a'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
</script>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-event-tab" data-bs-toggle="pill" data-bs-target="#pills-event" type="button" role="tab" aria-controls="pills-event" aria-selected="false">Events</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-forum-tab" data-bs-toggle="pill" data-bs-target="#pills-forum" type="button" role="tab" aria-controls="pills-forum" aria-selected="false">Forum</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-donation-tab" data-bs-toggle="pill" data-bs-target="#pills-donation" type="button" role="tab" aria-controls="pills-donation" aria-selected="false">Donation</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-store-tab" data-bs-toggle="pill" data-bs-target="#pills-store" type="button" role="tab" aria-controls="pills-store" aria-selected="false">Store</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  
</div>
                    <ul class="navbar-nav  me-auto mb-1 mb-lg-0">
                        <li class="nav-item active"><a class="nav-link fw-bold" href="index.php">About Us</a></li>
                        <li class="nav-item "><a class="nav-link fw-bold" href="event.php">Events</a></li>
                        <li class="nav-item "><a class="nav-link fw-bold" href="forum.php">Forum</a></li>
                        <li class="nav-item "><a class="nav-link fw-bold" href="donation.php">Donation</a></li>
                        <li class="nav-item "><a class="nav-link fw-bold" href="store.php">Store</a></li>
                    </ul>
                    <!-- users to view these buttons  -->
                    <?php
                        if($_SESSION["LoggedIn"] == TRUE && $_SESSION["Admin"]==0) {
                    ?>
                    
                    <button type="button" class="btn  btn-secondary me-md-2" disabled>
                        <img src="person-fill.svg" width='20' height='20'class="rounded ms-2"> 
                        <?php echo $_SESSION["First_Name"]." ".$_SESSION["Last_Name"]; ?>
                    </button><br>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form class="d-flex" action="logout.php" method="post"> 
                                <button  class="btn btn-outline-dark" type="submit"><a>Logout
                                <img src="box-arrow-in-left.svg" width='20' height='20'class="rounded ms-2"></a>
                            </form>
                        </li>
                    </ul>
                    <!-- only admin can view this button -->
                    <?php 
                        }elseif($_SESSION["LoggedIn"] == TRUE && $_SESSION["Admin"]==1){
                    ?>
                    <button type="button" class="btn  btn-secondary me-md-2" disabled>
                        <img src="person-fill.svg" width='20' height='20'class="rounded ms-2"> 
                        <?php echo $_SESSION["First_Name"]." ".$_SESSION["Last_Name"]; ?>
                    </button><br>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form class="d-flex" action="AdminPage/Home.php" method="post">
                                <button  class="btn btn-primary" type="submit">
                                    <a>Admin Page<img src="file-earmark-lock.svg" width='20' height='20'class="rounded ms-md-2"></a>  
                                </button>
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form class="d-flex" action="logout.php" method="post"> 
                                <button  class="btn btn-outline-dark" type="submit">
                                    <a>Logout<img src="box-arrow-in-left.svg" width='20' height='20'class="rounded ms-md-2"></a>
                            </form>
                        </li>
                    </ul>
                    <?php
                        }elseif($_SESSION["LoggedIn"] == FALSE) {
                    ?> 
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form class="d-flex" action="login.php" method="post">
                                <button  class="btn btn-primary" type="submit">Log In
                                    <img src="box-arrow-in-right.svg" width='20' height='20'class="rounded ms-md-2"></a>  
                                </button>
                            </form>
                        </li>
                    </ul>
                    <?php
                        }
                    ?> 
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php
                                $count = 0;
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                } 
                            ?>
                            <form class="d-flex" action="viewcart.php" method="post">
                                <button type="submit" class="btn btn-success position-relative">
                                    <img src="shopcart.svg" width='20' height='20'class="rounded ms-md-2">
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        <?php echo $count ?>
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                                
                            </form>
                        </li>
                    </ul>  
                </div>
            </div>
        </nav>
    </header>
