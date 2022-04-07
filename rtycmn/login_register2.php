<?php

include 'connection.php';

    $email = htmlspecialChars($_POST["email"]);
    $password=htmlspecialchars($_POST['pass']);
    $password=password_hash($password,PASSWORD_DEFAULT);
    $firstName=htmlspecialchars($_POST["first_name"]);
    $lastName=htmlspecialchars($_POST["last_name"]);

    
        $user_exist_query = "SELECT * FROM Users WHERE Email_Address = '$email'";
        $result = mysqli_query($dbs, $user_exist_query);
        
        if(mysqli_num_rows($result)!=0){
            #if email is already registered. 
                
                    echo "
                    <script>
                        alert('$result_fetch[email] - E-mail already registered!');
                        window.location.href='register2.php';
                    </script>
                    ";
                
            }
        else{
                // echo "$email $password $firstName $lastName";
                #if email is not registered then we can register using this email.
                
                $Insertquery = "INSERT INTO Users(First_Name, Last_Name, Email_Address, Password,ADMIN) VALUES ('$firstName', '$lastName', '$email', '$password',0)";
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
        
    

?>