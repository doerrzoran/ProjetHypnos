<?php
require_once "ConnectToDatabase.php";
$infoConnexion = $_POST;
echo '1';
If(!isset($infoConnexion['mail']) || !isset($infoConnexion['password'])){
  echo ' ';
}else{
echo '2';
  $mail = $infoConnexion['mail'];
  $password = $infoConnexion['password'];
  require_once "Identification.php";
}
