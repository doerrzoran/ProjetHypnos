<?php
require_once 'ConnectToDatabase.php';
require_once 'UserID.php';


$infoDeletion = $_POST;
var_dump($infoDeletion);

if(!isset($infoDeletion['mail']) || !isset($infoDeletion['password'])){
    echo ' ';
  }else{
    $mail = $infoDeletion['mail'];
    $password = $infoDeletion['password'];


    $deletion = deleteFromDatabase('user_hypnos', 'mail', $mail, $conn);
    var_dump($deletion);
    if($deletion != 1){
        echo 'une erreur est survenue';
        
    }else{
       if($_SESSION['role'] == 3){
        session_destroy();
        header('location: ../Front/PageAcceuil.php');
       }else{
        header('location: ../Front/PageAdmin.php');
    }
  }
}

 