<!DOCTYPE html>
<html lang="en">
<head>
    <title>HomePage</title> 
    
</head>

<?php include("header.php"); ?>
<form class="d-flex" action="homepage.php" method="post">                   
    <div class="row">  
      <div class="col">                       
        <label for="username">username</label>
        <input class="form-control" type="text" id="username" name="username" placeholder="Username" required>
      </div>
    </div>
    <div class="row">  
      <div class="col"> 
        <label for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password"  placeholder="Username" required>
      </div>
    </div>  
    <div class="row">  
      <div class="col">         
        <button class="btn btn-outline-success" type="submit" name="_eventId_proceed">Sign on</button>
      </div>                
    </div>
</form>

<?php include("footer.php"); ?>
</html>