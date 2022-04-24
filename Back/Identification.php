<?php
require_once "ConnectToDatabase.php";
$user = selectFromDatabase('user_hypnos', '*', $mail, $conn);
print_r($user);
if($user == NULL){

}else{
  echo $user['id'];
    session_start();
   var_dump($user['id']);
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['mail'] = $user['mail'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['role'] = $user['role'];
    var_dump($_SESSION['id']).'</br>';
    require_once 'UserRedirection.php';
}