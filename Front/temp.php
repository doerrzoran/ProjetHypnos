<?php
    require_once "../Back/ConnectToDatabase.php";
    selectFromDatabase("user_hypnos", "name", "Doerr", $conn);
    echo("Resultat ici :".'</br>');
    // print_r($row);
?>