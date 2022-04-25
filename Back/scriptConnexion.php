<?php
require_once "ConnectToDatabase.php";
$infoConnexion = $_POST;

If(!isset($infoConnexion['mail']) || !isset($infoConnexion['password'])){
  echo ' ';
}else{

  $mail = $infoConnexion['mail'];
  $password = $infoConnexion['password'];
  require_once "Identification.php";
}
