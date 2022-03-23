<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomePage</title> 
</head>

<?php include("header.php"); ?>
<form action="index.php" method="post">

            
                        
                          <div class="form-element-wrapper">
                <label for="username">
                  username                </label>
                <input  id="username" name="username" type="text"
                  required>
              </div>

              <div class="form-element-wrapper">
                <label for="password">Password</label>
                <input  id="password" name="password" type="password"  required>
              </div>

            
                          <div class="form-element-wrapper">
                <button  type="submit" name="_eventId_proceed"
                    
                    >Sign in</button>
                    
              </div>
            
                        </form>

<?php include("footer.php"); ?>
</html>