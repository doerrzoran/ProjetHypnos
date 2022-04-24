<?php
require_once "ConnectToDatabase.php";
$user = selectFromDatabase('user_hypnos', '*', $mail, $conn);
print_r($user);
if($user == NULL){

}else{
  echo $user['0'];
    session_start();
   var_dump($user['0']);
    $_SESSION['0'] = $user['id'];
    $_SESSION['1'] = $user['name'];
    $_SESSION['2'] = $user['firstname'];
    $_SESSION['3'] = $user['mail'];
    $_SESSION['4'] = $user['password'];
    $_SESSION['5'] = $user['role'];
    var_dump($_SESSION['id']).'</br>';
    require_once 'UserRedirection.php';
}