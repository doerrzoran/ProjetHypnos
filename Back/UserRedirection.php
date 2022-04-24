<?php
require_once 'UserID.php';
echo 'Userredirection.php</br>';
if($role == 1){
    header('Location: ../Front/PageAdmin.php');
  }elseif($role == 2){
    header('Location: ../Front/PageGerant.php');
  }else{
    header('Location: ../Front/PageClient.php');
  }