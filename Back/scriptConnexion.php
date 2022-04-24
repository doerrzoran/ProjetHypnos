<?php
require_once "ConnectToDatabase.php";

$infoConnexion = $_POST;
var_dump($infoConnexion);

If(!isset($infoConnexion['Mail']) || !isset($infoConnexion['password'])){
  echo 'non ';
}else{
  $mail = $infoConnexion['Mail'];
  $password = $infoConnexion['password'];
  require_once "Identification.php";
}
