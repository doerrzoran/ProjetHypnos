<?php
    require_once "../Back/ConnectToDatabase.php";
            $verificationMail = selectFromDatabase('user_hypnos', 'mail', 'abdelwoush@mail.com', $conn);
            var_dump($verificationMail);