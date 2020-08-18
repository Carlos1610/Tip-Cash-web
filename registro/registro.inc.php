<?php

if (isset($_POST['bRegistro']))
{
    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat))
    {
       header("Location: registro.php?erro=emptyfields&uid=" .$username. "&email=". $email);
       exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: registro.php?erro=emptyfields&uid=" .$username. "&email=". $email);
        exit();
    }
}