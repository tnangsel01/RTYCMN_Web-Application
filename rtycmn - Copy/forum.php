<html lang="en">
<head>
<title>Forum Page</title>
</head>
<?php include("header.php"); ?>
    <!---content goes here ----->
    <?php 
$cat_name = $cat_description = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $cat_name = test_input($_POST['cat_name']);
    $cat_description = test_input($_POST['cat_description']);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php
echo "<h2>Members Posts:</h2>";
echo $cat_name;
echo "<br>";
echo $cat_description;
?>

<?php include("footer.php"); ?>
</html> 