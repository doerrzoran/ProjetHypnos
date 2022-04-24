<?php
    require_once "../Back/ConnectToDatabase.php";
    selectFromDatabase("user_hypnos", "name", "Doerr", $conn);

    print_r($result);
?>