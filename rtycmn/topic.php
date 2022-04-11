<!DOCTYPE html>
<html lang="en">
<head>
   <title>Donation</title>
</head>
<style>
.center {
  margin-left: auto;
  margin-right: auto;

}

table{
    border:1px solid black;
}

form{
    text-align:center;
    
}
</style>
<?php
include 'connection.php';
include 'header.php';
$topic_Id= htmlspecialChars($_GET["id"]);

$sql = "SELECT * FROM Forum_Topics where Topic_Id=$topic_Id;";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='center'>";
            echo "<tr>";
                echo "<th>topic Title</th>";
                echo "<th>Topic_Message</th>";
                echo "<th>Date_Created</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Topic_Title'] . "</td>";
                echo "<td>" . $row['Topic_Message'] . "</td>";
                echo "<td>" . $row['Topic_Time'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbs);
}

?>

<br>

<h1>Replies</h1>
<?php

$User_ID=$_SESSION["User_ID"];
$sql = "SELECT * FROM Forum_Replies where Topic_Id=$topic_Id;";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='center'>";
            echo "<tr>";
                echo "<th>DateReplied</th>";
                echo "<th>ReplyMessage</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Reply_Time'] . "</td>";
                echo "<td>" . $row['Reply_Message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No one has replied yet.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbs);
}

echo'<form method="post" class="center" action="topic.php?id='.$topic_Id.'">
REPLY<br>
<textarea name="reply-content"></textarea>
<br><input type="submit" value="Submit reply" />
</form>;'
?>

<?php
if (isset($_POST["reply-content"])){
    $User_ID=$_SESSION["User_ID"];
    $topic_Id= htmlspecialChars($_GET["id"]);
    echo"hello from the if Statement";
    if($_SESSION["LoggedIn"]){
    echo"We are logged in";
    $reply=htmlspecialchars($_POST["reply-content"]);
    $sql= "Insert into Forum_Replies(User_Id,Topic_Id,Reply_Time,Reply_Message) values ($User_ID,$topic_Id,now(),'$reply');";
    $result = mysqli_query($dbs,$sql);
    if($result){
        echo "<h1> Your Reply has been posted. Thanks";

    }
    else{
        echo mysqli_error($dbs);
        // echo "
        // <script>
        //     alert('Failed to Reply Failed');Insert 
        //     window.location.href='topic.php?id=$topic_Id';
        // </script>
        // ";
    }
}
    
    else{
        echo "
        <script>
            alert('Must be signed in to reply ');
            window.location.href='topic.php?id=$topic_Id';
        </script>
        ";
    }
}

?>


<?php
include 'footer.php';
mysqli_close($dbs);
?>

</body>
</html>