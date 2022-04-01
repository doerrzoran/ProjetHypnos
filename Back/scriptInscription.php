<?php
require_once "ConnectToDatabase.php";


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
        $sql = "INSERT INTO User(Name, Firstname, Mail,	Password, Role) VALUES('$name', '$firstname', '$mail', '$password', 3)";
        $result = mysqli_query($conn, $sql);
        if($result != 1){
            die("inscription échouée !");
        }else{
            $sql = "SELECT* FROM User WHERE(Password = '$password')";
            $result = mysqli_query($conn, $sql);
            $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
            require_once 'UserData.php';
            header('Location: ../front/PageClient.php');
        }
    };
}
    
