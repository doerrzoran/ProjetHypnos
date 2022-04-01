<?php


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


