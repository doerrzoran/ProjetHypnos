<?php
require_once "ConnectToDatabase.php";
require_once 'UserData.php';

// var_dump($_POST);
$infoCompte = $_POST;

function createNewUser($infoCompte ){
    
    $name = $infoCompte['Name'];
    $firstname = $infoCompte['Firstname'];
    $mail = $infoCompte['email'];
    $password = $infoCompte['Password'];
    $password2 = $infoCompte['Password2'];

    if($password != $password2){
        echo "veuillez entrer un mot de passe identique!";
    }else{
        $sqlInsert = "INSERT INTO User(Name, Firstname, Mail,	Password, Role) VALUES('$name', '$firstname', '$mail', '$password', 3)";
        $resultI = mysqli_query($conn, $sqlInsert);
        $sqlSelect = "SELECT* FROM User WHERE(Password = '$password')";
        $resultS = mysqli_query($conn, $sqlSelect);
        $users = mysqli_fetch_all($resultS, MYSQLI_ASSOC);
        echo userData($users);
    };
}
    
