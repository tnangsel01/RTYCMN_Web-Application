

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title> 
    <style>
        fieldset {
        background-color: lightgrey;
        }

        legend {
        background-color: green;
        color: white;
        padding: 5px 10px;
        }

        input {
        margin: 5px;
        }
    </style>
</head>
<body>
<?php 

include("header.php"); ?> 
    
    <div class="container pt-5">  
        <div class="text-center">    
        <div class="membership-form">
            <form style="max-width: 550px; margin:auto;" action="" method="post" enctype="multipart/form-data">  
                <fieldset>
                    <legend>Membership SignUp: </legend>
                        <div class="form-group p-2">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                                <div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
                            </div>        	
                        </div>
                        <div class="form-group p-2">
                            <input type="" class="form-control" name="greenbook" placeholder="Green Book Number" required="required">
                        </div>
                        <div class="form-group p-2">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                        </div>
                        <div class="form-group p-2">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                        </div>
                        
                        <div class="form-group p-2">
                            <label class="form-check-label"><input type="checkbox" required="required"> I accept to receive emails from this organization about future events and announcements.</label>
                        </div>
                        <div class="form-group p-2">
                            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Join Now</button>
                        </div>
                        <div class="text-center p-2">Already a member? <a href="login.php">Sign in</a></div>
                </fieldset>
            </form> 
        </div>
</div>
</div>

<?php include("footer.php"); ?>
</body>
</html>