<?php
    require_once "../Back/ConnectToDatabase.php";
            $verificationMail = selectFromDatabase('user_hypnos', 'mail', 'abdelwoush@mail.com', $conn);
            if($verificationMail){
                echo 'commande valide</br>';
                var_dump($verificationMail);
                print_r($verificationMail);
            }else{
                'erreur</br>'
            }