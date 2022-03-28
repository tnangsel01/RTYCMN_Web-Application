<!DOCTYPE html>
<html lang="en">
<head>
    <title>Donation</title> 
</head>
<body>
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
                    <li class="nav-item"><a class="nav-link" href="#">Donation</a></li>
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
 
    
    <div class="container pt-5">  
        <div class="text-center">    
        <div class="signup-form">
            <form style="max-width: 450px; margin:auto;" action="" method="post" enctype="multipart/form-data">
                <h2>Donation</h2>
                <div class="form-group p-2">
                    <div class="row">
                        <div class="col">First name</div>
                        <div class="col">Last name</div>
                    </div>        	
                </div>
                <div class="form-group p-2">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                    </div>        	
                </div>
                <div class="form-group p-2">
                    <label for="Donation_amount">Credit Card Number</label>
                    <input type="Credit_Number" class="form-control" name="Credit_Number" pattern="[0-9\s]{16}" title="XXXXXXXXXXXXXXXX."placeholder="16 digit code on card Do not inlcude -EX:xxxx-xxxx-xxxx-xxxx" required="required">
                </div>
                <div class="form-group p-2">
                <label for="Sec_Code">Security Code</label>
                    <input type="Sec_Code" class="form-control" name="Sec_Code" pattern="[0-9\s]{3}" title="xxx"placeholder="Three Digit Code on back of card EX:xxx">
                </div>
                <div class="form-group p-2">
                <label for="ex_date">Expiration Date</label>
                <select name='expireMM' id='expireMM'>
                        <option value=''>Month</option>
                        <option value='01'>01</option>
                        <option value='02'>02</option>
                        <option value='03'>03</option>
                        <option value='04'>04</option>
                        <option value='05'>05</option>
                        <option value='06'>06</option>
                        <option value='07'>07</option>
                        <option value='08'>08</option>
                        <option value='09'>09</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                        <option value='12'>12</option>
                    </select> 
                    <select name='expireYY' id='expireYY'>
                        <option value=''>Year</option>
                        <option value='20'>2020</option>
                        <option value='21'>2021</option>
                        <option value='22'>2022</option>
                        <option value='23'>2023</option>
                        <option value='24'>2024</option>
</select> 
<input class="inputCard" type="hidden" name="expiry" id="expiry" maxlength="4"/>
                </div>
                <div class="form-group p-2">
                    <label for="donated_amount">How Much Do you want to donate?</label>
                    <input type="number" class="form-control" min="0" max="10000" step="1" name="donated_amount"  required="required" placeholder="$xx.xx">
                    
                </div>
                <div class="form-group p-2">
                    <button type="submit" name="donate" class="btn btn-success btn-lg btn-block">donate</button>
              
            </form>
            
        </div>
</div>
</div>


<footer>
    <div class="container-fluid">
        <div class="mt-5 p-4 text-yellow text-center">
            <h6><span>&copy;<span> RTYC-MN</h6>
                <a href="https://www.facebook.com/rtycmn/" target="_blank" class="fb"><img src="facebookLogo.jpg" width='30' height='30' class="rounded-circle" alt="Cinque Terre"></a>
                <a href="https://twitter.com/rtycminnesota" target="_blank" class="tw"><img src="twitter.jpg" width='30' height='30'class="rounded" alt="Cinque Terre"></a>
                <a href="https://www.youtube.com/user/rtycmn" target="_blank" class="yt"><img src="youtube.jpg" width='30' height='30' class="rounded" alt="Cinque Terre"></a>
                <a href="https://www.instagram.com/rtycmn/?hl=en" target="_blank" class="ig"><img src="instagram.jpg" width='30' height='30' class="rounded" alt="Cinque Terre"></a>
        </div>
    </div>
</footer>
</body>
</body>
</html>
