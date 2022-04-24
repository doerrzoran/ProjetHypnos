<?php
require_once "ConnectToDatabase.php";

$infoConnexion = $_POST;

If(!isset($infoConnexion['Mail']) || !isset($infoConnexion['password'])){
  echo ' ';
}else{

  $mail = $infoConnexion['Mail'];
  $password = $infoConnexion['password'];
  require_once "Identification.php";
}
