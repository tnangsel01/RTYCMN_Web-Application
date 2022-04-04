<html lang="en">
<head>
<title>forum</title>
</head>
<?php 
session_start();
include("header.php"); ?>


<form method="post" action="">
    REPLY<br>
    <textarea name="reply-content"></textarea>
    <br><input type="submit" value="Submit reply" />
</form>

<?php include("footer.php"); ?>
</html>