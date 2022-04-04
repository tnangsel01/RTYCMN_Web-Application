<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title> 
</head>
<body>
<?php include("header.php"); ?>

<?php
$email ;
?>
<div class="text-center">
    <form style="max-width: 300px; margin:auto;" action="loginScript.php" method='post'>
        <img class="mt-8 mb-8" src="login-icon-images.PNG" height="102" alt="login logo">
        <h1 class="h3 mb-3 font-weight-normal">Please sign In</h1>
        
        <label for="emailAddress" class="sr-only" type="hidden"></label>
        <input type="email" name="email" id="emailAddress" placeholder="Email Address" class="form-control" required autofocus>
        
       
        <label for="password" class="sr-only" type="hidden"></label>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required autofocus>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block">Sign In</button> 
        </div>

    </form>
    
</div>
<?php include("footer.php"); ?>
</body>
</html>
