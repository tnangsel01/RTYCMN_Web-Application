<?php
include 'connection.php';
$email=htmlspecialChars($_POST["email"]);
$password=htmlspecialChars($_POST["password"]);

$sql="select * from Users where Email_Address= '$email';";
$result=mysqli_query($dbs,$sql);
if(mysqli_num_rows($result)){
    $myresult=mysqli_fetch_assoc($result);;
    if(password_verify($password,$myresult['Password'])){
         echo " Hello ". $myresult['First_Name'].$myresult['Last_Name'] ." You have successful logged in";
    }
    else{
       echo"Incorrect Password" ;
    }
}
    else{
    echo "UserName Does not Exist";
}
    mysqli_close($dbs);
?>