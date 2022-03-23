<html lang="en">
<head>
<title>Membership</title>
</head>
<?php include("header.php"); ?>
<?php
 echo"<form method='post' action=''>
        Category name: <input type='text' name='cat_name' />
        <br>
        Category description: <textarea name='cat_description'></textarea>
        <br>
        <input type='submit' value='Add category' />
     </form>";
    ?>


<?php include("footer.php"); ?>
</html>