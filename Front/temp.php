<?php
    require_once "../Back/ConnectToDatabase.php";
    $resultquery = selectFromDatabase("user_hypnos", "name", "Doerr", $conn);
    print_r($resultquery);
?>