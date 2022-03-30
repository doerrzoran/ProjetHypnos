<?php
require_once "ConnectToDatabase.php";
require_once "siteRoot.php";

var_dump($_POST);

$infoCompte = $_POST;

$name = $infoCompte['Name'];
$firstname = $infoCompte['Firstname'];
$mail = $infoCompte['email'];
$password = $infoCompte['Password'];
$password2 = $infoCompte['Password2'];



if($password != $password2){
    echo "veuillez entrer un mot de passe identique!";
}else{
    $sql = "INSERT INTO user(Name, Firstname, Mail,	Password, Role) VALUES('$name', '$firstname', '$mail', '$password', 3)";
    $result = mysqli_query($conn, $sql);

    echo $result;
}    
    
