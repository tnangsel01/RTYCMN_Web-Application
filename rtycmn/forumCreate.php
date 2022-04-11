<!DOCTYPE html>
<html lang="en">
<head>
<title>Forum</title>
</head>
<?php 

include("header.php"); ?>


<div class="container pt-5">  
    <div class="text-center">
        <form style="max-width: 550px; margin:auto;" method='post' action='CreateTopic.php'>
            <label for="category"  class="sr-only"><strong>Topic Title:</strong> </label>
            <input class="form-control" type='text' name='topic_title' required><br>
            <label for="message" class="sr-only"><strong>topic Message:</strong></label>
            <textarea class="form-control" name='topic_Message' rows="8" cols="40"></textarea>
            
            <div class="mt-3">
                <button class="btn btn-lg btn-success btn-block">Add topics</button> 
            </div>
        </form>     
    </div>
</div>

<?php include("footer.php"); ?>
</html>