<?php
require_once "ConnectToDatabase.php";


// var_dump($_POST);
$infoCompte = $_POST;

if(!isset($infoCompte['Password'])) {
    echo('');
  }else{ 
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
        if($resultI != 1){
            die("einscription échouée !");
        }else{
            $sqlSelect = "SELECT* FROM User WHERE(Password = '$password')";
            $resultS = mysqli_query($conn, $sqlSelect);
            $users = mysqli_fetch_all($resultS, MYSQLI_ASSOC);
            require_once 'UserData.php';
            // echo userData($users);
        }
    };
}
    
