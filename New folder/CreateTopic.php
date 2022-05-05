<!DOCTYPE html>
<html lang="en">
<head>
   <title>Create Forum</title>
</head>
<?php


include "connection.php";
include "header.php";
session_start();


$User_ID=$_SESSION["User_ID"];
$topicTitle=htmlspecialChars($_POST["topic_title"]);
$topic_message=htmlspecialchars($_POST['topic_Message']);
if($_SESSION["LoggedIn"]){
    


$sql= "Insert into Forum_Topics(User_Id,Topic_Title,Topic_Message,Topic_Time) values ($User_ID,'$topicTitle','$topic_message',now());";
$result = mysqli_query($dbs,$sql);
    if($result){
        echo "<script>
                alert('Your topic has been posted. Thanks!');
                window.location.href='forum.php';
            </script>";

    }
    else{
        echo "
        <script>
            alert('Topic Create Failed');Insert 
            window.location.href='forumCreate.php';
        </script>
        ";
    }
}

else{
    echo "
        <script>
            alert('Must be signed in to create a topic ');
            window.location.href='forumCreate.php';
        </script>
        ";
}



include 'footer.php';
mysqli_close($dbs);
?>

</body>
</html>
