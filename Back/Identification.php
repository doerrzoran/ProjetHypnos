<?php
require_once "ConnectToDatabase.php";
$user = selectFromDatabase('user_hypnos', '*', $mail, $conn);
print_r($user);
if($user == NULL){

}else{
  echo $user['0'];
    session_start();
   var_dump($user['0']);
    $_SESSION['id'] = $user['0'];
    $_SESSION['name'] = $user['1'];
    $_SESSION['firstname'] = $user['2'];
    $_SESSION['mail'] = $user['3'];
    $_SESSION['password'] = $user['4'];
    $_SESSION['role'] = $user['5'];
    var_dump($_SESSION['id']).'</br>';
    require_once 'UserRedirection.php';
}