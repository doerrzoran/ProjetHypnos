<?php
    require_once "../Back/ConnectToDatabase.php";
            $verificationMail = selectFromDatabase('user_hypnos', '*', $mail, $conn);
            var_dump($verificationMail);