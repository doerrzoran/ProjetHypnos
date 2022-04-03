<?php
require_once "ConnectToDatabase.php";


$infoCompte = $_POST;

if(!isset($infoCompte['Name']) || !isset($infoCompte['Firstname']) || !isset($infoCompte['email']) || !isset($infoCompte['Password']) || !isset($infoCompte['Password2'])) {
    echo('');
  }else{ 
    $name = $infoCompte['Name'];
    $firstname = $infoCompte['Firstname'];
    $mail = $infoCompte['email'];
    $password = $infoCompte['Password'];
    $password2 = $infoCompte['Password2'];

    if($password != $password2){
        die("veuillez entrer un mot de passe identique!");
    }else{
        $sql = "SELECT* FROM User WHERE Mail = '$mail'";
        $result = mysqli_query($conn, $sql);
        $VerificationMail = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $sql = "SELECT* FROM User WHERE Password ='$password'";
        $result = mysqli_query($conn, $sql);
        $VerificationPassword = mysqli_fetch_all($result, MYSQLI_ASSOC);

        if($VerificationMail == 0){
            die('cette adresse email est déjà utilisée !');
        }elseif($VerificationPassword == 0){
                die('ce mot de passe est déja utilisé !');
        }else{ 
            $sql = "INSERT INTO User(Name, Firstname, Mail,	Password, Role) VALUES('$name', '$firstname', '$mail', '$password', 3)";
            $result = mysqli_query($conn, $sql);
            if($result != 1){
                die("inscription échouée !");
            }else{
                require_once "Identification.php";
            }
        }   
    }
}
    
