<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        body{
            padding: 0;
            margin: 0;
            background-color:lightgreen;
        }
        .main {
            padding: 20px !important;
            
        }
         .navbar-nav {
            float: left;
            color: green;
            text-align: center;
            padding: 14px 10px;
            text-decoration: none;
            font-size: 20px;
           
        }
       
        .navbar-nav li.active{
            background-color: orange;
            color: white;
            border-radius: 5px;
        }
        .collapse {
            margin-left: 20px;
            color: green;
        }
        .navbar-brand {
            /* padding-bottom: 2px; */
        }
        /* Change the color of links on hover */
        .navbar-nav li:hover {
            background-color: green !important;
            color: black !important;
            border-radius: 5px !important;
        }
        .card {
            margin: auto;
            padding: 10px;
            width: 60%;
            border: 3px solid green;
        }
        header{
            /* background-image: url('headerImage.jpg'); */
            background-color: yellow;
            background-size: 100%, 50%;
            background-repeat: no-repeat;
        }
        footer {
           position: relative;
           background-color: yellow;
           margin-bottom: 0;
           height: 120px;
           margin-top: auto;
        } 
    </style>
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="logo.png" class="img-fluid" alt="" width="100" height="92"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="event.php">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="forumCreate.php">Forum</a></li>
                    <li class="nav-item"><a class="nav-link" href="donation.php">Donation</a></li>
                    <li class="nav-item"><a class="nav-link" href="store.php">Store</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="d-flex" action="login.php" method="post">
                            <button  class="btn btn-outline-success" type="submit">Login / Sign Up</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <form class="d-flex" action="viewcart.php" method="post">
                            <button  class="btn btn-outline-success" type="submit">My Cart</button>
                        </form>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </header>
