<?php
require_once "ConnectToDatabase.php";

// var_dump($_POST);
// print_r($users);

$infoConnexion = $_POST;

// function identifyUser($infoConnexion){
  $mail = $infoConnexion['Mail'];
  $password = $infoConnexion['password'];

  $sql = "SELECT* FROM User WHERE Password ='$password' AND Mail = '$mail'";
  $result = mysqli_query($conn, $sql);
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  if(mysqli_num_rows($result) == 0){
    echo "utilisateur inconnu!"; 
  }else{
    require_once 'UserData.php';
    // echo userData($users);
  }
// }

// echo identifyUser($infoConnexion);