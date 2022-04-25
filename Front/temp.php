<?php
    require_once "../Back/ConnectToDatabase.php";
            $verificationMail = selectFromDatabase('user_hypnos', '*', $conn);
            var_dump($verificationMail);