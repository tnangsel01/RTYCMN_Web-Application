<!DOCTYPE html>
<html lang="en">
<head>
   <title>Donation</title>
</head>
<?php


include "connection.php";
include "header.php";
session_start();


$User_ID=$_SESSION["User_ID"];
$Credit_Card=htmlspecialChars($_POST["Credit_Number"]);
$Money=htmlspecialchars($_POST['donated_amount']);
if($_SESSION["LoggedIn"]){


$sql= "Insert into donations(User_Id,Donated_Amount,Credit_Card) values ($User_ID,$Money,'$Credit_Card');";
$result = mysqli_query($dbs,$sql);
    if($result){
        echo "<h1> Thank you for the Donation, It is very much Appericated!";

    }
    else{
        echo "
        <script>
            alert('Donation Failed Try again Latere');
            window.location.href='donation.php';
        </script>
        ";
    }
}

else{
    echo "
        <script>
            alert('Must be Signed in to Donate');
            window.location.href='donation.php';
        </script>
        ";
}



include 'footer.php';
mysqli_close($dbs);
?>

</body>
</html>
