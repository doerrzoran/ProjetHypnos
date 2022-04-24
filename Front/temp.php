<?php
    require_once "ConnectToDatabase.php";
    selectFromDatabase("user_hypnos", "name", "Doerr", $conn);

    print_r($result);
?>