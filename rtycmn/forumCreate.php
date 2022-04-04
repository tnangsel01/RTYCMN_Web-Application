<!DOCTYPE html>
<html lang="en">
<head>
<title>Forum</title>
</head>
<?php 
session_start();
include("header.php"); ?>


<div class="container pt-5">  
    <div class="text-center">
        <form style="max-width: 550px; margin:auto;" method='post' action='forum.php'>
            <label for="category"  class="sr-only"><strong>Category name:</strong> </label>
            <input class="form-control" type='text' name='cat_name' required><br>
            <label for="message" class="sr-only"><strong>Category description:</strong></label>
            <textarea class="form-control" name='cat_description' rows="8" cols="40"></textarea>
            
            <div class="mt-3">
                <button class="btn btn-lg btn-success btn-block">Add Category</button> 
            </div>
        </form>     
    </div>
</div>

<?php include("footer.php"); ?>
</html>