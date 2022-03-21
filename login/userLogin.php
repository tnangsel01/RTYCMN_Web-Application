<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomePage</title> 
    
</head>

<?php include("../header2.php"); ?>
<form action="../homepage.php" method="post">

            
                        
                          <div >
                <label for="username">
                  username                </label>
                <input  id="username" name="username" type="text"
                  required>
              </div>

              <div >
                <label for="password">Password</label>
                <input  id="password" name="password" type="password"  required>
              </div>

            
                          <div >
                <button  type="submit" name="_eventId_proceed"
                    
                    >Sign on</button>
                    
              </div>
            
                        </form>

<?php include("../footer2.php"); ?>
</html>