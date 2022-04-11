<?php
include 'connection.php';
include 'header.php';
$topic_Id= htmlspecialChars($_GET["id"]);

$sql = "SELECT * FROM Forum_Topics where Topic_Id=$topic_Id;";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>topic Id</th>";
                echo "<th>topic Title</th>";
                echo "<th>Topic_Message</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Topic_Id'] . "</td>";
                echo "<td>" . $row['Topic_Title'] . "</td>";
                echo "<td>" . $row['Topic_Message'] . "</td>";
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
        echo "<table>";
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
if (isset($_POST["reply-content"])){
    if($_SESSION["LoggedIn"]){
    $reply=htmlspecialchars($_POST["reply-content"]);
    $sql= "Insert into Forum_Replies(User_Id,Topic_Id,Reply_Time,Reply_Message) values ($User_ID,$topic_Id,now(),'$reply';";
    }
    else{
        echo "
        <script>
            alert('Must be signed in to reply ');
            window.location.href=topic.php?id=$topic_Id';
        </script>
        ";
    }
}

?>

<form method="post" action="topic.php">
    REPLY<br>
    <textarea name="reply-content"></textarea>
    <br><input type="submit" value="Submit reply" />
</form>
<?php
include 'footer.php';
mysqli_close($dbs);
?>

</body>
</html>