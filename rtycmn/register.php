


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title> 
</head>
<body>
<?php 

session_start();
include("header.php"); ?> 
    
    <div class="container pt-5">  
        <div class="text-center">    
        <div class="signup-form">
            <form style="max-width: 450px; margin:auto;" action="register_a.php" method="post" enctype="multipart/form-data">
                <h2>Create your Account</h2>
                <div class="form-group p-2">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                    </div>        	
                </div>
                <div class="form-group p-2">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group p-2">
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="form-group p-2">
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                </div>
                <div class="form-group p-2">
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
                </div>
                    
                <div class="form-group p-2">
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept to receive emails from this organization about future events and announcements.</label>
                </div>
                <div class="form-group p-2">
                    <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
                </div>
                <div class="text-center p-2">Already have an account? <a href="login.php">Sign in</a></div>
            </form>
            
        </div>
</div>
</div>

<?php include("footer.php"); ?>
</body>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title> 
</head>
<body>
<?php include("header.php"); ?> 
    
    <div class="container pt-5">  
        <div class="text-center">    
        <div class="signup-form">
            <form style="max-width: 450px; margin:auto;" action="login_register.php" method="post" enctype="multipart/form-data">
                <h2>Create your Account</h2>
                <div class="form-group p-2">
                    <div class="row">
                        <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                        <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                    </div>        	
                </div>
                <div class="form-group p-2">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group p-2">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group p-2">
                    <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
                </div>
                    
                <div class="form-group p-2">
                    <label class="form-check-label"><input type="checkbox" required="required"> I accept to receive emails from this organization about future events and announcements.</label>
                </div>
                <div class="form-group p-2">
                    <button type="submit" name="register" class="btn btn-success btn-lg btn-block">Register Now</button>
                </div>
                <div class="text-center p-2">Already have an account? <a href="login.php">Sign in</a></div>
            </form>
            
        </div>
</div>
</div>

<?php include("footer.php"); ?>
</body>

</html>