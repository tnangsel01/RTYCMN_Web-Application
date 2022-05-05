<!DOCTYPE html>
<html lang="en">
<head>
   <title>Topics</title>
</head>
<style>
    .center {
    margin-left: auto;
    margin-right: auto;

    }


    form{
        text-align:center;
        
    }
</style>
<?php
include 'connection.php';
include 'header.php';

$topic_Id = htmlspecialChars($_GET["id"]);
$sql = "SELECT * FROM Forum_Topics WHERE Topic_Id = '$topic_Id'";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div class='container-fluid mt-5 mb-5'>";
            echo "<div class='row justify-content-around'>";
                echo "<div class='col-sm-12 col-md-8 col-lg-8'>";
                    echo "<table class='table table-hover borderless text-center'>";
                        echo "<thead class='table-dark'>";   
                            echo "<tr>";
                                echo "<th>Title</th>";
                                echo "<th>Message</th>";
                                echo "<th>Posted</th>";  
                            echo "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['Topic_Title'] . "</td>";
                            echo "<td>" . $row['Topic_Message'] . "</td>";
                            echo "<td>" . $row['Topic_Time'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    // Free result set
    mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbs);
}

?>
<hr>
<?php

$User_ID=$_SESSION["User_ID"];
$sql = "SELECT * FROM Forum_Replies WHERE Topic_Id = '$topic_Id'";
if($result = mysqli_query($dbs, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div class='container-fluid mt-5 mb-5'>";
            echo "<div class='row justify-content-around'>";
                echo "<div class='col-sm-12 col-md-8 col-lg-8'>";
                    echo "<table class='table table-hover borderless text-center'>";
                        echo "<thead class='table-dark'>";    
                            echo "<tr>";
                                echo "<th>Reply Messages</th>";
                                echo "<th>Date Replied</th>";
                            echo "</tr>";
                        echo "</thead>";
                        while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                            echo "<td>" . $row['Reply_Message'] . "</td>";
                            echo "<td>" . $row['Reply_Time'] . "</td>";
                        echo "</tr>";
                        }
                    echo "</table>";
                    /*echo '<img src="person-fill.svg" alt="Avatar" class="right" style="width:100%;">
                    <p><?php echo '$row['Reply_Message']' ?></p>
                    <span class="time-left"><?php echo '$row['Reply_Time']' ?></span>
                    */
                echo "</div>";
            echo "</div>";
        echo "</div>";

    // Free result set
    mysqli_free_result($result);
    }else{
        echo "<h4 class='text-center fw-bold'>No one has replied yet.</h4><hr>";
    }
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbs);
}

    echo'<form method="post" class="justify-content-center mt-3 mb-5" action="topic.php?id='.$topic_Id.'">
            <textarea class="p-3" name="reply-content" rows="8" cols="80"></textarea>
            <br><input type="submit" value="Submit reply" />
        </form>;'

?>

<?php
function filterBad($data){
    $badwords = array("sex", "douche", "idiot", "nigger", "dumb", "jerk", "butt", "idiot", "ass", "wtf", "bloody hell", "twat", "whore", "shut up", "shut", "motherfucker", "pussy", "cunt", "damn", "bitch", "bastard", "son of a bitch", "asshole", "dick head", "fuck", "fuck you", "shit", "piss off");
    $data = str_ireplace($badwords, "#badword", $data);
    return $data;
}

if (isset($_POST["reply-content"])){
    $User_ID=$_SESSION["User_ID"];
    $topic_Id= htmlspecialChars($_GET["id"]);
    
    if($_SESSION["LoggedIn"]){
    
        $userInput=htmlspecialchars($_POST["reply-content"]);
        $reply=filterBad($userInput);
        $sql= "Insert into Forum_Replies(User_Id,Topic_Id,Reply_Time,Reply_Message) values ($User_ID,$topic_Id,now(),'$reply');";
        $result = mysqli_query($dbs,$sql);
        if($result){
            echo "
            <script>
                alert('Your Reply has been posted. Thanks!');
                window.location.href='topic.php?id=$topic_Id';
            </script>
            ";

        }else{
            echo mysqli_error($dbs);
            
        }
    }else{
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