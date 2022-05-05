<?php

session_start();
session_unset();
session_destroy();

echo "
        <script>
            alert('You have Successfully Logged Out.');
            window.location.href='../login.php';
        </script>
        ";

?>