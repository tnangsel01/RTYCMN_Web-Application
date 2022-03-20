
<head>
    <title>RTYC-MN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
       /* Add a black background color to the top navigation */
        .nav {
            background-color: green;
            overflow: hidden;
        }
       .topnav {
           padding: 40px;
           margin-left: 60px;
        }
        .nav-right a {
            text-align: right;
            margin-left: 400px;
        }
        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: yellow;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 20px;
           
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: lightblue;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            /* background-color: grey; */
            color: white;
        }
        .main {
            background-image: "Picture1.png";
            margin-left: 200px;
            margin-right: 200px;
            text-align: left;
        }
        /* header {
            position: fixed;
        } */
        body {
            padding-bottom: 0;
            min-height: 100vh;
        }
       
        footer {
            text-align: center;
           padding: 5px;
           background-color: green;
           margin-bottom: 0;
           width: 100%;
           margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
   <div class="nav">     
        <div class="topnav"> 
            <a href="homePage.php">Home</a>
            <a href="Events.php">Events</a>
            <a href="dontation.php">Donations</a>
            <a href="membership.php">Membership</a>
            <a href="Forums/topics.php">Forums</a>
            <a href="store.php">Store</a>

            <div class="nav-right">
                <a href="login.php"><i class="fa fa-fw fa-user"></i>Login</a>

            </div>
        </div>
    </div>
    </header>
