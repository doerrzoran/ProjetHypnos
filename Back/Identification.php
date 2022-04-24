<?php
require_once "ConnectToDatabase.php";
echo "identification.php</br>";
$users = selectFromDatabase('user_hypnos', 'Mail', $mail, $conn);

if($users == NULL){
  echo "utilisateur inconnu!"; 
}else{
  echo 'utilisateur identifié</br>';
  foreach($users as $user){
    echo 'toujours</br>';
    session_start();
    $_SESSION['ID'] = $user['ID'];
    $_SESSION['Name'] = $user['Name'];
    $_SESSION['Firstname'] = $user['Firstname'];
    $_SESSION['Mail'] = $user['Mail'];
    $_SESSION['Password'] = $user['Password'];
    $_SESSION['Role'] = $user['Role'];
    echo 'encore</br>';
    require_once 'UserRedirection.php';
  }

}