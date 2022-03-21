
<head>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <style>
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
    </style> -->
</head>
<body>
    <header>
        <nav class="navbar  navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="logo.png" alt="" width="100" height="92">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Annual Activities
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="event.php">Event1</a></li>
                        <li><a class="dropdown-item" href="event.php">Event2</a></li>
                        <li><a class="dropdown-item" href="event.php">Event3</a></li>
                        <li><a class="dropdown-item" href="event.php">Event4</a></li>
                        <li><a class="dropdown-item" href="event.php">Event5</a></li>
                        <li><a class="dropdown-item" href="event.php">Event6</a></li>
                        <li><a class="dropdown-item" href="event.php">Event7</a></li>
                        <li><a class="dropdown-item" href="event.php">Event8</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="event.php">Special Events</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Membership</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Donation</a>
                    </li>
                </ul>
                <form class="d-flex">
                
                    <button class="btn btn-outline-success" type="submit">Login</button>
                </form>
                </div>
            </div>
        </nav>
    </header>
