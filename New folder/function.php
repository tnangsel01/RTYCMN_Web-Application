<?php

    function emptyInputSignup($fname, $lname, $email, $password, $pwdRepeat) {
        $result;
        if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($pwdRepeat)) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    function invalidEmail($email) {
        $result;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    
    function invalidEmail($email) {
        $result;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    
    function passwordMatch($password, $pwdRepeat) {
        $result;
        if($password !== $pwdRepeat) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    function invalidEmail($email) {
        $result;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    function emailExists($dbs, $email) {
        $sql = "SELECT * FROM Users WHERE Email_Address = ?;";
        $stmt = mysqli_stmt_init($dbs);
        if(mysqli_stmt_prepare($stmt, $sql)){
            header("location: register.php");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultSet = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultSet)){
            return $row;
        }else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($dbs, $fname, $lname, $email, $password) {
        $sql = "INSERT INTO Users (First_Name, Last_Name, Email_Address, Password, Admin) VALUES (?, ?, ?, ?) ;";
        $stmt = mysqli_stmt_init($dbs);
        if(mysqli_stmt_prepare($stmt, $sql)){
            header("location: register.php");
            exit();
        }

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashedPwd);
        mysqli_stmt_execute($stmt);

        $resultSet = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultSet)){
            return $row;
        }else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }
    function filterBad($data){
        $badwords = array("sex", "fuck off", "fucking", "nigger", "cock", "jerk", "butt", "idiot", "ass", "wtf", "bloody hell", "twat", "whore", "shut up", "shut", "motherfucker", "pussy", "cunt", "damn", "bitch", "bastard", "son of a bitch", "asshole", "dick head", "fuck", "fuck you", "shit", "piss off");
        $data = str_ireplace($badwords, "#bad", $data);
        return $data;
    }