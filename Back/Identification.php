<?php
require_once "ConnectToDatabase.php";
echo "identification.php</br>";
$user = selectFromDatabase('user_hypnos', '*', $mail, $conn);

if($user == NULL){
  echo "utilisateur inconnu!"; 
}else{
  echo 'utilisateur identifié</br>';
  var_dump($user).'</br>';
  // foreach($users as $user){
    echo 'toujours</br>';
    // var_dump($user).'</br>';
    session_start();
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['firstname'] = $user['firstname'];
    $_SESSION['mail'] = $user['mail'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['role'] = $user['role'];
    echo 'encore</br>';
    require_once 'UserRedirection.php';
  // }

}