<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title> 
</head>
<body>
<!-- <?php include("header.php"); ?> -->
<div class="text-center">
    <form style="max-width: 300px; margin:auto;" action="" method="post">
        <img class="mt-4 mb-4" src="login-icon-images.PNG" height="72" alt="login logo">
        <h1 class="h3 mb-3 font-weight-normal">Please sign In</h1>
        
        <label for="emailAddress" class="sr-only" type="hidden"></label>
        <input type="email" name="email" id="emailAddress" placeholder="Email Address" class="form-control" required autofocus>
        
       
        <label for="password" class="sr-only" type="hidden"></label>
        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required autofocus>
        
        <div class="mt-3">
            <button class="btn btn-lg btn-success btn-block">Sign In</button> 
        </div>
    </form>

</div>
<!-- <?php include("footer.php"); ?> -->
</body>
</html>
