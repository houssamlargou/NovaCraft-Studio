<?php

$name = $_POST["name"];
$email = $_POST["email"];
$name_error = $email_error = "";

    if(empty($name)){
        $name_error = "Name is required";
    } else {
        if(!preg_match("/^[a-zA-Z\s]+$/",$name)){
            $name_error = "Only letters and White space allowed";
        }
    }
    if(empty($email)){
        $email_error = "Email is required";
    } else {
        if(!preg_match("/^[\w\.-]+@[\w\.-]+\.\w{2,}$/", $email)){
            $email_error = "Invalid email format";
        }
    }
