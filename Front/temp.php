<?php
    require_once "../Back/ConnectToDatabase.php";
    selectFromDatabase("user_hypnos", "name", "Doerr", $conn);
    echo("Resultat ici :".'</br>');
    if(!$row)
    {
        echo("pas de résultats");
    }
    else {
        print_r($row);
    }
?>