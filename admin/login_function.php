<?php

$un="admin@admin.com";
$pw="admin";
$email = $_POST['email'];

$password = $_POST['password'];

if($pw == $password and $un === $email){

    header("Location: index.php");
}

else{
    header("Location: login2.php");
}
?>