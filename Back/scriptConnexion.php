<?php
require_once "ConnectToDatabase.php";
var_dump($_POST);

$infoConnexion = $_POST;

$id = $infoConnexion['id'];
$password = $infoConnexion['password'];

$sql = "SELECT* FROM User WHERE Password ='$password' AND Mail = '$id'";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

print_r($users);

if(mysqli_num_rows($result) == 0){
  echo "utilisateur inconnu!"; 
}else{
    foreach($users as $user){
        echo 'Bonjour '.$user["Firstname"];
    }
}
