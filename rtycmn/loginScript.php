

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Donation</title>
</head>
<?php
session_start();
include 'connection.php';
include 'header.php';
$email = htmlspecialChars($_POST["email"]);
$password = htmlspecialChars($_POST["password"]);

$sql = "select * from Users where Email_Address= '$email';";
$result = mysqli_query($dbs,$sql);
if(mysqli_num_rows($result)){
    $myresult=mysqli_fetch_assoc($result);;
    if(password_verify($password,$myresult['Password'])){
         echo " Hello ". $myresult['First_Name'].$myresult['Last_Name'] ." You have successful logged in";
         $_SESSION["User_ID"]=$myresult['User_Id'];
         $_SESSION["First_Name"]=$myresult['First_Name'];
         $_SESSION["Last_Name"]=$myresult['Last_Name'];
         $_SESSION["LoggedIn"]=TRUE;
         $_SESSION["Admin"]=$myresult["Admin"];

         echo "In Session start".$_SESSION['User_ID'].$_SESSION["Admin"];
         if ($_SESSION["Admin"]==1){
             echo "Hello Admin";
         }
         else{
             echo "Hello User";
         }

         
    }
    else{
       echo"Incorrect Password" ;
    }
}
    else{
    echo "UserName Does not Exist";
}
    mysqli_close($dbs);

    include 'footer.php';
?>

</body>
</html>