<!DOCTYPE html>
<html lang="en">
<head>
<title>Forum</title>
</head>
<?php 

    include("header.php"); 
    include ("connection.php"); 

    if(($_SESSION['LoggedIn']) && ($_SESSION["Admin"] == 0)){

?>

<div class="container pt-5">  
    <div class="text-center">
        <form style="max-width: 550px; margin:auto;" method='post' action='CreateTopic.php'>
            <label for="category"  class="sr-only p-3"><strong>Topic Title:</strong> </label>
            <input class="form-control" type='text' name='topic_title' required>
            <label for="message" class="sr-only p-3"><strong>Topic Message:</strong></label>
            <textarea class="form-control" name='topic_Message' rows="8" cols="40"></textarea>
            
            <div class="mt-3 mb-5">
                <button class="btn btn-lg btn-success btn-block">Add Topic</button> 
            </div>
        </form>     
    </div>
</div>

<?php
    }else{
        echo "<script>
            alert('Only RTYC-MN members are allowed to post. Please login.');
            window.location.href='login.php';
        </script>";
    }

    include("footer.php"); 
?>
</html>