<?php
require_once 'UserID.php';

if($role == 1){
    header('Location: ../front/PageAdmin.php');
  }elseif($role == 2){
    header('Location: ../front/PageGerant.php');
  }else{
    header('Location: ../front/PageClient.php');
  }