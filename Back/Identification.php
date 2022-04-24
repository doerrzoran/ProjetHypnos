<?php
require_once "ConnectToDatabase.php";

$users = selectFromDatabase('user_hypnos', 'Mail', $mail, $conn);

if($users == NULL){
  echo "utilisateur inconnu!"; 
}else{
  foreach($users as $user){
    session_start();
    $_SESSION['ID'] = $user['ID'];
    $_SESSION['Name'] = $user['Name'];
    $_SESSION['Firstname'] = $user['Firstname'];
    $_SESSION['Mail'] = $user['Mail'];
    $_SESSION['Password'] = $user['Password'];
    $_SESSION['Role'] = $user['Role'];
    require_once 'UserRedirection.php';
  }

}