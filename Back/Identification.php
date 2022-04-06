<?php
require_once "ConnectToDatabase.php";

$sql = "SELECT* FROM User WHERE Password ='$password' AND Mail = '$mail'";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 0){
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
    // if($user['Role'] == 1){
    //   header('Location: ../front/PageAdmin.php');
    // }elseif($user['Role'] == 2){
    //   header('Location: ../front/PageGerant.php');
    // }else{
    //   header('Location: ../front/PageClient.php');
    // }
  }

}