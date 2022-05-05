<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title> 
</head>
<body>
<?php 

include("header.php"); ?>


<div class="text-center mt-5 mb-5 py-3">
    <form style="max-width: 300px; margin:auto;" action="loginScript.php" method="POST">
        <img class="mt-8 mb-8" src="person-fill.svg" height="102" alt="login logo">
        <h1 class="h3 mb-3 font-weight-normal">Please sign In</h1>
        <hr>
        <label for="emailAddress" class="sr-only" type="hidden"></label>
            <input type="email" name="email" id="emailAddress" placeholder="Email Address" class="form-control" required autofocus>

        <label for="password" class="sr-only" type="hidden"></label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required autofocus>
        <div class="text-center mt-2">Don't have an account? <a href="register.php">Register Here</a></div>
        <hr>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block">Sign In</button> 
        </div>

    </form>
    
</div>
<?php 

include 'footer.php'; 
  mysqli_close($dbs); ?>


</body>
</html>
