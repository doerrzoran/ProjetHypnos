<?php
echo 'Userredirection.php</br>';
require_once 'UserID.php';

if($role == 1){
    header('Location: ../Front/PageAdmin.php');
  }elseif($role == 2){
    header('Location: ../Front/PageGerant.php');
  }else{
    header('Location: ../Front/PageClient.php');
  }