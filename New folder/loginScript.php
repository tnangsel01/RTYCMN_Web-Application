


<?php

include 'connection.php';
include 'header.php';

$email = htmlspecialChars($_POST["email"]);
$password = htmlspecialChars($_POST["password"]);

$sql = "select * from Users where Email_Address = '".$email."'";
$result = mysqli_query($dbs,$sql);
if(mysqli_num_rows($result)){
    $myresult=mysqli_fetch_assoc($result);
    if(password_verify($password,$myresult['Password'])){
         $_SESSION["User_ID"]=$myresult['User_Id'];
         $_SESSION["First_Name"]=$myresult['First_Name'];
         $_SESSION["Last_Name"]=$myresult['Last_Name']; 
         $_SESSION["Admin"]=$myresult["Admin"];
         $_SESSION["LoggedIn"]=TRUE;
            if($_SESSION["Admin"] == 1){
                echo "<script>
                        alert('Welcome Admin!');
                        window.location.href='AdminPage/Home.php';
                    </script>";
            }else{
                echo "<script>
                        alert('User login Successful!');
                        window.location.href='index.php';
                    </script>";
            }     
    }else{
        echo "<script>
                alert('Incorrect Password.');
                window.location.href='login.php';
            </script>";
    }
}else{
    echo "<script>
            alert('UserName Does not Exist.');
            window.location.href='login.php';
        </script>";
    
}
    mysqli_close($dbs);
    include 'footer.php';
?>