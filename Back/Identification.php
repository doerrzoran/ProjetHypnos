<?php
require_once "ConnectToDatabase.php";
$user = selectFromDatabase('user_hypnos', '*', $mail, $conn);

if($user == NULL){
}else{
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['mail'] = $user['mail'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['role'] = $user['role'];
    require_once 'UserRedirection.php';
}