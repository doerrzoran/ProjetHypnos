<?php


$infoCompte = $_POST;

if(!isset($infoCompte['name']) || !isset($infoCompte['firstname']) || !isset($infoCompte['email']) || !isset($infoCompte['password']) || !isset($infoCompte['Password2'])) {
    echo('');
  }else{ 
        $name = $infoCompte['name'];
        $firstname = $infoCompte['firstname'];
        $mail = $infoCompte['email'];
        $password = $infoCompte['password'];
        $password2 = $infoCompte['Password2'];
      
        if($password != $password2){
            die("veuillez entrer un mot de passe identique!");
        }else{
            echo $mail.'</br>';
            require_once "ConnectToDatabase.php";
            echo $mail.'</br>';
            $verificationMail = selectFromDatabase('user_hypnos', '*', $mail, $conn);
            var_dump($verificationMail);
            if($verificationMail != NULL){
                 exit('cette adresse email est déjà utilisée !');
            
            }else{ 
                $result = insertintoDatabase( 'user_hypnos', 'name, firstname, mail, password, role', "'$name', '$firstname', '$mail', '$password', 3", $conn);
                if($result != 1){
                    die("inscription échouée !");
                }else{
                    require_once "Identification.php";
                }
            }   
        }

   }
    
