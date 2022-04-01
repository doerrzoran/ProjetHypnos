<?php

require_once 'scriptConnexion.php';
require_once 'scriptInscription.php';
session_start();

if(!isset($users)){
    echo '';
    }else{
     foreach($users as $user){
        $_SESSION['ID'] = $user['ID'];
        $_SESSION['userName'] = $user['Name'];
        $_SESSION['userFirstname'] = $user['Firstname'];
        $_SESSION['userMail'] = $user['Mail'];
        $_SESSION['userPassword'] = $user['Password'];
        $_SESSION['userRole'] = $user['Role'];
    }
}

// $userID = $_SESSION['ID'];
// $userName = $_SESSION['userName'];
// $userFirstname = $_SESSION['userFirstname'];
// $userMail = $_SESSION['userMail'];
// $userPassword = $_SESSION['userPassword'];
// $userRole = $_SESSION['userRole']; 

