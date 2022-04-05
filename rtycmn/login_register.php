<?php

include 'connection.php';

    $email = htmlspecialChars($_POST["email"]);

    if(isset($_POST['register'])) {
        $user_exist_query = "SELECT * FROM Users WHERE Email_Address = '$email'";
        $result = mysqli_query($dbs, $user_exist_query);
        
        if($result){
            #if email is already registered. 
            if(mysqli_num_rows($result) > 0) {
                $result_fetch = mysqli_fetch_assoc($result);
                if($result_fetch['Email_Address'] == $email){
                    echo "
                    <script>
                        alert('$result_fetch[email] - E-mail already registered!');
                        window.location.href='register.php';
                    </script>
                    ";
                }
            }else{
                #if email is not registered then we can register using this email.
                $Insertquery = "INSERT INTO 'Users'('First_Name', 'Last_Name', 'Email_Address', 'Password') VALUES ('$_POST[first_name]', '$_POST[last_name]', '$_POST[email]', '$_POST[password]')";
                if(mysqli_query($dbs, $Insertquery)){
                    echo "
                        <script>
                            alert('Registration Successful!');
                            window.location.href='login.php';
                        </script>
                        ";
                }else{
                    echo "
                        <script>
                            alert('Cannot Connect or Query error');
                            window.location.href='register.php';
                        </script>
                        ";
                }
            }
        }else{
            echo "
            <script>
                alert('Cannot Connect or Query error');
                window.location.href='register.php';
            </script>
            ";
        }
    }

?>